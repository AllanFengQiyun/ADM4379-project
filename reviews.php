<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Top Games</title>
    <title>Reviews</title>

</head>

<body class="bg-cover" style="background-image:url(./background.svg)">
    <?php
    include("navbar.php");?>
        <!--Title for the page-->
        <div class="text-center">
            <h1 class="mb-4 text-3xl font-extrabold text-gray-900 text-white md:text-5xl lg:text-6xl">
                <span class="text-transparent bg-clip-text bg-gradient-to-r to-gray-600 from-purple-400">Reviews</span>
            </h1>
        </div>
    <?php 

    include("db.php");
    $sql = "SELECT username,comment FROM reviews r
    JOIN users u ON u.id=r.user_id;";
    $result = $con -> query($sql);
    while($row = $result->fetch_assoc()){?>
    <div class="grid">
    <form class ="top-0 pt-2">
        <div class="container px-4 py-2 bg-gray-800 rounded-lg bg-gray-800 max-w-lg mx-auto ">
            <?php echo $row['comment']?>
            <div class="flex justify-end">
                <p class="text-xs text-gray-500 text-gray-400 text-center bg-gray-800 border-gray-600">
                    <?php echo $row['username']?>
                </p>
        </div>
    </form>
    </div>
    <br/>
    <?php }
        if(ISSET($_SESSION['username'])){ ?>

        <!--product selector-->
        <div class="grid">
        <div class="px-4 py-2 bg-gray-800 rounded-lg bg-gray-800 max-w-lg mx-auto">
            <label for="Product" class="block text-sm font-medium text-white">Select an
                option</label>
            <select id="Product"
                class="bg-gray-50 border  text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 bg-gray-700 border-gray-600 placeholder-gray-400 text-white focus:ring-blue-500 focus:border-blue-500">
                <option selected>Choose a Product</option>
                <option value="PS5D">Playstation® 5 Digital Edition</option>
                <option value="PS5">Playstation® 5</option>
                <option value="PS4P">Playstation® 4 Pro</option>
                <option value="PS4">Playstation® 4</option>
            </select>
        </div>
           <!--review-->
        <form class="top-0 pt-2" id="commentForm" action="" method="post">
            <div class="max-w-xl mx-auto mb-4 border rounded-lg bg-gray-50 bg-gray-700 border-gray-600">
                <div class="px-4 py-2 bg-gray-800 rounded-t-lg bg-gray-800">     
            <label for="comment" class="sr-only">Review</label>
            <textarea name="comment" id="comment" rows="4"
                class="w-full px-0 text-sm text-gray-900 bg-gray-800 border-0 bg-gray-800 focus:ring-0 text-white placeholder-gray-400"
                placeholder="Write a review"
                form="commentForm" required></textarea>
            <div class="flex items-center justify-between px-3 py-2 border-t border-gray-600">
                <button type="submit"
                    class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-gray-700 rounded-lg focus:ring-4 focus:ring-gray-200 focus:ring-gray-900 hover:bg-gray-800">
                    Post comment
                </button>
                <div class="flex pl-0 space-x-1 sm:pl-2">
                    <button type="button"
                        class="inline-flex justify-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 text-gray-400 hover:text-white hover:bg-gray-600">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Attach file</span>
                    </button>
                    <button type="button"
                        class="inline-flex justify-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 text-gray-400 hover:text-white hover:bg-gray-600">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Set location</span>
                    </button>
                    <button type="button"
                        class="inline-flex justify-center p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100 text-gray-400 hover:text-white hover:bg-gray-600">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Upload image</span>
                    </button>
                </div>
            </div>
            </div>
        </form>
        <p class="ml-auto text-xs text-gray-500 text-gray-400 text-center bg-gray-800 border-gray-600">
            Remember, reviews should follow our
            <a href="#" class="text-purple-600 text-gray-500 hover:underline">Community Guidelines</a>.
        </p>
        </div>
        <?php }
        //get user_id
        $username = mysqli_escape_string($con,$_SESSION['username']);
        $sql = "SELECT id FROM users WHERE username = '$username'";
        //post comment
        $result2 = $con -> query($sql);
        $row = $result2 -> fetch_assoc();
        $user_id = $row['id'];
        echo ISSET($_REQUEST['comment']);
        if(ISSET($_REQUEST['comment'])){
            $comment = $_REQUEST['comment'];
            $comment = mysqli_escape_string($con, $comment);
            $sql = "INSERT INTO reviews (id,user_id,comment) VALUES (0, '$user_id', '$comment')";
            $result3 = $con -> query($sql);
            if($result3){
                header("Location: reviews.php");
            }else{
                echo "Error posting comment, please try again";
            }
        }?>
</body>

</html>