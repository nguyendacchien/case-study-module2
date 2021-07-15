<?php


namespace App\Model;


class DBConnect
{
    private $dsn;
    private $username;
    private $password;

    public function __construct()
    {
        $this->dsn = "mysql:host=localhost;dbname=case_study;charset=utf8";
        $this->username = "root";
        $this->password = "@Chien2222";
    }

    public function connect()
    {
        try {
            return new \PDO($this->dsn,$this->username,$this->password);
        }catch (\PDOException $e){
            echo $e->getMessage();
        }
    }

}