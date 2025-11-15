<?php
session_start();
unset($_SESSION['suser']);
unset($_SESSION['uname']);
header('Location:login.php');

?>