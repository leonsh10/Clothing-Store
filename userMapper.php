<?php
require_once "databaseConfig.php";

class UserMapper extends DatabasePDOConfiguration
{

    private $conn;
    private $query;

    public function __construct()
    {
        $this->conn = $this->getConnection();
    }

    public function getUserByID($userId)
    {
        $this->query = "select * from user where userId=:id";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":id", $userId);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function edit(\SimpleUser $user, $id)
    {
        $this->query = "update user set username=:username, email=:email where userId=:id";
        var_dump($user);
        $statement = $this->conn->prepare($this->query);
        $username = $user->getUsername();
        $email = $user->getEmail();
        $statement->bindParam(":username", $username);
        $statement->bindParam(":email", $email);
        $statement->bindParam(":id", $id);
        $statement->execute();
    }

    public function getUserByUsername($username)
    {
        $this->query = "select * from user where username=:username";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":username", $username);
        $statement->execute();
        $result = $statement->fetch(PDO::FETCH_ASSOC);
        return $result;
    }

    public function getAllUsers()
    {
        $this->query = "select * from user";
        $statement = $this->conn->prepare($this->query);
        $statement->execute();
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function insertUser(\SimpleUser $user)
    {
        $this->query = "insert into user (Username,Email,password, role) values (:username,:email,:password,:role)";
        $statement = $this->conn->prepare($this->query);
        $username = $user->getUsername();
        $email = $user->getEmail();
        $password = password_hash($user->getPassword(), PASSWORD_BCRYPT);
        $role = $user->getRole();
        $statement->bindParam(":username", $username);
        $statement->bindParam(":email", $email);
        $statement->bindParam(":password", $password);
        $statement->bindParam(":role", $role);
        $statement->execute();
    }

    public function deleteUser($userId)
    {
        $this->query = "delete from user where userId=:id";
        $statement = $this->conn->prepare($this->query);
        $statement->bindParam(":id", $userId);
        $statement->execute();
    }
}
