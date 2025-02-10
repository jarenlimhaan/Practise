<?php
    /*
        You are given an array of scores. The even-indexed numbers are your scores at each turn. The odd-indexed numbers are your opponent's scores.
        Create a function that turns this list of scores into an array of who is currently winning.
    */

    function currentlyWinning($arr) {
        // T = Tie, O = Opponent, Y = You
        // given that is every even-index pair (consider looping by even indexes)

        $res = [];
        for($i = 0; $i < count($arr); $i += 2) {
            if($arr[$i] === $arr[$i+1]) {
                $res[] = "T";
            }
            elseif($arr[$i] < $arr[$i+1]) {
                $res[] = "O";
            }
            else {
                $res[] = "Y";
            }
        }
        return $res;
    }

    class CurrentlyWinning {
        public function tests() {
            assert(['T', 'O', 'O'] === currentlyWinning([10, 10, 22, 30, 5, 40]));
            assert(['Y', 'O'] === currentlyWinning([5, 1, 2, 10]));
            assert(['T', 'T', 'T', 'O', 'Y'] === currentlyWinning([10, 10, 5, 5, 2, 2, 1, 3, 100, 5]));
            assert(['O', 'O', 'O', 'Y', 'Y'] === currentlyWinning([5, 15, 17, 35, 16, 40, 66, 12, 10, 9]));
            assert(['Y', 'O', 'O', 'Y', 'O', 'O'] === currentlyWinning([33, 22, 4, 9, 12, 15, 32, 7, 9, 10, 70, 100]));
            print "All Test Cases Passed :)";
        }
    }
    $test = new CurrentlyWinning();
    $test->tests();
?>