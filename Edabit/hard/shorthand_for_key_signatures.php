<?php
    // Given a string containing a key signature written in shorthand, create a function which replaces the shorthand with its full written name.
    // A lowercase letter denotes a minor key.
    // An uppercase letter denotes a major key.
    function fullKeyName($s) {
        $arr = explode(" ", $s);
        $lastChar = $arr[count($arr) - 1];
        if(ctype_upper($lastChar[0])) {
            $arr[count($arr) - 1] = ucfirst(strtolower($lastChar));
            $arr[] = "major";
        }
        else {
            $arr[count($arr) - 1] = ucfirst(strtolower($lastChar));
            $arr[] = "minor";
        }
        return implode(" ", $arr);
    }

    class FullKeyName {
	    public function tests() {
           assert(fullKeyName("Prelude in C") ==="Prelude in C major");
           assert(fullKeyName("Fugue in c") ==="Fugue in C minor");
           assert(fullKeyName("Toccata and Fugue in d") ==="Toccata and Fugue in D minor");
           assert(fullKeyName("a Fugue in c") ==="a Fugue in C minor");
           assert(fullKeyName("Sonata in D") ==="Sonata in D major");
           assert(fullKeyName("Opera in eb") ==="Opera in Eb minor");
           assert(fullKeyName("Toccata in ab") ==="Toccata in Ab minor");
           assert(fullKeyName("Toccata in f") ==="Toccata in F minor");
           assert(fullKeyName("Symphony in C#") ==="Symphony in C# major");
           assert(fullKeyName("Mass in c") ==="Mass in C minor");
           assert(fullKeyName("Toccata in c") ==="Toccata in C minor");
           assert(fullKeyName("Prelude in Ab") ==="Prelude in Ab major");
           assert(fullKeyName("Concerto in f#") ==="Concerto in F# minor");
           assert(fullKeyName("Symphony in eb") ==="Symphony in Eb minor");
           assert(fullKeyName("Sonata in a") ==="Sonata in A minor");
           assert(fullKeyName("Sonata in e") ==="Sonata in E minor");
           assert(fullKeyName("Concerto in c#") ==="Concerto in C# minor");
           assert(fullKeyName("Opera in f") ==="Opera in F minor");
           assert(fullKeyName("Mass in c") ==="Mass in C minor");
           assert(fullKeyName("Symphony in D") ==="Symphony in D major");
           assert(fullKeyName("Fugue in d") ==="Fugue in D minor");
           assert(fullKeyName("Fugue in eb") ==="Fugue in Eb minor");
           assert(fullKeyName("Fugue in F") ==="Fugue in F major");
           assert(fullKeyName("Mass in c#") ==="Mass in C# minor");
           assert(fullKeyName("Requiem in C") ==="Requiem in C major");
           assert(fullKeyName("Prelude in Eb") ==="Prelude in Eb major");
           assert(fullKeyName("Prelude in Bb") ==="Prelude in Bb major");
           assert(fullKeyName("Fugue in g") ==="Fugue in G minor");
           assert(fullKeyName("Requiem in c#") ==="Requiem in C# minor");
           assert(fullKeyName("Opera in f") ==="Opera in F minor");
           assert(fullKeyName("Prelude in G") ==="Prelude in G major");
           assert(fullKeyName("Symphony in Eb") ==="Symphony in Eb major");
           assert(fullKeyName("Symphony in eb") ==="Symphony in Eb minor");
           assert(fullKeyName("Sonata in e") ==="Sonata in E minor");
           assert(fullKeyName("Fugue in g") ==="Fugue in G minor");
           assert(fullKeyName("Sonata in A") ==="Sonata in A major");
           assert(fullKeyName("Requiem in b") ==="Requiem in B minor");
           assert(fullKeyName("Sonata in eb") ==="Sonata in Eb minor");
           assert(fullKeyName("Prelude in c#") ==="Prelude in C# minor");
           assert(fullKeyName("Fugue in F") ==="Fugue in F major");
           assert(fullKeyName("Concerto in ab") ==="Concerto in Ab minor");
           assert(fullKeyName("Toccata in F#") ==="Toccata in F# major");
           assert(fullKeyName("Symphony in Bb") ==="Symphony in Bb major");
           assert(fullKeyName("Waltz in f#") ==="Waltz in F# minor");
           assert(fullKeyName("Prelude in Eb") ==="Prelude in Eb major");
           assert(fullKeyName("Requiem in b") ==="Requiem in B minor");
           assert(fullKeyName("Concerto in Bb") ==="Concerto in Bb major");
           assert(fullKeyName("Fugue in G") ==="Fugue in G major");
           assert(fullKeyName("Mass in eb") ==="Mass in Eb minor");
           assert(fullKeyName("Symphony in Ab") ==="Symphony in Ab major");
           assert(fullKeyName("Symphony in f") ==="Symphony in F minor");
           assert(fullKeyName("Fugue in f#") ==="Fugue in F# minor");
           assert(fullKeyName("Prelude in D") ==="Prelude in D major");
           assert(fullKeyName("Concerto in bb") ==="Concerto in Bb minor");
           print "All Test Cases Passed :)";
        }
    }

    $test = new FullKeyName();
    $test->tests();
?>