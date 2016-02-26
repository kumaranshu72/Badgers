<?php
$dbser="localhost";
$user='root';
$password='';
$db='badgers';
if(!mysql_connect($dbser,$user,$password) or !mysql_select_db($db))
{
    die("connection error");
}


?>
