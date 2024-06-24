<?php

session_start();



$user = [
    ["id" => 1, "username" => "axoloto", "email" => "axolot@axoxo.fr", "password" => "jadorelesaxoloto", ["prenom" => "axel", "nom" => "lotto", "age" => "03/04/1997", "profilPic" => "https://pics.craiyon.com/2023-12-25/jEQgBgnqRUCSp7lag0q2Vg.webp", ["adresse" => "7 rue fdj", "zipCode" => 45123, "pays" => "France"]]],
    ["id" => 2, "username" => "ludicoolo", "email" => "ludivine@ludidi.com", "password" => "ukulele2010", ["prenom" => "ludivine", "nom" => "lele", "age" => "15/07/2001", "profilPic" => "https://static.wikia.nocookie.net/pokemon-phoenix-rising/images/6/69/Ludicolo.png/revision/latest?cb=20180603170019", ["adresse" => "14 martin luther king", "zipCode" => 86000, "pays" => "France"]]],
    ["id" => 3, "username" => "penksilla", "email" => "cicipre@gmail.fr", "password" => "karate", ["prenom" => "pricilla", "nom" => "katana", "age" => "28/06/1990", "profilPic" => "https://upload.wikimedia.org/wikipedia/commons/thumb/b/b5/Koboto_Santaro%2C_a_Japanese_military_commander_Wellcome_V0037661.jpg/220px-Koboto_Santaro%2C_a_Japanese_military_commander_Wellcome_V0037661.jpg", ["adresse" => "2 bis bushido sama", "zipCode" => 00154, "pays" => "Namibi"]]]
];

$data = [
    ["id" => 1, "title" => "Recettes de pommes de terre tiède", "userId" => 2, "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.", "like" => 1000],
    ["id" => 2, "title" => "Choux blanc au clou", "userId" => NULL, "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.", "like" => 104489410],
    ["id" => 3, "title" => "Patate douce mais pas trop", "userId" => 2, "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.", "like" => 1],
    ["id" => 4, "title" => "Tomate sèche mais hydraté", "userId" => 1, "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.", "like" => 1645],
    ["id" => 5, "title" => "Cote de boeuf grillé à point", "userId" => 2, "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.", "like" => 56],
    ["id" => 6, "title" => "Steak d'herbe pas bien poussé", "userId" => 3, "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.", "like" => 48779],
    ["id" => 7, "title" => "Barbecue cuit au froid", "userId" => 3, "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.", "like" => 9875],
    ["id" => 8, "title" => "Pizza pas cuite", "userId" => NULL, "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.", "like" => 41516],
];


