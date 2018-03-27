<?php

require_once('model/TaskManager.php');

function listTodo()
{
	$taskManager = new TaskManager();
    $tasks = $taskManager->getTodo();

	require('todoView.php');
}

function addTodo($task)
{
    $taskManager = new TaskManager();
	$affectedLines = $taskManager->insertTodo($task);

	if ($affectedLines === false) {
    	die('Impossible d\'ajouter la tâche !');
    }
    else {
        header('Location: index.php');
    }
}

function delTodo($id)
{
    $taskManager = new TaskManager();

	$affectedLines = $taskManager->deleteTodo($id);

	if ($affectedLines === false) {
    	die('Impossible de supprimer la tâche !');
    }
    else {
        header('Location: index.php');
    }
}