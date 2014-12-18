<?php

/**
 * Description of GuitarSpec
 *
 * @author rfsw7
 */
class GuitarSpec {
    private $builder,$model,$type,$backWood,$topWood;
    
    public function __construct($builder,$model,$type,$backWood,$topWood){
        $this->builder = $builder;
        $this->model = $model;
        $this->type = $type;
        $this->backWood = $backWood;
        $this->topWood = $topWood;
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
    public function matchSpec(GuitarSpec $searchGuitarSpec){
        $builder = strtolower($this->getBuilder());
        if (($builder == null) || ($builder == "") || ($builder != strtolower($searchGuitarSpec->getBuilder())))
            return false;
        $model = strtolower($this->getmodel());
        if (($model == null) || ($model == "") || ($model != strtolower($searchGuitarSpec->getmodel())))
            return false;
        $type = strtolower($this->getType());
        if (($type == null) || ($type == "") || ($type != strtolower($searchGuitarSpec->getType())))
            return false;
        $backwood = strtolower($this->getBackWood());
        if (($backwood == null) || ($backwood == "") || ($backwood != strtolower($searchGuitarSpec->getBackWood())))
            return false;
        $topwood = strtolower($this->getTopWood());
        if (($topwood == null) || ($topwood == "") || ($topwood != strtolower($searchGuitarSpec->getTopWood())))
            return false;
        return true;
    }
}
