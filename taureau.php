<?php
$prenom = $_POST["prenom"];
$date = $_POST["date"];
$nom = $_POST["nom"];
$liste = array("Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre","Octobre", "Novembre", "Décembre");
$mois = date('m', strtotime($date));
$ville = $_POST["ville"];
?>



<!DOCTYPE HTML>
    <html>
        <head>
            <meta charset="UTF-8"/>
            <link rel="stylesheet" href="style.css"/>
            <title>  Taureau </title>
        </head>

        <body id="Taureau">
        <h1>TAUREAU</h1>

        <p>Citation : “Le scientifique n'étudie pas la nature </br>
    dans un but utilitaire, il l'étudie car il y prend du plaisir </br>
et il y prend du plaisir car la nature est belle."</p>

        <p>Bonjour <?php echo"$prenom";?> ,</br>
        Vous êtes né(e) le <?php echo date('j', strtotime($date)),"\n",$liste[(int)$mois-1] ?> à <?php echo"$ville" ?>, </br> vous êtes donc du même signe que :</p>
        <div class="flex">

            <div class='duo'>
                <p class='star'>Dwayne Johnson</p>
            <img src="images/dwayne.webp" alt="The Weeknd">
            </div>
            <div class='duo'>
                <p class='star'>Megan Fox</p>
                <img src="images/megan.webp" alt="ronaldo">
            </div>
            <div class='duo'>
                <p class='star'>Mark Zukerberg</p>
                <img src="images/mark.webp" alt="">
            </div>
        </div>
    </body>
</html>