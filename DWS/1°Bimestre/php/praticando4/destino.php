<h1>Destino GET</h1>

<?php

    $nome = filter_input(INPUT_GET, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_GET, "email", FILTER_SANITIZE_EMAIL);
    $corbg = filter_input(INPUT_GET, "corbg", FILTER_SANITIZE_SPECIAL_CHARS);

    echo "<p>O nome informado foi: $nome<br>O email foi: $email</p>";
?>
    <br>
    
    <p>
        <a href="destino.php?nome=vitoria&email=vitoria@vitoria&corbg=<?= $corbg?>">
            Enviar dados [nome = Vitoria | email = vitoria@gvitoria] 
        </a>
    </p>
    <p>
        <a href="destino.php?nome=yasmin&email=yasmin@yasmin&corbg=<?= $corbg?>">
           Enviar dados [nome = Yasmin | email = yasmin@yasmin]
        </a>
    </p>
    <p>
        <a href="destino.php">
            limpar tudo
        </a>
    </p>
    <p>
        <a href="destino.php?corbg=red&nome=<?= $nome?>&email=<?= $email?>">
            <img src="red.png" alt="">
        </a>
        
        
        <a href="destino.php?corbg=lightblue&nome=<?= $nome?>&email=<?= $email?>">
            <img src="blue.png" alt="">
        </a>
        
        
        <a href="destino.php?corbg=green&nome=<?= $nome?>&email=<?= $email?>">
            <img src="green.png" alt="">
        </a>
        
    </p>

<style>
    img{
        margin: 0;
    }
    body{
        background-color: <?php echo $corbg; ?>;
    }
</style>