<?php
require __DIR__ . '/vendor/autoload.php';

use App\Controller\ProductController;
use App\Controller\UserController;

$controller = new ProductController();
$user = new UserController();

if (isset($_REQUEST['ok'])){
    $search = '%'.$_REQUEST['search'].'%';
    $controller->search($search);
}


$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : null;
switch ($page) {
    case 'add':
        $controller->add();
        break;
    case 'logout':
        $user->Logout();
        break;
    case 'delete':
        $controller->delete();
        break;
    case 'edit':
        $controller->update();
        break;
    case 'list':
        $controller->showAll();
        break;
    case 'Vans':
    case 'Nike':
    case 'Converse':
    case 'Balenciaga':
    case 'Puma':
    case 'Adidas':
        $controller->showBrand();
        break;
    case 'Sneaker':
    case 'Sport':
        $controller->showCategory();
        break;
    default:
       $controller->showHome();
        break;
}

?>