<?php

function replaceNums($s) {
    $chunks = explode(" ", $s);
    $newStr = "";
    
    foreach($chunks as $key => $chunk) {
        $num = "";
        foreach(str_split($chunk) as $char) {
            if(is_numeric($char)) {
                $num .= $char;
            } else {
                if ($num !== "") {
                    $newStr .= decbin((int)$num); 
                    $num = ""; 
                }
                $newStr .= $char;
            }
        }
       
        if ($num !== "") {
            $newStr .= decbin((int)$num);
        }

        if ($key != count($chunks) - 1) {
            $newStr .= " ";
        }
    }

    return $newStr;
}



class NumberReplace {
	public function tests() {
		assert("I have 10 sheep."=== replaceNums("I have 2 sheep."));
		assert("I have 10 sheep, and 10101 chickens."=== replaceNums("I have 2 sheep, and 21 chickens."));
		assert("1100100 is my lucky number."=== replaceNums("100 is my lucky number."));
		assert("My father was born in 11110110110.1010.11001."=== replaceNums("My father was born in 1974.10.25."));
		assert("This sentence is1010 100011filled with ran10100dom numbers on111 purpo11111se."=== replaceNums("This sentence is10 35filled with ran20dom numbers on7 purpo31se."));
		assert("1010hell1001100o100 boi"=== replaceNums("10hell76o4 boi"));
        print "All test cases passed :)";
	}
}

$test = new NumberReplace();
$test->tests();
?>