<?php

/*

Uniform Variable Syntax:

New uniform variable syntax allows combinations of operators that were previously disallowed; old operations can be achieved in terser code. The new syntax always follows a left-to-right evaluation order. The uniform variable syntax breaks backward compatibility in some expressions where old evaluation is used.


*/

    function e() {
        
        echo "This is e() \n";
    };
    
    function f() {
        
        echo "This is f() \n";
        return e;
    };    

    function g() {
    
        echo "This is g()\n";
        return f;
    };
    
    g();
    echo "***********<br>";
    g()();
    echo "***********<br>";
    g()()();
            
?>