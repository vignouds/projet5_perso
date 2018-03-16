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
	else {
		listTodo();
	}
}
else {
	listTodo();
}