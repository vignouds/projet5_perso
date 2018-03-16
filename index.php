<?php
require('controller.php');

if (isset($_GET['action'])) {
	if ($_GET['action'] == 'addTodo') {
		if (!empty($_POST['todo'])) {
			addTodo($_POST['todo']);
		}
		else {
			"Erreur : champs vide !";
		}		
	}
	elseif ($_GET['action'] == 'deleteTodo') {
		delTodo($_GET['id']);
	}
	else {
		listTodo();
	}
}
else {
	listTodo();
}