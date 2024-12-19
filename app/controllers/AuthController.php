<?php

require_once '../app/core/Controller.php';
require_once '../app/Trait/FormTrait.php';
require_once '../app/services/AuthService.php';

class AuthController extends Controller
{
	use FormTrait;
	
	public function login()
	{
		$params = $this->getAllPostParams();

		$authService = new AuthService();

		if(!empty($params) && $authService->login($params['email'], $params['password']))
			$this->redirectTo('articles.php');
		else
			$this->view('login', data:['error' => empty($params) ? '' :'Email ou mot de passe invalide']);

	}

}

?>