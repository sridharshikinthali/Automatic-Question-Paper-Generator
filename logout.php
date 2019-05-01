<?php
 //logout process destroy the loged in session
 session_start();
 session_unset();
 session_destroy();
  setcookie( "name", "", time()- 60, "/","", 0);
 echo "<script>window.location='index.php';</script>";
?>
