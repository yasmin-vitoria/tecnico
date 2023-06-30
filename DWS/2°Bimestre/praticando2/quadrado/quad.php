<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Quadradão</title>
    </head>
    <body>
        <h1>Quadrados</h1>

        
        
    <main>
        <?php
            $qnt = filter_input(INPUT_GET,"qnt", FILTER_VALIDATE_INT);

            for ($cont=1; $cont <= $qnt; $cont++) { 
                echo "<div class=cubo> $cont </div>";
            }
        ?>
    </main>
            <style>

              main{
                  display:flex;
                  justify-content: flex-start;
                  flex-wrap: wrap;

              }  

              .cubo {
                  background-color:lightseagreen;
                  font-weight: bold;
                  font-size: 2em;
                  padding: 3%;
                  margin-left: 10pt;
                  margin-bottom: 10pt;
                  
              }

              nav{
                  display:flex;
                  justify-content: space-around;
                  font-size: 32pt;
                  margin-bottom: 7vh;
              }
              a{
                  text-decoration: underline;
                  color: darkslategrey;
                  border: 5pt double black;
                  padding: 2%;
                  background-color:darkseagreen;
              }

            </style>

    </body>
</html>