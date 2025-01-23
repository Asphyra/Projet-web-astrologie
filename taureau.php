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
            <title> Formulaire </title>
        </head>

        <body>

<p>Bonjour Taureau</br>
Vous êtes né(e) le même jour que : - Dwayne Johnson 
                                   - Megan Fox
                                   - Mark Zukerberg
<?php echo"$prenom"; 
echo"br";
echo"$date";?></p>
</p>
<img src="images/taureau.jpg" alt="taureau">



    </body>
</html>