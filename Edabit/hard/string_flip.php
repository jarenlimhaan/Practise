<?php
    /*
        Create a function that takes a string as the first argument, and a (string) specification as a second argument. 
        If the specification is "word", return a string with each word reversed while maintaining their original order. 
        If the specification is "sentence", reverse the order of the words in the string, while keeping the words intact.
    */
    
    function flip($str, $spec) {
        if ($spec === "word") {
           
            $words = explode(' ', $str); 
            $reversedWords = array_map(function($word) {
                return strrev($word); 
            }, $words);
            return implode(' ', $reversedWords); 
        } else {
            $words = explode(' ', $str); 
            $reversedOrder = array_reverse($words);
            return implode(' ', $reversedOrder);
        }
    }

    class FlipTestCases {
        public function tests() {
            $str1 = "There's never enough time to do all the nothing you want";
            $str2 = "I have all these great genes but they're recessive";
            $str3 = "I like maxims that don't encourage behavior modification";
    
           assert('olleH' === flip('Hello', 'word'));
           assert('Hello' === flip('Hello', 'sentence'));
           assert("s'erehT reven hguone emit ot od lla eht gnihton uoy tnaw" === flip($str1, 'word'));
           assert("want you nothing the all do to time enough never There's" === flip($str1, 'sentence'));
           assert("I evah lla eseht taerg seneg tub er'yeht evissecer" === flip($str2, 'word'));
           assert("recessive they're but genes great these all have I" === flip($str2, 'sentence'));
           assert("I ekil smixam taht t'nod egaruocne roivaheb noitacifidom" === flip($str3, 'word'));
           assert("modification behavior encourage don't that maxims like I" === flip($str3, 'sentence'));
           print "All Test Cases Passed :)";
        }
    }

    $test = new FlipTestCases();
    $test->tests();
?>