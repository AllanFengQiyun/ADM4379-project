<html>
  <head>
    <title>PlayStation Games and Subscriptions</title>
    <link rel="stylesheet" type="text/css" href="style.css" />
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body class="bg-cover" style="background-image: url(./background.svg)">
  <?php
    include("navbar.php");
    ?>
    <div class="flex mx-auto justify-center gap-4 p-4">
  <!-- first container -->
  <div class="flex flex-wrap items-center">
    <div class="max-w-sm max-h-30 m border border-gray-200 rounded-lg shadow bg-gray-800 border-gray-700 p-4">
      <h1 class="mb-4 text-3xl font-extrabold text-white md:text-5xl lg:text-6xl">
        <span class="text-transparent bg-clip-text bg-gradient-to-r to-gray-600 from-purple-400">Top 10</span>
        <span class="text-white-900">PlayStation Games</span>
      </h1>
      <div class="px-5 pb-5">
        <ol class="space-y-1 text-gray-500 list-decimal list-inside text-gray-400">
          <?php
            $games = array(
              "Elden Ring",
              "God of War Ragnorok",
              "The Last of Us Part 1",
              "Spider-Man: Miles Morale",
              "Demon's Souls",
              "Ratchet and Clank Rift Apart",
              "Horizon Forbidden West",
              "Returnal",
              "Resident Evil Village",
              "Ghost of Tsushima Directors Cut"
            );

            foreach ($games as $game) {
              echo "<li><span class='font-semibold text-white'>$game</span></li>";
            }
          ?>
        </ol>
      </div>
    </div>
  </div>
</div>

