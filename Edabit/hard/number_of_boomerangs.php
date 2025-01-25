<?php
    // Given a boomerang is defined such that the first and third element
    // is the same and the second element is not the same as the first and third element
    // It is also given that the elements within the array can overlap
    function countBoomerangs($arr) {
        $res = 0;

        for ($i = 0; $i <= count($arr) - 3; $i++) {
            // Compare the first and third elements with the second being different
            if ($arr[$i] === $arr[$i + 2] && $arr[$i] !== $arr[$i + 1]) {
                $res++;
            }
        }
        return $res;
    }
?>
