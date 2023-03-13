<?php
include ('conexão.php');
include ('verifica_login.php');

$dadostrab = "SELECT * from trabalhos";
$querydadostrab = $con->query($dadostrab);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="trabalhos">
        <form class="container">
            <h1>A3 FLEX:</h1>
            <?php
                while($dados = mysqli_fetch_assoc($querydadostrab)){
                    $dadosnumeroP = $dados['numero'];
                    $dadosgrupoP = $dados['grupo'];
                    $dadosidP = $dados['id'];
                    $dadosatividadeP = $dados['atividade'];
                    $dadosnivelP = $dados['nivel'];
                    $dadosfunc = $dados['funcionario'];
                    echo "<div class='pendentes'>";
                    $dadosarray = array($dadosnumeroP . " | ",
                                        $dadosgrupoP . " | ",
                                        $dadosidP . " | ",
                                        $dadosatividadeP . " | ",
                                        "nivel: " . $dadosnivelP . " | ",
                                        );
                    $stringarray = implode($dadosarray);
                    echo $stringarray;
                    if (empty($dadosfunc)){
                        echo "</br><a href='funcionario.php?id=$dadosidP' class='pendente'>PENDENTE</a>";
                    }
                    else if (($dadosc == $dadosidP)){
                            echo "</br><a href='concluido.php?id=$dadosidP' class='concl'>CONCLUIDO</a>";
                    }

                    
                    echo "</div>";
                    echo "</br>";
                }
            ?>
        </form>
    </div></br>
    <a href="logout.php" class="logout">Sair</a>
    <a href="reset.php" class="reset">RESETAR</a>
</body>
</html>