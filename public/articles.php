<?php
require_once '../app/controllers/ArticleController.php';

$article_controller = new ArticleController();
$article_controller->index();
?>