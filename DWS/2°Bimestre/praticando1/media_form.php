<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Média Formulário</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </head>

<body>
<h1> Calcular Média</h1>

<form action="calculos_media.php" method="POST">
<div class="mb-3">
  <label for="nota1" class="form-label">Nota 1:</label>
  <input type="number" class="form-control" id="nota1" name="nota1" placeholder="Digite a sua nota"  min="0" step="0.5" max="10">
</div>
<div class="mb-3">
  <label for="nota2" class="form-label">Nota 2:</label>
  <input type="number" class="form-control" id="nota2" name="nota2" placeholder="Digite a sua nota"  min="0" step="0.5" max="10" >
</div>
<div class="mb-3">
  <label for="nota3" class="form-label">Nota 3:</label>
  <input type="number" class="form-control" id="nota3" name="nota3" placeholder="Digite a sua nota"  min="0" step="0.5" max="10">
</div>

<button type="submit" class="btn btn-success">Calcular Média</button>

<button type="reset" class="btn btn-warning">Limpar</button>
</form>
</body>