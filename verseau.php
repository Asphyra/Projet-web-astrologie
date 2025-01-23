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
            <title> Verseau </title>
        </head>

        <body id="Verseau">
        <h1>VERSEAU</h1>

        <p>Citation : “La nature humaine n'est ni bonne ni mauvaise, </br>
        mais ouverte vers une continuelle transformation et transcendance. 
</br> Elle n'a qu'une chose à faire, se découvrir elle-même.” </p>

        <p>Bonjour <?php echo"$prenom";?> ,</br>
        Vous êtes né(e) le <?php echo date('j', strtotime($date)),"\n",$liste[(int)$mois-1] ?> à <?php echo"$ville" ?>, </br> vous êtes donc du même signe que :</p>
        <div class="flex">

            <div class='duo'>
                <p class='star'>The Weeknd</p>
            <img src="images/theweeknd.webp" alt="The Weeknd">
            </div>
            <div class='duo'>
                <p class='star'>Cristiano Ronaldo</p>
                <img src="images/ronaldo.webp" alt="ronaldo">
            </div>
            <div class='duo'>
                <p class='star'>Nicolas Sarkozy</p>
                <img src="images/sarko.jpg" alt="">
            </div>
        </div>
    </body>
</html>