<?php

require_once '../app/repositories/ArticleRepository.php';
require_once '../app/repositories/CategoryRepository.php';

class CategoryService
{
	private CategoryRepository $categoryRepository;
	
	public function __construct()
	{
		$this->categoryRepository = new CategoryRepository();
	}

	public function allCategory(): array
	{
		return $this->categoryRepository->findAll();
	}
}