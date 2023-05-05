<?php
declare(strict_types=1);
namespace bootstrap;

use Doctrine\DBAL\Connection;
use Doctrine\DBAL\DriverManager;
use Doctrine\DBAL\Result;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;

readonly class DB
{
    public function __construct(private array $configs)
    {
    }

    public function connect(): Connection
    {
        return DriverManager::getConnection($this->configs);
    }

    public function entityManager(): EntityManager
    {
        $paths = [__DIR__ . '/../models'];
        $isDevMode = false;

        $config = ORMSetup::createAttributeMetadataConfiguration($paths, $isDevMode);
        $connection = DriverManager::getConnection($this->configs, $config);
        return new EntityManager($connection, $config);
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
        $this->connect()->executeQuery(
                    "CREATE TABLE IF NOT EXISTS migrations(
                        id INT AUTO_INCREMENT PRIMARY KEY ,
                        migration  VARCHAR(255) NOT NULL,
                        created_at  TIMESTAMP DEFAULT CURRENT_TIMESTAMP
                    ) ENGINE = INNODB;");
    }

    public function getAppliedMigrations(): array
    {
        $stmt = $this->connect()->prepare("SELECT migration FROM migrations");
        $result = $stmt->executeQuery();
        return $result->fetchFirstColumn();
    }

    public function saveMigrations(array $migrations): void
    {
        $str = implode(',', array_map(fn($mig) => "('$mig')", $migrations));
        $stmt = $this->connect()->prepare("INSERT INTO migrations (migration) VALUES $str");

        $stmt->executeQuery();
    }

}