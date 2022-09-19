<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicios 03 - Lista 02</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <div>
        <form method="post">
            <input type="number" name="num1" placeholder="Digite um lado do triângulo">
            <input type="number" name="num2" placeholder="Digite um lado do triângulo">
            <input type="number" name="num3" placeholder="Digite um lado do triângulo">
            <button> Enviar </button>
            <button type="reset"> Limpar </button>
            <p>
                <?php
                    if(isset($_POST['num1'])){
                        if(isset($_POST['num2'])){
                            if(isset($_POST['num3'])){
                                $num1 = $_POST['num1'];
                                $num2 = $_POST['num2'];
                                $num3 = $_POST['num3'];

                                if($num1 < ($num2 + $num3) && $num2 < ($num1 + $num3) && $num3 < ($num1 + $num2)){
                                    if($num1 == $num2 && $num2 == $num3){
                                        echo 'Triângulo Equilátero';
                                    } else if ($num1 == $num2 || $num1 == $num3 || $num2 == $num3){
                                        echo 'Triângulo Isósceles';
                                    } else {
                                        echo 'Triângulo Escaleno';
                                    }
                                } else {
                                    echo 'não forma um triangulo';
                                }
                            }
                        }
                    }
                ?>
            </p>
        </form>
    </div>
</body>

</html>