<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="asset/js/script.js"></script>
    <title>Notre Super RPG</title>
</head>
<body>
<button class="btn btn-primary return" onclick="document.location.href='../../index.php'"><= Retour</button>
    <form action='' method='POST'>
        <section class="selectClass">
            <button name='choixClass' class="btn btn-primary" value="guerrier">Guerrier</button>
            <button name='choixClass' class="btn btn-primary" value="paladin">Paladin</button>
            <button name='choixClass' class="btn btn-primary" value="assassin">Assassin</button>
            <button name='choixClass' class="btn btn-primary" value="archer">Archer</button>
            <button name='choixClass' class="btn btn-primary" value="mage">Mage</button>
        </section>
    </form>
    <form action="selectNiveau.php" method="POST">
        <section class="fichePerso">
            <?php
                if($_POST['choixClass']=="guerrier" || empty($_POST['choixClass'])){
                    echo "<img class='imageFichePerso' src='../img/guerrier.jpg' alt='guerrier'>
                        <section class='statFichePerso'>
                        <p class='vie'>Point de vie de base : 100 Pv</p>
                        <p class='force'>Force de base : 5</p>
                        </section>";
                }if($_POST['choixClass']=="paladin"){
                    echo "<img class='imageFichePerso' src='../img/paladin.jpg' alt='paladin'>
                        <section class='statFichePerso'>
                        <p class='vie'>Point de vie de base : 150 Pv</p>
                        <p class='force'>Force de base : 2</p>
                        </section>";
                }if($_POST['choixClass']=="assassin"){
                    echo "<img class='imageFichePerso' src='../img/assassin.jpg' alt='assassin'>
                        <section class='statFichePerso'>
                        <p class='vie'>Point de vie de base : 80 Pv</p>
                        <p class='force'>Force de base : 7</p>
                        </section>";
                }if($_POST['choixClass']=="archer"){
                    echo "<img class='imageFichePerso' src='../img/archer.jpg' alt='archer'>
                        <section class='statFichePerso'>
                        <p class='vie'>Point de vie de base : 50 Pv</p>
                        <p class='force'>Force de base : 10</p>
                        </section>";
                }if($_POST['choixClass']=="mage"){
                    echo "<img class='imageFichePerso' src='../img/mage.jpg' alt='mage'>
                        <section class='statFichePerso'>
                        <p class='vie'>Point de vie de base : 50 Pv</p>
                        <p class='force'>Force de base : 1</p>
                        </section>";
                }
            ?>
        </section>
        <input class="validPerso" type="text" name="pseudo" placeholder="ex : Rahn" required/>
        <button class="btn btn-primary validPerso" type="submit">Valider</button>
    </form>
</body>
</html>