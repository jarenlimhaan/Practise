<?php
    /*
        You have an array of integers, and for each index you want to find the product of every integer except the integer at that index.
    */

    function getProducts($arr) {
        $res = [];
        for($i = 0; $i < count($arr); $i++) {
            if($i !== 0) {
                $res[] = array_product(array_merge(array_slice($arr, 0, $i), array_slice($arr, $i+1)));
            }
            else  {
                $res[] = array_product(array_slice($arr, $i+1));
            }
        }
        return $res;
    }


    class ProductOfOtherNumbersTests {

        public function tests() {
            assert([540, 270, 90, 108, 60] === getProducts([1, 2, 6, 5, 9]));
            assert([84, 12, 28, 21] === getProducts([1, 7, 3, 4]));
            assert([0, 0, 0, 30, 0] === getProducts([1, 2, 3, 0, 5]));
            print "All Test Cases Passed :)";
        }

    }

    $test = new ProductOfOtherNumbersTests();
    $test->tests();
?>