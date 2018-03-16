
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
	<a href="delete.php?todo=<?php echo $data['id']; ?>">Supprimer</a><br />
	<?php
	}
	$todoList->closeCursor();
	?>
	<form method="post" action="traitement.php">
		<input type="text" name="todo">
		<input type="submit" value="Envoyer">
	</form>
</body>
</html>


