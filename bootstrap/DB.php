<?php
declare(strict_types=1);
namespace bootstrap;

use PDO;

readonly class DB
{
    public function __construct(private array $configs)
    {
    }

    public function connect(): PDO
    {
        $pdo =  new PDO(
            dsn: 'mysql:host=' . $this->configs['host'] . ';dbname=' . $this->configs['database'],
            username: $this->configs['user'],
            password: $this->configs['password']
        );

        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $pdo;

    }

    public function applyMigrations(): void
    {
        $migrations = [];
        $this->createMigrationsTable();
        $appliedMigrations = $this->getAppliedMigrations();

        $files = scandir(__DIR__ . '/../migrations/');
        $migrationsToApply = array_diff($files, $appliedMigrations);
        foreach ($migrationsToApply as $migration) {
            if ($migration === '.' || $migration === '..') {
                continue;
            }

            $className = require_once __DIR__ . '/../migrations/' . $migration;
            $instance = new $className();

            echo "Applying migration $migration" . PHP_EOL;
            $instance->up();
            echo "Migration $migration is applied" . PHP_EOL;
            $migrations[] = $migration;
        }

        if (!empty($migrations)) {
            $this->saveMigrations($migrations);
        }
    }

    public function createMigrationsTable():void
    {
        $this->connect()->exec(
            "CREATE TABLE IF NOT EXISTS migrations(
                        id INT AUTO_INCREMENT PRIMARY KEY ,
                        migration  VARCHAR(255) NOT NULL,
                        created_at  TIMESTAMP DEFAULT CURRENT_TIMESTAMP
                    ) ENGINE = INNODB;");
    }

    public function getAppliedMigrations(): array
    {
        $stmt = $this->connect()->prepare("SELECT migration FROM migrations");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_COLUMN);
    }

    public function saveMigrations(array $migrations): void
    {
        $str = implode(',', array_map(fn($mig) => "('$mig')", $migrations));
        $stmt = $this->connect()->prepare("INSERT INTO migrations (migration) VALUES
                                       $str");

        $stmt->execute();
    }

}