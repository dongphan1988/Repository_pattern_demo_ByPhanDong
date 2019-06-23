<?php


namespace App\Repositories;


interface repositoryInterface
{
    public function getAll();
    public function getById($id);
    public function create($object);
    public function update($object);
    public function delete($id);
    public function deleteAll($id);
}