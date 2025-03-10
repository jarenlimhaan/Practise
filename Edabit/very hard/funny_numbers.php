<?php
    /*
        Create a function which takes a number $n and a positive integer $p and returns a positive integer k, 
        such as the sum of the digits of $n taken to the successive powers of p is equal to k * n.    
    */


    function funnyNumbers(int $x, int $y) {
        $expectedRes = $x * $y;
        $res = 0;

        $s = (string) $x;

        foreach(str_split($s) as $str) {
            $casted = (int) $str;
            $res += $str ** $y++;
        }

        $k = $res % $x;

        return ($k === 0) ? $res / $x : NULL;
    }

    class FunnyNumbers {

        public function tests() {
          assert(funnyNumbers(89, 1) === 1);
          assert(funnyNumbers(92, 1) === NULL);
          assert(funnyNumbers(46288, 3) === 51);
          assert(funnyNumbers(114, 3) === 9);
          assert(funnyNumbers(46288, 5) === NULL);
          assert(funnyNumbers(135, 1) === 1);
          assert(funnyNumbers(175, 1) === 1);
          assert(funnyNumbers(518, 1) === 1);
          assert(funnyNumbers(598, 1) === 1);
          assert(funnyNumbers(1306, 1) === 1);
          assert(funnyNumbers(2427, 1) === 1);
          assert(funnyNumbers(2646798, 1) === 1);
          assert(funnyNumbers(3456789, 1) === NULL);
          assert(funnyNumbers(3456789, 5) === NULL);
          assert(funnyNumbers(198, 1) === 3);
          assert(funnyNumbers(249, 1) === 3);
          assert(funnyNumbers(1377, 1) === 2);
          assert(funnyNumbers(1676, 1) === 1);
          assert(funnyNumbers(695, 2) === 2);
          assert(funnyNumbers(1878, 2) === 19);
          assert(funnyNumbers(7388, 2) === 5);
          assert(funnyNumbers(47016, 2) === 1);
          assert(funnyNumbers(542186, 2) === 1);
          assert(funnyNumbers(261, 3) === 5);
          assert(funnyNumbers(1385, 3) === 35);
          assert(funnyNumbers(2697, 3) === 66);
          assert(funnyNumbers(6376, 3) === 10);
          assert(funnyNumbers(6714, 3) === 1);
          assert(funnyNumbers(63760, 3) === 1);
          assert(funnyNumbers(63761, 3) === 1);
          assert(funnyNumbers(132921, 3) === 4);
          assert(funnyNumbers(10383, 6) === 12933);
          print "All Test Cases Passed :)";
        }
    }

    $test = new FunnyNumbers();
    $test->tests();
?>S