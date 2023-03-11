<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Registration Form</title>
</head>

<body class="bg-cover" style="background-image:url(./background.svg)">
    <?php
    include("navbar.php");
    require('db.php');
    // If form submitted, insert values into the database.
    if(isset($_REQUEST['username'])){
        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($con,$username);
        $email = stripslashes($_REQUEST['email']);
        $email = mysqli_real_escape_string($con,$email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con,$password);
        $create_datetime = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, email, create_datetime)";
        $result = mysqli_query($con,$query);
        echo "<p>".$result."</p>";
        if($result){
            echo "<div class='form'>
            <h3>You are registered successfully.</h3>
            <br/>Click here to <a href='login.php'>Login</a></div>";
        }else{
            echo "<div class='form'>
            <h3>Required fields are missing.</h3>
            <br/>Click here to <a href='registration.php'>try</a> again.</div>";
        }
    } else{    
    ?>
    <!--Title for the page-->
    <div class="text-center">
        <h1 class="mb-4 text-3xl font-extrabold text-gray-900 text-white md:text-5xl lg:text-6xl">
            <span class="text-transparent bg-clip-text bg-gradient-to-r to-gray-600 from-purple-400">Registration Form</span>
        </h1>
    </div>
    <!--Registration form-->
    <div class="max-w-md mx-auto mb-4 border rounded-lg bg-gray-50 bg-gray-700 border-gray-600">
        <form class="px-4 py-2 bg-gray-800" action="" method="post">
            <div class="mb-4">
                <input type="text" name="username" id="username" placeholder="Username"
                    class="w-full text-white px-3 py-2 text-sm text-gray-900 bg-gray-800 border border-gray-600 rounded-lg focus:ring-blue-500 focus:border-blue-500"
                    required>
            </div>
            <div class="mb-4">
                <input type="email" name="email" id="email" placeholder="Email Address"
                    class="w-full text-white px-3 py-2 text-sm text-gray-900 bg-gray-800 border border-gray-600 rounded-lg focus:ring-blue-500 focus:border-blue-500"
                    required>
            </div>
            <div class="mb-4">
                <input type="email" name="repeat-email" id="repeat-email" placeholder="Confirm Email Address"
                    class="w-full text-white px-3 py-2 text-sm text-gray-900 bg-gray-800 border border-gray-600 rounded-lg focus:ring-blue-500 focus:border-blue-500"
                    required>
            </div>
            <div class="mb-4">
                <input type="password" name="password" id="password" placeholder="Password"
                    class="w-full text-white px-3 py-2 text-sm text-gray-900 bg-gray-800 border border-gray-600 rounded-lg focus:ring-blue-500 focus:border-blue-500"
                    required>
            </div>
            <div class="mb-4">
                <input type="password" name="confirm-password" id="confirm-password" placeholder="Confirm Password"
                    class="w-full text-white px-3 py-2 text-sm text-gray-900 bg-gray-800 border border-gray-600 rounded-lg focus:ring-blue-500 focus:border-blue-500"
                    required>
            </div>
            <div class="mb-4">
                <input type="date" name="birthdate" id="birthdate" placeholder="Date of Birth"
                    class="w-full text-white px-3 py-2 text-sm text-gray-900 bg-gray-800 border border-gray-600 rounded-lg focus:ring-blue-500 focus:border-blue-500"
                    required>
            </div>
            <div class="mb-4">
                <input type="submit"
                    class="w-full text-white px-3 py-4 text-white bg-blue-500 rounded-lg focus:bg-blue-600 focus:outline-none" value="Register"></input>
            </div>
        </form>
        <?php } ?>
    </div>
</body>

        
