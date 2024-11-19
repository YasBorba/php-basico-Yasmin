<!-- Para criar o Banco de Dados -->
<!-- CREATE DATABASE exercicio; -->
<!-- USE exercicio; -->

<!-- Para criar a Tabela -->
<!-- 
    CREATE TABLE clientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL
    ); 
-->

<?php

// Alterar de acordo com a porta 
// verificar conexão com o xampp
$servername = "localhost:3309";
$username = "root";
$password = "";
$dbname = "exercicio";

try{
    //tenta criar uma conexão com o banco de dados
    //confere se as informaçoes estao corretas
    $conn = new mysqli($servername, $username, $password, $dbname);

    //verifica se tem algum erro de conexão
    if ($conn->connect_error){
        throw new Exception("Falha na conexão:" . $conn->connect_error);
    }

    echo "Conexão realizada com sucesso!";
}catch (Exception $e){
    //Exibe uma mensagem de erri amigavel 
    echo "Erro ao conectar o banco de dados:" . $e->getMessage();

}
?>




