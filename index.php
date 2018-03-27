<?php
require('controller.php');

try {
	if (isset($_GET['action'])) {
		if ($_GET['action'] == 'addTask') {
			if (!empty($_POST['task'])) {
				addTask($_POST['task']);
			}
			else {
				throw new Exception('Champs vide !');
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
}
catch(Exception $e) { 
    echo 'Erreur : ' . $e->getMessage();
}