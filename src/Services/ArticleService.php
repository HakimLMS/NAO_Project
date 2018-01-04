<?php

namespace App\Services;

use App\Repository\ArticleRepository;

class ArticleService 
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