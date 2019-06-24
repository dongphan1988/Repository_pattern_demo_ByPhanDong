<?php


namespace App\Service\impl;


use App\Book;
use App\Service\ServiceInterface;
use App\Exceptions\NotFoundException;

class ServiceImpl implements ServiceInterface
{
    protected $repository;


    public function getAll()
    {
        $result = $this->repository->getAll();
        return $result;
    }

    public function getById($id)
    {
        $result = $this->repository->getById($id);
        return $result;
    }

    public function create($requestAll)
    {
        // TODO: Implement deleteAll() method.
    }

    public function update($requestAll, $id)
    {
        // TODO: Implement deleteAll() method.
    }

    public function delete($id)
    {
        $this->repository->delete($id);
    }

    public function deleteAll($id)
    {
        // TODO: Implement deleteAll() method.
    }

}