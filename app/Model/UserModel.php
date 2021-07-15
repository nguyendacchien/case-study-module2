<?php


namespace App\Model;


class UserModel
{

    private DBConnect $dbConnect;

    public function __construct()
    {
        $this->dbConnect = new DBConnect();
    }

    public function addUser($user)
    {
        $sql = "INSERT INTO `users`(`userName`, `email`,`password`) VALUES (?,?,?)";
        $stmt = $this->dbConnect->connect()->prepare($sql);
        $stmt->bindParam(1, $user->getUsername());
        $stmt->bindParam(2, $user->getEmail());
        $stmt->bindParam(3, $user->getPaswword());
        $stmt->execute();
    }

    public function getUser($userName)
    {
        $sql = "SELECT * FROM `users` Where `userName`='$userName'";
        $stmt = $this->dbConnect->connect()->query($sql);
        $stmt->execute();
        return $stmt->fetch();
    }
    public  function checkLogin($username, $password)
    {

        $data = $this->getUser($username);
        if ($data){
            if ($username ==$data['userName'] && $password==$data['password']){
                return true ;
            }
        }
        return false;
    }
    public function Login($username,$password)
    {
        if ($this->checkLogin($username, $password)){
            session_start();
            $_SESSION['username'] = $username ;
            $_SESSION['password'] = $password;
            header('Location: index.php');
        }
    }
}