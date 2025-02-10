<?php
    /* 
        Create a function that takes an array and string. The function should remove the letters in the string from the array, and return the array.
    */
    
    function removeLetters($arr, $str) {
        $string = str_split($str);
        $result = [];

        $counter = array_count_values($string);
        $curr = [];

        foreach($arr as $ele) {
            if(!in_array($ele, $string)) {
                $result[] = $ele;    
            }
            if(!isset($curr[$ele])) {
                $curr[$ele] = 1;
            }
            else {
                $curr[$ele] = $curr[$ele] + 1;
                if($curr[$ele] > $counter[$ele]) {
                    $result[] = $ele;
                }
            }
        }
    return $result;
    };


    class RemoveLetters {
        public function tests() {
           assert(removeLetters(["s", "t", "r", "i", "n", "g", "w"], "string") === ["w"]);
           assert(removeLetters(["b", "b", "l", "l", "g", "n", "o", "a", "w"], "balloon") === ["b", "g", "w"]);
           assert(removeLetters(["d", "b", "t", "e", "a", "i"], "edabit") === []);
           assert(removeLetters(["t", "t", "e", "s", "t", "u"], "testing") === ["t", "u"]);
           print "All Test Cases Passed :)";
        }
    }

    $test = new RemoveLetters();
    $test->tests();
?>