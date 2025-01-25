<?php
    // Reverse the order of the string
    // Notes:
    // php seems to have an issue when reversing unicode characters thus must use this approach ??
    function reverse($str) {
        preg_match_all('/./us', $str, $arr);
        return implode(array_reverse($arr[0]));
    }

?>