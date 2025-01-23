<!DOCTYPE HTML>
    <html>
        <head>
            <meta charset="UTF-8"/>:
            <title> Formulaire </title>
        </head>

        <body>
        <?php
setlocale(LC_TIME, ['fr', 'fra', 'fr_FR']);
$liste = array("Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre",
"Octobre", "Novembre", "Décembre");

$prenom = $_POST['prenom'];
$mdp = $_POST['mdp'];
define ("mdp","blanc" or "Blanc");
$date = $_POST['date'];
$jour=date('z',strtotime($date));
$mois = date('m', strtotime($date));
echo "Vous êtes né(e) le ", date('j', strtotime($date)),"\n", $liste[(int)$mois-1]," !";
echo "\n ";
echo"$prenom";

?>



    </body>
</html>