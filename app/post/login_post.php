<?php
    require_once("..//connection.php");

    if ($_POST) {
        //$conn     = new connection();
        $nameUser = $_POST['user'];
        $pswd     = md5($_POST['pswd']);
        //$sql      = $conn->request("SELECT * FROM `users` WHERE name_user = '$nameUser' AND pswd = '$pswd'");
        $sql = $data_base->query("SELECT * FROM `users` WHERE name_user = '$nameUser' AND pswd = '$pswd'");

        $response = $sql->fetchAll();

        if ($nameUser == $response[0]['name_user'] && $pswd == $response[0]['pswd']) {
            session_start();

            $_SESSION['user'] = $response[0]['name_user'];
            $_SESSION['pass'] = $response[0]['pswd'];

            // print_r($_SESSION);
            // exit;
            header('location:..//view/index.php');
        } else {
            header('location:login.php?alertError=true');
        }
    }
?>