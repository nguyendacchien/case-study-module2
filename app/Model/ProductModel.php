<?php


namespace App\Model;

use PDO;

class ProductModel
{
    private DBConnect $dbConnect;

    public function __construct()
    {
        $this->dbConnect = new DBConnect();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM `view_products`";
        $stmt = $this->dbConnect->connect()->query($sql);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $this->convertToObject($data);

    }

    public function getBrand($name): array
    {
        $sql = "SELECT * FROM `view_products` WHERE `brand` = '$name';";
        $stmt = $this->dbConnect->connect()->query($sql);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $this->convertToObject($data);

    }

    public function getCategory($name): array
    {
        $sql = "SELECT * FROM `view_products` WHERE `category` = '$name';";
        $stmt = $this->dbConnect->connect()->query($sql);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $this->convertToObject($data);
    }

    public function convertToObject($data): array
    {
        $products = [];
        foreach ($data as $item) {
            $product = new Product($item->name, $item->img, $item->category, $item->brand, $item->size, $item->price);
            $product->setId($item->id);
            $product->setStatus($item->status);
            array_push($products, $product);
        }
        return $products;
    }

    public function getByID($id): array
    {
        $sql = 'SELECT * FROM `products` where id=?';
        $stmt = $this->dbConnect->connect()->prepare($sql);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        $result = $stmt->fetchAll();
        $products = [];
        foreach ($result as $item) {
            $product = new Product($item['name'], $item['img'], $item['category'], $item['brand'], $item['size'], $item['price']);
            $product->setId($id);
            $products[] = $product;
        }
        return $products;
    }

    public function create($product)
    {
        $sql = "INSERT INTO products (name,img ,category_id, brand_id, size, price) VALUES (?, ?, ?, ?, ?,?)";
        $stmt = $this->dbConnect->connect()->prepare($sql);
        $stmt->bindParam(1, $product->getName());
        $stmt->bindParam(2, $product->getImg());
        $stmt->bindParam(3, $product->getCategory());
        $stmt->bindParam(4, $product->getBrand());
        $stmt->bindParam(5, $product->getSize());
        $stmt->bindParam(6, $product->getPrice());
        $stmt->execute();
    }

    public function edit($id, $product): bool
    {
        if (($img = $_FILES['fileToUpload']['name']) == '') {
            $sql = "SELECT img FROM view_products WHERE id =$id";
            $stmt = $this->dbConnect->connect()->query($sql);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_OBJ);
            foreach ($result as $item) {
                $img = $item->img;
            }
        } else {
            $img = $_FILES['fileToUpload']['name'];
        }
        $sql = "UPDATE `products` SET `name` = ?, `img` = ?, `category_id` = ?, `brand_id` = ? , `size` =?, `price` = ? WHERE `id` = ?";
        $stmt = $this->dbConnect->connect()->prepare($sql);
        $stmt->bindParam(1, $product->name);
        $stmt->bindParam(2, $img);
        $stmt->bindParam(3, $product->category);
        $stmt->bindParam(4, $product->brand);
        $stmt->bindParam(5, $product->size);
        $stmt->bindParam(6, $product->price);
        $stmt->bindParam(7, $id);
        return $stmt->execute();

    }

    public function erase($id): bool
    {
        $sql = "DELETE FROM `products` WHERE id =" . $id;
        $stmt = $this->dbConnect->connect()->query($sql);
        return $stmt->execute();

    }

    public function searchs($search): array
    {
        $sql = "SELECT * FROM `view_products` WHERE `name` LIKE '$search'";
        $stmt = $this->dbConnect->connect()->query($sql);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_OBJ);
        return $this->convertToObject($data);
    }


}