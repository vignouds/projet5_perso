<!DOCTYPE html>
<html>
<head>
	<title>To do list</title>
	<meta charset="utf-8">
</head>
<body>
	<h1>To do list</h1>
	<table>
		
			<?php
	while ($data = $todoList->fetch()) 
	{ 
	?>
		<tr>
			<td> <?= htmlspecialchars($data['content']); ?>	</td>
			<td><a href="index.php?action=deleteTodo&id=<?= $data['id']; ?>">Supprimer</a></td>
		</tr>
		<?php
	}
	$todoList->closeCursor();
	?>	
	</table>
	<br>
	<form action="index.php?action=addTodo" method="post">
		<label>Ajouter une tâche : </label><input type="text" name="todo">
		<input type="submit" value="Envoyer">
	</form>
</body>
</html>


