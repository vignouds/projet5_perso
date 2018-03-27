<?php
require_once("model/Manager.php");

class TaskManager extends Manager
{
	public function getTask()
	{
		$db = $this->dbConnect();
		$req = $db->query('SELECT * FROM todo');

		return $req;
	}

	function insertTask($task)
	{
		$db = $this->dbConnect();
		$req = $db->prepare('INSERT INTO todo (content) VALUES (?)');
		$affectedLines = $req->execute(array($task));

		return $affectedLines;
	}

	function deleteTask($id)
	{
		$db = $this->dbConnect();
		$req = $db->prepare('DELETE FROM todo WHERE id = ?');
		$affectedLines = $req->execute(array($id));

		return $affectedLines;
	}
}