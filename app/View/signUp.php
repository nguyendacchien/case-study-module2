<!doctype html>
<html lang="en">

<head>
    <title>signUp</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../../dist/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp"
          crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .login{
            /*background: url('dist/images/login-new.jpeg')*/
        }
    </style>
</head>

<body class="h-screen font-sans login bg-cover">
<div class="container mx-auto h-full flex flex-1 justify-center items-center">
    <div class="w-full max-w-lg">
        <div class="leading-loose">
            <form class="max-w-xl m-4 p-10 bg-white rounded shadow-xl" method="post">
                <p class="text-gray-800 font-medium text-center text-lg font-bold">SignUp</p>
                <div class="">
                    <label class="block text-sm text-gray-00" for="username">Username</label>
                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="username" name="username" type="text"  placeholder="User Name" aria-label="username">
                </div>
                <div class="mt-2">
                    <label class="block text-sm text-gray-600" for="password">Email</label>
                    <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" id="password" name="email" type="email"  placeholder="*******" aria-label="password">
                </div>
                <div class="mt-2">
                    <label class="block text-sm text-gray-600" for="password">Password</label>
                    <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" id="password" name="password" type="text"  placeholder="*******" aria-label="password">
                </div>
                <div class="mt-4 items-center justify-between">
                    <input type="submit" class="btn btn-primary" name="login">
                    <a class="btn btn-outline-success" href="../../home.php" role="button">Back</a>
                </div>
            </form>

        </div>
    </div>
</div>
</body>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</html>
