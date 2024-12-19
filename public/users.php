<?php
require_once '../app/controllers/UserController.php';

$user_controller = new UserController();
$user_controller->index();
?>