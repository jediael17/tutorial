<?php

$usuario = 'admin_inventario';
$senha = 'webserver';
$dbname = 'dbtutorial';
$host = '192.168.121.33';
$port = "3306";

try{
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $usuario, $senha, $port);
}catch(PDOException $e){
    echo $e->getMessage();

}


