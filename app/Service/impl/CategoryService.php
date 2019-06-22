<?php


namespace App\Service\impl;


use App\Repositories\CategoryRepositoryInterface;
use App\Service\CategoryServiceInterface;

class CategoryService extends ServiceImpl implements CategoryServiceInterface
{

    public function __construct(CategoryRepositoryInterface $categoryRepository)
    {
        $this->repository = $categoryRepository;
    }
}