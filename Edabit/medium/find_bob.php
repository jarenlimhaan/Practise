<?php
    // Find Bob within an array of strings

    // Notes:
    // cannot do if($val) because 0 evals to False in php hence have to do a more strict comparison
    function findBob($names) {
        $val = array_search("Bob", $names);
        echo $val;
        if($val !== false) {
            return $val;
        }
        return -1;
    }
?>