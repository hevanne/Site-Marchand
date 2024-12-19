<?php

require_once '../app/core/Repository.php';
require_once '../app/entities/Article.php';

class ArticleRepository
{
	private $pdo;

	public function __construct()
	{
		$this->pdo = Repository::getInstance()->getPDO();
	}

	public function findAll(): array
	{
		$stmt = $this->pdo->query("SELECT * FROM Article");
		$articles = [];
		while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

			$articles[] = $this->createArticleFromRow($row);

		}
		return $articles;
	}

	private function createArticleFromRow(array $row): Article
	{
		return new Article(
			$row['id'],
			$row['stock'],
			$row['name'],
			$row['description'],
			$row['price'],
			[],
			(int) $row['category_id']
		);
	}

	public function create(Article $article) : bool
	{
		$stmt = $this->pdo->prepare("INSERT INTO Article (stock, name, description, price, category_id) 
								   VALUES (:stock, :name, :description, :price, :category_id)");

		$stmt->execute([
			'stock' => $article->getStock(),
			'name' => $article->getName(),
			'description' => $article->getDescription(),
			'price' => $article->getPrice(),
			'category_id' => $article->getCategory()
		]);

		return true;
	}
}
?>