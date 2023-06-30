<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praticando Animais</title>
    <style>
    .conteinerprincipal{
        display: flex;
    }
    .img{
        max-width: 16em;
        max-height: 10em;
        margin-right: .5em;
        margin-top: .5em;
        cursor: pointer;
    }
    .legal{
        max-width: 30em;
    }
    </style>
</head>
<body>Escolha um Animal e leia uma piada</h1>

    <?php
    if(isset($_GET['animal'])){
        $animal =filter_input(INPUT_GET, "animal", FILTER_SANITIZE_SPECIAL_CHARS);
        
        if($animal=="pombo"){
            echo "<p> Você clicou no <strong>pombo</strong>.</p>";
            echo "<p>Porque o pombo não bate nos outros animais? Porque ele tem pena</p>";
            echo '<img class="legal" id="pombo" src="pombo.jpg" alt="Imagem de um pombo">';
            echo "<br><br>";
            echo '<a href="praticandoanimais.php">Voltar</a>';

        }elseif($animal=="javali"){
            echo "<p>Você clicou no <strong> javali</strong>.</p>";
            echo "<p>Qual é o animal que não vale mais nada? O Javali</p>";
            echo '<img class="legal" id="javali" src="javali.jpg">';
            echo "<br> <br>";
            echo '<a href="praticandoanimais.php"> Voltar</a>';

        }elseif($animal=="galinha"){
            echo "<p>Você clicou no <strong> galinha</strong>.</p>";
            echo "<p> Qual é a galinha que cai no chão e surta? A galinha cai i pira.</p>";
            echo '<img class="legal" id="galinha" src="galinha.jpg">';
            echo "<br> <br>";
            echo '<a href="praticandoanimais.php"> Voltar</a>';

        }elseif($animal=="porco"){
            echo "<p>Você clicou no <strong> porco</strong>.</p>";
            echo "<p>Qual é o animal mais feliz? É o porco. Mesmo depois de morto, está de bacon a vida. </p>";
            echo '<img class="legal" id="porco" src="porco.jpg">';
            echo "<br> <br>";
            echo '<a href="praticandoanimais.php"> Voltar</a>';
        }
    }
    if(empty($_GET['animal'])){
        echo "<div>";
        echo "<div class='conteinerprincipal'>";
        echo "<div>";
        echo "<a href='?animal=pombo'><img src='pombo.jpg' class='img'></a>";
        echo "<a href='?animal=javali'><img src='javali.jpg' class='img'></a>";
        echo "<a href='?animal=galinha'><img src='galinha.jpg' class='img'></a>";
        echo "<a href='?animal=porco'><img src='porco.jpg' class='img'></a>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
    }
    ?>
</body>
</html>