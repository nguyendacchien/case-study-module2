<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="card col-12">
    <div class="card-header">
        <div class="col-6"><h1>Product List</h1></div>
    </div>
    <div class="card-body">

        <div class="row">
            <div class="col-md-6 mb-2">
                <a class="btn btn-success btn-lg" href="index.php?page=add"><i class="fas fa-plus-circle"></i></a>
            </div>
            <div class="col-md-6 mb-2">
                <form class="d-flex  mx-2" method="post" >
                    <input class="form-control me-2" type="text" name="search" placeholder="Search" aria-label="Search">
                    <input class="btn btn-outline-success" name="ok" type="submit" value="Search">
                </form>
            </div>
        </div>
        <table class="table mt-3" style="text-align:center">
            <thead>
            <tr>
                <th scope="col">STT</th>
                <th scope="col">Img</th>
                <th scope="col">Name</th>
                <th scope="col">Category</th>
                <th scope="col">Brand</th>
                <th scope="col">Size</th>
                <th scope="col">Price</th>
                <th scope="col">Inventory</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
            </thead>
            <tbody>
            <?php if (isset($products)) {
                foreach ($products as $key => $product) :?>
                    <tr>
                        <td><?php echo $key + 1 ?></td>
                        <!--                    <td>--><?php //echo $product->getId()
                        ?><!--</td>-->
                        <td><img width="100px" src="<?php echo 'uploads/' . $product->getImg() ?>"></td>
                        <td><?php echo $product->getName() ?></td>
                        <td><?php echo $product->getCategory() ?></td>
                        <td><?php echo $product->getBrand() ?></td>
                        <td><?php echo $product->getSize() ?></td>
                        <td><?php echo $product->getPrice() . ' vnđ' ?></td>
                        <td><?php echo $product->getStatus() ?></td>
                        <td><a class="btn btn-warning" href="index.php?page=edit&id=<?php echo $product->getID() ?>">
                                <i class="far fa-edit"></i>
                            </a>
                        </td>
                        <td><a class="btn btn-danger " href="index.php?page=delete&id=<?php echo $product->getID() ?>"
                               onclick="return confirm('bạn chắc chắn muốn xóa?')">
                                <i class="far fa-trash-alt"></i>
                            </a></td>
                    </tr>
                <?php endforeach;
            } ?>
            </tbody>
        </table>

    </div>
</div>
<!--<script src="dist/main.js"></script>-->
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
</body>
</html>

