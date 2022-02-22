<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 6</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h2>Exercício 6: Média das Notas</h2>
        <form method="POST">
        
            <label for="numero">Digite a nota A: </label>
            <input type="number" id="numero" name="notaA" min="0" max="10" step="0.1" value=""></br>
            <label for="numero">Digite a nota B: </label>
            <input type="number" id="numero" name="notaB" min="0" max="10" step="0.1" value=""></br>
            <label for="numero">Digite a nota C: </label>
            <input type="number" id="numero" name="notaC" min="0" max="10" step="0.1" value=""></br>
            <label for="numero">Digite a nota D: </label>
            <input type="number" id="numero" name="notaD" min="0" max="10" step="0.1" value=""></br>
            <input type="submit" value="Calcular Média" id="submit" style="width: 120px;">
        </form>
        
        <!-- PHP -->
        <?php
            $bool = isset($_POST['notaA'],$_POST['notaB'],$_POST['notaC'],$_POST['notaD']);
            if($bool){
                $notaA = $_POST['notaA'];
                $notaB = $_POST['notaB'];
                $notaC = $_POST['notaC'];
                $notaD = $_POST['notaD'];
                $soma = $notaA + $notaB + $notaC + $notaD;
                $media = $soma / 4;
                if($media > 7.0){
                echo "<div class='resultado'>A média do aluno é ".$media." e está Aprovado. Nota superior a 7.0</div>";
                } else{
                echo "<div class='resultado'>A média do aluno é ".$media." e está Reprovado. Nota inferior a 7.0</div>";
                }
            }
        
        ?>

        <a href="index.php"><button class="home">Home</button></a>
    </div>
    <div class="nb">
        <div class="btnNB"><a href="ex5.php"><button class="nextback">Voltar</button></a></div>
        <div class="btnNB"><a href="ex7.php"><button class="nextback">Próximo</button></a></div>
    </div> 
</body>



</html>


