<?php 

$resultat = array("prenom" => $_POST['prenom'], "nom" => $_POST['nom'], "adresse" => $_POST['adresse'], "age" => $_POST['age'], "mail" => $_POST['mail'], "tel" => $_POST['tel']);
$boole = false; 
$compteur = 0;

foreach($resultat as $index =>$valeur){
	$compteur++;
	if($valeur ==""){
		echo "Merci de remplir le champ ".$index;?> <br> <?php
		$boole=true;
	} else if($compteur == sizeof($resultat) && $boole==false){
		echo "formulaire accépté, merci";?> <br> <?php		
			}
}
?>