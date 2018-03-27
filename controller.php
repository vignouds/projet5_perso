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
    	die('Impossible d\'ajouter la tâche !');
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
    	die('Impossible de supprimer la tâche !');
    }
    else {
        header('Location: index.php');
    }
}