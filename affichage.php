<?php
setlocale(LC_TIME, ['fr', 'fra', 'fr_FR']);
$liste = array("Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre",
"Octobre", "Novembre", "Décembre");

$mdp = $_POST['mdp'];
define ("mdp","blanc" or "Blanc");
$date = $_POST['date'];
$jour=date('z',strtotime($date));
$mois = date('m', strtotime($date));
echo "Vous êtes né(e) le (test) (test2) ", date('j', strtotime($date)),"\n", $liste[(int)$mois-1]," !";
echo "\n";


if (isset($jour)==1 and $mdp==mdp and $jour >= 355 )
{
echo"Capricorne";
exit();
}

else if (isset($jour)==1 and $mdp==mdp and $jour >= 326 )
{
echo"Sagittaire";
exit();
}

else if (isset($jour)==1 and $mdp==mdp and $jour >= 295 )
{
echo"Scorpion";
exit();
}

else if (isset($jour)==1 and $mdp==mdp and $jour >= 265 )
{
echo"Balance";
exit();
}

else if (isset($jour)==1 and $mdp==mdp and $jour >= 234 )
{
echo"Vierge";
exit();
}

else if (isset($jour)==1 and $mdp==mdp and $jour >= 203 )
{
echo"Lion";
exit();
}

else if (isset($jour)==1 and $mdp==mdp and $jour >= 172 )
{
echo"Cancer";
exit();
}

else if (isset($jour)==1 and $mdp==mdp and $jour >= 141 )
{
echo"Gémeau";
exit();
}

else if (isset($jour)==1 and $mdp==mdp and $jour >= 110 )
{
echo"Taureau";
exit();
}

else if (isset($jour)==1 and $mdp==mdp and $jour >= 79 )
{
echo"Bélier";
exit();
}

else if (isset($jour)==1 and $mdp==mdp and $jour >= 50 )
{
echo"Poission";
exit();
}

else if (isset($jour)==1 and $mdp==mdp and $jour >= 20 )
{
echo"Verseau";
exit();
}

else if (isset($jour)==1 and $mdp==mdp and $jour >= 0 )
{
echo"Capricorne";
exit();
}
?>

