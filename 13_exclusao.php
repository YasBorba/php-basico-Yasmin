<!-- Passar id via URL -->
<!-- http://localhost/php-basico-Alunos/13_exclusao.php?id=2-->

<?php
// Conecta ao banco de dados
$servername = "localhost:3309";
$username = "root";
$password = "";
$dbname = "exercicio";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

//verifica se um id foi passado via URL para exclusão
if (isset($_GET['id'])){
    $id =$_GET['id'];

    //deleta o cliente com o id espeificado 
    $sql = "DELETE FROM clientes WHERE id='$id'";

    if ($conn->query($sql) === TRUE){

        //exibe a mensagem 
        echo "<p style='color: green;'>Cliente excluido com sucesso!</p>";
    }else{
        //exibe a mensagem
    echo "<p style= 'color:red;'>Erro ao excluir: " . $conn->error . "</p>";
    }
}

// Fecha a conexão
$conn->close();
?>
