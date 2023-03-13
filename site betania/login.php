<?php
include('conexão.php');
session_start();

if(empty($_POST['usuario']) || empty($_POST['senha'])){
    header('Location: index.php');
    exit();
}

$usuario = mysqli_real_escape_string($con, $_POST['usuario']);
$senha = mysqli_real_escape_string($con, $_POST['senha']);

$query = "select * from login where usuario = '{$usuario}' and senha = '{$senha}'";

$result = mysqli_query($con, $query);

$row = mysqli_num_rows($result);

if($row == 1) {
    $_SESSION['usuario'] = $usuario;
    header('Location: painel.php');
    exit();
}
 else {
    header('Location: index.php');
    exit();
}