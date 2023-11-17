<?php 
require_once 'log.php';

try
{
	//Connecting to MySQL
	$pdo = new PDO(
		'mysql:host=localhost;dbname=pokédex;charset=utf8',
		"{$login}", 
		"{$password}");
}
catch(Exception $e)
{
    // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}