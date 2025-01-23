<?php
$prenom = $_POST["prenom"];
$date = $_POST["date"];
$nom = $_POST["nom"];

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

        <p>Bonjour <?php echo"$prenom";?></br>
        Vous êtes né(e) le <?php echo"$date";?>, le même jour que :</p>
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