<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>envia</title>
</head>
<body>
    <?php
    $conexao = mysqli_connect("localhost","root","", "dados_ads");

    //check
    if(!$conexao){
        echo"Não conectado";
    }
    echo"Conectado ao banco >>>";



    ?>
</body>
</html>