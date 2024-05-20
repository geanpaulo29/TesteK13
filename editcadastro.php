<?php

    if(isset($_POST['submit']))
    {
        include_once('config.php');

        
        $cep = $_POST['cep'];
        $rua = $_POST['rua'];
        $num = $_POST['num'];
        $bairro = $_POST['bairro'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];


        $result = mysqli_query($conexao, "INSERT INTO contatos(cep, rua, numero, bairro, cidade, estado) VALUES ('$cep', '$rua', '$num', '$bairro', '$cidade', '$estado')");
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro</title>
    <style>
    body {
        font-family: 'Trebuchet MS',  sans-serif;
        margin: 20px;
        background-image: linear-gradient(to left, blue, rgb(130, 37, 158));
    }
    form {
        max-width: 400px;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 10px;
        background-color: rgba(0, 0, 0, 0.6);
    }
    fieldset {
        border: none;
    }
    legend {
        font-size: 18px;
        font-weight: bold;
        margin-bottom: 10px;
        color: rgb(255, 255, 255);
    }
    label {
        display: block;
        margin-bottom: 10px;
        color: white;
        margin-left: 10px;
    }
    .button, .button2, a{
        padding: 15px;
        border-radius: 10px;
        background-color: rgb(255, 0, 242);
        color: white;
        font-family: 'Trebuchet MS', sans-serif;
        border: none;
        text-decoration: none;
    }
    
    .inputUser{
        padding: 10px;
        border-radius: 8px;
    }

</style>
</head>
<body>
    <div class="box">
        <form action="editcadastro.php" method="POST">
            <fieldset>
            <legend>Cadastro de Clientes</legend>
                <div class="inputBox">
                    <input type="text" name="cep" id="cep" class="inputUser">
                    <label for="cep">CEP</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="rua" id="rua" class="inputUser">
                    <label for="rua">Rua</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="num" id="num" class="inputUser" >
                    <label for="num">Número</label>
                </div>            
                <br><br>
                <div class="inputBox">
                    <input type="text" name="bairro" id="bairro" class="inputUser">
                    <label for="bairro">Bairro</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser">
                    <label for="cidade">Cidade</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser">
                    <label for="estado">Estado</label>
                </div>
                <br><br>

                <input class="button" type="submit" name="submit" id="submit">
                <hr>
                <button class="button2"><a href="procurar.php">Listar dados cadastrados</a></button>
                <hr>
                <button class="button"><a href="cadastro.php">Voltar</a></button>

                  
            </fieldset>
        </form>
        
    </div>
</body>
</html>