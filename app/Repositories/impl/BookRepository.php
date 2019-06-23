<?php


namespace App\Repositories\impl;


use App\Book;
use App\Repositories\BookRepositoryInterface;

class BookRepository extends RepositoryImpl implements BookRepositoryInterface
{
    public function getModel()
    {
        return Book::class;
    }
    public function getByName()
    {
        // TODO: Implement findByName() method.
    }

}