?>
<!DOCTYPE html>
<html lang="Fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chez Gusteau</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class=" max-h-full bg-[#283D76] ">
    <header class="flex justify-center ">
        <img class="" src="https://cdn.shopify.com/s/files/1/0558/2081/files/RATATOUILLE_final_1024x1024.png?v=1508953243)" alt="">
    </header>
    <main class="lg:px-[15%]  md:px-[10%] sm:px-[5%] w-full max-h-full ">
        <nav class="flex justify-around items-center bg-[#2d4da2] h-[3em] text-white mx-4  border-solid border-2 border-yellow-600">
            <div class="flex gap-2 items-baseline ">
                <p class="text-2xl max-sm:text-base">Bienvenue</p>
                <?php if (isset($_SESSION['newuser'])) { ?>
                    <p class="text-3xl text-[#e9a719] underline capitalize font-bold max-sm:text-base"> <?php echo $_SESSION['newuser']['username'] ?></p>
                <?php } ?>
            </div>
            <div class="flex gap-3 max-sm:text-xs">
                <?php if (!isset($_SESSION['newuser'])) { ?>
                    <a class="hover:text-[#e9a719] " href="connexion.php">Connexion</a>
                <?php } ?>
                <?php if (isset($_SESSION['newuser'])) { ?>
                    <a class="hover:text-[#e9a719] " href="profil.php">Profil</a>
                    <?php if (isset($_SESSION['newuser'])) { ?>
                        <a class="hover:text-[#e9a719] " href="déconnexion.php">Déconnexion</a>
                <?php }
                } ?>
            </div>
        </nav>
        <article class="grid lg:grid-cols-3 md:grid-cols-1 gap-5 w-full my-5 ">
            <!-- Permet de controler les ID et si == Null l'affiche à l'écran -->
            <?php foreach ($data as $value) {
                if ($value["userId"] === NULL) { ?>
                    <div class="w-full flex flex-col gap-3  rounded-2xl bg-[#EAE5E0] p-4">
                        <h2 class="flex justify-center  underline capitalize font-bold text-[#e9a719]"><?php print $value["title"] ?></h2>
                        <p class="text-[#2d4da2] line-clamp-4 flex justify-center"><?php print $value["description"] ?></p>
                        <div class="flex gap-4">
                            <svg class="h-5 w-5 fill-[#2d4da2]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                <path d="M313.4 32.9c26 5.2 42.9 30.5 37.7 56.5l-2.3 11.4c-5.3 26.7-15.1 52.1-28.8 75.2H464c26.5 0 48 21.5 48 48c0 18.5-10.5 34.6-25.9 42.6C497 275.4 504 288.9 504 304c0 23.4-16.8 42.9-38.9 47.1c4.4 7.3 6.9 15.8 6.9 24.9c0 21.3-13.9 39.4-33.1 45.6c.7 3.3 1.1 6.8 1.1 10.4c0 26.5-21.5 48-48 48H294.5c-19 0-37.5-5.6-53.3-16.1l-38.5-25.7C176 420.4 160 390.4 160 358.3V320 272 247.1c0-29.2 13.3-56.7 36-75l7.4-5.9c26.5-21.2 44.6-51 51.2-84.2l2.3-11.4c5.2-26 30.5-42.9 56.5-37.7zM32 192H96c17.7 0 32 14.3 32 32V448c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32V224c0-17.7 14.3-32 32-32z" />
                            </svg>
                            <p class=" text-[#e9a719]"><?php print $value["like"] ?></p>
                        </div>
                    </div>
                    <?php }
                if (isset($_SESSION['newuser'])) { //Controle si la session est ouverte
                    if ($_SESSION['newuser']['id'] == $value["userId"]) { ?> <!-- Permet de controler les ID qui correspond à l'user et  l'affiche à l'écran -->
                        <div class="w-full flex flex-col gap-3 bg-[#EAE5E0] rounded-2xl p-4">
                            <h2 class="flex justify-center underline capitalize font-bold text-[#e9a719]"><?php print $value["title"] ?></h2>
                            <p class="line-clamp-4 text-[#2d4da2] flex justify-center"><?php print $value["description"] ?></p>
                            <div class="flex gap-4">
                                <svg class="h-5 w-5 fill-[#2d4da2]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                    <path d="M313.4 32.9c26 5.2 42.9 30.5 37.7 56.5l-2.3 11.4c-5.3 26.7-15.1 52.1-28.8 75.2H464c26.5 0 48 21.5 48 48c0 18.5-10.5 34.6-25.9 42.6C497 275.4 504 288.9 504 304c0 23.4-16.8 42.9-38.9 47.1c4.4 7.3 6.9 15.8 6.9 24.9c0 21.3-13.9 39.4-33.1 45.6c.7 3.3 1.1 6.8 1.1 10.4c0 26.5-21.5 48-48 48H294.5c-19 0-37.5-5.6-53.3-16.1l-38.5-25.7C176 420.4 160 390.4 160 358.3V320 272 247.1c0-29.2 13.3-56.7 36-75l7.4-5.9c26.5-21.2 44.6-51 51.2-84.2l2.3-11.4c5.2-26 30.5-42.9 56.5-37.7zM32 192H96c17.7 0 32 14.3 32 32V448c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32V224c0-17.7 14.3-32 32-32z" />
                                </svg>
                                <p class=" text-[#e9a719]"><?php print $value["like"] ?></p>
                            </div>
                        </div>
            <?php }}} ?>
        </article>
    </main>
    </video>
    </section>
    <footer class="flex justify-around gap-4 bg-[#2d4da2] h-[2em] text-white items-center  border-solid border-2 border-yellow-600 ">
        <a class="hover:text-[#e9a719] text-xs" href="https://www.francenum.gouv.fr/guides-et-conseils/developpement-commercial/site-web/rediger-des-conditions-generales-dutilisation">Condition utilisateur</a>
        <a class="hover:text-[#e9a719] text-xs" href="">Moyen de contacts</a>
        <a class="hover:text-[#e9a719] text-xs" href="https://www.facebook.com/DisneylandParisfr/">Les réseaux sociaux</a>
    </footer>
</body>
</html>