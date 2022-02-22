<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h2>Exercício 4: Verfica se o resultado da soma é maior, menor ou igual ao da multiplicação. </h2>
        <form method="POST">
        
        <label for="numero">Digite o número A: </label>
        <input type="number" id="numero" name="numeroA" value=""></br>
        <label for="numero">Digite o número B: </label>
        <input type="number" id="numero" name="numeroB" value=""></br>
        <label for="numero">Digite o número C: </label>
        <input type="number" id="numero" name="numeroC" value=""></br>
        <label for="numero">Digite o número D: </label>
        <input type="number" id="numero" name="numeroD" value=""></br>
        <input type="submit" value="Enviar" id="submit">
        </form>
        
        <!-- PHP -->
        <?php
            $bool = isset($_POST['numeroA'],$_POST['numeroB'],$_POST['numeroC'],$_POST['numeroD']);
            if($bool){
                $numeroA = $_POST['numeroA'];
                $numeroB = $_POST['numeroB'];
                $numeroC = $_POST['numeroC'];
                $numeroD = $_POST['numeroD'];
                $soma = $numeroA + $numeroC;
                $mult = $numeroB * $numeroD;
                echo "<div class='resultado' style='margin-top: 10px;'>Soma: $numeroA + $numeroC = $soma</div></br>";
                echo "<div class='resultado' style='margin-top: 10px;'>Multiplicação: $numeroB x $numeroD = $mult</div></br>";
                if($soma > $mult){
                echo "<div class='resultado' style='margin-top: 10px;'>A + C é maior que B x D</div>";
                } else if($soma < $mult){
                echo "<div class='resultado' style='margin-top: 10px;'>A + C é menor que B x D</div>";
                } else{
                echo "<div class='resultado' style='margin-top: 10px;'>A + C é igual a B x D</div>";
                }
            }
        ?>
        <a href="index.php"><button class="home">Home</button></a>
    </div>
    <div class="nb">
        <div class="btnNB"><a href="ex3.php"><button class="nextback">Voltar</button></a></div>
        <div class="btnNB"><a href="ex5.php"><button class="nextback">Próximo</button></a></div>
    </div> 
</body>



</html>


