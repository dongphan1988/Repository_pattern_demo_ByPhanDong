<?php


namespace App\Repositories\impl;


use App\Category;
use App\Repositories\CategoryRepositoryInterface;

class CategoryRepository extends RepositoryImpl implements CategoryRepositoryInterface
{
public function getModel()
{
    return Category::class;
}
}