<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h2>Exercício 5: Ordem crescente</h2>
        <form method="POST">
        
        <label for="numero">Digite o numero A: </label>
        <input type="number" id="numero" name="numeroA" value=""></br>
        <label for="numero">Digite o numero B: </label>
        <input type="number" id="numero" name="numeroB" value=""></br>
        <input type="submit" value="Enviar" id="submit">
        </form>
        
        <!-- PHP -->
        <?php
            $bool = isset($_POST['numeroA'],$_POST['numeroB']);
            if($bool){
                $numeroA = $_POST['numeroA'];
                $numeroB = $_POST['numeroB'];
                if($numeroA > $numeroB){
                    echo "<div class='resultado'>($numeroB, $numeroA)</div>";
                } else{
                    echo "<div class='resultado'>($numeroA, $numeroB)</div>";
                }
            }
        
        ?>
        <br>
        <a href="index.php"><button class="home">Home</button></a>
    </div>
    <div class="nb">
        <div class="btnNB"><a href="ex4.php"><button class="nextback">Voltar</button></a></div>
        <div class="btnNB"><a href="ex6.php"><button class="nextback">Próximo</button></a></div>
    </div> 
</body>



</html>


