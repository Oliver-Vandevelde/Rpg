<?php
    require "assets/php/creation-personnage.php";
    try{
        // On se connecte à MySQL
        $bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'user', 'password');
    }
    catch(Exception $e){
        // En cas d'erreur, on affiche un message et on arrête tout
            die('Erreur : '.$e->getMessage());
    }
    $request = $bdd->query('SELECT id, nom, forcePerso, vie, niveau, experience FROM personnages');
    while ($donnees = $request->fetch(PDO::FETCH_ASSOC))
    {
        $perso = new Personnage($donnees);

        echo '<p>'.$perso->nom().' a '
        .$perso->forcePerso().' de force, '
        .$perso->vie().' point de vie, '
        .$perso->experience().' d\'expérience et est au niveau '
        .$perso->niveau().'</p>';
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
    <?php
    // if(empty($_POST["choixPartie"])){
    //     echo "<form action='' method='POST'>
    //         <button name='choixPartie' value='new'>Nouvelle Partie</button>
    //         <button name='choixPartie' value='continue'>Continuer</button>
    //     </form>";
    // }if($_POST["choixPartie"]=="new"){
    //     echo "<form action='' method='POST'>
    //         <button class='guerrier' name='classe' value='guerrier'>Guerrier</button>
    //         <button class='paladin' name='classe' value='paladin'>Paladin</button>
    //         <button class='assasin' name='classe' value='assassin'>Assassin</button>
    //         <button class='archer' name='classe' value='archer'>Archer</button>
    //         <button class='mage' name='classe' value='mage'>Mage</button>
    //         </form>";
    // }
    ?>
        <?php
            // Affichage Classe + stat perso choisi
            // echo "<ul><h3>".$personnage->nom()." :</h3>
            // <li>Point de vie : ".$personnage->vie()." pv</li>
            // <li>Force : ".$personnage->force()."</li>
            // <li>Degat de l'arme: ".$personnage->degatArme()."</li>
            // <li>Armure : ".$personnage->armure()."</li>
            // <li>Resistance : ".$personnage->resistance()."</li></ul>
            // <button> Choisir ".$personnage->nom()." </button>";
        ?>
    </body>
</html>