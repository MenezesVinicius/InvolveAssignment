<?php
$servidor = 'mysql552.umbler.com:41890';
$usuario = 'gamaofthrones';
$senha = 'gamagama';
$banco = 'trade_blog';

// Conecta-se ao banco de dados MySQL
$con = mysqli_connect($servidor, $usuario, $senha, $banco);
// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}