<?php
    session_start();
    require("db.php");
    $username = $_SESSION['username'];

    $sql = "SELECT id FROM users WHERE username = '$username'";

    $result = $con->query($sql);
    $user_id = $result->fetch_assoc()['id'];
    $items = [
            1 => ["pro_name" => "Playstation®5 Console - God of War™ Ragnarok", "pro_price" => 729],
            2 => ["pro_name" => "Playstation®5 Console - God of War™ Ragnarok - Digital", "pro_price" => 599],
            3 =>["pro_name" => "Playstation 5 Console", "pro_price" => 649],
            4 =>["pro_name" => "Playstation 5 Console - Digital", "pro_price" => 499],
            ];
    $order = "";
    foreach($_SESSION["cart"] as $keys => $values){
        $product_id = $keys;
        $product_name = $items[$keys]["pro_name"];
        $product_price = $items[$keys]["pro_price"];
        $product_quantity = $values["quantity"];

        $order = "Product ID: " . $product_id . " Product Name: " . $product_name . " Product Price: " . $product_price . " Product Quantity: " . $product_quantity;

        $sql = "INSERT INTO product_order VALUES (0,'$user_id', '$order')";
        $result = $con->query($sql);
    }

    if($result){?>
        <!-- alert "Order placed successfully" -->
   <?php 
        $url = "emptycart.php?success=1";
        header("Location: $url");
    }else{
        echo "Error: " . $sql . "<br>" . $con->error;}
?>

