<?php

namespace App\Services\ArticleListDataGenerator;

use App\Repository\ArticleRepository;

class ListArticleService 
{
	private $repo;


	public function __construct(ArticleRepository $repo)
	{
		$this->repo = $repo;
	}

	public function findAllArticles()
	{
		return $this->repo->findAll();
	}
}