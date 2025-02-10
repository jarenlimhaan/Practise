<?php
    /* 
        Create a function that takes an array and finds the integer which appears an odd number of times.
    */
    
    function findOdd($arr) {

        $vals = array_count_values($arr);
        foreach($vals as $key => $val) {
            if($val % 2 != 0) {
                return $key;
            }
        }
    };

    class FindOdd {
        public function tests() {
            assert(5 === findOdd([20,1,-1,2,-2,3,3,5,5,1,2,4,20,4,-1,-2,5]));
            assert(-1 === findOdd([1,1,2,-2,5,2,4,4,-1,-2,5]));
            assert(5 === findOdd([20,1,1,2,2,3,3,5,5,4,20,4,5]));
            assert(10 === findOdd([10]));
            assert(10 === findOdd([1,1,1,1,1,1,10,1,1,1,1]));
            assert(1 === findOdd([5,4,3,2,1,5,4,3,2,10,10]));
            print "All Test Cases Passed :)";
        }
    }

    $test = new FindOdd();
    $test->tests();

?>