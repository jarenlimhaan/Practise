<?php

    function numSplit($n) {
        $result = [];
        $place = 1; // Keep track of place values (1s, 10s, 100s, etc.)
        
        while ($n != 0) {
            $digit = $n % 10; // Get the last digit
            if ($digit != 0) {
                array_unshift($result, $digit * $place); // Add it at the beginning
            }
            $n = intdiv($n, 10); // Remove the last digit
            $place *= 10; // Move to the next place (10, 100, etc.)
        }
        var_dump($result);
        return $result;
    }

    class NumSplit {
        public function tests() {
            assert(numSplit(39) === [30, 9]);
            assert(numSplit(-434) === [-400, -30, -4]);
            assert(numSplit(100) === [100, 0, 0]);
            assert(numSplit(3929) === [3000, 900, 20, 9]);
            assert(numSplit(10293) === [10000, 0, 200, 90, 3]);
            assert(numSplit(900) === [900, 0, 0]);
            assert(numSplit(-100) === [-100, 0, 0]);
            assert(numSplit(121317) === [100000, 20000, 1000, 300, 10, 7]);
            print "All Test Cases Passed :)";
        }
    }

    $test = new NumSplit();
    $test->tests();
    
?>

