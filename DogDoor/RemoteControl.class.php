<?php

/**
 * Description of RemoteControl
 *
 * @author Pedestrian Chen
 */
class RemoteControl {
    private $open;
    public function __construct(DogDoor $open) {
        $this->open = $open;
    }
    public function pressButton() {
        if($this->open->isOpen()){
            $this->open->openDoor();
        }else{
            $this->open->closeDoor();
        }
    }
}
