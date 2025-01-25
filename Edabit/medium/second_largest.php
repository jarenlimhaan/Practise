<?php
    // Find second largest element in an array
    function secondLargest($a) {
        sort($a);
        return $a[count($a)-2];
    }
?>