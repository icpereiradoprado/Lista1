<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Exercício 8</title>
</head>

<body>
    <div class="container">
        <h2>Exercício 8: Reajuste Salarial</h2>
        <form method="POST">
        
        <label for="numero">Digite seu salário: </label>
        <input type="number" id="numero" name="salario" min=0 step="0.01" value=""></br>
        <input type="submit" value="Calcular" id="submit" style="width: 90px;">
        </form>
        
        <!-- PHP -->
        <?php
            $bool = isset($_POST['salario']);
            if($bool){
                $salario = $_POST['salario'];
                if($salario <= 300){
                    $reajuste = $salario + ($salario * 0.5);
                    echo "<div class='resultado'>Seu salário reajustado é R$ $reajuste</div>";
                } else{
                    $reajuste = $salario + ($salario * 0.3);
                    echo "<div class='resultado'>Seu salário reajustado é R$ $reajuste</div>";
                }
            }
        
        ?>
        <br>
        <a href="index.php"><button class="home">Home</button></a>
    </div>
    <div class="nb">
        <div class="btnNB"><a href="ex7.php"><button class="nextback">Voltar</button></a></div>
    </div> 
</body>



</html>


