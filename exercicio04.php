<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 04 - Lista 02</title>
    <link rel="stylesheet" href="index.css">
</head>

<body>
    <form name="action" action="" method="POST">
        <input type="text" name="num1" placeholder="digite um valor inicial">
        <input type="text" name="num2" placeholder="digite um valor final">
        <input type="submit">
    </form>
</body>

<?php
    if (isset($_POST['num1'])) {
        if (isset($_POST['num2'])) {
            $inicial = $_POST['num1'];
            $final = $_POST['num2'];

            echo "COM O FOR: ";
            for ($inicial; $inicial <= $final; $inicial++) {
                echo $inicial . " ";
            }
            $inicial = $_POST['num1'];
            $final = $_POST['num2'];

            echo "<br> COM O WHILE: ";
            while ($inicial <= $final) {
                echo $inicial . " ";
                $inicial++;
            }
            $inicial = $_POST['num1'];
            $final = $_POST['num2'];

            echo "<br> COM O DO WHILE: ";
            do {
                echo $inicial . " ";
                $inicial++;
            } while ($inicial <= $final);
        }
    }
?>

</html>