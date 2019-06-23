<?php


namespace App\Repositories\impl;


use App\Repositories\repositoryInterface;
use phpDocumentor\Reflection\Types\This;

abstract class RepositoryImpl implements repositoryInterface
{
    protected $model;
    protected $newModel;

    public function __construct()
    {
        $this->setModel();
    }

    abstract public function getModel();

    public function setModel()
    {
        $this->model = app()->make($this->getModel());
    }

    public function getAll()
    {
        $result = $this->model->all();
        return $result;
    }
    public function createNewObject(){
        $result = $this->newModel;
       return $result;
    }


    public function getById($id)
    {
        $result = $this->model->FindOrFail($id);
        return $result;
    }

    public function create($object)
    {
        $object->save();
    }

    public function update($object)
    {
        $object->save();

    }

    public function delete($id)
    {
        $this->model->destroy($id);
    }

    public function deleteAll($id)
    {
    }
}