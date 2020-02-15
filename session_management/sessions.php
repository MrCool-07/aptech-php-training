<?php
   session_start();
   
   if( isset( $_SESSION['counter'] ) ) {
      $_SESSION['counter'] += 1;
   }else {
      $_SESSION['counter'] = 1;
   }

	$_SESSION['another_session_key'] = 123;
   $_SESSION['another_session_key1'] = 'abc';

   $msg = "You have visited this page ".  $_SESSION['counter'];
   $msg .= " in this session.";
?>

<html>
   
   <head>
      <title>Setting up a PHP session</title>
   </head>
   
   <body>
      <?php  echo ( $msg ); ?>
      <br>
      <br>
      Click <a href='session_get.php'>here</a> to check session values.<br>
      Click <a href='session_unset.php'>here</a> to unset counter session value.<br>
      Click <a href='session_destroy.php'>here</a> to destroy session. values.<br>
   </body>
   
</html>