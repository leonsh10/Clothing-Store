<?php

$connection =mysqli_connect("localhost","root","","projekti");

class DatabasePDOConfiguration
{
    private $connection;

    private $host = "localhost";
    private $username = "root";
    private $dbName = "projekti";
    private $password = "";

    protected function getConnection()
    {
        $this->createConnection();
        return $this->connection;
    }

    private function createConnection()
    {
        $this->connection = new PDO("mysql:host=$this->host;dbname=$this->dbName", $this->username, $this->password);
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    
}

class Contact{
    private $connection;
    private $host = "localhost";
    private $username = "root";
    private $dbName = "projekti";
    private $password = "";
    public $mysqli;
    public function __construct()
    {
        
        return $this->mysqli = new mysqli($this->host, $this->username, $this->password, $this->dbName);
    }

    private function createConnection()
    {
        $this->connection = new PDO("mysql:host=$this->host;dbname=$this->dbName", $this->username, $this->password);
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    public function contact_us($data){
        $name=$data['username'];
        $email=$data['email'];
        $phone=$data['phone'];
        $message=$data['message'];
        $q="insert into contact_us set name='$name',email='$email',phone='$phone',message='$message'";
        return $this->mysqli->query($q);      
    }
}
?>