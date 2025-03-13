<?php
/*
    Create a function that takes an integer argument and returns an array of prime numbers found in the decimal representation of that number (not factors).

    For example, extractPrimes(1717) returns [7, 7, 17, 17, 71].

    The array should be in ascending order. If a prime number appears more than once, every occurrence should be listed. If no prime numbers are found, return an empty array.
*/


function extractPrimes($num) {

    $numStr = strval($num);
    $length = strlen($numStr);
    $primes = [];

    // Generate all possible substrings
    for ($i = 0; $i < $length; $i++) {
        for ($j = 1; $j <= $length - $i; $j++) {
            $subNum = intval(substr($numStr, $i, $j));

            if (isPrime($subNum)) {
                $primes[] = $subNum;
            }
        }
    }

    sort($primes); // Ensure ascending order

    var_dump($primes);  
    return $primes;
}


function isPrime($n) {
    if ($n < 2) return false;
    if ($n == 2 || $n == 3) return true; 
    if ($n % 2 == 0 || $n % 3 == 0) return false; 

    // Check odd numbers from 5 to sqrt(n)
    for ($i = 5; $i * $i <= $n; $i += 6) {
        if ($n % $i == 0 || $n % ($i + 2) == 0) return false;
    }

    return true;
}

class ExtractPrimes {
    public function tests() {
        assert(extractPrimes(1) === []);
        assert(extractPrimes(2) === [2]);
        assert(extractPrimes(3) === [3]);
        assert(extractPrimes(13) === [3, 13]);
        assert(extractPrimes(101) === [101]);
        assert(extractPrimes(313) === [3, 3, 13, 31, 313]);
        assert(extractPrimes(10234) === [2, 3, 23]);
    }
}

$test = new ExtractPrimes();
$test->tests();

?>