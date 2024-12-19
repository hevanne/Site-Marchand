<?php

trait FormTrait
{
	private function sanitizeInput(string $input) : string{
		return htmlspecialchars(strip_tags(trim($input)));
	}

	public function getPostParam(string $key, mixed $default = null) : string{
		return isset($_POST[$key]) ? sanitizeInput($_POST[$key]) : $default;
	}

	public function getQueryParam(string $key, mixed $default = null) : string{
		return isset($_GET[$key]) ? sanitizeInput($_GET[$key]) : $default;
	}

	public function getAllPostParams() : array{
		return array_map([$this, 'sanitizeInput'], $_POST);
	}

	public function getAllQueryParams() : array{
		return array_map([$this, 'sanitizeInput'], $_GET);
	}
}