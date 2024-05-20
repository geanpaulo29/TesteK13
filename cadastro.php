<?php

    if(isset($_POST['submit']))
    {
        include_once('config.php');

        
        $nome = $_POST['nome'];
        $cpf = $_POST['cpf'];
        $email = $_POST['email'];
        $data = $_POST['data'];


        $result = mysqli_query($conexao, "INSERT INTO contatos(nome_completo, cpf, email, data_nascimento) VALUES ('$nome', '$cpf', '$email', '$data')");
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
        <form action="cadastro.php" method="POST">
            <fieldset>
            <legend>Cadastro de Clientes</legend>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome">Nome</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="cpf" id="cpf" class="inputUser" required>
                    <label for="cpf">CPF</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="email" name="email" id="email" class="inputUser" required>
                    <label for="email">email</label>
                </div>            
                <br><br>
                <div class="inputBox">
                    <input type="date" name="data" id="data" class="inputUser" required>
                    <label for="data">Data de nascimento</label>
                </div>
                <br><br>
                <input class="button" type="submit" name="submit" id="submit">
                <hr>
                <button class="button2"><a href="procurar.php">Listar dados cadastrados</a></button>
                  
            </fieldset>
        </form>
        
    </div>
</body>
</html>