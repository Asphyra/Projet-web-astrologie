<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<link rel="stylesheet" href="style.css"/>
</head>
<body>

<?php
	/* affichage */
	setlocale(LC_TIME, ['fr', 'fra', 'fr_FR']);
	$liste = array("Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre","Octobre", "Novembre", "Décembre");
	$nom = $_POST['nom'];
    $ville = $_POST['ville'];
	$prenom = $_POST['prenom'];
	define ("mdp","blanc" or "Blanc");
	$date = $_POST['date'];
	$jour=date('z',strtotime($date));
	$mois = date('m', strtotime($date));


echo "Vous êtes né(e) le ", date('j', strtotime($date)),"\n", $liste[(int)$mois-1]," !";
echo "\n ";
echo"$prenom";
  
	echo "bonjour $prenom $nom </br>";
    echo "Vous êtes né le $date à $ville</br>";

	/*Jour par rapport au 1er janvier */
	
	echo"$jour";
	
?>
	<section>
		<article>
<p><a>Quelle est la couleur du cheval blanc d'Henry VI?</a></p>
<form method="post" action="affichage.php"
<div>
<input type="password" name="mdp"
</div>

<input type="hidden" id="postId" name="date" value="
<?php echo "$date"?>"/>
<input type="hidden" id="postId" name="prenom" value="
<?php echo "$prenom"?>"/>

<div>
<input type="submit" name="OK"
</div>
</form>
</article>
</section>
</body>
</html>
