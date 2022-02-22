<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercício 1</title>
</head>

<body>
    <div class="container">

        <h2>Exercício 1: Verifica se o número é maior do que 10</h2>
        <div class="form">
            <form method="POST" id="ex1">
                <label for="numero" id="teste">Digite um número: </label>
                <input type="number" id="numero" name="numero1"></br>
                <div class="submit"><input type="submit" value="Enviar" id="submit"></div>
            </form>
        </div>

        <!-- PHP -->
        
        <div class="php">
            <?php
                $bool = isset($_POST['numero1']);
                if($bool){
                    $numero = $_POST['numero1'];
                    if($numero > 10){
                        echo '<div class="resultado"><p>O número '.$numero.' é maior do que 10</p></div>';
                    } else{
                        echo '<div class="resultado">O número '.$numero.' é menor do que 10</div>';
                    }
                }
            ?>
        </div>
        <a href="index.php"><button class="home">Home</button></a>
        
    </div>    
    <div class="nb">
        <div class="btnNB"><a href="index.php"><button class="nextback">Voltar</button></a></div>
        <div class="btnNB"><a href="ex2.php"><button class="nextback">Próximo</button></a></div>
    </div>                

    

</body>



</html>