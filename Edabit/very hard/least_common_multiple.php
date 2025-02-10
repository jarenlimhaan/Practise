<?php

    /* 
        Given an array of integers, create a function that will find the smallest positive integer that is evenly divisible by all the members of the array. In other words, find the least common multiple (LCM).
    */
    
    function gcd($a, $b) {
        while ($b != 0) {
            [$a, $b] = [$b, $a % $b];
        }
        return $a;
    }
    
    function lcm($arr) {
        $lcm = 1;
        foreach ($arr as $num) {
            $lcm = ($lcm * $num) / gcd($lcm, $num);
        }
        return $lcm;
    }

    class Lcm {

        public function tests() {
            assert(lcm([1]) === 1);
            assert(lcm([5, 5, 5]) === 5);
            assert(lcm([67, 34, 12, 3, 2]) === 13668);
            assert(lcm([79, 18, 7, 3, 1]) === 9954);
            assert(lcm([10, 20, 30, 40, 50]) === 600);
            assert(lcm([2, 3, 5, 7, 11, 13, 17]) === 510510);
            print "All Test Cases Passed :)";
        }
    }

    $test = new Lcm();
    $test->tests();

?>