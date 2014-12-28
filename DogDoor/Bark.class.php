<?php
/**
 * Description of Bark
 *
 * @author pedestrian
 */
class Bark {
    private $sound;
    
    public function __construct($sound) {
        $this->sound = $sound;
    }
    
    public function getSound(){
        return $this->sound;
    }
    
    //delegate
    public function equals(Bark $bark){
        if ($this->sound === $bark->sound) {
            return true;
        }else{
            return false;
        }
    }
}
