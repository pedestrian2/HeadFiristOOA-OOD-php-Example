<?php

/**
 *
 * @author pedestrian
 */
class BarkRecognizer {
    private $dogDoor;
    
    public function __construct(DogDoor $dogDoor) {
        $this->dogDoor=$dogDoor;
    }
    
    public function recognize(Bark $bark){
        foreach ($this->dogDoor->getAllowBarks() as $value) {
            if($bark->equals($value)){
                $this->dogDoor->openDoor();
                return TRUE;
            }
        }
        return FALSE;
    }
}
