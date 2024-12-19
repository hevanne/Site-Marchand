<?php

require_once '../app/repositories/ArticleRepository.php';
require_once '../app/repositories/CategoryRepository.php';

class ArticleService
{
	private ArticleRepository $articleRepository;
	
	public function __construct()
	{
		$this->articleRepository = new ArticleRepository();
	}

	public function allArticles(): array
	{
		$articles = $this->articleRepository->findAll();
		$categoryRepository = new CategoryRepository();

		foreach ($articles as $article)
		{
			$article->setCategory($categoryRepository->find($article->getCategory()));
		}

		return $articles;
	}

	public function create(array $data): Article
	{
		if (empty($data['name'])){
			$errors[] = "Le champ 'Nom' est requis.";
		}
		elseif (strlen($data['name']) < 3){
			$errors[] = "Le nom doit contenir au moins 3 caractères.";
		}

		if (empty($data['price'])){
			$errors[] = "Le champ 'Prix' est requis.";
		}
		elseif ($data['price'] <= 0){
			$errors[] = "Le prix doit être supérieur à 0.";
		}
	
		if (empty($data['stock'])){
			$errors[] = "Le champ 'Stock' est requis.";
		}
		elseif ($data['stock'] <= 0){
			$errors[] = "Le stock doit être supérieur à 0.";
		}

		if (!empty($errors)) {
			throw new Exception(implode(', ', $errors));
		}

		$article = new Article(
			null,
			$data['stock'],
			$data['name'],
			$data['description'],
			$data['price'],
			[],
			$data['category']
		);

		$this->articleRepository->create($article);

		return $article;
	}
}

?>