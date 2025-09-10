<?php

$usuario = 'admin_inventario';
$senha = 'webserver';
$dbname = 'dbtutorial';
$host = '192.168.121.33';
$port = "3306";

try {
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $usuario, $senha);
    echo "Conexão realizada com sucesso!";
} catch (PDOException $e) {
    echo "Erro: " . $e->getMessage();
}
