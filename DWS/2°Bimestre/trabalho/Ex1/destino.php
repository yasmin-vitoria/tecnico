<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1 - Número maior (ordenação)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    

<h1>Exercício 1 - Número maior (ordenação)</h1>
<hr>

<?php
    $n1 = ($_POST["n1"]);
    $n2 = ($_POST["n2"]);
    $n3 = ($_POST["n3"]);

    if (($n1 > $n2) and ($n1 > $n3) and ($n2 > $n3)){
        echo "<p>$n1, $n2 e $n3</p>";
    }
    elseif(($n1 > $n2) and ($n1 > $n3) and ($n3 > $n2)){
        echo "<p>$n1, $n3 e $n2</p>";
    }
    elseif(($n2 > $n1) and ($n2 > $n3) and ($n1 > $n3)){
        echo "<p>$n2, $n1 e $n3</p>";
    }
    elseif(($n2 > $n1) and ($n2 > $n3) and ($n3 > $n1)){
        echo "<p>$n2, $n3 e $n1</p>";
    }
    elseif(($n3 > $n1) and ($n3 > $n2) and ($n1 > $n2)){
        echo "<p>$n3, $n1 e $n2</p>";
    }
    elseif(($n3 > $n1) and ($n3 > $n2) and ($n2 > $n1)){
        echo "<p>$n3, $n2 e $n1</p>";
    }
    elseif(($n1 > $n2) and ($n1 > $n3) and ($n2 == $n3)){
        echo "<p>$n1, $n2 e $n3</p>";
    }
    elseif(($n1 > $n3) and ($n2 > $n3) and ($n1 == $n2)){
        echo "<p>$n1, $n2 e $n3</p>";
    }
    elseif(($n1 > $n2) and ($n3 > $n2) and ($n1 == $n3)){
        echo "<p>$n1, $n3 e $n2</p>";
    }
    elseif(($n2 > $n1) and ($n3 > $n1) and ($n2 == $n3)){
        echo "<p>$n2, $n3 e $n1</p>";
    }
    elseif(($n2 > $n1) and ($n2 > $n3) and ($n1 == $n3)){
        echo "<p>$n2, $n1, $n3</p>";
    }
    elseif(($n3 > $n1) and ($n3 > $n2) and ($n1 == $n2)){
        echo "<p>$n3, $n1, $n2</p>";
    }
    elseif(($n1 == $n2) and ($n1 == $n3) and ($n2 == $n3)){
        echo "<p>Os três números são iguais</p>";
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
</div>


<style>
    body{
        margin: 2%;
    }
    p{
        font-size: xx-large;
    }
</style>   

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>