<?php
    require "assets/php/creation-personnage.php";
    //Creation des differente classe + stats de base
    //Force -> degat arme -> armure -> resistance
    $guerrier = new personnage(5,5,0,0);
    $paladin = new personnage(3,3,2,2);
    $assasin = new personnage(6,2,1,1);
    $archer = new personnage(3,5,1,1);
    $mage = new personnage(2,2,2,4);
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="assets/css/style.css">
        <title>Antholy</title>
    </head>
    <body>
        <?php
            //Affichage Guerrier
            echo "<ul><h3>Voici les stats du guerrier :</h3>
            <li>Point de vie : ".$guerrier->vie()." pv</li>
            <li>Force : ".$guerrier->force()."</li>
            <li>Degat de l'arme: ".$guerrier->degatArme()."</li>
            <li>Armure : ".$guerrier->armure()."</li>
            <li>Resistance : ".$guerrier->resistance()."</li></ul>";
            //Affichage paladin
            echo "<ul><h3>Voici les stats du paladin :</h3>
            <li>Point de vie : ".$paladin->vie()." pv</li>
            <li>Force : ".$paladin->force()."</li>
            <li>Degat de l'arme: ".$paladin->degatArme()."</li>
            <li>Armure : ".$paladin->armure()."</li>
            <li>Resistance : ".$paladin->resistance()."</li></ul>";
            //Affichage assasin       
            echo "<ul><h3>Voici les stats de l'assasin :</h3>
            <li>Point de vie : ".$assasin->vie()." pv</li>
            <li>Force : ".$assasin->force()."</li>
            <li>Degat de l'arme: ".$assasin->degatArme()."</li>
            <li>Armure : ".$assasin->armure()."</li>
            <li>Resistance : ".$assasin->resistance()."</li></ul>";
            //Affichage archer           
            echo "<ul><h3>Voici les stats de l'archer :</h3>
            <li>Point de vie : ".$archer->vie()." pv</li>
            <li>Force : ".$archer->force()."</li>
            <li>Degat de l'arme: ".$archer->degatArme()."</li>
            <li>Armure : ".$archer->armure()."</li>
            <li>Resistance : ".$archer->resistance()."</li></ul>";
            //Affichage mage           
            echo "<ul><h3>Voici les stats du mage :</h3>
            <li>Point de vie : ".$mage->vie()." pv</li>
            <li>Force : ".$mage->force()."</li>
            <li>Degat de l'arme: ".$mage->degatArme()."</li>
            <li>Armure : ".$mage->armure()."</li>
            <li>Resistance : ".$mage->resistance()."</li></ul>";

        ?>
    </body>
</html>