<?php

session_start();



    unset($_SESSION['email']);
    unset($_SESSION['password']);
    unset($_SESSION['full-name']);
    unset($_SESSION['phone']);
    unset($_SESSION['location']);


session_destroy();

header("Location:test.php");
?>