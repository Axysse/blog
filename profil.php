<?php

session_start();

$user = [
    ["id" => 1, "username" => "axoloto", "email" => "axolot@axoxo.fr", "password" => "jadorelesaxoloto", ["prenom" => "axel", "nom" => "lotto", "age" => "03/04/1997", "profilPic" => "https://pics.craiyon.com/2023-12-25/jEQgBgnqRUCSp7lag0q2Vg.webp", ["adresse" => "7 rue fdj", "zipCode" => 45123, "pays" => "France"]]],
    ["id" => 2, "username" => "ludicoolo", "email" => "ludivine@ludidi.com", "password" => "ukulele2010", ["prenom" => "ludivine", "nom" => "lele", "age" => "15/07/2001", "profilPic" => "https://static.wikia.nocookie.net/pokemon-phoenix-rising/images/6/69/Ludicolo.png", ["adresse" => "14 martin luther king", "zipCode" => 86000, "pays" => "France"]]],
    ["id" => 3, "username" => "penksilla", "email" => "cicipre@gmail.fr", "password" => "karate", ["prenom" => "pricilla", "nom" => "katana", "age" => "28/06/1990", "profilPic" => "https://upload.wikimedia.org/wikipedia/commons/thumb/b/b5/Koboto_Santaro%2C_a_Japanese_military_commander_Wellcome_V0037661.jpg/220px-Koboto_Santaro%2C_a_Japanese_military_commander_Wellcome_V0037661.jpg", ["adresse" => "2 bis bushido sama", "zipCode" => 00154, "pays" => "Namibi"]]]
];

if ($_SESSION['newuser']['id'] == $user[0]['id']) {
    print "C'est bon";
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="xl:mx-[15%] bg-[#283D76]">
    <header class="flex flex-col justify-center items-center">
        <img class="h-[50vh] xl:w-[100%]"
            src="https://cdn.shopify.com/s/files/1/0558/2081/files/RATATOUILLE_final_1024x1024.png?v=1508953243)"
            alt="">
        <nav class="flex border-solid border-2 border-yellow-600 flex-row justify-around gap-10 items-center bg-[#2d4da2] h-[3em] w-[100%] xl:w-[85%] text-white ">
                <?php if (!isset($_SESSION['newuser'])) { ?>
                    <p>Bienvenue jeune cuisinier</p>
            <?php } ?>
            <section class="flex flex-row gap-5 ">
                <p class="text-2xl ">Bienvenue</p>
                <?php if (isset($_SESSION['newuser'])) { ?>
                    <p class="text-3xl text-[#e9a812] underline capitalize font-bold">
                        <?php echo $_SESSION['newuser']['username'] ?>
                    </p>
                <?php } ?>
            </section>   
            <section class="flex flex-row justify-center gap-5">
                    <?php if (!isset($_SESSION['newuser'])) { ?>
                        <a href="connexion.php">Connexion</a>
            <?php } else { ?>
                <a class="hover:text-[#e9a719] " href="déconnexion.php">Déconnexion</a>
            <?php } ?>
            <a class="hover:text-[#e9a719] " href="blog.php">Accueil</a>
            </section>
        </nav>
    </header>

    <main class="bg-[#283D76] xl:flex xl:flex-col xl:justify-center xl:items-center xl:pt-10 gap-10 w-full">
        <!-- Affichage de la carte profil -->
        <section 
            class="flex flex-col align-center bg-[#EAE5E0] border-solid border-2 border-yellow-600 rounded-2xl shadow-2xl xl:flex-row xl:justify-around xl:w-[60%]"> 
            <article class="flex items-center justify-center gap-5">
                <?php
                if (empty($_SESSION['newuser'])) { //On controle en premier si l'utilisateur n'est pas connecté//
                    print "Il faut se connecter";
                } else {
                    if (isset($_SESSION['newuser'])) { //SINON (donc utilisateur reconnu)...//
                        ?>
                        <img class="w-[15em] h-[15em]" src="<?php print $_SESSION['newuser'][0]['profilPic'] ?>" />
                        <?php

                        ?>
                    </article>
                    <article class="xl:border-solid xl:border-l-4 xl:border-yellow-600 xl:w-[100%]">
                        <?php if (isset($_SESSION['newuser']['username'])) { ?> <!-- On recherche la concordance entre k'utilisateur et son contenu personnel-->
                            <div class="border-solid border-b-4 border-yellow-600 flex flex-col justify-center items-center h-[30%]">
                                <p class="font-bold text-[#2d4da2] "> Infos du chef:</p>
                                <p> <?php print $_SESSION['newuser']['username']; ?> </p>
                                <p> <?php print $_SESSION['newuser']['email']; ?> </p>

                            </div>
                            <div
                                class="border-solid border-b-4 border-yellow-600 flex flex-col justify-center items-center">
                                <p class="font-bold text-[#b74f2e]">Données personelles:</p>
                                <div class="flex flex-row">
                                    <p> <?php print $_SESSION['newuser'][0]['prenom']; ?> </p>
                                    <p> <?php print $_SESSION['newuser'][0]['nom']; ?> </p>
                                </div>
                                <div>
                                    <p>Date de naissance : <?php print $_SESSION['newuser'][0]['age']; ?> </p>
                                </div>
                            </div>
                            <div class=" flex flex-col justify-center items-center xl:h-auto">
                                <p class="font-bold text-yellow-600">Adresse:</p>
                                <p> <?php print $_SESSION['newuser'][0][0]['adresse']; ?></p>
                                <p> <?php print $_SESSION['newuser'][0][0]['zipCode']; ?></p>
                                <p> <?php print $_SESSION['newuser'][0][0]['pays']; ?></p>
                            </div>
                            <?php
                        }
                    }
                }
                ?>

            </article>

        </section>
    </main>
    <footer class="flex border-solid border-2 border-yellow-600 justify-around gap-4 bg-[#2d4da2] h-[2em] xl:mt-10 text-white items-center  ">
        <a class="hover:text-[[#e9a812]] text-xs" href="">Condition utilisateur</a>
        <a class="hover:text-[[#e9a812]] text-xs" href="">Moyen de contacts</a>
        <a class="hover:text-[[#e9a812] text-xs" href="">Les réseaux sociaux</a>
    </footer>
</body>

</html>