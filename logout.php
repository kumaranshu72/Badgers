<?php
   session_start();
   require "core.php";
   unset($_SESSION['userid']);
   header('Location: welcomepage.html');
?>
