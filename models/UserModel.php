<?php

namespace models;

use bootstrap\Application;
use DateTime;
use enums\Rules;
use PDOException;

class UserModel extends Model
{
    public int $user_id;
    public string $first_name;
    public string $last_name;
    public string $email;
    public string $created_at;
    public string $user_password;
    public string $confirmPassword;


    public function getUser(string $email, string $password): static|string
    {
        $user = $this->isExist($email);

        if ($user) {
            $this->loadData($user);
            if (password_verify($password, $this->user_password)) {
                return $this;
            } else {
                return "password";
            }
        } else {
            return "email";
        }
    }

    public function save():bool
    {
        try {
            $connection = Application::dbConnect();

            $query = "INSERT INTO users VALUES (null, :firstname, :lastname, :email, :password, :created_at)";

            $stmt = $connection->prepare($query);

            $stmt->bindValue(":firstname", $this->first_name);
            $stmt->bindValue(":lastname", $this->last_name);
            $stmt->bindValue(":email", $this->email);
            $stmt->bindValue(":password", password_hash($this->user_password, PASSWORD_BCRYPT, ['cost'=>12]));
            $stmt->bindValue(":created_at", (new DateTime())->format('Y-m-d H:i:s'));

            $done = $stmt->execute();

            $this->user_password='';
            $this->confirmPassword='';
            $_SESSION['user'] = serialize($this);
            session_write_close();

            return $done;
        } catch (PDOException $exception) {
            echo $exception->getMessage();
        }
        return false;
    }
    public function isExist(string $email): bool|array
    {
        $connection = Application::dbConnect();

        $query = "SELECT * FROM users WHERE email = :email";

        $stmt = $connection->prepare($query);

        $stmt->bindValue(':email', $email);

        $stmt->execute();

        $result = $stmt->fetch(\PDO::FETCH_ASSOC);

        if ($result) {
            return $result;
        } else {
            return false;
        }

    }


    public function rules(): array
    {
        return [
            'first_name'         => [Rules::REQUIRED],
            'last_name'          => [Rules::REQUIRED],
            'email'              => [Rules::REQUIRED, Rules::EMAIL, [Rules::UNIQUE, 'field' => 'email']],
            'user_password'      => [Rules::REQUIRED,[Rules::MIN, 'min' => 8],[Rules::MAX, 'max' => 64]],
            'confirmPassword'    => [Rules::REQUIRED,[Rules::MATCH, 'match' => 'user_password']],
        ];
    }
}