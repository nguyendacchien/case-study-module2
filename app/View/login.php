<body class="h-screen font-sans login bg-cover">
<div class="container mx-auto h-full flex flex-1 justify-center items-center">
    <div class="w-full max-w-lg">
        <div class="leading-loose">
            <form class="max-w-xl m-4 p-10 bg-white rounded shadow-xl" method="post">
                <p class="text-gray-800 font-medium text-center text-lg font-bold">Login</p>
                <div class="">
                    <label class="block text-sm text-gray-00" for="username">Username</label>
                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="username" name="username" type="text"  placeholder="User Name" aria-label="username">
                </div>
                <div class="mt-2">
                    <label class="block text-sm text-gray-600" for="password">Password</label>
                    <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" id="password" name="password" type="password"  placeholder="*******" aria-label="password">
                </div>
                <div class="mt-4 items-center justify-between">
                    <input type="submit" class="btn btn-primary"  name="login">
                    <input class="btn btn-outline-success" name="signup" type="submit" value="Search">
<!--                    <a class="btn btn-outline-success" href="home.php?page=signup" role="button">Sign Up</a>-->
                </div>
                <a class="inline-block right-0 align-baseline font-bold text-sm text-500 hover:text-blue-800" href="#">
                    Forgot Password?
                </a>
            </form>

        </div>
    </div>
</div>

