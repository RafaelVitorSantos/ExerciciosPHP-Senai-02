<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicios 02 - Lista 02</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <div>
        <form method="post">
            <input type="number" name="idade" placeholder="Digite a sua idade">
            <button> Enviar </button>
            <button type="reset"> Limpar </button>
            <p> 
                <?php
                    if(isset($_POST['idade'])){
                        $idade = $_POST['idade'];

                        if($idade >= 5 && $idade <=7){
                            echo 'Classificação: infantil  A';
                        } else if($idade >= 8 && $idade <= 10){
                            echo 'Classificação: infantil  B';
                        } else if($idade >= 11 && $idade <= 13){
                            echo 'Classificação: juvenil  A';
                        } else if($idade >= 14 && $idade <= 17){
                            echo 'Classificação: juvenil  B';
                        } else if($idade > 17){
                            echo 'Classificação: Sênior';
                        } else {
                            echo 'Idade insuficiente';
                        }
                    }
                ?>
            </p>
        </form>
    </div>
</body>

</html>