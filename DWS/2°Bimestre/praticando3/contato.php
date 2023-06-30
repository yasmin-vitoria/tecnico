<?php
require 'header.php'
?>

<h1>Contato</h1>

<form>

    <div class="row mb-3 mt-3">
        <div class="col-4 offset-2">
            <label for="name">Nome </label>
            <input type="text" class="form-control" id="nome" aria-describedby="emailHelp">
        </div>
        <div class="col-4">
            <label for="email">Email </label>
            <input type="email" class="form-control" id="exampleInputPassword1">
        </div>
    </div>

    <div class="row">
        <div class="col-8 offset-2">
            <textarea name="mensagem" id="mensagem" cols="30" rows="10" class="form-control"></textarea>
        </div>
    </div>

    <div class="row">
        <div class="col-6 mt-3 offset-2">
            <button type="submit" class="btn btn-primary">Enviar</button>
            <button type="submit" class="btn btn-warning">Limpar</button>
        </div>
    </div>

</form>

<?php
     require 'footer.php'
?>