<!-- second container -->
      <div class="flex flex-wrap items-center gap-4">
        <div class="px-5 pb-5">
          <div
            class="w-full max-h-30 max-w-sm  border border-gray-200 rounded-lg shadow bg-gray-800 border-gray-700 p-4 flex-wrap grow-0"
          >
            <h1
              class="mb-4 text-3xl font-extrabold  text-white md:text-5xl lg:text-6xl"
            >
              <span
                class="text-transparent bg-clip-text bg-gradient-to-r to-gray-600 from-purple-400"
                >Top</span
              >
              <span class="text-white-900">PlayStation Exclusive Games</span>
            </h1>
            <p
              class="mb-3 font-light text-gray-500 text-gray-400 first-line:uppercase first-line:tracking-widest first-letter:text-7xl first-letter:font-bold first-letter: first-letter:text-gray-100 first-letter:mr-3 first-letter:float-left"
            >
             PlayStation is known for having amazing exclusive games. 
              Many of these games have become well known in gaming. 
              On this page, we will look at five of the most popular PlayStation-exclusive games to date. 
              These games are; God of War, The Last of Us, Uncharted, Marvel's Spider-Man, and Ghost of Tsushima.
            </p>
          </div>
        </div>
 <!-- second container Exclusives -->
    <?php
    $games = [
        [
            'title' => 'God of War',
            'image' => 'https://i5.walmartimages.ca/images/Enlarge/320/586/6000205320586.jpg',
            'description' => 'God of War is an award-winning action-adventure game. 
              This game follows the adventures of Kratos, a spartan warrior turned God of War and his son Atreus. 
              Throughout their journey across many realms, the father-son duo are met by Monsters, Gods, and otherworldly beings. 
              This is where the game really shines as it has a fast pace brutal combat style with unique weapons 
              such as the Leviathan Axe and the Blades of Chaos. The beautiful story and the brutal combat style 
              combine for a visually and emotionally captivating gaming experience. ',
        ],
        [
            'title' => 'The Last of Us',
            'image' => 'https://cdn.shopify.com/s/files/1/0557/5868/4333/products/THELASTOFUSPART1_497x624.jpg?v=1656910793',
            'description' => 'The Last of Us continues to be one of the best action-adventure games to date. 
              This game follows the adventures of Joel and Ellie in a world where a fungal infection 
              causes people to turn into zombie-like creatures. Throughout this survival horror game, 
              we get to witness a touching friendship blossom. This game is truly one of a kind thanks to its emotional 
              story, likeable characters, and visually pleasing graphics. ',
        ],
        [
            'title' => 'Uncharted',
            'image' => 'https://i5.walmartimages.ca/images/Enlarge/536/008/6000204536008.jpg',
            'description' => 'Uncharted is an action-adventure game series for record books. 
              The series follows the adventures of Nathan Drake a treasure hunter who 
              travels the world in search of lost treasure. The challenging gameplay and 
              fascinating story make for a fun adventure game that keeps the gamer captivated. 
              The game is a PlayStation-exclusive favourite, filled with eloquent writing, great visuals and fun gameplay.',
        ],
        [
            'title' => "Marvel's Spider-Man",
            'image' => 'https://www.xyz.co.za/ProdImg/Big_711719958802-01.jpg',
            'description' => 'Marvel\'s Spider-Man is one of the best open-world games to date and a huge success 
              for PlayStation. Not only does it have a great story but also has ever-enjoyable side quests as well. 
              This game has amazing movement and combat as well. In the game, you can swing web to web and wall run 
              which makes the traversal unique and enjoyable. The continuously evolving combat also makes for a 
              lively fighting experience. This game is truly one of the bests as it has great movement and combat, 
              amazing visuals, and a heartfelt story.',
        ],
        [
            'title' => 'Ghost of Tsushima',
            'image' => 'https://static-ca.gamestop.ca/images/products/762138/3max.jpg',
            'description' => 'Ghost of Tsushima although only a year old has become a staple in the open-world action-adventure genre. 
              This game follows the journey of Jin Sakai, a samurai warrior who battles invaders to protect his people. 
              This game has become one of the most popular PlayStation exclusives through its pristine combat, and immersive storyline. ',
        ]
    ];?>
    <?php foreach ($games as $index => $game) { ?>
      <div class="px-5 pb-5">
            <div class="w-full max-h-30 m max-w-sm border border-gray-200 rounded-lg shadow bg-gray-800 border-gray-700 p-4 flex-wrap grow-0">
                <h3 class="mb-4 text-xl font-extrabold text-white md:text-2xl lg:text-3xl">
                    <span class="text-transparent bg-clip-text bg-gradient-to-r to-gray-600 from-purple-400"><?php ($index + 1); ?> </span>
                    <span class="text-white-900"><?php echo $game['title']; ?></span>
                </h3>
                <a href="#">
                    <img class="p-8 object-scale-down rounded-t-lg" src="<?php echo $game['image'] ?>" alt="product image" />
                </a>
                <p class="mb-3 font-light text-gray-500 text-gray-400 first-line:uppercase first-line:tracking-widest first-letter:text-7xl first-letter:font-bold first-letter:text-gray-100 first-letter:mr-3 first-letter:float-left">
                <?php echo $game['description'] ?>
                </p>
            </div>
        </div>
    <?php } ?>
</div>
        <!-- second container sixth box -->
        <div class="px-5 pb-5">
          <div
            class="w-full max-h-30 m max-w-sm  border border-gray-200 rounded-lg shadow bg-gray-800 border-gray-700 p-4 flex-wrap grow-0"
          >
            <p
              class="mb-3 font-light text-gray-500 text-gray-400 first-line:uppercase first-line:tracking-widest first-letter:text-7xl first-letter:font-bold first-letter: first-letter:text-gray-100 first-letter:mr-3 first-letter:float-left"
            >
              
              These games are just of few of the amazing exclusive games PlayStation has to offer. 
              No matter what game Genre you are looking for PlayStation have you covered. 
              If you want to have the best possible gaming experience and want to be able to play 
              one of these breathtaking games buy a PlayStation today and experience the fun for yourself. 

            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="mx-auto container">
      <h1
        class="mb-4 text-3xl font-extrabold  text-white md:text-5xl lg:text-6xl"
      >
        <span
          class="text-transparent bg-clip-text bg-gradient-to-r to-gray-600 from-purple-400"
          >What</span
        >
        <span class="text-white-900">is PlayStation Plus?</span>
      </h1>
      <p
        class="mb-3 font-light text-gray-500 text-gray-400 first-line:uppercase first-line:tracking-widest first-letter:text-7xl first-letter:font-bold first-letter: first-letter:text-gray-100 first-letter:mr-3 first-letter:float-left"
      >
       PlayStation Plus is a subscription service offered by Sony. 
        The service offers people the ability to play online with friends, 
        two free games monthly, extra storage via the cloud, and discounts in the PlayStation store.
        The PS Plus subscription is required in order to play online on the PS5 and other PlayStation consoles. 
        This subscription is offered in three tiers; PlayStation Plus Essential, PlayStation Plus Extra and PlayStation Plus Premium. 

      </p>
    </div>
