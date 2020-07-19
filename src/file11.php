<?php
namespace Vehicle;

class Car
{
    public $brand;
    public $model;
    public $transmission;

    public function __construct($brand, $model, $transmission)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->transmission = $transmission;
    }
    
    Public function getBrand()
    {
        return $this->brand;
    }

    Public function getModel()
    {
        return $this->model;
    }

    Public function getTrans()
    {
        return $this->transmission;
    }

}