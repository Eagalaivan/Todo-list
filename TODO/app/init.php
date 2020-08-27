<?php
	$dbHost = 'localhost';
	$dbName = 'todo';

	$dbUsername = 'root';

	$dbPassword = '';

	$parsingEnabled = false;
	
	session_start();

	$_SESSION['user_id'] = 1;

	$db = new PDO('mysql:host=' . $dbHost . ';dbname=' . $dbName . '', $dbUsername, $dbPassword);
	
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
    $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

	if(!isset($_SESSION['user_id'])) {

		die('You\'re not signed in!');

	}

	function escape($string) {

		return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');

	}



	

?>