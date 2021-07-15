<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<aside id="sidebar" class="bg-side-nav w-1/2 md:w-1/6 lg:w-1/6 border-r border-side-nav hidden md:block lg:block">

    <ul class="list-reset flex flex-col"><li class=" w-full h-full py-3 px-2 border-b border-light-border bg-white">
            <a href="index.php?page=home"
               class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline"  style="text-decoration: none">
                <i class="fas fa-home mx-2 float-left mt-1"></i>
                Home
                <span><i class="fas fa-angle-right float-right"></i></span>
            </a>
        </li>
        <li class=" w-full h-full py-3 px-2 border-b border-light-border bg-white">
            <a href="index.php?page=list"
               class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline"  style="text-decoration: none">
                <!--                <i class="far fa-list-alt"></i>-->
                <i class="far fa-list-alt mx-2 float-left mt-1" ></i>
                Product
                <span><i class="fas fa-angle-right float-right"></i></span>
            </a>
        </li>
        <li class=" w-full h-full py-3 px-2 border-b border-light-border bg-white dropdown">
            <button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <a href="#"
                   class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline" style="text-decoration: none">
                    <i class="fas fa-copyright mx-2 float-left mt-1"></i>Category:
                </a>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="index.php?page=Sport">Sport</a>
                <a class="dropdown-item" href="index.php?page=Sneaker">Sneaker</a>
            </div>
        </li>

        <li class=" w-full h-full py-3 px-2 border-b border-light-border bg-white dropdown">
            <button class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <a href="#"
                   class="font-sans font-hairline hover:font-normal text-sm text-nav-item no-underline" style="text-decoration: none">
                    <i class="fas fa-trademark mx-2 float-left mt-1"></i>Brand:
                </a>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="index.php?page=Vans">Vans</a>
                <a class="dropdown-item" href="index.php?page=Nike">Nike</a>
                <a class="dropdown-item" href="index.php?page=Balenciaga">Balenciaga</a>
                <a class="dropdown-item" href="index.php?page=Converse">Converse</a>
                <a class="dropdown-item" href="index.php?page=Puma">Puma</a>
                <a class="dropdown-item" href="index.php?page=Adidas">Adidas</a>
            </div>
        </li>
    </ul>

</aside>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>
