<?php
    /*
        The ABACABA pattern is a recursive fractal pattern that shows up in many places in the real world (such as in geometry, art, music, poetry, number systems, literature and higher dimensions).

        Create a function that takes a number n as an argument and returns a string that represents the full pattern.
    */


    function abacabaPattern(int $n) {
        if ($n <= 0) return "";
        if ($n == 1) return "A";
        
        // Get the previous pattern recursively
        $prev = abacabaPattern($n - 1);
        $letter = chr(64 + $n); 
        
        // The pattern is: previous + letter + previous
        return $prev . $letter . $prev;
    }

    class ABACABA_Pattern {

        public function testS() {
           assert("A" === abacabaPattern(1));
           assert("ABA" === abacabaPattern(2));
           assert("ABACABA" === abacabaPattern(3));
           assert("ABACABADABACABA" === abacabaPattern(4));
           assert("ABACABADABACABAEABACABADABACABA" === abacabaPattern(5));
           assert("ABACABADABACABAEABACABADABACABAFABACABADABACABAEABACABADABACABA" === abacabaPattern(6));
           assert("ABACABADABACABAEABACABADABACABAFABACABADABACABAEABACABADABACABAGABACABADABACABAEABACABADABACABAFABACABADABACABAEABACABADABACABA" === abacabaPattern(7));
           assert("ABACABADABACABAEABACABADABACABAFABACABADABACABAEABACABADABACABAGABACABADABACABAEABACABADABACABAFABACABADABACABAEABACABADABACABAHABACABADABACABAEABACABADABACABAFABACABADABACABAEABACABADABACABAGABACABADABACABAEABACABADABACABAFABACABADABACABAEABACABADABACABA" === abacabaPattern(8));
           assert("ABACABADABACABAEABACABADABACABAFABACABADABACABAEABACABADABACABAGABACABADABACABAEABACABADABACABAFABACABADABACABAEABACABADABACABAHABACABADABACABAEABACABADABACABAFABACABADABACABAEABACABADABACABAGABACABADABACABAEABACABADABACABAFABACABADABACABAEABACABADABACABAIABACABADABACABAEABACABADABACABAFABACABADABACABAEABACABADABACABAGABACABADABACABAEABACABADABACABAFABACABADABACABAEABACABADABACABAHABACABADABACABAEABACABADABACABAFABACABADABACABAEABACABADABACABAGABACABADABACABAEABACABADABACABAFABACABADABACABAEABACABADABACABA" === abacabaPattern(9));
           print "All Test Cases Passed :)";
        }

    }

    $test = new ABACABA_Pattern();
    $test->tests();
?>