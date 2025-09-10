<?php

$usuario = 'root';
$senha = 'webserver';
$dbname = 'dbtutorial';
$host = '192.168.121.33';

try{
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $usuario, $senha);
}catch(PDOException $e){
    echo $e->getMessage();

}
