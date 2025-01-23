<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<link rel="stylesheet" href="style.css"/>
</head>
<body>

<?php
	/* affichage */
	$prenom = $_POST['prenom']; 
	$nom = $_POST['nom'];
    $ville = $_POST['ville'];
    $date = $_POST['date'];
	$jour=date('z',strtotime($date));
 
  
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
