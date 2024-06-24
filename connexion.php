<?php
$user = [
    ["id" => 1, "username" => "axoloto", "email" => "axolot@axoxo.fr", "password" => "jadorelesaxoloto", ["prenom" => "axel", "nom" => "lotto", "age" => "03/04/1997", "profilPic" => "https://pics.craiyon.com/2023-12-25/jEQgBgnqRUCSp7lag0q2Vg.webp", ["adresse" => "7 rue fdj", "zipCode" => 45123, "pays" => "France"]]],
    ["id" => 2, "username" => "ludicoolo", "email" => "ludivine@ludidi.com", "password" => "ukulele2010", ["prenom" => "ludivine", "nom" => "lele", "age" => "15/07/2001", "profilPic" => "https://static.wikia.nocookie.net/pokemon-phoenix-rising/images/6/69/Ludicolo.png", ["adresse" => "14 martin luther king", "zipCode" => 86000, "pays" => "France"]]],
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


session_start();


if (isset($_POST['submit'])) {
    for ($i = 0; $i < count($user); $i++) {
        if (($_POST['name']) == ($user[$i]['username']) && ($_POST['password']) == ($user[$i]['password'])) {
            $_SESSION['newuser'] = $user[$i];
            print "c'est bon" . $_SESSION['newuser'];
            header('location: blog.php');
            break;
        } else {
            print "Utilisateur inconnu.";
        }
    }
}
?>


<!DOCTYPE html>
<html lang="fr">

<head >
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class=" max-h-full bg-[#283D76]">
    <header class="flex justify-center">
    <img class=""
            src="https://cdn.shopify.com/s/files/1/0558/2081/files/RATATOUILLE_final_1024x1024.png?v=1508953243)"
            alt="">
    </header>
    <main class="lg:px-[15%]  md:px-[10%] sm:px-[5%] w-full max-h-full">
    <nav class="flex justify-around items-center bg-[#2d4da2] h-[3em] text-white mx-4  border-solid border-2 border-yellow-600">
            <div class="flex gap-2 items-baseline ">
                <p class="text-2xl max-sm:text-base">Bienvenue</p>
                <?php if (isset($_SESSION['newuser'])) { ?>
                    <p class="text-3xl text-[#e9a719] underline capitalize font-bold max-sm:text-base"> <?php echo $_SESSION['newuser']['username'] ?></p>
                <?php } ?>
            </div>
            <div class="flex gap-3 max-sm:text-xs">
                <?php if (isset($_SESSION['newuser'])) { ?>
                <a class="hover:text-[#e9a719] " href="profil.php">Profil</a>
                <?php if (isset($_SESSION['newuser'])) { ?>
                    <a class="hover:text-[#e9a719] " href="déconnexion.php">Déconnexion</a>
                   
                <?php } }?> 
                <a href="blog.php">Acceuil</a>
            </div>
        </nav>
        <section class="lg:px-[15%]  md:px-[10%] sm:px-[5%] w-full max-h-full   ">
            
            <form class="flex flex-col  h-[60vh]  items-center bg-[#283D76]"  action="" method="post">
                <h2>Connexion</h2>
                <div class="flex flex-col  h-[90%] justify-center  ">
                    <div class="flex gap-4 text-[#e9a719] p-8">
                        <label for="name">Votre pseudo:</label>
                        <input class="border-solid border-2 border-[#2d4da2] bg-[#EAE5E0]" type="text" name="name" id="name">
                    </div>
                    <div class="flex gap-4 text-[#e9a719] border-y-2 p-8 border-[#e9a719] ">
                        <label for="password">Votre mot de passe: </label>
                        <input class="border-solid border-2 border-[#2d4da2] bg-[#EAE5E0] " type="text" name="password" id="password" >
                    </div>
                </div>
                <button class="border-solid border-2 border-black w-[80%] bg-[#2d4da2] text-[#e9a719] " type="submit" value="login" name="submit">login</button>
            </form>
            <?php


            ?>
        </section>
    </main>
    <footer class="flex justify-around gap-4 bg-[#2d4da2] h-[2em] text-white items-center  border-solid border-2 border-yellow-600 ">
        <a class="hover:text-[#e9a719] text-xs" href="">Condition utilisateur</a>
        <a class="hover:text-[#e9a719] text-xs" href="">Moyen de contacts</a>
        <a class="hover:text-[#e9a719] text-xs" href="">Les réseaux sociaux</a>
    </footer>
</body>

</html>