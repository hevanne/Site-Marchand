<?php require_once '../app/views/_template/header.php';?>

<h2 class="mb-4">Login</h2>

<form method="post" action="login.php">
	<div class="mb-3"> <!--margin bottom-->
		<label for="emailInput" class="form-label">Email address</label>
		<input type="email" class="form-control" id="emailInput" placeholder="name@example.com" name="email">
	</div>
	<div class="mb-3">
		<label for="passwordInput" class="form-label">Example password</label>
		<input type="password" class="form-control" id="passwordInput" name="password">
	</div>
	<div class="d-flex flex-row-reverse">
			<button type="submit" class="btn btn-primary">Send <i class="fa-regular fa-paper-plane"></i></button>
		</div>
</form>

<?php require_once '../app/views/_template/footer.php';?>