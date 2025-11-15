<?php
session_start();
unset($_SESSION['sadmin']);
unset($_SESSION['uname']);
header('Location:../login.php');

?>