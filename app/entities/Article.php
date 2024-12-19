<?php

require_once '../app/entities/Category.php';

class Article{
	private ?int $id;
	private int $stock;

	private string $name;
	private string $description;

	private float $price;

	private array $extras;

	private Category|int $category;

	public function __construct(?int $id, int $stock, string $name, string $description, float $price, array $extras = [], int $category){
		$this->id = $id;
		$this->stock = $stock;
		$this->name = $name;
		$this->description = $description;
		$this->price = $price;
		$this->extras = $extras;
		$this->category = $category;
	}

	public function getId(): int{
		return $this->id;
	}

	public function setId(int $id): void{
		$this->id = $id;
	}

	public function getCategory(): Category|int{
		return $this->category;
	}

	public function setCategory(Category|int $category): void{
		$this->category = $category;
	}

	public function getStock(): int{
		return $this->stock;
	}

	public function setStock(int $stock): void{
		$this->stock = $stock;
	}

	public function getName(): string{
		return $this->name;
	}

	public function setName(string $name): void{
		$this->name = $name;
	}

	public function getDescription(): string{
		return $this->description;
	}

	public function setDescription(string $description): void{
		$this->description = $description;
	}

	public function getPrice(): float{
		return $this->price;
	}

	public function setPrice(float $price): void{
		$this->price = $price;
	}

	public function getExtras(): array{
		return $this->extras;
	}

	public function addExtra(Extra $extra): void{
		$this->extras[] = $extra;
	}
}
?>