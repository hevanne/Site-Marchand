<?php

require_once '../app/views/_template/header.php';

?>
<table class="table table-striped table-hover">
	<thead>
	<tr>
		<th scope="col">#ID</th>
		<th scope="col">Stock</th>
		<th scope="col">Nom</th>
		<th scope="col">Description</th>
		<th scope="col">Prix</th>
		<th scope="col">Catégorie</th>
		<th scope="col">Action</th>
	</tr>
	</thead>
	<tbody>
	<?php foreach($articles as $article): ?>
		<tr>
			<th scope="row"><?= $article->getId() ?></th>
			<td><?= $article->getStock() ?></td>
			<td><?= $article->getName() ?></td>
			<td><?= $article->getDescription() ?></td>
			<td><?= $article->getPrice() ?></td>
			<td><?= $article->getCategory()->getName() ?></td>
			<td>
				<a href="article/edit.php?id=<?= $article->getId() ?>" class="btn btn-warning">
					<i class="fa fa-edit"></i>
				</a>
				<a href="article/delete.php?id=<?= $article->getId() ?>" class="btn btn-danger">
					<i class="fa fa-trash"></i>
				</a>
			</td>
		</tr>
	<?php endforeach;
	?>
	</tbody>
</table>
<div class="d-flex flex-row-reverse">
	<a href="/article_create.php" class="btn btn-success">
		<i class="fa fa-plus"></i> Ajouter un article
	</a>
</div>

<?php

require_once '../app/views/_template/footer.php';

?>