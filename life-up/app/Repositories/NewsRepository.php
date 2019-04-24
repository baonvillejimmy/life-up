<?php

namespace App\Repositories;

use App\Article;

class NewsRepository
{

    protected $article;

    public function __construct(Article $article)
	{
		$this->article = $article;
	}

	public function getById($id)
	{
		return $this->article->findOrFail($id);
	}

	public function findAll(){
		return $this->article
		->orderby('updated_at', 'desc')
		->get();
	}

}