<nav class="flex items-center justify-between flex-wrap bg-gray-500 p-6">
        <div class="flex items-center flex-shrink-0 text-white mr-6">
            <a href="Historypage.php"><span class="font-semibold text-xl tracking-tight">Playstation website</span></a>
        </div>
        <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
            <div class="text-sm lg:flex-grow">

                <a href="playstation_games_and_subscriptions.php"
                class="block mt-4 lg:inline-block lg:mt-0 text-gray-200 hover:text-white mr-4">
                Playstation Games and Subscriptions
            </a>

                <a href="Comparisonpage.php"
                    class="block mt-4 lg:inline-block lg:mt-0 text-gray-200 hover:text-white mr-4">
                    Comparisons
                </a>
                <a href="price_listing.php"
                    class="block mt-4 lg:inline-block lg:mt-0 text-gray-200 hover:text-white mr-4">
                    Price Listing
                </a>
                <a href="reviews.php" class="block mt-4 lg:inline-block lg:mt-0 text-gray-200 hover:text-white mr-4">
                    Reviews
                </a>
            </div>
            <?php
            session_start();
            if(isset($_SESSION['username'])){?>
                <div>
                    <a href="logout.php"
                        class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-gray-500 hover:bg-white mt-4 lg:mt-0">Log
                        out</a>
                </div>
            <?php }else{ ?>
            <div>
                <a href="login.php"
                    class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-gray-500 hover:bg-white mt-4 lg:mt-0">Log
                    in</a>
                <a href="registration.php"
                    class="inline-block text-sm px-4 py-2 leading-none border rounded text-white border-white hover:border-transparent hover:text-gray-500 hover:bg-white mt-4 lg:mt-0">Create
                    Account</a>
            </div>
        <?php }?>
        </div>
    </nav>
