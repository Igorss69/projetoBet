<?php
 include('conexão.php');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="script.css">
    <link rel="stylesheet" href="stylelog.css">
</head>
<body>
    <form action="login.php" method="POST">
        <div id="login" class="login">
            <p>
                USUÁRIO: 
                </br><input type="text" class ="usuario" id="usuario" name="usuario">
            </p>
            <p>
                SENHA: 
                </br><input type="password" class="senha" id="senha" name="senha">
            </p>
            <button type="submit" class="botao">Enviar</button>
        </div>
    </form>
</body>
</html>