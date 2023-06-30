<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>

<body>

    <h1> Formulário gerador de página</h1>

    <hr>

    <div>
        <form action="destino.php" method="POST">

            <label for="titulo">Título da página: </label>
            <input type="text" name="titulo" id="titulo">
            <br><br>

            <label for="corpo">Corpo:</label>

            <textarea name="corpo" id="corpo" cols="50" rows="4">
        </textarea>
            <br><br>

            <label for="cortxt">Cor texto:</label>
            <input type="color" name="cortxt" id="cortxt">
            <br><br>

            <label for="urlimg">URL imagem:</label>
            <input type="url" name="urlimg" id="urlimg">
            <br><br>

            <label for="urlink">URL link:</label>
            <input type="url" name="urlink" id="urlink">
            <br><br>

            <label for="corbg">cor background:</label>
            <input type="color" name="corbg" id="corbg">
            <br><br>

            <button type="submit">Enviar</button>
            <button type="reset">Limpar</button>


        </form>
    </div>

    
    <p>
        <a href="http://localhost/trabalho/">
            Voltar ao menu principal
        </a>
    </p>

    <style>
        label{
            display: inline-block;
            width: 200px;
            text-align: right;
        }
        button {
            border-radius: 4px;
            border: 1px solid #ccc;
            width: 75px;
            height: 35px;
            text-align: center;
        }

        button[type=submit] {
            background-color: violet;
            color: white;
        }

        button[type=reset] {
            background-color: orange;
            color: black;
        }

        h1,
        label,
        button {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            margin-left: 100px;
            margin-right: 100px;
        }

        input,
        textarea {
            border-radius: 4px;
            border: 1px solid #ccc;
            width: 500px;
        }

        input[type=text],
        input[type=url] {
            height: 35px;
        }

        input[type=color] {
            height: 30px;
            padding-left: 10px;
            padding-right: 10px;
            padding-top: 3px;
            padding-bottom: 3px;
        }

        div {
            margin-top: 5px;
            margin-left: 25%;
            margin-right: 25%;
        }
    </style>

</body>

</html>