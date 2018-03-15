<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=dashboard;charset=utf8', 'root', '');	
}
catch (Exception $e)
{
	die('Erreur : ' . $e->getMessage());
}

$reponse = $bdd->query('SELECT * FROM todo');

while ($donnees = $reponse->fetch()) 
{
?>
<!DOCTYPE html>
<html>
<head>
	<title>To do list</title>
	<meta charset="utf-8">
</head>
<body>
	<?php echo $donnees['content']; ?>
	<a href="delete.php?todo=<?php echo $donnees['id']; ?>">Supprimer</a><br />
<?php
}
?>
	<form method="post" action="traitement.php">
		<input type="text" name="todo">
		<input type="submit" value="Envoyer">
	</form>
</body>
</html>


