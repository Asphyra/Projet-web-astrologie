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
            <title> Taureau </title>
        </head>

        <body id="Taureau">
    <h1>TAUREAU</h1>

<p>Bonjour <?php echo"$prenom";?></br>
Vous êtes né(e) le <?php echo"$date";?>, le même jour que :
<ul>
    <li>Dwayne Johnson</li>
    <img src="images/theweeknd.jpg" alt="">
    <li>Megan Fox</li>
    <img src="images/theweeknd.jpg" alt="">
    <li>Mark Zukerberg</li>
    <img src="images/theweeknd.jpg" alt="">
</ul></p>
    </body>
</html>