<?php
 session_start();
unset($_SESSION['username']);
 header('Location:direction.php');

unset($_SESSION['directionindex']);
 header('Location:direction.php');
 
?>




