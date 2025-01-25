<?php
    // A ship has to transport cargo from one place to another, while picking up cargo along the way.
    // Given the total amount of cargo and the types of cargo holds in the ship as arrays, create a function that returns true
    // if each weight of cargo can fit in one hold, and false if it can't.
    //"S" means 50 cargo space.
    //"M" means 100 cargo space.
    //"L" means 200 cargo space.
    function willFit($holds, $cargo) {
        // if is S -> 50
        // if is M -> 100
        // if is L -> 200

        $map = array("S" => 50, "M" => 100, "L" => 200);

        for($i = 0; $i < count($holds); $i++) {
            if($cargo[$i] > $map[$holds[$i]]) {
                return false;
            };
        }
        return true;
    }
?>