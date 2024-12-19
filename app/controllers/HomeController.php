<?php
require_once '../app/services/ArticleService.php';
require_once '../app/core/Controller.php';

class HomeController extends Controller
{

	public function index()
	{
		$service = new ArticleService();
		$articles = $service->allArticles();

		$this->view('index', 'Bienvenue dans notre boutique', ['articles' => $articles]);
	}
}

?>