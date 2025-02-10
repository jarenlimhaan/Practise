<?php
    /*
        With an n input, your output should be an array containing n-1 subarrays. 
        Each subarray should have two elements: the left and the right side of the partition (both should be non-empty, unless the input array is empty). 
        An empty array should return an empty array: []
    */

    function movingPartition($arr) {
        $result = [];
        for ($i = 1; $i < count($arr); $i++) {
            $result[] = [array_slice($arr, 0, $i), array_slice($arr, $i)];
        }
        return $result;
    }

    class MovingPartition {

        public function tests() {
            assert(
                [[[1], [2, 3, 4, 5]], [[1, 2], [3, 4, 5]], [[1, 2, 3], [4, 5]], [[1, 2, 3, 4], [5]]] === 
                movingPartition([1, 2, 3, 4, 5])
            );
            assert(
                [[[-1], [-1, -1, -1]], [[-1, -1], [-1, -1]], [[-1, -1, -1], [-1]]] === 
                movingPartition([-1, -1, -1, -1])
            );
            assert(
                [[[8], [9, 10]], [[8, 9], [10]]] === 
                movingPartition([8, 9, 10])
            );
            assert([] === movingPartition([]));
            print "All Test Cases Passed :)";
        }
    }

    $test = new MovingPartition();
    $test->tests();


?>