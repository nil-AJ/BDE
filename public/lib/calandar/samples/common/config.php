<?php

	require_once(dirname(__FILE__).'/connector/db_sqlite3.php');
	
	// SQLite
	$dbtype = "SQLite3";
	$res = new SQLite3(dirname(__FILE__)."/database.sqlite");

	// PDO
	// $res = new PDO("mysql:host=localhost;dbname=scheduler", "root", "");
	// $dbtype = "PDO";

?>