<br>

<?php
$tiers = array(
  array(
    'name' => 'Essential',
    'price' => '$11.99 per month, $29.99 per quarter or $69.99 per year',
    'benefits' => array(
      'Access Online multiplayer',
      'Cloud saves',
      'Playstation Store discounts',
      'Playstation Store discounts',
    ),
  ),
  array(
    'name' => 'Extra',
    'price' => '$17.99 per month, $49.99 per quarter or $114.99 per year',
    'benefits' => array(
      'All The benifits of the Essential Tier',
      'Access to catalog of up to 400 games availible to download a play',
    ),
  ),
  array(
    'name' => 'Premium',
    'price' => '$21.99 per month, $59.99 per quarter or $139.99 per year',
    'benefits' => array(
      'All the benifits of the Essential and Extra tiers',
      'Players can download PS1 and PSP games',
      'Players can stream PS3 games',
      'Players can download and stream these old games to their PS4 or PS5 systems',
      'Time limitied game trials',
    ),
  ),
);

?>

<table class="mx-auto">
  <tr>
    <td colspan="3" class="text-center">
      <h1 class="mb-4 text-3xl font-extrabold text-white md:text-5xl lg:text-6xl">
        <span class="text-transparent bg-clip-text bg-gradient-to-r to-gray-600 from-purple-400">PlayStation</span>
        <span class="text-white-900">Plus Tiers</span>
      </h1>
    </td>
  </tr>
  <tr class="text-center">
    <?php foreach ($tiers as $tier) { ?>
      <td>
        <h3 class="mb-4 text-xl font-extrabold text-white md:text-2xl lg:text-3xl">
          <span class="text-transparent bg-clip-text bg-gradient-to-r to-gray-600 from-purple-400">PS Plus</span>
          <span class="text-white-900"><?php echo $tier['name']; ?></span>
        </h3>
      </td>
    <?php } ?>
  </tr>
  <tr>
    <?php foreach ($tiers as $tier) { ?>
      <td>
        <div class="px-5 pb-5">
          <ul class="space-y-1 text-gray-500 list-inside text-gray-400">
            <?php foreach ($tier['benefits'] as $benefit) { ?>
              <li>
                <span class="font-semibold text-white"><?php echo $benefit; ?></span>
              </li>
            <?php } ?>
            <li>
              <span class="font-semibold text-white"><?php echo 'Price: ' . $tier['price']; ?></span>
            </li>
          </ul>
        </div>
      </td>
    <?php } ?>
  </tr>
</table>

  <h5>References</h5>
        <ul>
          <li>Anderson, R. (2022, December 14). Everything You Need to Know About PlayStation Plus: What is PS Plus Premium? IGN. https://www.ign.com/articles/playstation-plus-tiers-explained-ps5-ps-plus</li>
          <li>Staff, I. (2021, August 4). The best PlayStation exclusives of all time. IGN. https://www.ign.com/articles/best-playstation-exclusives</li>
          <li>Staff, I. (2023, January 27). The best PS5 games. IGN. https://www.ign.com/articles/the-best-ps5-games</li>
        </ul>
  </body>
</html>
