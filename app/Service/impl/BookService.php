<?php


namespace App\Service\impl;


use App\Book;
use App\Repositories\BookRepositoryInterface;
use App\Service\BookServiceInterface;

class BookService extends ServiceImpl implements BookServiceInterface
{
    public function __construct(BookRepositoryInterface $bookRepository)
    {
        $this->repository = $bookRepository;
    }
    public function update($requestAll, $id)
    {
        $oldObject = $this->repository->getById($id);

        $oldObject->title = $requestAll['title'];
        $oldObject->description = $requestAll['description'];
        $oldObject->price = $requestAll['price'];
        $oldObject->qty = $requestAll['qty'];
        $oldObject->category_id = $requestAll['category_id'];
        if (isset($requestAll['image'])) {
            $image = $requestAll['image'];
            $path = $image->store('image', 'public');
            $oldObject->image = $path;
        }
        $this->repository->update($oldObject);
    }
    public function create($requestAll)
    {
        $newBook = new Book();
        $newBook->title = $requestAll['title'];
        $newBook->description = $requestAll['description'];
        $newBook->price = $requestAll['price'];
        $newBook->qty = $requestAll['qty'];
        $newBook->category_id = $requestAll['category_id'];
        if(isset($requestAll['image'])){
            $image = $requestAll['image'];
            $path = $image->store('images','public');
            $newBook->image =$path;
        }

        $this->repository->create($newBook);
    }
}