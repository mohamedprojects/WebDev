<?php
 $connexion=new mysgli("localhost","root","","site") or die ("Erreur de connexion");
if ($connexion-->connect_errno){
	echo "Erreur de connexion:".$connexion->connect_error;
	exit();
}
else{
	echo "Connexion réussie:";
}
?>