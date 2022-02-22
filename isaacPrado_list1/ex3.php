<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h2>Exercício 3: Verifica se o número é positivo, negativo ou igual a Zero</h2>
        <form method="POST">
        
        <label for="numero">Digite um número: </label>
        <input type="number" id="numero" name="numero3" value=""></br>
        <input type="submit" value="Enviar" id="submit">
        </form>
        <!-- PHP -->
        <?php
            $bool = isset($_POST['numero3']);
            if($bool){
                $numero = $_POST['numero3'];
                if($numero > 0){
                    echo "<div class='resultado'>O número ".$numero." é positivo</div>";
                } else if($numero < 0){
                    echo "<div class='resultado'>O número ".$numero." é negativo</div>";
                } else{
                    echo "<div class='resultado'>O número ".$numero." é igual a zero</div>";
                }
            }
        
        ?>
        <br>
        <a href="index.php"><button class="home">Home</button></a>
    </div>
    <div class="nb">
        <div class="btnNB"><a href="ex2.php"><button class="nextback">Voltar</button></a></div>
        <div class="btnNB"><a href="ex4.php"><button class="nextback">Próximo</button></a></div>
    </div> 
</body>



</html>


