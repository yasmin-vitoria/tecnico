<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http=" X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>

<body>
    <h1>Tabuada</h1>
    <hr>
<?php
$num = filter_input(INPUT_GET, "num", FILTER_SANITIZE_SPECIAL_CHARS);
$i = 1;

while($i <=16){
    $calc = $i * $num;
    echo " $num X $i = $calc <br>";
    $i++;
}

?>

</body>