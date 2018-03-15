<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=dashboard;charset=utf8', 'root', '');	
}
catch (Exception $e)
{
	die('Erreur : ' . $e->getMessage());
}

$req = $bdd->prepare('DELETE FROM todo WHERE id = ?');
$req->execute(array($_GET['todo']));
$donnees = $req->fetch();

header('Location: todo.php');
