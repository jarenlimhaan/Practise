<?php
    // Given that within an array of string, it contains a sequence of charactes that mimics glasses
    // like O---O, there can be any number of dashes in between (at least 1 dash is required) (OO) doesn't count
    function findGlasses($arr) {
        $res = 0;

        foreach ($arr as $ele) {
            $startChar = false; 
            $hasDash = false;   

            foreach (str_split($ele) as $char) {
                if (!$startChar && $char === "O") {
                    $startChar = true;
                } elseif ($startChar && $char === "O") {
                    if ($hasDash) {
                        return $res;
                    }
                } elseif ($startChar && $char === "-") {
                    $hasDash = true; 
                } elseif ($startChar && $char !== "-" && $char !== "O") {

                    $startChar = false;
                    $hasDash = false;
                }
            }

            $res++;
        }
    }

    class FindGlasses {

        public function tests() {    
            assert(findGlasses(['phone', 'O-O', 'coins', 'keys']) === 1);
            assert(findGlasses(['OO', 'wallet', 'O##O', 'O----O']) === 3);
            assert(findGlasses(['O_O', 'O-O', 'OwO']) === 1);
            assert(findGlasses(['O--#--O', 'dustO---Odust', 'more dust']) === 1);
            assert(findGlasses(['floor', 'the floor again', 'pockets', 'bed', 'cabinet', 'the top of my head O-O']) === 5);
            assert(findGlasses(['OOOO----~OOO', '-------', 'OOOOOOO', 'OO-OO-OO-O']) === 3);
            print "All Test Cases Passed :)";
        }
    }

    $test = new FindGlasses();
    $test->tests();
?>
