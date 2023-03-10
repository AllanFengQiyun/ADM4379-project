<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Price Listing</title>
</head>

<body class="bg-cover" style="background-image:url(./background.svg)">
    <?php
    include("navbar.php");
    ?>
    <div class="text-center">
        <h1 class="mb-4 text-3xl font-extrabold text-white text-white md:text-5xl lg:text-6xl">
            <span class="text-transparent bg-clip-text bg-gradient-to-r to-gray-600 from-purple-400">Playstation</span>
            Product Page
        </h1>
    </div>
    <?php
    $Ystar = '<svg aria-hidden="true" class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"> title>Ystar</title> <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
    </path> </svg>';
    $Gstar = '<svg aria-hidden="true" class="w-5 h-5 text-grey-300" fill="currentColor" viewBox="0 0 20 20"
    xmlns="http://www.w3.org/2000/svg">
    <title>Gstar</title>
    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
    </path>
    </svg>';

    session_start();
    if (ISSET($_GET['pro_id'])){
        $pro_id = $_GET['pro_id'];
    if(!empty($_SESSION['cart'])){
        $array_col = array_column($_SESSION['cart'], 'pro_id');
        if (in_array($pro_id,$array_col)){
            $_SESSION['cart'][$pro_id]['quantity']+=1;
        }else{
            $item = [
                'pro_id' => $_GET['pro_id'],
                'quantity' => 1
            ];
            $_SESSION['cart'][$pro_id] = $item;
        }
    }else{
        $item = [
            'pro_id' => $_GET['pro_id'],
            'quantity' => 1
        ];
        $_SESSION['cart'][$pro_id] = $item;
    }
    }
    ?>

    <div class="flex flex-wrap grow-0 justify-center gap-4">
        <!-- first box-->
        <div class="w-full max-w-sm border border-gray-200 rounded-lg shadow bg-gray-800 border-gray-700">
            <a href="#">
                <img class="p-8 object-scale-down rounded-t-lg" src="https://media.direct.playstation.com/is/image/sierialto/GOWR-Bundle-Hero-US?$Background_Large$" alt="product image" />
            </a>
            <div class="px-5 pb-5">
                <a href="#">
                    <h5 class="text-xl font-semibold tracking-tight  text-white">Playstation??5 Console
                        - God of War??? Ragnarok</h5>
                </a>
                <div class="flex items-center mt-2.5 mb-5">
                    <?php
                    echo $Ystar;
                    echo $Ystar;
                    echo $Ystar;
                    echo $Ystar;
                    echo $Gstar;
                    ?>
                    <span class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded bg-blue-200 text-blue-800 ml-3">5.0</span>
                </div>
                <div class="flex items-center justify-between">
                    <span class="text-3xl font-bold text-white">$729</span>
                    <a href="price_listing.php?pro_id=1" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center bg-blue-600 hover:bg-blue-700 focus:ring-blue-800">Add
                        to cart</a>
                </div>
            </div>
        </div>
        <!--Second box-->
        <div class="w-full max-w-sm border border-gray-200 rounded-lg shadow bg-gray-800 border-gray-700">
            <a href="#">
                <img class="p-8 object-scale-down rounded-t-lg" src="https://media.direct.playstation.com/is/image/sierialto/GOWR-PS5-Digital-Bundle-Hero-US?$Background_Large$" alt="product image" />
            </a>
            <div class="px-5 pb-5">
                <a href="#">
                    <h5 class="text-xl font-semibold tracking-tight text-white">Playstation??5 Console
                        - God of War??? Ragnarok - Digital</h5>
                </a>
                <div class="flex items-center mt-2.5 mb-5">
                    <?php
                    echo $Ystar;
                    echo $Ystar;
                    echo $Ystar;
                    echo $Gstar;
                    echo $Gstar;
                    ?>
                    <span class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded bg-blue-200 text-blue-800 ml-3">5.0</span>
                </div>
                <div class="flex items-center justify-between">
                    <span class="text-3xl font-boldd text-white">$599</span>
                    <a href="price_listing.php?pro_id=2" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center bg-blue-600 hover:bg-blue-700 focus:ring-blue-800">Add
                        to cart</a>
                </div>
            </div>
        </div>
        <!--Third Box-->
        <div class="w-full max-w-sm border border-gray-200 rounded-lg shadow bg-gray-800 border-gray-700">
            <a href="#">
                <img class="p-8 object-scale-down rounded-t-lg " src="https://m.media-amazon.com/images/I/51QnZ0TtL2L._AC_SL1500_.jpg" alt="product image" />
            </a>
            <div class="px-5 pb-5">
                <a href="#">
                    <h5 class="text-xl font-semibold tracking-tight  text-white">Playstation 5 Console
                    </h5>
                </a>
                <div class="flex items-center mt-2.5 mb-5">
                    <?php
                    echo $Ystar;
                    echo $Ystar;
                    echo $Ystar;
                    echo $Ystar;
                    echo $Ystar;
                    ?>
                   <span class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded bg-blue-200 text-blue-800 ml-3">5.0</span>
                </div>
                <div class="flex items-center justify-between">
                    <span class="text-3xl font-bold  text-white">$649</span>
                    <a href="price_listing.php?pro_id=3" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center bg-blue-600 hover:bg-blue-700 focus:ring-blue-800">Add
                        to cart</a>
                </div>
            </div>
        </div>
        <!--Forth Box-->
        <div class="w-full max-w-sm border border-gray-200 rounded-lg shadow bg-gray-800 border-gray-700">
            <a href="#">
                <img class="p-8 object-scale-down rounded-t-lg" src="https://m.media-amazon.com/images/I/51QnZ0TtL2L._AC_SL1500_.jpg" alt="product image" />
            </a>
            <div class="px-5 pb-5">
                <a href="#">
                    <h5 class="text-xl font-semibold tracking-tight  text-white">Playstation 5 Console -
                        Digital</h5>
                </a>
                <div class="flex items-center mt-2.5 mb-5">
                    <?php
                    echo $Ystar;
                    echo $Ystar;
                    echo $Ystar;
                    echo $Ystar;
                    echo $Gstar;
                    ?>
                    <span class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded bg-blue-200 text-blue-800 ml-3">4.0</span>
               </div>
                <div class="flex items-center justify-between">
                    <span class="text-3xl font-bold  text-white">$499</span>
                    <a href="price_listing.php?pro_id=4" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center bg-blue-600 hover:bg-blue-700 focus:ring-blue-800">Add
                        to cart</a>
                </div>
            </div>
        </div>
    </div>
</body>