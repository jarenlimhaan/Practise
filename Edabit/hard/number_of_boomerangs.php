<?php
    /*
        Given a boomerang is defined such that the first and third element
        is the same and the second element is not the same as the first and third element
        It is also given that the elements within the array can overlap
    */
    
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

    class CountBoomerangs {
        public function tests() {    
            assert(countBoomerangs([9, 5, 9, 5, 1, 1, 1] ) === 2);
            assert(countBoomerangs([5, 6, 6, 7, 6, 3, 9] ) === 1);
            assert(countBoomerangs([4, 4, 4, 9, 9, 9, 9] ) === 0);
            assert(countBoomerangs([5, 9, 5, 9, 5] ) === 3);
            assert(countBoomerangs([4, 4, 4, 8, 4, 8, 4] ) === 3);
            assert(countBoomerangs([2, 2, 2, 2, 2, 2, 3] ) === 0);
            assert(countBoomerangs([2, 2, 2, 2, 3, 2, 3] ) === 2);
            assert(countBoomerangs([1, 2, 1, 1, 1, 2, 1] ) === 2);
            assert(countBoomerangs([5, 1, 1, 1, 1, 4, 1] ) === 1);
            assert(countBoomerangs([3, 7, 3, 2, 1, 5, 1, 2, 2, -2, 2] ) === 3);
            assert(countBoomerangs([1, 7, 1, 7, 1, 7, 1] ) === 5);
            assert(countBoomerangs([5, 5, 5] ) === 0);
            print "All Test Cases Passed :)";
        }
    }

    $test = new CountBoomerangs();
    $test->tests();
?>
