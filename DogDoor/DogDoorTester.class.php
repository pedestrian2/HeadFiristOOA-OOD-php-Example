<?php
require_once 'DogDoor.class.php';
require_once 'RemoteControl.class.php';
/**
 * Description of DogDoorTester
 *
 * @author Pedestrian Chen
 */
class DogDoorTester {
    public function __construct() {
        $FidoDoor = new DogDoor();
        $FidoRemote = new RemoteControl($FidoDoor);
        $this->doorStaus($FidoDoor);
        echo "\n Fido barking";
        $FidoRemote->pressButton();
        echo "\n Fido go outside";
        echo "\n Fido done someting";
        echo "\n Fido back inside";
        //autoclose
        $this->doorStaus($FidoRemote->getDoor());
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