<?php
    // Create a function that takes an array of numbers and returns the number that's unique.
    function unique($arr) {
        foreach($arr as $idx=>$ele) {
            if(!in_array($ele, array_merge(array_slice($arr, 0, $idx), array_slice($arr, $idx+1)))) {
                return $ele;
            }
        }
    }

    class UniqueElement {
        public function tests(){
            assert(7 === unique([3, 3, 3, 7, 3, 3]));
            assert(0.77 === unique([0, 0, 0.77, 0, 0]));
            assert(0 === unique([0, 1, 1, 1, 1, 1, 1, 1]));
            assert(4 === unique([-4, -4, -4, 4]));
            assert(0.5 === unique([8, 8, 8, 8, 8, 8, 8, 0.5]));
            assert(1 === unique([2, 1, 2, 2, 2, 2, 2, 2]));
            print "All Test Cases Passed :)";
        }
    }

    $test = new UniqueElement();
    $test->tests();
?>