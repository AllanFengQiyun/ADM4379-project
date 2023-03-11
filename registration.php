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
    ?>
    <!--Title for the page-->
    <div class="text-center">
        <h1 class="mb-4 text-3xl font-extrabold text-gray-900 text-white md:text-5xl lg:text-6xl">
            <span class="text-transparent bg-clip-text bg-gradient-to-r to-gray-600 from-purple-400">Registration Form</span>
        </h1>
    </div>
    <!--Registration form-->
    <div class="max-w-md mx-auto mb-4 border rounded-lg bg-gray-50 bg-gray-700 border-gray-600">
        <form class="px-4 py-2 bg-gray-800">
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-white">Name</label>
                <input type="text" name="name" id="name"
                    class="w-full px-3 py-2 text-sm text-gray-900 bg-gray-800 border border-gray-600 rounded-lg focus:ring-blue-500 focus:border-blue-500"
                    required>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-white">Email address</label>
                <input type="email" name="email" id="email"
                    class="w-full px-3 py-2 text-sm text-gray-900 bg-gray-800 border border-gray-600 rounded-lg focus:ring-blue-500 focus:border-blue-500"
                    required>
            </div>
            <div class="mb-4">
                <label for="confirm-email" class="block text-sm font-medium text-white">Confirm Email address</label>
                <input type="confirm-email" name="repeat-email" id="repeat-email"
                    class="w-full px-3 py-2 text-sm text-gray-900 bg-gray-800 border border-gray-600 rounded-lg focus:ring-blue-500 focus:border-blue-500"
                    required>
            </div>
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-white">Password</label>
                <input type="password" name="password" id="password"
                    class="w-full px-3 py-2 text-sm text-gray-900 bg-gray-800 border border-gray-600 rounded-lg focus:ring-blue-500 focus:border-blue-500"
                    required>
            </div>
            <div class="mb-4">
                <label for="confirm-password" class="block text-sm font-medium text-white">Confirm Password</label>
                <input type="password" name="confirm-password" id="confirm-password"
                    class="w-full px-3 py-2 text-sm text-gray-900 bg-gray-800 border border-gray-600 rounded-lg focus:ring-blue-500 focus:border-blue-500"
                    required>
            </div>
            <div class="mb-4">
                <label for="birthdate" class="block text-sm font-medium text-white">Date of Birth</label>
                <input type="date" name="birthdate" id="birthdate"
                    class="w-full px-3 py-2 text-sm text-gray-900 bg-gray-800 border border-gray-600 rounded-lg focus:ring-blue-500 focus:border-blue-500"
                    required>
            </div>
            <div class="mb-4">
                <button type="submit"
                    class="w-full px-3 py-4 text-white bg-blue-500 rounded-lg focus:bg-blue-600 focus:outline-none">Register</button>
            </div>
        </form>
    </div>
</body>

        
