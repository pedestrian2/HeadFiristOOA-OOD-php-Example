<?php
require_once 'Inventory.class.php';
require_once 'GuitarSpec.class.php';
/**
 * Inventory search function test.
 *
 * @author pedestrian
 */
class FindGuitarTester {
    public function __construct() {
        $total = 0;
        $inventory = new Inventory();
        $inventory->addGuitar("V95693", 1499.95, "Fender", "Stratocastor", "electric", "Alder", "Alder");
        $inventory->addGuitar("V28751", 1333.95, "Fender", "Stratocastor", "electric", "Alder", "Alder");
        $whatErinLikes = new GuitarSpec("fender", "Stratocastor", "electric", "Alder", "Alder");
        $guitar = $inventory->search($whatErinLikes);
        if(!empty($guitar)){
            foreach ($guitar as $value) {
                echo "searchResult: {$value->getSerialNumber()},{$value->getPrice()},{$value->getSpec()->getBuilder()},{$value->getSpec()->getModel()},{$value->getSpec()->getType()},{$value->getSpec()->getBackWood()},{$value->getSpec()->getTopWood()} \n";
                $total += $value->getPrice();
            }
             echo "total is \$$total  US dollars";
        }else{
            echo "sorry! we have nothing for you";
        }
    }
}

new FindGuitarTester();