<?php

require('model.php');

function listTodo()
{
	$todoList = getTodo();

	require('todoView.php');
}

function addTodo($task)
{
	$affectedLines = insertTodo($task);

	if ($affectedLines === false) {
    	die('Impossible d\'ajouter la tâche !');
    }
    else {
        header('Location: index.php');
    }
}

function delTodo($id)
{
	$affectedLines = deleteTodo($id);

	if ($affectedLines === false) {
    	die('Impossible de supprimer la tâche !');
    }
    else {
        header('Location: index.php');
    }
}