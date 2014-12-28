<?php
/**
 * php has no setTimeOut function replace by sleep function.
 * It cause strange result when dogdoor auto close.
 *
 * @author Pedestrian Chen
 */

require_once 'DogDoor.class.php';
require_once 'RemoteControl.class.php';
require_once 'Bark.class.php';
require_once 'BarkRecognizer.class.php';

class DogDoorTester {
    public function __construct() {
        $dogDoor = new DogDoor();
        $remote = new RemoteControl($dogDoor);
        $barkRecognizer = new BarkRecognizer($dogDoor);
        $hostDogWangBark = new Bark("WangWang");
        $hostDogWoBark = new Bark("Wo~");
        $hostDogHoBark = new Bark("Ho~");
        $hostDogTodayBark = new Bark("WangWang");
        $neighborhoodDogBark = new Bark("ha");
        $dogDoor->addAllowBarks($hostDogWangBark);
        $dogDoor->addAllowBarks($hostDogWoBark);
        $dogDoor->addAllowBarks($hostDogHoBark);
        echo "firist time use remote";
        $this->doorStaus($dogDoor);
        echo "\n dog barking";
        $remote->pressButton();
        $this->doorStaus($dogDoor);
        echo "\n dog go outside";
        echo "\n dog done something";
        echo "\n dog bark again";
        $remote->pressButton();
        $this->doorStaus($remote->getDoor());
        echo "\n dog back inside";
        //autoclose
        $this->doorStaus($remote->getDoor());
        
        echo "\n\n second time use barkRecgnizer";
        $this->doorStaus($dogDoor);
        echo "\n neighborHoodDog barking";
        $barkRecognizer->recognize($neighborhoodDogBark);
        $this->doorStaus($dogDoor);
        echo "\n hostDog barking";
        $barkRecognizer->recognize($hostDogTodayBark);
        $this->doorStaus($dogDoor);
        echo "\n dog go outside";
        echo "\n dog done something";
        echo "\n neighborHoodDog barking again";
        $barkRecognizer->recognize($neighborhoodDogBark);
        $this->doorStaus($dogDoor);
        echo "\n dog bark again";
        $barkRecognizer->recognize($hostDogTodayBark);
        $this->doorStaus($remote->getDoor());
        echo "\n dog back inside";
        //autoclose
        $this->doorStaus($remote->getDoor());
        
    }
    
    public function doorStaus(DogDoor $door) {
        if($door->isOpen()){
            echo "\n door is open now";
        }else{
            echo "\n door is close now";
        }
    }
}

new DogDoorTester();