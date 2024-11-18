<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login de Usuário</title>
</head>
<body>
    <h1>Faça o login com o usuário cadastrado</h1>
    <form method="post" action="">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required><br>

        <label for="senha">Senha:</label>
        <input type="password" name="senha" required><br>

        <button type="submit">Entrar</button>
    </form>

    <?php

    // Digitar PHP (1º Aqui)
    //verifica se o formulario foi enviado
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        //recebe os valores enviados pelo formulario
        $nome = $_POST['nome'];
        $senha = $_POST['senha'];

        //abre o arquivo usuarios.txt para leitura
        $arquivo = fopen('usuarios.txt', 'r');
        $login_sucesso = false;

        //le cada linha do arquivo
        while(($linha = fgets($arquivo)) !== false){
            //divide linha pelo delimitador ";"
            list($usuario_arquivo,$senha_arquivo) = explode(';', trim($linha));

            //verifica se o nome e a senha correspondem ao valor no arquivo
            if ($nome == $usuario_arquivo && $senha == $senha_arquivo) {
                $login_sucesso = true;
                break;
            }
        }

        //fecha o arquivo
        fclose($arquivo);

        //exibe a mensagem de sucesso ou erro
        if ($login_sucesso){
            echo "<h3>Login realizado com sucesso! Bem vindo, $nome!</h3>";
        }else{
            echo "<h3 style='color: red;'>Usuario ou senha incorretos</h3>";
        }
    }
    
    ?>
</body>
</html>
