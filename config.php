<?php
    $dbHost = 'localHost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'testek13';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

    /*
    if ($conexao->connect_errno) {
        echo "Erro";
    } 
    else{
        echo "Conexão efetuada com sucesso";
    }
    */
?>