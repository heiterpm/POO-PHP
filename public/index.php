<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Controle Remote</h1>
    <pre>
        <?php
            require_once 'Controlador.php';
            $c = new Controlador();
            $c -> ligar();
            $c -> maisVolume();
            $c -> abrirMenu();
        ?>
    </pre>
    <br>
    <input type="button" onclick="location.href='/rinha/Index2.php';" value="Index2" />
    <input type="button" onclick="location.href='/heranca/Index3.php';" value="Index3" />
</body>
</html>