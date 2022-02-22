<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 7</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h2>Exercício 7: Cálculo Peso Ideal</h2>
            <form method="POST">
        
                <label for="numero">Selecione seu sexo: </label><br>
                <input type="radio" id="numero" name="sexo" value="M"><span>Masculino</span></br>
                <input type="radio" id="numero" name="sexo" value="F"><span>Feminino</span></br>
                <label for="altura">Digite sua altura: </label>
                <input type="number" name="altura" min="0" max="2.8" step="0.01" value=""><br>
                <input type="submit" value="Calcular" id="submit" style="width: 90px;">
        
            </form>
        
            <!-- PHP -->
            <?php
                $bool = isset($_POST['sexo'],$_POST['altura']);
                if($bool){
                    $sexo = $_POST['sexo'];
                    $altura = $_POST['altura'];
                    if($sexo == "M"){
                        $calc = (72.7 * $altura) - 58;
                        echo "<div class='resultado'>Seu peso ideal é: $calc</div>";
                    } else{
                        $calc = (62.1 * $altura) - 44.7;
                        echo "<div class='resultado'>Seu peso ideal é: $calc</div>";
                    }
                }
        
            ?>
            <a href="index.php"><button class="home">Home</button></a>
    </div>
    <div class="nb">
        <div class="btnNB"><a href="ex6.php"><button class="nextback">Voltar</button></a></div>
        <div class="btnNB"><a href="ex8.php"><button class="nextback">Próximo</button></a></div>
    </div> 

</body>



</html>


