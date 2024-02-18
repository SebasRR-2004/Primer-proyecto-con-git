<?php
    require_once("connection.php");

    if ($_POST) {
        //$conn     = new connection();

        $nameUser = $_POST['name_user'];
        $pswd     = md5($_POST['pswd']);

        $sql = $data_base->prepare("INSERT INTO `users` (`id`, `name_user`, `pswd`) VALUES ( null, :usr, :pas)");

        //$sql      = "INSERT INTO `users` (`id`, `name_user`, `pswd`) VALUES (NULL, '$nameUser', '$pswd');";

        $sql->bindParam(':usr', $nameUser);
        $sql->bindParam(':pas', $pswd );

        //$conn->excute($sql);
        $response = $sql->execute();

        header('location:login.php');
    }
?>