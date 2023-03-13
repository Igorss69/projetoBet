<?php
include "conexão.php";

if (!empty($_GET['id'])){
    $iddados = $_GET['id'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Técnico</title>
    <link rel="stylesheet" href="stylefunc.css">
</head>
<body>
    <div class="tecnico">
        <h1>TÉCNICO:</h1>
        <form action="button.php">
            <input type="hidden" name="id" value="<?php echo $iddados ?>" ></br>
            <input type="text" name="func" class="func"></br>
            <input type="submit" class="enviar">
        </form>
    </div>
</body>
</html>