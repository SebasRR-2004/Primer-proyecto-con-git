<?php
    $server   = "localhost";
	$user     = "root";
	$password = "";
	$db_name  = "social_wall";

	try {
		$data_base = new PDO("mysql:host=$server;dbname=$db_name",$user,$password);
	} catch(Exception $e) {
		echo "Error al conectar la base de datos. ".$e->getMessage();
		die();
	}
    // class connection {
    //     private $server = "localhost";
    //     private $user = "root";
    //     private $pswd = "";
    //     private $conection;

    //     public function __construct() {
    //         try {
    //             $this->conection = new PDO("mysql:host=$this->server;dbname=social_wall", $this->user, $this->pswd);
    //             $this->conection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    //             }
    //         catch (PDOException $e) {
    //             return "Error de conexión " . $e;
    //         }
    //     }

    //     public function excute ($sql) {
    //         $this->conection->exec($sql);
    //         return $this->conection->lastInsertId();
    //     }

    //     public function request($sql) {
    //         $sentence = $this->conection->prepare($sql);
    //         $sentence->execute();
    //         return $sentence->fetchAll();
    //     }
    // }
?>