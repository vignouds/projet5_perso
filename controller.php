<?php

require_once('model/TaskManager.php');

function listTask()
{
	$taskManager = new TaskManager();
    $tasks = $taskManager->getTask();

	require('todoView.php');
}

function addTask($task)
{
    $taskManager = new TaskManager();
	$affectedLines = $taskManager->insertTask($task);

	if ($affectedLines === false) {
    	throw new Exception('Impossible d\'ajouter la tâche !');
    }
    else {
        header('Location: index.php');
    }
}

function delTask($id)
{
    $taskManager = new TaskManager();

	$affectedLines = $taskManager->deleteTask($id);

	if ($affectedLines === false) {
    	throw new Exception('Impossible de supprimer la tâche !');
    }
    else {
        header('Location: index.php');
    }
}