<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destino gerador</title>
</head>
<body>
    
<?php
        $titulo = filter_input(INPUT_POST, "titulo", FILTER_SANITIZE_SPECIAL_CHARS);
        $corpo = filter_input(INPUT_POST, "corpo", FILTER_SANITIZE_SPECIAL_CHARS);
        $cortxt = filter_input(INPUT_POST, "cortxt", FILTER_SANITIZE_SPECIAL_CHARS);
        $urlink = filter_input(INPUT_POST, "urlink", FILTER_SANITIZE_SPECIAL_CHARS);
        $urlimg = filter_input(INPUT_POST, "urlimg", FILTER_SANITIZE_SPECIAL_CHARS);
        $corbg = filter_input(INPUT_POST, "corbg", FILTER_SANITIZE_SPECIAL_CHARS);

        echo "<h1>$titulo</h1><hr>";
        echo "<p>$corpo</p><br><br>";
        echo "<img src=$urlimg> <br><br>"; 
        echo "<a href=$urlink>$urlink</a>";
        
    ?> 

    <p>
        <a href="http://localhost/trabalho/">
            Voltar ao menu principal
        </a>
    </p>

<style> 
        body{
            background-color: <?php echo $corbg; ?>;
            color: <?php echo $cortxt; ?>;
            margin-left: 100px;
            margin-right: 100px;
        }
        
        p{
            text-align: justify;
        }

        h1,p,a{
            font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        img{
            height: 500px;
            width: 800px;
        }

    </style>

</body>
</html>