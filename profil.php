<?php

$user = [
    ["id" => 1, "username" => "axoloto", "email" => "axolot@axoxo.fr", "password" => "jadorelesaxoloto", ["prenom" => "axel", "nom" => "lotto", "age" => "03/04/1997", "profilPic" => "https://pics.craiyon.com/2023-12-25/jEQgBgnqRUCSp7lag0q2Vg.webp", ["adresse" => "7 rue fdj", "zipCode" => 45123, "pays" => "France"]]],
    ["id" => 2, "username" => "ludicoolo", "email" => "ludivine@ludidi.com", "password" => "ukulele2010", ["prenom" => "ludivine", "nom" => "lele", "age" => "15/07/2001", "profilPic" => "https://static.wikia.nocookie.net/pokemon-phoenix-rising/images/6/69/Ludicolo.png", ["adresse" => "14 martin luther king", "zipCode" => 86000, "pays" => "France"]]],
    ["id" => 3, "username" => "penksilla", "email" => "cicipre@gmail.fr", "password" => "karate", ["prenom" => "pricilla", "nom" => "katana", "age" => "28/06/1990", "profilPic" => "https://upload.wikimedia.org/wikipedia/commons/thumb/b/b5/Koboto_Santaro%2C_a_Japanese_military_commander_Wellcome_V0037661.jpg/220px-Koboto_Santaro%2C_a_Japanese_military_commander_Wellcome_V0037661.jpg", ["adresse" => "2 bis bushido sama", "zipCode" => 00154, "pays" => "Namibi"]]]
];


?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="mx-[15%]">
    <header>
        <img class="h-[50vh] w-[80%]"
            src="https://cdn.shopify.com/s/files/1/0558/2081/files/RATATOUILLE_final_1024x1024.png?v=1508953243)"
            alt="">
    </header>
    <main class="bg-[#d1d5db]">
        <nav class="flex justify-around items-center bg-[#b74f2e] h-[3em] text-white ">
            <div>
                <?php if (!isset($_POST['submit'])) { ?>
                    <p>Bienvenu jeune cuisinier</p>
                </div>
            <?php } ?>
            <div>
                <a class="hover:text-[#2d4da2]" href="connexion.php">Connexion</a>
            </div>
        </nav>
        <section
            class="flex flex-col align-center border-solid border-8 border-[#b74f2e] xl:flex-row xl:justify-around">
            <article class="flex items-center gap-5">
                <?php
                if (empty($log['username'])) {
                    print "Il faut se connecter";
                } else {
                    if (isset($log['username'])) {
                        ?>
                        <img class="w-[15em] h-[15em]" src="<?php print $log[0]['profilPic'] ?>">
                        <p class="text-xl"> <?php print $log['username'] ?></p>
                        <?php

                        ?>
                    </article>
                    <article class="xl:border-solid xl:border-l-8 xl:border-[#b74f2e] xl:w-[100%]">
                        <?php if (isset($log['username'])) { ?>
                            <div class="border-solid border-b-4 border-[#b74f2e]">
                                <p class="font-bold text-[#2d4da2] "> Infos du chef:</p>
                                <p> <?php print $log['username']; ?> </p>
                                <p> <?php print $log['email']; ?> </p>

                            </div>
                            <div class="bg-yellow-400 border-solid border-b-4 border-[#b74f2e]">
                                <p class="font-bold text-[#b74f2e]">Données personelles:</p>
                                <p> <?php print $log[0]['prenom']; ?> </p>
                                <p> <?php print $log[0]['nom']; ?> </p>
                                <p>Date de naissance : <?php print $log[0]['age']; ?> </p>
                            </div>
                            <div class="bg-[#2d4da2]">
                                <p class="font-bold text-yellow-600">Adresse:</p>
                                <p> <?php print $log[0][0]['adresse']; ?></p>
                                <p> <?php print $log[0][0]['zipCode']; ?></p>
                                <p> <?php print $log[0][0]['pays']; ?></p>
                            </div>
                            <?php
                        }
                    }
                }
                ?>

            </article>

        </section>
    </main>
    <footer>

    </footer>
</body>

</html>