<?php

/**
 * Description of RemoteControl
 *
 * @author Pedestrian Chen
 */
class RemoteControl {
    private $door;
    public function __construct(DogDoor $door) {
        $this->door = $door;
    }
    public function pressButton() {
        if($this->door->isOpen()){
            $this->door->closeDoor();
        }else{
            $this->door->openDoor();
        }
        
    }
    public function getDoor(){
        return $this->door;
    }
}
