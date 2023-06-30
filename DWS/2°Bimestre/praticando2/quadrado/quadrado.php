<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <title>Praticando </title>

</head>
<body>

    <h1> Cada um no seu quadrado</h1>
    <hr>

    

        <nav class="Links">

            <a href="quadrado.php?quad=11">11</a>

            <a href="quadrado.php?quad=33">33</a>

            <a href="quadrado.php?quad=7">7</a>

            <a href="quadrado.php?quad=24">24</a>

            <a href="quadrado.php?quad=14">14</a>

            <a href="quadrado.php?quad=18">18</a>

        </nav>

        <main>
            <?php

                $quad = filter_input(INPUT_GET, "quad", FILTER_SANITIZE_NUMBER_INT);

                for($num = 1; $num <= $quad; $num++){

                    echo("<div class=cubo>$num</div>");
                                         
                }

            ?> 
            <div>
                <a class="limpar" href="quadrado.php">Limpar</a>
            </div>
        </main>  

    <style>

        a{
           margin-left: 20pt;
           text-align: center;
           text-decoration: underline;
           color: darkslategrey;
           border: 5pt double black;
           padding: 2%;
           background-color:darkseagreen;

        }   

        nav{ 
           font-size: 32pt;
           margin: 100px;
           display:flex;
           justify-content: space-between;
           margin-right: 20px;   
           margin-bottom: 7vh;
        }

        div{
           padding: 1em;
           width: 1em; 
           margin-left: 10px;
           margin-top: 10px;    
        }

        main{
           display: flex;
           justify-content: flex-start;
           flex-wrap: wrap;         
        }

        .cubo{
            background-color:lightgreen;
            font-weight: bold;
            font-size: 2em;
            padding: 3%;
            margin-left: 10pt;
            margin-bottom: 10pt;
        }

        .limpar{
           padding: 1em;
           width: 1em; 
           margin-left: 10px;
           margin-top: 10px; 
        }

    </style>

</body>
</html>