<?php
    /*
        Juan loves the Dakti song and wants to memorize the chorus of the song. His friend sent him the chorus in phrases, but the phrases are somewhat strange; they do not have an order and they have numbers. His friend helps Juan organize the chorus of the song.
        Use RegEx, natural sorting, sorting, or lambda functions; your imagination has no limits.
        First, organize the words based on the numbers they have, then delete the numbers once they are organized.
    */

    function dakiti($s) {

        $res = "";

        $arr = explode(" ", $s);
        usort($arr, function($a, $b) {
            preg_match('/\d+/', $a, $aMatches);
            preg_match('/\d+/', $b, $bMatches);
        
            $aNum = (int) $aMatches[0];
            $bNum = (int) $bMatches[0];
        
            return $aNum <=> $bNum;
        });

        $res = array_map(fn($x) => preg_replace('/\d+/', '', $x), $arr);
        return implode(" ", $res);
    }

    class Dakiti {
        public function tests() {
            assert(dakiti('en5tere y2a bab1y y3o 4me s6e not7a cuand8o 9me-ves') === 'baby ya yo me entere se nota cuando me-ves');
            assert(dakiti('h4as don2de ah1i n3o ll5egado q7ue 8yo te9-llevare s6abes') ==='ahi donde no has llegado sabes que yo te-llevare');
            assert(dakiti('quie3res bebe4r dime1 e5s qu6e qu2e tu7 er8es m9i-bebe') ==='dime que quieres beber es que tu eres mi-bebe');
            assert(dakiti('y1 de2 nos3tros qu4ien v5a a6 h7ablar 8si 9no') === 'y de nostros quien va a hablar si no');
            assert(dakiti('no1 n2os v4er de3jamos'),'no nos dejamos ver');
            print "All Test Cases Passed :)";
        }
    }

    $test = new Dakiti();
    $test->tests();
?>