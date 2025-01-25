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
?>