<?php

namespace App\Repositories;

use App\Picture;

class PictureRepository
{

    protected $picture;

    public function __construct(Picture $picture)
	{
		$this->picture = $picture;
	}

	public function getByCategoryId($categoryId)
	{
		return $this->picture->where('CATEGORY_ID',$categoryId)->get();
	}

	public function findAll(){
		return $this->picture
		->orderby('updated_at', 'desc')
		->get();
	}

}