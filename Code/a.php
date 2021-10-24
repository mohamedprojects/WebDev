<?php 
$objetPdo = new PDO('mysql:host=localhost;dbname=site','root','');
$pdoStat = $objetPdo->prepare('SELECT* FROM population);
$pdoStat->bindValue(':num', $_GET['nump'], PDO::PARAM_INT);
$executeIsOk = $pdoStat->execute();
$population = $pdoStat->fetch();
?>