<?php

require "conexao.php"; // Assim como no select, requisita o arquivo

if(isset($_POST['inserirUsuario'])){

    $nome = $_POST['nome']; // Nome enviado via POST
    $email = $_POST['email']; // Email enviado via POST 

    $queryInsert = 'INSERT INTO usuarios (nome, email) VALUES (:nome,:email)'; // Usamos a palavra Query ou a letra q normalmente para identificar variaveis contendo comandos sql

    $resultadoInsert = $connPDOMySql->prepare($queryInsert);

    $resultadoInsert->bindParam(":nome", $nome, PDO::PARAM_STR); 
    $resultadoInsert->bindParam(":email", $email, PDO::PARAM_STR); 
    
    $resultadoInsert->execute(); // Executa o comando

    echo 'Inserido com sucesso';


}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste Banco de dados</title>
    <style>
    .center-page {
        width: 500px;
        margin: 0 auto;
        text-align: center; 
        background: lightcoral;
        padding: 20px;
    }
    </style>
</head>
<body>
    <div class="center-page">
        <form action="" method="post" name="inserirUsuario">

        <label for="nome">Nome:</label>

        <input type="text" id="nome" name="nome" required><br><br>

        <label for="email">Email:</label>

        <input type="email" id="email" name="email" required><br><br>

        <input type="submit" name="inserirUsuario" value="Submit">

        <a href="select.php">Retornar</a>
        </form>
    </div> 

</body>
</html>

