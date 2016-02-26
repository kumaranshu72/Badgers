<?php
require "core.php";
require "connect.php";
//require "login.php";
if(isset($_SESSION['userid'])&&!empty($_SESSION['userid']))
{
  header('Location: octat.html');
}
else {
  include 'login.php';
}
?>
