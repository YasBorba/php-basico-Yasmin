<!-- digitar o programa/código -->

<!-- USANDO O METODO POST -->
<!-- POST: método HTML padrão, a requisiçao é
 envianda DIRETAMENTE no corpo do HTML -->

<!-- parte do codigo em HTML -->
 <!DOCTYPE html>
 <html lang="pt-br">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo de formulario de cadastro</title>
 </head>
 <body>
    <form method="post" action="">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br>

        <label for="telefone">Telefone:</label>
        <input type="text" name="telefone" required><br>

        <button type="submit">Enviar</button>

    </form>

<!-- parte do programa em PHP -->
    <?php
        // verifica se o formulario foi enviado
        if($_SERVER ['REQUEST_METHOD'] == 'POST'){
            // Recebe os valores enviados pelo formulario
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $telefone = $_POST['telefone'];

        // Exibe os valores recebidos 
        echo "<h2>Dados Recebidos:</h2>";
        echo "Nome: $nome <br>";
        echo "Email: $email <br>";
        echo "Telefone: $telefone <br>";
        }
    ?>
 </body>
 </html>