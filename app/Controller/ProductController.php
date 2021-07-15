<?php


namespace App\Controller;


use App\Model\Product;
use App\Model\ProductModel;
//use App\Model\UserModel;

class ProductController
{
    protected ProductModel $productModel;


    public function __construct()
    {
        $this->productModel = new ProductModel();

    }

    public function showAll()
    {
        $products = $this->productModel->getAll();
        include_once "app/View/list.php";
    }
//    public function showListed()
//    {
//        $products = $this->productModel->getAll();
//        include_once "app/View/signUp.php";
//    }

    public function showBrand()
    {
        $name=$_REQUEST['page'];
        $products = $this->productModel->getBrand($name);
        include_once "app/View/list.php";
    }

    public function showCategory()
    {
        $name=$_REQUEST['page'];
        $products = $this->productModel->getCategory($name);
        include_once "app/View/list.php";
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            include 'app/View/create.php';
        } else {
            $errors = [];
            $fields = ['name', 'category', 'brand', 'size', 'price'];

            foreach ($fields as $field) {
                if (empty($_POST[$field])) {
                    $errors[$field] = 'Không được để trống';
                }
            }

            if (empty($errors)) {
                $Name = $_REQUEST['name'];
                $Category = $_REQUEST['category'];
                $Brand = $_REQUEST['brand'];
                $Size = $_REQUEST['size'];
                $Price = $_REQUEST['price'];
                $Img = $_FILES['fileToUpload']['name'];
                $products = new Product($Name, $Img, $Category, $Brand, $Size, $Price);
                $this->uploadImg();
                $this->productModel->create($products);
                header('Location: index.php?page=list');
            }else{
                include 'app/View/create.php';
            }
        }

    }
    public function uploadImg()
    {
        if ($_SERVER['REQUEST_METHOD']==='POST'){
           $target_dir = "uploads/";
           $target_file = $target_dir.basename($_FILES['fileToUpload']['name']);
           move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_file);
        }
    }

    public function update()
    {
        $id = $_REQUEST['id'];
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $products = $this->productModel->getByID($id);
            include 'app/View/update.php';
        } else {

            // Validate dữ liệu
            $errors = [];
            $fields = ['name', 'category', 'brand', 'size', 'price'];

            foreach ($fields as $field) {
                if (empty($_POST[$field])) {
                    $errors[$field] = 'Không được để trống';
                }
            }
            if (empty($errors)) {
                $product = new Product($_REQUEST['name'],$_REQUEST['fileToUpload'],$_REQUEST['category'],$_REQUEST['brand'],$_REQUEST['size'],$_REQUEST['price']);
                $product->setId($id);
                $this->uploadImg();
                $this->productModel->edit($id,$product);
                header('Location: index.php?page=list');
            } else {
                $products = $this->productModel->getByID($id);
                include 'app/View/update.php';
            }
        }
    }

    public function delete()
    {
        $id = $_REQUEST['id'];
        $this->productModel->erase($id);
        header('location: index.php?page=list');
    }

    public function search($search)
    {
        $products = $this->productModel->searchs($search);
        include_once "app/View/list.php";
    }
    public function showHome()
    {
        include_once "index.php";
    }
}