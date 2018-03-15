<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=dashboard;charset=utf8', 'root', '');	
}
catch (Exception $e)
{
	die('Erreur : ' . $e->getMessage());
}

$req = $bdd->prepare('INSERT INTO todo (content) VALUES (?)');
$req->execute(array($_POST['todo']));

header('Location: todo.php');