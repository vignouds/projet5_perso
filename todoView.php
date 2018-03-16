<!DOCTYPE html>
<html>
<head>
	<title>To do list</title>
	<meta charset="utf-8">
</head>
<body>
	<?php
	while ($data = $todoList->fetch()) 
	{ 
		echo $data['content']; ?>
	<a href="index.php?action=deleteTodo&id=<?= $data['id']; ?>">Supprimer</a><br />
	<?php
	}
	$todoList->closeCursor();
	?>
	<form action="index.php?action=addTodo" method="post">
		<input type="text" name="todo">
		<input type="submit" value="Envoyer">
	</form>
</body>
</html>


