<?php
    require "assets/php/creation-personnage.php";
    //Creation des differente classe + stats de base
    //Force -> degat arme -> armure -> resistance
    if($_POST["classe"]=="guerrier"||empty($_POST["classe"])){
        $personnage = new personnage("Guerrier",5,5,0,0);
    }if($_POST["classe"]=="paladin"){
        $personnage = new personnage("Paladin",3,3,2,2);
    }if($_POST["classe"]=="assassin"){
        $personnage = new personnage("Assassin",6,2,1,1);
    }if($_POST["classe"]=="archer"){
        $personnage = new personnage("Archer",3,5,1,1);
    }if($_POST["classe"]=="mage"){
        $personnage = new personnage("Mage",2,2,2,4);
    }
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
    <form action="" method="POST">
        <button name="classe" value="guerrier">Guerrier</button>
        <button name="classe" value="paladin">Paladin</button>
        <button name="classe" value="assassin">Assassin</button>
        <button name="classe" value="archer">Archer</button>
        <button name="classe" value="mage">Mage</button>
    </form>
        <?php
            //Affichage Classe + stat perso choisi
            echo "<ul><h3>".$personnage->nom()." :</h3>
            <li>Point de vie : ".$personnage->vie()." pv</li>
            <li>Force : ".$personnage->force()."</li>
            <li>Degat de l'arme: ".$personnage->degatArme()."</li>
            <li>Armure : ".$personnage->armure()."</li>
            <li>Resistance : ".$personnage->resistance()."</li></ul>
            <button>Choisir ".$personnage->nom()."</button>";
        ?>
    </body>
</html>