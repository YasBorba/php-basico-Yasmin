<!-- o programa exibe os dados recebidos em lista no formato de tabela -->
 <?php
 //array associativo contendo informaçoes de produtos 
 $produtos = [
    ["nome" => "Camiseta", "preco" => 50.00, "quantidade" => 10],
    ["nome" => "Calça jeans", "preco" => 100.00, "quantidade" => 5],
    ["nome" => "Tênis", "preco" => 150.00, "quantidade" => 7],
 ];

 //exibe os produtos em formato de tabela
 echo "<table border='1'>";

    //titulos da tabela
    echo "<tr><th>Nome</th><th>Preço</th><th>Quantidade</th></tr>";

    //para cada 'produto' do vetor 'produtos'
    foreach ($produtos as $produto){
        echo "<tr>";
        echo "<td>" . $produto[ 'nome'] . "</td>";
        echo "<td>R$ " . number_format($produto['preco'], 2, ',', '.') . "</td>";
        echo "<td>" . $produto['quantidade'] . "</td>";
        echo "</tr>";
    }
echo "</table>";

 ?>