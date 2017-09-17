<?php
$servidor = 'mysql552.umbler.com';
$usuario = 'gama_test';
$senha = 'test_gama';
$banco = 'gama_test';

// Conecta-se ao banco de dados MySQL
$con = mysqli_connect($servidor, $usuario, $senha, $banco);
// Check connection
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}