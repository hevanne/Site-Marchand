<?php

require_once '../app/core/Controller.php';
require_once '../app/services/ArticleService.php';
require_once '../app/services/CategoryService.php';
require_once '../app/Trait/FormTrait.php';
require_once '../app/services/AuthService.php';

class ArticleController extends Controller
{
	use FormTrait;

	private ArticleService $articleService;
	private CategoryService $categoryService;

	public function __construct()
	{
		$this->articleService = new ArticleService();
		$this->categoryService = new CategoryService();
	}

	public function index()
	{
		$this->checkLogin();

		$articles = $this->articleService->allArticles();
		$this->view('article/index','Liste des articles' ,['articles' => $articles]);
	}

	public function create()
	{
		$this->checkLogin();

		$params = $this->getAllPostParams();
		$error = [];

		if(!empty($params))
		{
			try {
				// Tentative de création de l'article
				$this->articleService->create($params);
				$this->redirectTo('articles.php');
			}
			catch (Exception $e) {
				// Capture l'exception et transmet les erreurs à la vue
				$error = $e->getMessage();
			}
		}

		// Affichage de la vue avec ou sans erreur
		$this->view('/article/form', 'Création d\'un article', [
			'categories' => $this->categoryService->allCategory(),
			'errors' => !empty($error) ? explode(', ', $error) : [],
			'data' => $params
		]);
	}

	private function checkLogin(){
		$authService = new AuthService();
		if(!$authService->isLoggedIn()){
			$this->redirectTo('login.php');
		}
	}
}

?>