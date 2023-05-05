<?php

namespace models;

use bootstrap\Application;
use DateTime;
use enums\Rules;
use PDOException;

class UserModel extends Model
{
    public int $id;
    public string $first_name;
    public string $last_name;
    public string $email;
    public string $created_at;
    public string|null $profile_pic;
    public string $pass;
    public string $confirmPassword;


    public function getUser(string $email, string $password): static|string
    {
        $user = $this->isExist($email);
        if ($user) {
            $this->loadData($user);
            if (password_verify($password, $this->pass)) {
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

            $query = "INSERT INTO users VALUES (null, :firstname, :lastname, :email, :password, :profile_pic,:created_at)";

            $stmt = $connection->prepare($query);

            $stmt->bindValue(":firstname", $this->first_name);
            $stmt->bindValue(":lastname", $this->last_name);
            $stmt->bindValue(":email", $this->email);
            $stmt->bindValue(":password", password_hash($this->pass, PASSWORD_BCRYPT, ['cost'=>12]));
            $stmt->bindValue(":created_at", (new DateTime())->format('Y-m-d H:i:s'));
            $stmt->bindValue(":profile_pic", null);

            $done = $stmt->executeQuery();

            $this->pass='';
            $this->confirmPassword='';
            $_SESSION['user'] = serialize($this);
            session_write_close();

            return (bool)$done;
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

        $result = $stmt->executeQuery();

        $user = $result->fetchAssociative();

        if ($result) {
            return $user;
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
            'pass'               => [Rules::REQUIRED,[Rules::MIN, 'min' => 8],[Rules::MAX, 'max' => 64]],
            'confirmPassword'    => [Rules::REQUIRED,[Rules::MATCH, 'match' => 'pass']],
        ];
    }
}