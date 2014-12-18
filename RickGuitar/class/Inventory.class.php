<?php

require_once 'Guitar.class.php';
require_once 'GuitarSpec.class.php';

/**
 * GuitarList.
 * 
 * @author pedestrian
 */
class Inventory {

    private $guitarList;

    public function __construct() {
        $this->guitarList = array();
    }

    public function addGuitar($serialNumber, $price, $builder, $model, $type, $backWood, $topWood) {
        $guitarSpec = new GuitarSpec($builder, $model, $type, $backWood, $topWood);
        $this->guitarList[] = new Guitar($serialNumber, $price, $guitarSpec);
    }

    public function getGuitar($serialNumber) {
        foreach ($this->guitarList as $value) {
            if ($value->serialName == $serialNumber) {
                return $value;
            }
        }
        return null;
    }

    public function search(GuitarSpec $searchGuitarSpec) {
        $resultGuitar = array();
        foreach ($this->guitarList as $guitar) {
            if($guitar->getSpec()->matchSpec($searchGuitarSpec))$resultGuitar[] = $guitar;
        }
        return $resultGuitar;
    }

}
