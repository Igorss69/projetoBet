<?php
 include "conexão.php";

if (!empty($_GET['id'])){
    $iddados = $_GET['id'];

    if (!empty($_GET['func'])){
        $func = $_GET['func'];


    $idselect = "SELECT * from concluidos where id = $iddados";
    $res = $con->query($idselect);

    $idselect1 = "SELECT * from pendentes where id = $iddados";
    $res1 = $con->query($idselect1);

    $funcadd = "UPDATE pendentes set funcionário = '$func' where id = $iddados";
    $addfunc = $con->query($funcadd);

    $functime = "UPDATE pendentes set data_registro = now() where id = $iddados";
    $addtime = $con->query($functime);

    $idadd = "INSERT into concluidos (numero, grupo, id, atividade, nivel, funcionario, data_registro)
    select numero, grupo, id, atividade, nivel, funcionário, data_registro from pendentes 
    where id = $iddados";
    $adicionar = $con->query($idadd);
    }
    header('Location: painel.php');
}

?>
