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
            echo "\n door is open now";
            $this->autoClose();
        }
        
    }
    protected function autoClose() {
        sleep(5);                   //php has no setTimeOut function
        $this->door->closeDoor();
    }
    public function getDoor(){
        return $this->door;
    }
}
