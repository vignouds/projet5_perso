<?php
require_once("model/Manager.php");

class TaskManager extends Manager
{
	public function getTodo()
	{
		$db = $this->dbConnect();
		$req = $db->query('SELECT * FROM todo');

		return $req;
	}

	function insertTodo($task)
	{
		$db = $this->dbConnect();
		$req = $db->prepare('INSERT INTO todo (content) VALUES (?)');
		$affectedLines = $req->execute(array($task));

		return $affectedLines;
	}

	function deleteTodo($id)
	{
		$db = $this->dbConnect();
		$req = $db->prepare('DELETE FROM todo WHERE id = ?');
		$affectedLines = $req->execute(array($id));

		return $affectedLines;
	}
}