<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculos da Média</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <h1> Calculos Média</h1>

    <?php
    $n1 = filter_input(INPUT_POST, "nota1", FILTER_SANITIZE_SPECIAL_CHARS);
    $n2 = filter_input(INPUT_POST, "nota2", FILTER_SANITIZE_SPECIAL_CHARS);
    $n3 = filter_input(INPUT_POST, "nota3", FILTER_SANITIZE_SPECIAL_CHARS);
    $media = ($n1 + $n2 + $n3) / 3;
    echo "Um aluno com as notas"  ."<strong> $n1</strong>" .", <strong> $n2</strong>". "  e <strong> $n3</strong>". "  tem uma média igual a ". "<strong> $media </strong>";
    ?>

    <?php
    if($media<=4){
        echo "<br><br>Com essa média o aluno está <strong class='cor'><u> Reprovado </u></strong> ";
    }elseif($media>=6){
        echo "<br><br>Com essa média o aluno está <strong class='cor2'><u> Aprovado </u> </strong>" ;
    }elseif($media<6&&$media>4){
        echo "<br><br>Com essa média o aluno está <strong class='cor3'><u> De Recuperação </u> </strong>";
    }
    ?>
    <style>
       .cor{
        color: red;
       }
       .cor2{
        color: green;
       }
       .cor3{
        color: goldenrod;
       }
    </style>
</body>
</html>