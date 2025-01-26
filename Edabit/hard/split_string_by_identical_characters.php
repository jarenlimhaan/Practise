<?php
    // Create a function that splits a string into an array of identical clusters.
    function splitGroups($s) {
        $res = [];
        $group = $s[0];

        for($i = 1; $i < strlen($s); $i++) {
            if($s[$i] === $s[$i-1]) {
                $group .= $s[$i];
            } else {
                $res[] = $group;
                $group = $s[$i];
            }
        }
        $res[] = $group;

        return $res;
    }

    class SplitByIdenticalChars {
        public function tests(){
           assert(['aaa', 'bbb', 'aa', 'bb', 'a', 'b'] === splitGroups('aaabbbaabbab'));
           assert(['555', '666', '77', '88'] === splitGroups('5556667788'));
           assert(['a', 'bbb', 'cc', '88', '999', '&&', '!!!', '_'] === splitGroups('abbbcc88999&&!!!_'));
           assert(['555'] === splitGroups('555'));
           assert(['AA', 'BB', 'CC'] === splitGroups('AABBCC'));
           print "All Test Cases Passed :)";
        }
    }
    $test = new SplitByIdenticalChars();
    $test->tests();
?>