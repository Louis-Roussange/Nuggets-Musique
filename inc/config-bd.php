<?php

/****************
Modifiez vos paramètres de connexion à la BD ci-dessous (dans le 'else', lignes 10 à 13)
****************/

if(file_exists('../private-config-bd.php'))  // fichier de configuration "privé" (enseignants)
	require('../private-config-bd.php');
else {
	define('SERVEUR', 'localhost');
	define('UTILISATRICE', 'p2103804'); // votre login, par exemple p1234567
	define('MOTDEPASSE', 'Bluish74Gazing'); // votre mot de passe, par exemple Abcd12Efgh
	define('BDD', 'p2103804'); // votre BD, par exemple p1234567	
}
?>
