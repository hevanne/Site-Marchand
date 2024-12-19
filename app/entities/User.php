<?php
class User{
	private ?int $id;
	private string $firstname;
	private string $lastname;
	private string $email;
	private string $password;

	public function __construct(?int $id, string $firstname, string $lastname, string $email, string $password){
		$this->id = $id;
		$this->firstname = $firstname;
		$this->lastname = $lastname;
		$this->email = $email;
		$this->password = $password;
	}

	public function getId(): int{
		return $this->id;
	}

	public function setId(int $id): void{
		$this->id = $id;
	}

	public function getFirstname(): string{
		return $this->firstname;
	}

	public function setFirstname(string $firstname): void{
		$this->firstname = $firstname;
	}

	public function getLastname(): string{
		return $this->lastname;
	}

	public function setLastname(string $lastname): void{
		$this->lastname = $lastname;
	}

	public function getEmail(): string{
		return $this->email;
	}

	public function setEmail(string $email): void{
		$this->email = $email;
	}

	public function getPassword(): string{
		return $this->password;
	}

	public function setPassword(string $password): void{
		$this->password = $password;
	}
}