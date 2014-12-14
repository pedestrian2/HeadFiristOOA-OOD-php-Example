<?php

require_once 'Guitar.class.php';

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
        $this->guitarList[] = new Guitar($serialNumber, $price, $builder, $model, $type, $backWood, $topWood);
    }

    public function getGuitar($serialNumber) {
        foreach ($this->guitarList as $value) {
            if ($value->serialName == $serialNumber) {
                return $value;
            }
        }
        return null;
    }

    public function search(Guitar $searchGuitar) {
        foreach ($this->guitarList as $value) {
            $builder = $value->getBuilder();
            if (($builder == null) || ($builder == "") || ($builder != $searchGuitar->getBuilder() ))
                continue;
            $model = $value->getmodel();
            if (($model == null) || ($model == "") || ($model != $searchGuitar->getmodel()))
                continue;
            $type = $value->getType();
            if (($type == null) || ($type == "") || ($type != $searchGuitar->getType()))
                continue;
            $backwood = $value->getBackWood();
            if (($backwood == null) || ($backwood == "") || ($backwood != $searchGuitar->getBackWood()))
                continue;
            $topwood = $value->getTopWood();
            if (($topwood == null) || ($topwood == "") || ($topwood != $searchGuitar->getTopWood()))
                continue;
            return $value;
        }
        return null;
    }

}
