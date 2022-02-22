<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h2>Exercício 2: Verifica se o número é maior ou igual a 10</h2>
        <form method="POST">
        
        <label for="numero">Digite um número: </label>
        <input type="number" id="numero" name="numero2" value=""></br>
        <input type="submit" value="Enviar" id="submit">
        </form>
        
        <!-- PHP -->
        <?php
            $bool = isset($_POST['numero2']);
            if($bool){
                $numero = $_POST['numero2'];
                if($numero >= 10){
                echo "<div class='resultado'>O número ".$numero." é maior ou igual à 10</div>";
                } else{
                echo "<div class='resultado'>O nímero ".$numero." é menor do que 10</div>";
                }
            }
        ?>
        <br>
        <a href="index.php"><button class="home">Home</button></a>
    </div>
    <div class="nb">
        <div class="btnNB"><a href="ex1.php"><button class="nextback">Voltar</button></a></div>
        <div class="btnNB"><a href="ex3.php"><button class="nextback">Próximo</button></a></div>
    </div> 
</body>



</html>


