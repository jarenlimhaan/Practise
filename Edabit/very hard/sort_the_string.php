<?php 
    /*
        Create a function that takes a string consisting of lowercase letters, uppercase letters and numbers and returns the string sorted in the same way as the examples below.
    */

    function sorting(string $str): string {
        // sort by alphabet -> lowercase -> uppercase -> number 

        $s = str_split($str);
        $alphabetsOnly = array_filter($s, fn($x) => ctype_alpha($x));
        $numsOnly =  array_filter($s, fn($x) => ctype_digit($x));

        usort($alphabetsOnly, fn($a, $b) => strtolower($a) === strtolower($b) ? $b <=> $a : strtolower($a) <=> strtolower($b));
        sort($numsOnly);

        return implode("", array_merge($alphabetsOnly, $numsOnly));
    }

    class Sorting {
        public function tests() {
            assert(sorting("eA2a1E") === "aAeE12");
            assert(sorting("Re4r") === "erR4");
            assert(sorting("6jnM31Q") === "jMnQ136");
            assert(sorting("f5Eex") === "eEfx5");
            assert(sorting("846ZIbo") === "bIoZ468");
            assert(sorting("2lZduOg1jB8SPXf5rakC37wIE094Qvm6Tnyh") === "aBCdEfghIjklmnOPQrSTuvwXyZ0123456789");
            print "All Test Cases Passed :)";
        }
    }

    $test = new Sorting();
    $test->tests();
?>