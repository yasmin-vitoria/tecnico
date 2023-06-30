<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<?php
require "header.php"
?>
<style>
    .tudo{
        width: 55vw;
        margin:auto;
    }
    #et{
        width: 27vw;
        display: inline-flex;
    }
    button{
        margin-top: 2vh;
    }
</style>
    <form class="tudo"> 
        <div class="mb-3" id="et">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" class="form-control" id="nome" name="nome" aria-describedby="nome">
        </div>
        <div class="mb-3" id="et">
            <label for="email" class="form-label">Email:</label>
            <input type="email" class="form-control" id="email" name="email" aria-describedby="email">
        </div>

        <div class="mb-3">
            <label for="mensagem" class="form-label">mensagem:</label>
            <textarea type="text" class="form-control" id="mensagem" name="mensagem" aria-describedby="mensagem">
            </textarea>
        </div>
        <div class="row">
        <div class="col-6 mt-2 mb-2 offset-5"> 
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-warning">Reset</button>
        </div>   
        </div>
    </form>
    <?php
    require "footer.php"
    ?>