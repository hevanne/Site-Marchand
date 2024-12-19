<?php
	require_once '../app/views/_template/header.php';
?>

<body>

	<?php if (!empty($errors)): ?>

	<?php foreach($errors as $error): ?>

		<div class="alert alert-danger text-center" role="alert">

			<?= $error; ?>

		</div>
		

	<?php endforeach; ?>

	<?php endif; ?>

	<form method="POST" class="needs-validation" novalidate>
		<div class="mb-3">
			<label for="category" class="form-label">Catégorie :</label>
			<select id="category" name="category" class="form-select" required>
				<option value="">--Sélectionnez une catégorie--</option>
				<?php foreach ($categories as $category): ?>
					<option value="<?= $category->getId(); ?>"><?= $category->getName(); ?></option>
				<?php endforeach; ?>
			</select>
			<div class="invalid-feedback">
				Veuillez sélectionner une catégorie.
			</div>
		</div>

		<div class="mb-3">
			<label for="name" class="form-label">Nom de l'article :</label>
			<input type="text" id="name" name="name" class="form-control" required>
			<div class="invalid-feedback">
				Veuillez entrer le nom de l'article.
			</div>
		</div>

		<div class="mb-3">
			<label for="price" class="form-label">Prix HT :</label>
			<input type="number" id="price" name="price" class="form-control" min="0.01" step="0.01" required>
			<div class="invalid-feedback">
				Veuillez entrer un prix valide.
			</div>
		</div>

		<div class="mb-3">
			<label for="description" class="form-label">Description :</label>
			<textarea id="description" name="description" class="form-control" rows="4" cols="50"></textarea>
		</div>

		<div class="mb-3">
			<label for="stock" class="form-label">Quantité en stock :</label>
			<input type="number" id="stock" name="stock" class="form-control" min="1" required>
			<div class="invalid-feedback">
				Veuillez entrer une quantité valide.
			</div>
		</div>

		<button type="submit" class="btn btn-primary">Ajouter l'article</button>
	</form>
</body>

<?php
	require_once '../app/views/_template/footer.php';
?>