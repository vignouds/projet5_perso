<?php 
function dbConnect()
{
	try
	{
		$db = new PDO('mysql:host=localhost;dbname=dashboard;charset=utf8', 'root', '');	
		return $db;
	}
	catch (Exception $e)
	{
		die('Erreur : ' . $e->getMessage());
	}	
}

function getTodo()
{
	$db = dbConnect();
	$req = $db->query('SELECT * FROM todo');

	return $req;
}

function insertTodo($task)
{
	$db = dbConnect();
	$req = $db->prepare('INSERT INTO todo (content) VALUES (?)');
	$affectedLines = $req->execute(array($task));

	return $affectedLines;
}

function deleteTodo($id)
{
	$db = dbConnect();
	$req = $db->prepare('DELETE FROM todo WHERE id = ?');
	$affectedLines = $req->execute(array($id));

	return $affectedLines;
}
