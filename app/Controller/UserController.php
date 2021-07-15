<?php


namespace App\Controller;


use App\Model\User;
use App\Model\UserModel;

class UserController
{
  private UserModel $userModel;
  public function __construct()
  {
      $this->userModel = new UserModel();
  }
    public function AddUser()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            include "app/View/login.php";
        } else {
            $userName = $_POST['username'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $user = new User($userName, $email,$password);
            $this->userModel->AddUser($user);
            header('Location: home.php?page=login');
        }
    }
    public function Login()

    {
        if ($_SERVER['REQUEST_METHOD']=='GET'){
            include 'app/View/login.php';
        }else{
            $userName = $_POST['username'];
            $password = $_POST['password'];
            $this->userModel->Login($userName,$password);
        }
    }

    function Logout(){
      unset($_SESSION['username']);
      header('Location: index.php');
    }

}