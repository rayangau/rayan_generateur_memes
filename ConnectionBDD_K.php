<?php

$host = '127.0.0.1';
	$db = 'generateur_de_memes';
	$user ='admin';
	$pass = 'm d p_admin';
	$charset = 'utf8mb4';

	$dbh = "mysql:host=$host;dbname=$db;charset=$charset";

	$options = [
		PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
		PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
		PDO::ATTR_EMULATE_PREPARES   => false,
	];

	try {
		$dbh = new PDO($dbh, $user, $pass, $options);
	}
	catch (PDOException $e) {
		echo 'Connexion échouée : ' . $e->getMessage();
	}
