<?php
    /*
        Reverse the order of the string
        Notes:
            php seems to have an issue when reversing unicode characters thus must use this approach (regex)?
    */
   
    function reverse($str) {
        preg_match_all('/./us', $str, $arr);
        return implode(array_reverse($arr[0]));
    }

    class ReversedString {
        public function tests() {
            assert(".tnereffid knihT" === reverse("Think different."));
            assert(".od ot tahw su llet nac yeht os elpoep trams erih ew ;od ot tahw meht llet dna elpoep trams erih ot esnes ekam t’nseod tI" === reverse("It doesn’t make sense to hire smart people and tell them what to do; we hire smart people so they can tell us what to do."));
            assert("taerht a ton - ytinutroppo na sa egnahc ees ot ytiliba eht si noitavonnI" === reverse("Innovation is the ability to see change as an opportunity - not a threat"));
            assert(".nalp ssenisub tseb eht si ytilauQ :elur elpmis a no desab si gnihtyrevE" === reverse("Everything is based on a simple rule: Quality is the best business plan."));
            assert(".od ohw seno eht era dlrow eht egnahc nac yeht kniht ot hguone yzarc era ohw elpoep ehT" === reverse("The people who are crazy enough to think they can change the world are the ones who do."));
            assert(".eciov renni nwo ruoy tuo nword snoinipo ’srehto fo esion eht tel t’noD" === reverse("Don’t let the noise of others’ opinions drown out your own inner voice."));
            assert(".nrael ot gniht erom eno syawla s'erehT ;yllaunitnoc nraeL" === reverse("Learn continually; There's always one more thing to learn."));
            assert(".selbuod owt naht retteb hcum si nur emoh enO .ytitnauq naht tnatropmi erom si ytilauQ" === reverse("Quality is more important than quantity. One home run is much better than two doubles."));
            assert(".efil s'esle enoemos gnivil ti etsaw t'nod os detimil si emit ruoY" === reverse("Your time is limited so don't waste it living someone else's life."));
            assert(".krow taerg si eveileb uoy tahw od ot si deifsitas ylurt eb ot yaw ylno ehT" === reverse("The only way to be truly satisfied is to do what you believe is great work."));
            print "All Test Cases Passed :)";
        }
      }

      $test = new ReversedString();
      $test->tests();

?>