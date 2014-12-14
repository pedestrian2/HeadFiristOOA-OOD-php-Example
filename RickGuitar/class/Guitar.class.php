<?php

/**
 * GuitarItem.
 *
 * @author pedestrian
 */
class Guitar {
    private $serialNumber,$price,$builder,$model,$type,$backWood,$topWood;
    
    public function __construct($serialNumber,$price,$builder,$model,$type,$backWood,$topWood) {
        $this->serialNumber = $serialNumber;
        $this->price = $price;
        $this->builder = $builder;
        $this->model = $model;
        $this->type = $type;
        $this->backWood = $backWood;
        $this->topWood = $topWood;
    }
    
    public function getSerialName(){
        return $this->serialNumber;
    }
    public function getPrice(){
        return $this->price;
    }
    public function setPrice($newPrice){
        $this->price = $newPrice;
    }
    public function getBuilder(){
        return $this->builder;
    }
    public function getModel(){
        return $this->model;
    }
    public function getType(){
        return $this->type;
    }
    public function getBackWood(){
        return $this->backWood;
    }
    public function getTopWood(){
        return $this->topWood;
    }
}
