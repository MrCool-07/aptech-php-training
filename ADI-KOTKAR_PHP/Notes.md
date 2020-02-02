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

1. Cookies
    - user session management
    - stored in browser
    - storage limited (depends on user whether user allows)
    - memory limit
    - less secure
2. Sessions
    - user session management
    - stored in server
    - no storage limit
    - more secure

3. Functions
    - Name of function
    - return type
    - parameters
    syntax: =>  function name( para1, para2 ){ ...instructions... }