<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acessa ou apagada?</title>
</head>
<body>
    
    <h1>Lâmpada On/Off </h1>

    <?php
        $corbg = filter_input(INPUT_GET, "corbg", FILTER_SANITIZE_SPECIAL_CHARS);
        $foto = filter_input(INPUT_GET, "foto", FILTER_SANITIZE_SPECIAL_CHARS);
        $cortxt = filter_input(INPUT_GET, "cortxt", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    ?>
     
    <div>
        <a href="lampada.php?corbg=white&cortxt=black&foto=acesa.png">
            <button> 
                   On       
            </button>
        </a>
    </div>

    <div>
        <?php
            echo "<img src=$foto> <br><br>"; 
        ?>
    </div>

    <div>
        <a href="lampada.php?corbg=black&cortxt=white&foto=apagada.png">
            <button>   
                    Off
            </button>
        </a>
    </div>

    <p>
        <a href="http://localhost/trabalho/">
            Voltar ao menu principal
        </a>
    </p>
    
    <style>
    body{
        background-color: <?php echo $corbg; ?>;
        color: <?php echo $cortxt; ?>;
    }    

    img{
        width: 90%;
        margin: auto;
        display: block;
        
    }
    
    button{
            border-radius: 2px;
            border: 1px solid #ccc;
            width: 100px;
            height: 50px;
            text-align: center;
            font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: black;
            font-weight: bold;    
            font-size: large;
        }

    div{
        display: inline-block;
    }

    </style>


</body>
</html>