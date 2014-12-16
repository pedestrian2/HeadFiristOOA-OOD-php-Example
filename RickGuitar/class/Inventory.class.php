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
        $resultGuitar = array();
        foreach ($this->guitarList as $value) {
            $builder = strtolower($value->getBuilder());
            if (($builder == null) || ($builder == "") || ($builder != strtolower($searchGuitar->getBuilder())))
                continue;
            $model = strtolower($value->getmodel());
            if (($model == null) || ($model == "") || ($model != strtolower($searchGuitar->getmodel())))
                continue;
            $type = strtolower($value->getType());
            if (($type == null) || ($type == "") || ($type != strtolower($searchGuitar->getType())))
                continue;
            $backwood = strtolower($value->getBackWood());
            if (($backwood == null) || ($backwood == "") || ($backwood != strtolower($searchGuitar->getBackWood())))
                continue;
            $topwood = strtolower($value->getTopWood());
            if (($topwood == null) || ($topwood == "") || ($topwood != strtolower($searchGuitar->getTopWood())))
                continue;
            $resultGuitar[] = $value;
        }
        return $resultGuitar;
    }

}
