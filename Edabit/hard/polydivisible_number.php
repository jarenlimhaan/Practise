<?php
    /*
        In mathematics a Polydivisible Number (or magic number) is a number in a given number base with digits abcde... that has the following properties:
            // Its first digit a is not 0.
            // The number formed by its first two digits ab is a multiple of 2.
            // The number formed by its first three digits abc is a multiple of 3.
            // The number formed by its first four digits abcd is a multiple of 4.
        Create a function which takes an integer $num and returns true if the given number is a Polydivisible Number and false otherwise.
    */

    function isPolyDivisible($num) {
        $s = (string) $num;

        $i = 1;
        while($i <= strlen($s)) {
            if((int) substr($s, 0,$i) % $i !== 0) {
                return false;
            }
            $i++;
        }
        return true;
    }
    
    class IsPolyDivisible {
        public function tests() {
           assert(isPolyDivisible(1232) === true);
           assert(isPolyDivisible(123220) === false);
           assert(isPolyDivisible(0) === true);
           assert(isPolyDivisible(1) === true);
           assert(isPolyDivisible(141) === true);
           assert(isPolyDivisible(1234) === false);
           assert(isPolyDivisible(21234) === false);
           assert(isPolyDivisible(81352) === false);
           assert(isPolyDivisible(987654) === true);
           assert(isPolyDivisible(1020005) === true);
           assert(isPolyDivisible(9876545) === true);
           assert(isPolyDivisible(381654729) === true);
           assert(isPolyDivisible(1073741823) === false);
           print "All Test Cases Passed :)";
        }
    }

    $test = new IsPolyDivisible();
    $test->tests();
?>