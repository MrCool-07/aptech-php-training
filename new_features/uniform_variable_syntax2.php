<?php

    class A {
    
        function f() {
             
            echo "f() of A\n";
        }    
    }

    class B {
    
        function g() {
            echo "g() of B\n";
            
            return new A();
        }
    }
    
    $b = new B();
    $b->g()::f();
    
            
?>