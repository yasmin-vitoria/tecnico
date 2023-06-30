<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        
        .f {
            font-weight: bolder;
        }
        .l {
            text-align: right
        }
        .g {
            color: green;
        }
        .r {
            color: red;
        }
        .b {
            color: blue;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1> Praticando 1 - Funções Built-in e Coleções (Arrays)</h1>

        <hr>

        <form action="form.php" method="POST">

            <div class="row">
                <div class="col-6 border-end">
                    <div class="row">
                        <div class="col">
                            <label for="mensagem">Texto:</label>
                            <textarea name="mensagem" id="mensagem" rows="6" class="form-control"></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-6 mt-3">
                            <button type="submit" class="btn btn-success">Enviar</button>
                            <button type="submit" class="btn btn-warning">Limpar</button>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row">
                        <?php
                        $data = date('d/m/Y');
                        $hora = date('H:i');
                        $mensagem = filter_input(INPUT_POST,  'mensagem', FILTER_SANITIZE_SPECIAL_CHARS);
                        ?>
                        <?php
                        $f = fopen("praticando.txt.txt", "a");
                        fwrite($f, "
========================================
Texto:
$mensagem
Hoje é dia $data e agora são $hora");
                        fclose($f);
                        ?>
                        <?php
                        $maiuscula = strtoupper($mensagem);
                        $web = stripos($mensagem, 'web');
                        $total = strlen($mensagem);
                        $mensagem = str_replace("vermelho", "<span class='r'>vermelho</span>", $mensagem);
                        $mensagem = str_replace("azul", "<span class='b'>azul</span>", $mensagem);
                        $mensagem = str_replace("verde", "<span class='g'>verde</span>", $mensagem);
                        if ($web === false) {
                            $web = 'NÃO';
                        } else {
                            $web = 'SIM';
                        }
                        if (isset($mensagem)) {
                            echo '<div class="l"><p> Hoje é dia <span class="f">' , $data , '</span> e agora são <span class="f">' , $hora , '</span></div>
                            <h5>Texto Informado:</h5>
                            <p>' , $mensagem , '</p>
                            <hr>
                            <h5>Texto em Maiúsculo:</h5>
                            <p>' , $maiuscula , '</p>
                            <hr>
                            <h5>Existe a string "web"?</h5>
                            <p>' , $web , '</p>
                            <hr>
                            <h5>O texto informado tem:</h5>
                            <p>' , $total , ' caracteres</p>';
                        }
                        ?>
                    </div>
                </div>
            </div>

        </form>
    </div>
</body>

</html>