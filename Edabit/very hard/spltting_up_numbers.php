<?php

    /*
        Create a function that takes a number $num and returns each place value in the number.    
    */

    function numSplit($n) {
        $result = [];

        $isNegative = $n < 0 ? true : false;
        $n = abs($n);

        $chars = str_split(strval($n));
        $len = strlen($n);

        foreach($chars as $key => $char) {
            $val = (int) $char * pow(10, $len - $key - 1);
            $result[] = $isNegative ? -$val : $val;
        }
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

