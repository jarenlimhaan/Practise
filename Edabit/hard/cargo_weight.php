<?php
    /*
        A ship has to transport cargo from one place to another, while picking up cargo along the way.
        Given the total amount of cargo and the types of cargo holds in the ship as arrays, create a function that returns true
        if each weight of cargo can fit in one hold, and false if it can't.
        "S" means 50 cargo space.
        "M" means 100 cargo space.
        "L" means 200 cargo space.
    */ 
    
    function willFit($holds, $cargo) {

        $map = array("S" => 50, "M" => 100, "L" => 200);

        for($i = 0; $i < count($holds); $i++) {
            if($cargo[$i] > $map[$holds[$i]]) {
                return false;
            };
        }
        return true;
    }

    class CargoWillFit {
        public function tests() {
            assert(true === willFit(["M", "L", "L", "M"], [56, 62, 84, 90]));
            assert(true === willFit(["L", "L", "M"], [56, 62, 84, 90]));
            assert(false === willFit(["S", "S", "S", "S", "L"], [40, 50, 60, 70 , 80, 90, 200]));
            assert(false === willFit(["S", "L"], [73 , 87, 95, 229]));
            assert(true === willFit(["L", "L", "L", "L"], [54, 54, 200, 200, 200]), "54 and 54 can fit in one hold.");
            print "All Test Cases Passed :)";
        }
    }

    $test = new CargoWillFit();
    $test->tests();
?>