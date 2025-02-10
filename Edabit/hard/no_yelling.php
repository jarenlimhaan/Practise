<?php
    /*
        Create a function that transforms sentences ending with multiple question marks ? or exclamation marks ! 
        into a sentence only ending with one without changing punctuation in the middle of the sentences.
    */
    
    function noYelling($s) {
        $i = strlen($s) - 1;
        while ($i > 0 && ($s[$i] === '!' || $s[$i] === '?') && $s[$i] === $s[$i - 1]) {
            $i--;
        }

        return substr($s, 0, $i+1);
    }

    class NoYelling {
        public function tests()
        {
            assert("That's a ton!! of cheese!" === noYelling("That's a ton!! of cheese!!!!"));
            assert("What went wrong?" === noYelling("What went wrong?????????"));
            assert("Oh my goodness!" === noYelling("Oh my goodness!!!"));
            assert("WHAT!" === noYelling("WHAT!"));
            assert("WHAT?" === noYelling("WHAT?"));
            assert("Oh my goodness!" === noYelling("Oh my goodness!"));
            assert("I just cannot believe it." === noYelling("I just cannot believe it."));
            assert("I just!!! can!!! not!!! believe!!! it!" === noYelling("I just!!! can!!! not!!! believe!!! it!!!"));
            print "All Test Cases Passed :)";
        }
    }

    $test = new NoYelling();
    $test->tests();

?>