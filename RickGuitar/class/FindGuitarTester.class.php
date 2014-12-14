<?php
require_once 'Inventory.class.php';
/**
 * Inventory search function test.
 *
 * @author pedestrian
 */
class FindGuitarTester {
    public function __construct() {
        $inventory = new Inventory();
        $inventory->addGuitar("V95693", 1499.95, "Fender", "Stratocastor", "electric", "Alder", "Alder");
        $whatErinLikes = new Guitar("", "", "fender", "Stratocastor", "electric", "Alder", "Alder");
        $guitar = $inventory->search($whatErinLikes);
        if($guitar != null){
            echo "it just \${$guitar->getPrice()} US dollars";
        }else{
            echo "sorry! we have nothing for you";
        }
    }
}

new FindGuitarTester();