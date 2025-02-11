<?php

$host = 'localhost'; // O host é o endereço , seja dominio ou IP, do servidor de banco de dados que está utilizando
$db_name = 'teste_db'; // O nome da base de dados que será utilizado pela sua palicação, nota-se que para conexão com mais de uma base de dados, recomendo fazer mais de um arquivo conexão

$db_user = 'root'; // Nome do usuario que criou no banco
$db_password = ''; // Senha do usuario que criou no banco

try{ // conexão com mysql
    $connPDOMySql = new PDO("mysql:host=$host;dbname=$db_name",$db_user,$db_password);
    $connPDOMySql -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connPDOMySql -> exec("set names utf8");
}catch(PDOexception $e){
    echo $e->getMessage();
}

?>