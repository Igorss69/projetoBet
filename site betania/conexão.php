<?php 

$usuario = 'root';
$senha = '';
$database = 'betania';
$host = 'localhost';

$con = mysqli_connect($host, $usuario, $senha, $database);

if($con->error) {
    die('Erro:' );
}