<?php
    // You are given an array of strings consisting of grocery items, with prices in parentheses.
    // Return an array of prices in float format.
    function getPrices($arr) {
        $res = [];
        foreach($arr as $ele) {
            $start = strpos($ele, "(");
            $end = strpos($ele, ")");
            $out = (float) substr($ele, $start+2, $end-$start-2);
            $res[] = $out;
        }
        return $res;
    }

    class GetPrices {
        public function tests() {
            assert([5.99, 0.2, 8.50, 1.99] === getPrices(['ice cream ($5.99)', 'banana ($0.20)', 'sandwich ($8.50)', 'soup ($1.99)']), '', 0.0001);
            assert([4.99] === getPrices(['salad ($4.99)']), '', 0.0001);
            assert([1.99, 5.99, 0.75] === getPrices(['artichokes ($1.99)', 'rotiserrie chicken ($5.99)', 'gum ($0.75)']), '', 0.0001);
            assert([2.99, 15.75, 15] === getPrices(['pizza ($2.99)', 'shampoo ($15.75)', 'trash bags ($15.00)']), '', 0.0001);
            print "All Test Cases Passed :)";
        }
    }

    $test = new GetPrices();
    $test->tests();
?>