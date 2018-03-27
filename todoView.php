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
	while ($data = $tasks->fetch()) 
	{ 
	?>
		<tr>
			<td> <?= htmlspecialchars($data['content']); ?>	</td>
			<td><a href="index.php?action=deleteTask&id=<?= $data['id']; ?>">Supprimer</a></td>
		</tr>
		<?php
	}
	$tasks->closeCursor();
	?>	
	</table>
	<br>
	<form action="index.php?action=addTask" method="post">
		<label>Ajouter une tâche : </label><input type="text" name="task">
		<input type="submit" value="Envoyer">
	</form>
</body>
</html>


