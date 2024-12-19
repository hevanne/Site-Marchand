<?php

require_once '../app/views/_template/header.php';

?>
<table class="table table-striped table-hover">
	<thead>
	<tr>
		<th scope="col">#ID</th>
		<th scope="col">Prénom</th>
		<th scope="col">Nom</th>
		<th scope="col">Email</th>
		<th scope="col">Actions</th>
	</tr>
	</thead>
	<tbody>
	<?php foreach($users as $user): ?>
		<tr>
			<th scope="row"><?= $user->getId() ?></th>
			<td><?= $user->getFirstname() ?></td>
			<td><?= $user->getLastname() ?></td>
			<td><?= $user->getEmail() ?></td>
			<td>
				<a href="user/edit.php?id=<?= $user->getId() ?>" class="btn btn-warning">
					<i class="fa fa-edit"></i>
				</a>
				<a href="user/delete.php?id=<?= $user->getId() ?>" class="btn btn-danger">
					<i class="fa fa-trash"></i>
				</a>
			</td>
		</tr>
	<?php endforeach;
	?>
	</tbody>
</table>
<div class="d-flex flex-row-reverse">
	<a href="/user_create.php" class="btn btn-success">
		<i class="fa fa-plus"></i> Ajouter un utilisateur
	</a>
</div>

<?php

require_once '../app/views/_template/footer.php';

?>