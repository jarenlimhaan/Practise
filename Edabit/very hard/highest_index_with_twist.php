<?php
    /*
    Given a name, return the letter with the highest index in alphabetical order, with its corresponding index, in the form of a string.
    */

    function alphabetIndex($s) {
        $alphabet = ["a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z"];
        $s = strtolower($s);
        $highest = "";
        $idx = -1;
        foreach(str_split($s) as $char) {
            $temp_idx = array_search($char, $alphabet);
            if(empty($highest) || (!empty($highest) && $idx < $temp_idx)) {
                $highest = $char;
                $idx = $temp_idx;
            }
        }
        return $idx + 1 . $highest;
    }


    class AlphabetIndex{
        
        public function tests() {
            assert(alphabetIndex("Oscar")=== "19s");
            assert(alphabetIndex("Lucas")=== "21u");
            assert(alphabetIndex("Marko")=== "18r");
            assert(alphabetIndex("Esley")=== "25y");
            assert(alphabetIndex("Rogei")=== "18r");
            assert(alphabetIndex("Nicolas")=== "19s");
            assert(alphabetIndex("Flavio")=== "22v");
            assert(alphabetIndex("Andrey")=== "25y");
            assert(alphabetIndex("Hello")=== "15o");
            print "All Test Cases Passed :)";
        
        }
    }

    $test = new AlphabetIndex();
    $test->tests();
?>