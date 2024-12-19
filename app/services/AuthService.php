<?php

require_once '../app/repositories/UserRepository.php';
require_once '../app/entities/User.php';
require_once '../app/Trait/AuthTrait.php';

class AuthService
{
	use AuthTrait;

	private $loggedIn = false;
	private $UserRepository;

	public function login(string $email, string $password) : bool{
		$UserRepository = new UserRepository();
		$user = $UserRepository->findByEmail($email);

		if (session_status() === PHP_SESSION_NONE) {
			session_start();
		}

		if($user && $this->verify($password, $user->getPassword())){
			$_SESSION['user'] = serialize($user);
			$this->loggedIn = true;
			return true;
		}

		return false;
	}

	public function logout() : void{
		$this->loggedIn = false;
	}

	public function isLoggedIn() : bool{
		if(session_status() === PHP_SESSION_NONE){
			session_start();
		}

		if(isset($_SESSION['user'])){
			$this->loggedIn = true;
		}

		return $this->loggedIn;
	}

	public function getUser() : User{
		return unserialize($_SESSION['user']);
	}
}

?>