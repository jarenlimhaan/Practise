<?php
    /*
        Create a function based on the input and output. Look at the examples === there is a pattern.
        secret("div>p.a$$*2") ➞ `<div><p class="a01"></p><p class="a02"></p></div>`
        // Only whitespace in the entire string ===  One whitespace before each class. Total " " === 2

        secret("ul>li.b$*3") ➞ `<ul><li class="b1"></li><li class="b2"></li><li class="b3"></li></ul>`
        // Only whitespace in the entire string === One whitespace before each class. Total " " === 3

        secret("p>h1.c$$$*2") ➞ `<p><h1 class="c001"></h1><h1 class="c002"></h1></p>`
        // Only whitespace in the entire string === One whitespace before each class. Total " " === 2
    */

    function secret($s) {

        // Positions of seperators
        $sep = strpos($s, ">");
        $dot = strpos($s, ".");
        $stringZero = strpos($s, "$");

        // Initial Elements 
        $parent = substr($s, 0,  $sep);
        $child = substr($s, $sep + 1, $dot - $sep - 1);
        $className = substr($s, $dot+1, $stringZero - $dot -1);
        $res = "<$parent>";
        
        // Find number of zeros 
        $numZeros = 0;
        $currChar = substr($s, $stringZero, 1);
 
        while($currChar === "$") {
            $numZeros+= 1;
            $currChar = substr($s, $stringZero+$numZeros, 1);
        }       

        // Create the Child element 
        $zeros = str_repeat("0", $numZeros-1);
        $count = (int) $s[strlen($s) - 1];
        for($i = 0; $i < $count; $i++) {
            $classFinalName = $className . $zeros . ($i + 1);
            $res .= '<' . $child . ' class="' . $classFinalName . '"></' . $child . '>';
        }

        $res .= "</$parent>";
        return $res;
    }

    class Secret{

        public function tests() {    
            assert(secret("ul>li.item$$$*5") == '<ul><li class="item001"></li><li class="item002"></li><li class="item003"></li><li class="item004"></li><li class="item005"></li></ul>');
            assert(secret("div>p.menu$*2") ==='<div><p class="menu1"></p><p class="menu2"></p></div>');
            assert(secret("div>p.menu$$*2") ==='<div><p class="menu01"></p><p class="menu02"></p></div>');
            assert(secret("div>p.header$$*3") ==='<div><p class="header01"></p><p class="header02"></p><p class="header03"></p></div>');
            assert(secret("ul>li.nav$$$$*3") ==='<ul><li class="nav0001"></li><li class="nav0002"></li><li class="nav0003"></li></ul>');
            assert(secret("p>h1.c$$$*2") ==='<p><h1 class="c001"></h1><h1 class="c002"></h1></p>');
            assert(secret("div>p.a$$*2") ==='<div><p class="a01"></p><p class="a02"></p></div>');
            assert(secret("ul>li.b$*3") ==='<ul><li class="b1"></li><li class="b2"></li><li class="b3"></li></ul>');
            print "All Test Cases Passed :)";
        }

    }

    $test = new Secret();
    $test->tests();
?>