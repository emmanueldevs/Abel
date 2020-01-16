<?php
session_start();

if(!isset($_SESSION['user']))
{
 header("Location: index.php");
}
else if(isset($_SESSION['user'])!="")
{
 header("Location: main.php");
}


 session_destroy();
 unset($_SESSION['user']);
 header("Location: index.php");
?>