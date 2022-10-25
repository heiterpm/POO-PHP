<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Projeto herança</h1>
    <input type="button" onclick="location.href='/rinha/Index2.php';" value="Index2" />
    <input type="button" onclick="location.href='index.php';" value="Index" />
    <pre>
        <?php
            //Sem import de pessoa pois abstract não pode gerar objetos
            require_once "Bolsista.php";

            $a1 = new Aluno();
            $a1 -> setNome("Aluno1");
            $a1 -> setMatr(11111);
            $a1 -> setIdade(16);
            $a1 -> setSexo("M");
            $a1 -> setCurso("TI");
            $a1 -> pagarMensalidade();
            print_r($a1);

            $b1 = new Bolsista();
            $b1 -> setNome("Bolsista1");
            $b1 -> setMatr(22222);
            $b1 -> setIdade(20);
            $b1 -> setSexo("F");
            $b1 -> setCurso("Qualquercoisa menos TI");
            $b1 -> pagarMensalidade();
            print_r($b1);

            
        ?>
    </pre>
</body>
</html>