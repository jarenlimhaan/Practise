<?php
    /*
        Given an array of strings and an original string, write a function to output an array of boolean values - true if the word can be formed from the original word by swapping two letters only once and false otherwise.
    */

    function validateSwaps($words, $original) {
        $result = [];

        foreach ($words as $word) {
            if (strlen($word) !== strlen($original)) {
                $result[] = false;
                continue;
            }

            $diffIndexes = [];
            
            for ($i = 0; $i < strlen($original); $i++) {
                if ($word[$i] !== $original[$i]) {
                    $diffIndexes[] = $i;
                }
            }

            // Exactly two different positions and swapping them should fix the word
            if (count($diffIndexes) === 2) {
                [$i, $j] = $diffIndexes;
                if ($word[$i] === $original[$j] && $word[$j] === $original[$i]) {
                    $result[] = true;
                    continue;
                }
            }

            $result[] = false;
        }

        return $result;
    }

    class ValidateSwaps {
        public function tests() {
            assert(validateSwaps(['BACDE', 'EBCDA', 'BCDEA', 'ACBED'], 'ABCDE') === [true, true, false, false]);
            assert(validateSwaps(['32145', '12354', '15342', '12543'], '12345') === [true, true, true, true]);
            assert(validateSwaps(['9786', '9788', '97865', '7689'], '9768') === [true, false, false, false]);
            assert(validateSwaps(['123', '321', '132', '13', '12'], '213') === [true, false, false, false, false]);
            assert(validateSwaps(['123', '1234', '1235'], '12') === [false, false, false]);
            assert(validateSwaps(['123', '123', '123'], '133') === [false, false, false]);
            assert(validateSwaps(['132', '321', '213'], '123') === [true, true, true]);
            print "All Test Cases Passed :)";
        }
    }

    $test = new ValidateSwaps();
    $test->tests();
?>