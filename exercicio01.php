<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicios 01 - Lista 02</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <div>
        <form method="post">
            <input type="number" name="num1" placeholder="digite um numero">
            <input type="number" name="num2" placeholder="digite um numero">
            <input type="number" name="num3" placeholder="digite um numero">
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
                            
                                if($num1 > $num2 && $num1 > $num3){
                                    if($num2 > $num3){
                                        echo 'Ordem Crescente: ' . $num3 . ' - ' . $num2 . ' - ' . $num1 . '<br>';
                                        echo 'Ordem Decrescente: ' . $num1 . ' - ' . $num2 . ' - ' . $num3;
                                    } else {
                                        echo 'Ordem Crescente: ' . $num2 . ' - ' . $num3 . ' - ' . $num1 . '<br>';
                                        echo 'Ordem Decrescente: ' . $num1 . ' - ' . $num3 . ' - ' . $num2;
                                    }
                                } else if ($num2 > $num1 && $num2 > $num3){
                                    if($num1 > $num3){
                                        echo 'Ordem Crescente: ' . $num3 . ' - ' . $num1 . ' - ' . $num2 . '<br>';
                                        echo 'Ordem Decrescente: ' . $num2 . ' - ' . $num1 . ' - ' . $num3;
                                    } else {
                                        echo 'Ordem Crescente: ' . $num1 . ' - ' . $num3 . ' - ' . $num2 . '<br>';
                                        echo 'Ordem Decrescente: ' . $num2 . ' - ' . $num3 . ' - ' . $num1;
                                    } 
                                } else if ($num3 > $num1 && $num3 > $num2){
                                    if($num2 > $num1){
                                        echo 'Ordem Crescente: ' . $num1 . ' - ' . $num2 . ' - ' . $num3 . '<br>';
                                        echo 'Ordem Decrescente: ' . $num3 . ' - ' . $num2 . ' - ' . $num1;
                                    } else {
                                        echo 'Ordem Crescente: ' . $num2 . ' - ' . $num1 . ' - ' . $num3 . '<br>';
                                        echo 'Ordem Decrescente: ' . $num3 . ' - ' . $num1 . ' - ' . $num2;
                                    } 
                                } else {
                                    echo 'Possui Numeros Iguais';
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