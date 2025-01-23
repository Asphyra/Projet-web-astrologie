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

        <body>

<p>Bonjour Verseau <br>
<?php echo"$prenom"; 
echo"br";
echo"$date";?></p>
<img src="./images/verseau.jpg" alt="verseau">


    </body>
</html>