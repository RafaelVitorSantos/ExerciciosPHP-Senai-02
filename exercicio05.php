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
    <div id="container">
        <?php
        $cont = 0;
        ?>
            <p>
                <?php
                    echo '<table>';
                    
                    for($i = 0; $i <= 30; $i++){
                        echo '<tr>';
                        if($cont % 2 == 0){
                            echo '<td class="bg-black cl-white">';
                            echo 'Rafael Vitor dos Santos' . $i;
                            echo '</td>';
                            $cont++;
                        } else {
                            echo '<td class="bg-white cl-black">';
                            echo 'Rafael Vitor dos Santos' . $i;
                            echo '</td>';
                            $cont++;
                        }
                        echo '</tr>';
                    }
                    echo '</table>';
                ?>
            </p>
        </form>
    </div>
</body>

</html>