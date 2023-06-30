<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3 - Par e Ímpar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>


    <h1>Exercício 3 - Par e Ímpar</h1>
    <hr>

    <form method="GET" class="form">

        <div class="row mb-3">
            <label for="n1" class="col-sm-2 col-form-label text-end">Número:</label>
            <div class="col-sm-2">
                <input type="number" class="form-control" id="n1" name="n1">
            </div>
            <div class="col-4">
                <button type="submit" class="btn btn-success me-2">Enviar</button>
                <button type="reset" class="btn btn-warning">Limpar</button>
            </div>
        </div>


    </form>

    <?php
    $n1 = filter_input(INPUT_GET, "n1", FILTER_SANITIZE_SPECIAL_CHARS);

    if (empty($n1)) {
        echo "";
    } elseif ($n1 % 2 == 0) {
        echo "<p>O número <span class='par'>$n1</span> é <span class='par'>PAR</span>.</p>";
        echo "<p>O <span class='par'>DOBRO</span> de <span class='par'>$n1</span> é <span class='par'>" . $n1 * 2 . "</span>.</p><br><br>";
    } elseif ($n1 % 2 != 0) {
        echo "<p>O número <span class='impar'>$n1</span> é <span class='impar'>ÍMPAR</span>.</p>";
        echo "<p>O <span class='impar'>TRIPLO</span> de <span class='impar'>$n1</span> é <span class='impar'>" . $n1 * 3 . "</span>.<br><br></p>";
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
        body {
            margin: 3%;
        }

        .par {
            padding: 8px;
            max-width: 100px;
            max-height: 100px;
            border: 2px solid green;
            background-color: #E6FFE3;
            font-size: xx-large;
            text-align: center;
        }

        .impar {
            padding: 8px;
            max-width: 100px;
            max-height: 100px;
            border: 2px solid orange;
            background-color: #ffeab7;
            font-size: xx-large;
            text-align: center;
        }
    </style>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>