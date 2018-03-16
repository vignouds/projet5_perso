<?php 
function getTodo()
{
	try
	{
		$db = new PDO('mysql:host=localhost;dbname=dashboard;charset=utf8', 'root', '');	
	}
	catch (Exception $e)
	{
		die('Erreur : ' . $e->getMessage());
	}

	$req = $db->query('SELECT * FROM todo');

	return $req;
}