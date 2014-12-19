<?php

/**
 * Description of DogDoor
 *
 * @author Pedestrian Chen
 */
class DogDoor {
    private $open;
    public function __construct() {
        $this->open = FALSE;
    }
    public function openDoor() {
        $this->open = TRUE;
    }
    public function closeDoor(){
        $this->open = FALSE;
    }
    public function isOpen() {
        return $this->open;
    }
}
