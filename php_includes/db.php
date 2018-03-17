<?php
//error_reporting(E_ALL);
ini_set('display_errors',0);
ini_set('display_startup_errors',0);
define('HOST', "projectrsepolice.mysql.db");
define('USER', "projectrsepolice");
define('PASS', "Hurensohn123");
define('DB', "projectrsepolice");

function genPDO($DB = DB, $user = USER, $pass = PASS, $host = HOST) {
	$pdo = new PDO("mysql:host=".$host.";dbname=".$DB, $user, $pass);
	$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
	return $pdo;
}

$pdo = genPDO();
?>