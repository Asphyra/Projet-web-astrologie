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



	/*Jour par rapport au 1er janvier */


	if (isset($jour)==1  and $jour >= 355 )
	{
	$signe = "Capricorne";

	}
	
	else if (isset($jour)==1  and $jour >= 326 )
	{
	$signe = "Sagittaire";

	}
	
	else if (isset($jour)==1  and $jour >= 295 )
	{
	$signe = "Scorpion";

	}
	
	else if (isset($jour)==1  and $jour >= 265 )
	{
	$signe = "Balance";

	}
	
	else if (isset($jour)==1  and $jour >= 234 )
	{
	$signe = "Vierge";

	}
	
	else if (isset($jour)==1  and $jour >= 203 )
	{
	$signe = "Lion";

	}
	
	else if (isset($jour)==1  and $jour >= 172 )
	{
	$signe = "Cancer";

	}
	
	else if (isset($jour)==1  and $jour >= 141 )
	{
	$signe = "Gémeau";

	}
	
	else if (isset($jour)==1  and $jour >= 110 )
	{
	$signe = "Taureau";

	}
	
	else if (isset($jour)==1  and $jour >= 79 )
	{
	$signe = "Bélier";

	}
	
	else if (isset($jour)==1  and $jour >= 50 )
	{
	$signe = "Poission";

	}
	
	else if (isset($jour)==1  and $jour >= 20 )
	{
	$signe = "Verseau";

	}
	
	else if (isset($jour)==1  and $jour >= 0 )
	{
	$signe = "Capricorne";

	}

?>

<p>
	Bonjour <?php echo "$prenom $nom" ?> </br> 
Vous êtes né(e) le <?php echo date('j', strtotime($date)),"\n",$liste[(int)$mois-1] ?> </br>
<?php echo "$ville a vu naître une nouvelle star ce jour là !" ?>

</p>


	<section>
		<article>
<p> Veuillez répondre à la question suivante afin d'accéder à votre Horoscope : </p>
<p><a>Quelle est la couleur du cheval blanc d'Henry VI?</a></p>
<form method="post" action=" <?php echo "$signe.php"?>">
<div>
<input type="password" name="mdp">
</div>



<div>
</br>
<input type="submit" name="OK">
<input type="hidden" id="postId" name="date" value="
<?php echo "$date"?>"/>
<input type="hidden" id="postId" name="prenom" value="
<?php echo "$prenom"?>"/>
<input type="hidden" id="postId" name="nom" value="
<?php echo "$nom"?>"/>
<input type="hidden" id="postId" name="ville" value="
<?php echo "$ville"?>"/>
</div>
</form>
</article>
</section>
</body>
</html>
<?php


?>