<?
session_start();
session_destroy();
die(header("location: login.php"));
?>