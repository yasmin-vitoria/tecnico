<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2 - Contador aprimorado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>

<h1>Exercício 2 - Contador aprimorado</h1>

<br>

<h2>Parâmetros informados:</h2>

<?php
    $inicio = ($_POST["inicio"]);
    $final = ($_POST["final"]);
    $incremento = ($_POST["incremento"]);

    echo "<div class='inf'><p>Início: <strong>$inicio</strong> Final: <strong>$final</strong> Incremento: <strong>$incremento</strong></p></div><br>";
    
    if(($inicio > $final)){
        echo "<h2>Contador decrescente<br>";

        for($cont=$inicio; $cont>=$final; $cont-=$incremento){
            echo "$cont ";
        }
    }
    else{
        echo "<h2>Contador crescente<br>";

        for($cont=$inicio; $cont<=$final; $cont+=$incremento){
            echo "$cont ";
        }
    }

?>



<hr>

<h2>Menu exercícios</h2>

    <a class="text-link" href="../Ex1/form.php">Exercício 1</a>
    <br>
    <a class="text-link" href="../Ex2/form.php">Exercício 2</a>
    <br>
    <a class="text-link" href="../Ex3/form.php">Exercício 3</a>
    <br>
    <a class="text-link" href="../Ex4/form.php">Exercício 4</a>
    <br>

<style>
    body{
        margin: 2%;
    }

    .inf{
        padding:  10px;
        padding-bottom: 5px;
        padding-left: 15px;
        background-color: lightgray;
        font-size: x-large;
    }

</style>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>