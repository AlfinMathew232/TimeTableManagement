<?php
session_start();
unset($_SESSION['steacher']);
unset($_SESSION['tname']);
header('Location:../login.php');

?>