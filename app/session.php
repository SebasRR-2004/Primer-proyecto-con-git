<?php
    session_start();
    $user = $_SESSION['user'];

    if (!isset($user)) {
        header('location:./login.php');
    }
?>