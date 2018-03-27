<?php $title = 'To do list'; ?>

<?php ob_start(); ?>

	<section>
		<h2>To do list</h2>
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

<?php $content = ob_get_clean(); ?>
<?php require('./template.php'); ?> 


