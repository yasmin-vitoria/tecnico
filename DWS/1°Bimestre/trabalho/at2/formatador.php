<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formatador</title>
</head>

<body>
    <h1> Formatador de texto</h1>

    <hr>
    <?php
    $cortxt = filter_input(INPUT_GET, "cortxt", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    $alinhar = filter_input(INPUT_GET, "alinhar", FILTER_SANITIZE_SPECIAL_CHARS);
    $tamanhotxt = filter_input(INPUT_GET, "tamanhotxt", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    ?>



    <p class="formatador">
        Nunca deixe que lhe digam<br>
        Que não vale a pena acreditar no sonho que se tem<br>
        Ou que seus planos nunca vão dar certo<br>
        Ou que você nunca vai ser alguém<br>
        Tem gente que machuca os outros<br>
        Tem gente que não sabe amar<br>
        
    </p>

    <p class="formatador">
        Mas eu sei que um dia a gente aprende<br>
        Se você quiser alguém em quem confiar<br>
        Confie em si mesmo<br>
        Quem acredita sempre alcança<br>
    </p>

    <hr>

    <h2>Controles</h2>

    <p>Cor do texto dos parágrafos:</p>
    <a href="formatador.php?cortxt=pink&alinhar=<?= $alinhar ?>&tamanhotxt=<?= $tamanhotxt ?>">
        <button>Rosa </button></a>

    <a href="formatador.php?cortxt=purple&alinhar=<?= $alinhar ?>&tamanhotxt=<?= $tamanhotxt ?>">
        <button>Roxo</button></a>

    <a href="formatador.php?cortxt=orange&alinhar=<?= $alinhar ?>&tamanhotxt=<?= $tamanhotxt ?>">
        <button>Laranja </button></a>

    <p>Alinhamento do texto dos parágrafos:</p>
    <a href="formatador.php?cortxt=<?= $cortxt ?>&alinhar=left&tamanhotxt=<?= $tamanhotxt ?>">
        <button>Esquerda</button></a>

    <a href="formatador.php?cortxt=<?= $cortxt ?>&alinhar=right&tamanhotxt=<?= $tamanhotxt ?>">
        <button>Direita </button></a>

    <a href="formatador.php?cortxt=<?= $cortxt ?>&alinhar=center&tamanhotxt=<?= $tamanhotxt ?>">
        <button>Centro</button></a>


    <p>Tamanho da fonte:</p>


    <a href="formatador.php?cortxt=<?= $cortxt ?>&alinhar=<?= $alinhar ?>&tamanhotxt=small">
        <button> Pequena</button></a>

    <a href="formatador.php?cortxt=<?= $cortxt ?>&alinhar=<?= $alinhar ?>&tamanhotxt=medium">
        <button> Média</button></a>

    <a href="formatador.php?cortxt=<?= $cortxt ?>&alinhar=<?= $alinhar ?>&tamanhotxt=xx-large">
        <button>Grande</button></a>

    <p>
        <a href="http://localhost/trabalho/">
            Voltar ao menu principal
        </a>
    </p>

    <style>
        .formatador {
            font-size:
                <?php echo $tamanhotxt; ?>
            ;
            color:
                <?php echo $cortxt; ?>
            ;
            text-align:
                <?php echo $alinhar; ?>
            ;
        }

        body {
            margin-right: 70px;
            margin-left: 70px;
        }

        button,
        h1,
        h2,
        p,
        a {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
    </style>

</body>

</html>