<?php
require('controller.php');

if (isset($_GET['action'])) {
	if ($_GET['action'] == 'addTask') {
		if (!empty($_POST['task'])) {
			addTask($_POST['task']);
		}
		else {
			"Erreur : champs vide !";
		}		
	}
	elseif ($_GET['action'] == 'deleteTask') {
		delTask($_GET['id']);
	}
	else {
		listTask();
	}
}
else {
	listTask();
}