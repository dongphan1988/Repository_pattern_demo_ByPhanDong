<?php


namespace App\Service\impl;


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

    public function create($object)
    {
        // TODO: Implement create() method.
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

    public function delete($id)
    {
        $this->repository->delete($id);
    }

    public function deleteAll($id)
    {
        // TODO: Implement deleteAll() method.
    }
}