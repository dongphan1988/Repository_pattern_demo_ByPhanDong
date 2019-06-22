<?php


namespace App\Service\impl;


use App\Repositories\BookRepositoryInterface;
use App\Service\BookServiceInterface;

class BookService extends ServiceImpl implements BookServiceInterface
{
    public function __construct(BookRepositoryInterface $bookRepository)
    {
        $this->repository = $bookRepository;
    }
}