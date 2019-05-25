<?php

namespace App\Repositories;

use App\PictureCategory;

class PictureCategoryRepository
{

    protected $pictureCategory;

    public function __construct(PictureCategory $pictureCategory)
	{
		$this->pictureCategory = $pictureCategory;
	}

	public function getById($id)
	{
		return $this->pictureCategory->findOrFail($id);
	}

	public function findAll(){
		return $this->pictureCategory
		->orderby('updated_at', 'desc')
		->get();
	}

}