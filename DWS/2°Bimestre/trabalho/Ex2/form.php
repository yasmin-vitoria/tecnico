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
    <hr>

    <form action="destino.php" method="POST" class="form">

    <div class="row mb-3">
        <label for="inicio" class="col-sm-2 col-form-label text-end">Início</label>
            <div class="col-sm-2">
                <input type="number" class="form-control" id="inicio" name="inicio">
            </div>

            <label for="final" class="col-sm-2 col-form-label text-end">Final:</label>
            <div class="col-sm-2">
                <input type="number" class="form-control" id="final" name="final">
            </div>

            <label for="incremento" class="col-sm-2 col-form-label text-end">Incremento:</label>
            <div class="col-sm-2">
                <input type="number" class="form-control" id="incremento" name="incremento">
            </div>

        </div>

        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-success me-2">Enviar</button>
            <button type="reset" class="btn btn-warning">Limpar</button>

        </div>

    </form>

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
</style> 












<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>