<?php
    include_once('config.php');

    $sql = "SELECT * FROM contatos ORDER BY cpf DESC";

    $result = $conexao->query($sql);


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

    .button{
        padding: 15px;
        border-radius: 10px;
        background-color: rgb(255, 0, 242);
        color: white;
        font-family: 'Trebuchet MS', sans-serif;
    }
    .table {
        border-collapse: separate;
        border-spacing: 0;
        width: 100%;
        color: white;
    }

  .table th, .table td {
        border: 1px solid #ddd;
        padding: 15px;
        text-align: left;
    }

    .box{
        margin-top: 30px;
        background-color: rgba(0, 0, 0, 0.6);
    }

    h1{
        color: white;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        text-align: center;
    }

    .button, a{
        padding: 15px;
        border-radius: 10px;
        background-color: blue;
        color: white;
        font-family: 'Trebuchet MS', sans-serif;
        border: none;
        text-decoration: none;
        position: relative;
    }


</style>
</head>
<body>
    <h1>Lista de contatos</h1>
    <button class="button"><a href="cadastro.php">Voltar</a></button>
    <div class="box">
    <table class="table">
        <thead>
        <tr>
          <th scope="col" class="cpf">CPF</th>
          <th scope="col">Nome</th>
          <th scope="col">email</th>
          <th scope="col">Data</th>
          <th scope="col">...</th>
        </tr>
        </thead>
        <tbody>
            <?php
                while($user_data = mysqli_fetch_assoc($result))
                {
                    echo "<tr>";
                    echo "<td>".$user_data['cpf']."</td>";
                    echo "<td>".$user_data['nome_completo']."</td>";
                    echo "<td>".$user_data['email']."</td>";
                    echo "<td>".$user_data['data_nascimento']."</td>";
                    
                    echo "<td>
                        <a class='btn' href='editcadastro.php?$user_data[cpf]'>
                        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16'>
                        <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
                        <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z'/>
                      </svg> 
                      </a>
                      </td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>
    </div>
</body>
</html>