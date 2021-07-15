<?php

require __DIR__ . '/vendor/autoload.php';

use App\Controller\UserController;
$user = new UserController();
if (isset($_POST['login'])){
    $user->Login();
}
//if (isset($_REQUEST['signup'])){
//    header('location: app/View/signUp.php');
////    echo 'asdsad';
//    $user->AddUser();
//
//}
//$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : null;
//switch ($page) {
//    case 'signup':
//        $user->AddUser();
//        break;
//}
