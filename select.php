<?php

require "conexao.php"; // Requisita o arquivo, seria a mesma coisa que incluir uma biblioteca, porém com o arquivo que criamos para conexão

// Agora vamos fazer nossa pagina PHP buscar dados do banco, nesse caso, iremos buscar todos os dados da tabela 'teste_db.usuarios'

$queryUsuario = 'SELECT * FROM teste_db.usuarios'; // Usamos a palavra Query ou a letra q normalmente para identificar variaveis contendo comandos sql
$resultadoUsuario = $connPDOMySql->prepare($queryUsuario); // Prepara o comando para ser executada
$resultadoUsuario->execute(); // Executa o comando

$usuarios = $resultadoUsuario->fetchAll(PDO::FETCH_OBJ); // Existem dois tipos de fetchAll, por padrão ele vem como PDO::FETCH_ASSOC, mas também pode ser PDO::FETCH_OBJ, vou mostrar a diferença dps

// Vamos criar outra query para buscar informações da nossa tabela 'teste_db.texto'

$id_texto = 1; 

// vamos adicionar um where nesse select para buscar apenas o valor da nossa variavel id_texto

$queryTexto = 'SELECT * FROM teste_db.texto WHERE id = :id_texto'; // Usamos a palavra Query ou a letra q normalmente para identificar variaveis contendo comandos sql

$resultadoTexto = $connPDOMySql->prepare($queryTexto); // Prepara o comando para ser executada
$resultadoTexto->bindParam(":id_texto", $id_texto, PDO::PARAM_STR); // Vamos relacionar a variavel php com a variavel no sql usando esse comando (nota-se os : antes)
$resultadoTexto->execute(); // Executa o comando

$texto = $resultadoTexto->fetch(PDO::FETCH_OBJ); // Existem dois tipos de fetchAll, por padrão ele vem como PDO::FETCH_ASSOC, mas também pode ser PDO::FETCH_OBJ, vou mostrar a diferença dps



foreach ($usuarios as $usuario) { // Nota-se que o primeiro valor é o nome da variavel que contem os dados e o segundo o nome da variavel que contera os dados de cada unico usuario
    echo "ID: " . $usuario->id . "<br>";
    echo "Nome: " . $usuario->nome . "<br>";
    echo "Email: " . $usuario->email . "<br><br>";
}

//---------------------------------------------------------------------------------------------------------------------------------------------------------------------//
//Vamos exibir os usuarios dentro de um campo que vai permitir você selecionar um deles
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste Banco de dados</title>
    <style>
    .center-box {
        width: 200px;
        margin: 0 auto;
        text-align: center; 
        background: lightcoral;
        padding: 20px;
        margin-bottom: 10px;
    }
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
    <div class="center-box">
        <label for="usuarios">Vamos selecionar um Usuário:</label>

        <select name="usuarios" id="usuarios">
            <?php
            
            
            foreach ($usuarios as $usuario) { // Nota-se que o primeiro valor é o nome da variavel que contem os dados e o segundo o nome da variavel que contera os dados de cada unico usuario
                // Echo é o comando php que equivale a um print, podemos fazer um echo que adicione codigo HTML se certas condições que definirmos forem atendidas
                // No caso, como estamos em um loop dos resultados do nosso select, para cada usuario, criaremos um option com suas informações

                echo "<option value=".$usuario->id.">".$usuario->nome."</option>"; // Colocamos dentro de um echo para que o PHP crie uma opção selecionavel para cada usuario encontrado
            }
            
            ?>
        </select>
    </div> 
    
    <!-- Vamos fazer de uma forma diferente agora, vamos buscar informações de uma unica linha no banco e exibi-las sem fazer um loop na tela -->

    <div class="center-page">
        <h1><?php echo $texto->titulo; ?></h1>
        <p><?php echo $texto->texto; ?></p>
    </div>
</body>
</html>
