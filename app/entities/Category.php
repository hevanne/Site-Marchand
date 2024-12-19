<?php
class Category{
	private int $id;
	private string $name;
	private array $articles;

	public function __construct(int $id, string $name){
		$this->id = $id;
		$this->name = $name;
		$this->articles = [];
	}

	public function getId(): int{
		return $this->id;
	}

	public function setId(int $id): void{
		$this->id = $id;
	}

	public function getName(): string{
		return $this->name;
	}

	public function setName(string $name): void{
		$this->name = $name;
	}

	public function getArticles(): array{
		return $this->articles;
	}

	public function addArticle(Article $article): void{
		$this->articles[] = $article;
	}
}
?>