<?php

require_once '../app/core/Repository.php';
require_once '../app/entities/Category.php';

class CategoryRepository
{
	private $pdo;

	public function __construct()
	{
		$this->pdo = Repository::getInstance()->getPDO();
	}

	public function find(int $id): Category
	{
		$stmt = $this->pdo->prepare("SELECT * FROM Category WHERE id = :id");
		$stmt->execute(['id' => $id]);
		$row = $stmt->fetch(PDO::FETCH_ASSOC);
		if (!$row) {
			throw new Exception("No category found with id $id");
		}

		return $this->createCategoryFromRow($row);
	}

	public function findAll(): array
	{
		$stmt = $this->pdo->query("SELECT * FROM Category");
		$categories = [];
		while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

			$categories[] = $this->createCategoryFromRow($row);

		}
		return $categories;
	}

	private function createCategoryFromRow(array $row): Category
	{
		return new Category(
			$row['id'],
			$row['name']
		);
	}
}

?>