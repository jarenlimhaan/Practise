<?php
    // Given that within an array of string, it contains a sequence of charactes that mimics glasses
    // like O---O, there can be any number of dashes in between (at least 1 dash is required) (OO) doesn't count
    function findGlasses($arr) {
        $res = 0; // To track the index of the string

        foreach ($arr as $ele) {
            $startChar = false; // Track if the first "O" is found
            $hasDash = false;   // Track if a dash is encountered

            foreach (str_split($ele) as $char) {
                if (!$startChar && $char === "O") {
                    $startChar = true; // First "O" found
                } elseif ($startChar && $char === "O") {
                    // Second "O" found, but check if there was at least one dash
                    if ($hasDash) {
                        return $res;
                    }
                } elseif ($startChar && $char === "-") {
                    $hasDash = true; // Found at least one dash
                } elseif ($startChar && $char !== "-" && $char !== "O") {

                    $startChar = false;
                    $hasDash = false;
                }
            }

            $res++;
        }
    }
?>
