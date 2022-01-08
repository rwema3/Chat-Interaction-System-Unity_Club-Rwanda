<?php
 session_start();
 unset($_SESSION['username']);
 header('Location:membership.php');

 unset($_SESSION['sign']);
 header('Location:membership.php');
 
?>




