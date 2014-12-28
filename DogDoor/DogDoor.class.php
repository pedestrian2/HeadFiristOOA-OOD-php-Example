<?php

/**
 * Description of DogDoor
 *
 * @author Pedestrian Chen
 */
class DogDoor {
    private $open;
    private $allowBarks = array();
    
    public function __construct() {
        $this->open = FALSE;
    }
    public function openDoor() {
        $this->open = TRUE;
        echo "\n open door now";
        $this->autoClose();
    }
    public function closeDoor(){
        $this->open = FALSE;
    }
    protected function autoClose() {
        sleep(3);                   //php has no setTimeOut function
        $this->closeDoor();
    }
    public function isOpen() {
        return $this->open;
    }
    public function addAllowBarks(Bark $bark){
        array_push($this->allowBarks, $bark);
    }
    public function getAllowBarks(){
        return $this->allowBarks;
    }
}
