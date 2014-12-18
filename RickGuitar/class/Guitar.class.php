<?php

/**
 * GuitarItem.
 *
 * @author pedestrian
 */
class Guitar {
    private $serialNumber,$price,$spec;
    
    public function __construct($serialNumber,$price, GuitarSpec $spec) {
        $this->serialNumber = $serialNumber;
        $this->price = $price;
        $this->spec = $spec;
    }
    
    public function getSerialNumber(){
        return $this->serialNumber;
    }
    public function getPrice(){
        return $this->price;
    }
    public function setPrice($newPrice){
        $this->price = $newPrice;
    }
    public function getSpec(){
        return $this->spec;
    }
}
