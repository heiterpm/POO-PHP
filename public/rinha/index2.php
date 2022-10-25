<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lutador</title>
</head>
<body>
    ola
    <br>
    <input type="button" onclick="location.href='index.php';" value="Index" />
    <input type="button" onclick="location.href='/heranca/Index3.php';" value="Index3" />
    <pre>
        <?php
            require_once 'Lutador.php';
            require_once 'Luta.php';
            $ll = array();
            $ll[0] = new Lutador("Pretty Boy", "França", 30, 1.75, 68.9, 11, 2, 1);
            $ll[1] = new Lutador("Putscript", "Brasil", 29, 1.68, 57.8, 14, 2, 3);
            $ll[2] = new Lutador("SnapShadow", "EUA", 35, 1.65, 80.9, 12, 2, 1);
            $ll[3] = new Lutador("Dead Code", "Australia", 28, 1.93, 81.6, 13, 0, 2);
            $ll[4] = new Lutador("UFOCobol", "Brasil", 37, 1.70, 119.3, 5, 4, 3);
            $ll[5] = new Lutador("Nerdaart", "EUA", 30, 1.81, 105.7, 12, 2, 4);

            $ll[1] -> status();
            $ll[2] -> status();
            $ll[5] -> status();
            echo "<br> <br> <br>";

            $UEC01 = new Luta();
            $UEC01 -> marcarLuta($ll[0], $ll[1]);
            $UEC01 -> lutar();

        ?>
    </pre>
</body>
</html>