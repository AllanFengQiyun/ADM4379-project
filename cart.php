<?php session_start();?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css" />
        <script src="https://cdn.tailwindcss.com"></script>
        <title>Cart</title>
    </head>
    <body class="bg-cover" style="background-image:url(./background.svg)">
        <?php
        include("navbar.php");
        include("auth_session.php");
        if(ISSET($_REQUEST['success'])){
            echo "<script>alert('Successfully added to cart!')</script>";
        }
        ?>
        <br/>
        <div class="container">
            <table class="table-auto">
                <thead>
                    <tr>
                        <th class="px-4 py-2">Product</th>
                        <th class="px-4 py-2">Quantity</th>
                        <th class="px-4 py-2">Price</th>
                        <th class="px-4 py-2">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $items = [
                        1 => ["pro_name" => "Playstation®5 Console - God of War™ Ragnarok", "pro_price" => 729],
                        2 => ["pro_name" => "Playstation®5 Console - God of War™ Ragnarok - Digital", "pro_price" => 599],
                        3 =>["pro_name" => "Playstation 5 Console", "pro_price" => 649],
                        4 =>["pro_name" => "Playstation 5 Console - Digital", "pro_price" => 499],
                    ];
                    $total = 0;
                    if(isset($_SESSION["cart"])){
                        $item_total = 1;
                        foreach($_SESSION["cart"] as $keys => $values){
                    ?>
                    <tr>
                        <td class="border px-4 py-2"><?php echo $items[$keys]["pro_name"] ?></td>
                        <td class="border px-4 py-2"><?php echo $values["quantity"]; ?></td>
                        <td class="border px-4 py-2"><?php echo $items[$keys]["pro_price"]?></td>
                        <td class="border px-4 py-2"><?php echo number_format($values["quantity"] * $items[$keys]["pro_price"], 2); ?></td>
                    </tr>
                    <?php
                            $total = $total + ($values["quantity"] * $items[$keys]["pro_price"]);
                        }
                    }
                    ?>
                    <tr>
                        <td colspan="3" align="right">Total</td>
                        <td align="right">$ <?php echo number_format($total, 2); ?></td>
                    </tr>
                </tbody>
        </div>
        <div class="container">
            <button class="bg-blue-900 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                <a href="emptycart.php">Empty Cart</a>
            <button class="bg-blue-900 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                <a href="check_out.php">Checkout</a>
            </button>
            <button class="bg-blue-900 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                <a href="price_listing.php">Continue Shopping</a>
        </div>
    </body>