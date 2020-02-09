# PHP NOTES:

Body of data( datasend along with url) is called query string(has a memory limit).

Difference between GET and POST $_GET:

Elements are displayed in URL.
Memory limit small compared to post.
$_POST:

Elements are not dislayed.
Memory limit larger compared yo get.
$_SERVER

- User agent info
    Request url
    Remote Address (IP)
    form method
    gives info about system.

    *REQUESTS:
    - present in packets
    - contains a header and value/data

1. Cookies (Inspect -> Application)
    - user session management
    - stored in browser
    - storage limited (depends on user whether user allows)
    - memory limit
    - less secure

    => setcookie() used in php
        - cookie name*
        - cookie value*
        - expire expirydate*
        - path
        - domain
    => for accessing any cookie, we use global variable $_COOKIE

2. Sessions
    - user session management
    - stored in server
    - no storage limit
    - more secure

    => created for a specific client
    => use statement: seesion_start() - cookie gets created in background with name ses_32hexadecrandnum;
    => we use global variable $_SESSION[KEY] = 'VALUE'
    => session_destroy(); for completely destroying the session
    => unset used for not setting the session.
    => session.auto_start in php.ini to 1 to automatically start session at any page.
      

3. Functions
    - Name of function
    - defination
    - return type
    - parameters
    - call 
    syntax: =>  function name( para1, para2 ){ ...instructions... }

4. Conditional Statements:
    - if(condition){......}else{........}
    - if(condition){......}elseif(condition){.......}else{.......}
    - nested if else : if else inside if else statement
    - switch statement : switch(variable){ case '': echo.....break; case '':...........default: .....}

# New Features in PHP 7 (compared to PHP 5) - refer from *PHP DOCUMENTATION*, *TUTORIALSPOINT*
1. intdiv() : checks whether two values are divisible or not.
2. spaceship operator : "<=>" used for comparing two values. eg. 1<=>2 returns -1
3. NULL coalescing opertaor : similar to ternary operator
4. Scalar type declaration : 1- coercive=> not required to mention datatypes,
                             2- strict=> required to mention datatype.
5. Uniform variable syntax : 
6. Use operator
7. Closure call methods
8. Generator delegation via yield form
9. Dirname() function
