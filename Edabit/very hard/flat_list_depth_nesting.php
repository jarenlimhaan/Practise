<?php
    /*
        Create a function that can nest a flat array to represent an incremental depth level sequence.
    */

    function incrementalDepth(array $arr): array {
      if(count($arr) == 1) {
        return [$arr[0]];
      }
      return [$arr[0], incrementalDepth(array_slice($arr, 1))];
    }

    class Incremental_Depth {
        
        public function tests() {
           assert([1, [2]] === incrementalDepth([1, 2]));
           assert(["dog", ["cat", ["cow"]]] === incrementalDepth(["dog", "cat", "cow"]));
           assert([1, [3, [2, [6]]]] === incrementalDepth([1, 3, 2, 6]));
           assert( ["undefined", ["null", ["null", ["null", ["null"]]]]] === incrementalDepth(["undefined", "null", "null", "null", "null"]));
           assert([1, [[6, 2], [8, ['begginer', ['programmer', [['php', ['is', 'best']]]]]]]] === incrementalDepth([1,[6,2],8,'begginer','programmer',['php',['is','best']]]));
           print "All Test Cases Passed :)";
        }
    }

    $test = new Incremental_Depth();
    $test->tests()
?>