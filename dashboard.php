<?php
include("auth_session.php");
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css" />
        <script src="https://cdn.tailwindcss.com"></script>
        <title>Dashboard</title>
    </head>
    <body>
        <div class="form">
            <p>Welcome to Dashboard, <?php echo $_SESSION['username'];?>!</p>
            <p><a href="Historypage.php">Home</a></p>
            <a href="logout.php">Logout</a>
    </body>
</html>