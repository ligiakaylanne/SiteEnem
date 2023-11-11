<?php

$hostname = 'localhost';
$database = 'login';
$usuario = 'root';
$senha = '';

$mysqli = new mysqli($hostname, $usuario, $senha, $database);

if($mysqli->error) {
    die("Falha ao conectar ao banco de dados: " . $mysqli->error);
}
?>