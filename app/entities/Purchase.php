<?php
class Purchase{
	private int $id;
	private Article $article;
	private User $user;
	private int $quantity;
	private DateTime $date;

	public function __construct(int $id, Article $article, User $user, int $quantity){
		$this->id = $id;
		$this->article = $article;
		$this->user = $user;
		$this->quantity = $quantity;
		$this->date = new DateTime();
	}

	public function getId(): int{
		return $this->id;
	}

	public function setId(int $id): void{
		$this->id = $id;
	}

	public function getArticle(): Article{
		return $this->article;
	}

	public function setArticle(Article $article): void{
		$this->article = $article;
	}

	public function getUser(): User{
		return $this->user;
	}

	public function setUser(User $user): void{
		$this->user = $user;
	}

	public function getQuantity(): int{
		return $this->quantity;
	}

	public function setQuantity(int $quantity): void{
		$this->quantity = $quantity;
	}
}
?>