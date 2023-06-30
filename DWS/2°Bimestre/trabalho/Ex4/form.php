<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4 - Números primos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>

<h1>Exercício 4 - Números primos</h1>

<hr>

    <div class="d-flex justify-content-center">
    <a href="form.php?num=1">Número 1</a>
    <a href="form.php?num=2">Número 2</a>
    <a href="form.php?num=3">Número 3</a>
    <a href="form.php?num=5">Número 5</a>
    <a href="form.php?num=20">Número 20</a>
    <a href="form.php?num=32">Número 32</a>
    <a href="form.php?num=37">Número 37</a>
</div>

    <?php
    function Nprimo($num)
    {
        if ($num < 2) {
            return false;
        }

        for ($cont = 2; $cont <= sqrt($num); $cont++) {
            if ($num % $cont == 0) {
                return false;
            }
        }

        return true;
    }

    if (isset($_GET['num'])) {
        $num = ($_GET['num']);

        if (Nprimo($num)) {
            echo "<p>O número <span class='preto'>$num</span> <span class='verde'> é </span> um número <span class='preto'>PRIMO</span>.</p>";
        } else {
            echo "<p>O número <span class='preto'>$num</span> <span class='vermelho'> não é </span> um número <span class='preto'>PRIMO</span>.</p>";
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
        .preto{
            text-decoration: underline;
            font-weight: bold;
            font-size: xx-large;
        }

        .verde{
            color: green;
            text-decoration: underline;
            font-weight: bold;
            font-size: xx-large;
        }

        .vermelho{
            color: red;
            text-decoration: underline;
            font-weight: bold;
            font-size: xx-large;
        }

        body{
            margin: 3%;
        }

        a{
            margin-left: 10px;
            margin-right: 10px;
        }

        span{
            margin: 5px;
        }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>