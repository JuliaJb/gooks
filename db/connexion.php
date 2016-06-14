<?php

try {

	$dbh = new PDO('mysql:host=juliajactcjulia.mysql.db;dbname=juliajactcjulia;charset=utf8','juliajactcjulia','Palooza30');
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	// c'est le meilleur mode pour la gestion des erreurs
	$dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
	
} catch(PDOException $e) {
	print "Erreur : ". $e->getMessage() . "<br>";
	die();
}

?>