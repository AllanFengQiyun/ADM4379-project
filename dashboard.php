<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css" />
        <script src="https://cdn.tailwindcss.com"></script>
        <title>Dashboard</title>
    </head>
 <body class="bg-cover" style="background-image:url(./background.svg)">
        <?php
        include("navbar.php");
        include("auth_session.php");
        ?>
        <br/>
                <div class="max-w-md mx-auto mb-4 border rounded-lg bg-gray-50 bg-gray-700 border-gray-600">
                <form class="px-4 py-2 bg-gray-800" method="post" name="login">
                    <div class="mb-4">
                        <label for="username" class="block text-sm font-medium text-white">Hello! <?php echo $_SESSION['username'];?></label>
                    </div>
                    <div class="mb-4">
                        <label for="homepage_access" class="block text-sm font-medium text-white">Please continue to the <a href="Historypage.php">homepage</a></label>
                    </div>
                    <div class = "mb-4">
                        <label for="logout" class="block text-sm font-medium text-white">Or <a href="logout.php">logout</a></label>
                    </div>
                </form>
            </div>
    </body>
</html>