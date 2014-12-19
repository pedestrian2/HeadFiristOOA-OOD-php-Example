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
        echo "Fido in house";
        $FidoRemote->pressButton();
        echo "\n Fido go outside";
        $FidoRemote->pressButton();
        echo "\n Fido come home";
        $FidoRemote->pressButton();
        echo "\n Fido go outside";
        $FidoRemote->pressButton();
        echo "\n Fido come home";
    }
}

new DogDoorTester();