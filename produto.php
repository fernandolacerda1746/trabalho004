<?php

    include("session.php");
    include("layout/topo.php");
    include("database/database.php");

    // Executa uma consulta SQL
    $sql = "SELECT * 
            FROM produto";
    $result = $conn->query($sql);    

    // Exibe os resultados em uma tabela HTML
    if ($result->num_rows > 0) {
        echo "<h1>Cadastro de Produtos</h1><br>";
        echo "<a href = 'novo_produto.php' class = 'btn btn-primary'>Novo Produto</a>";
        echo "<table class = table table-hover>";
        echo "<thead>";
        echo "<tr><th>ID</th><th>Nome</th><th>Preço</th><th>Quantidade</th><th>Peso</th><th></th></tr>";
        echo "</thead>";
        echo "<tbody>";
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>" . $row["id"]. "</td>
                    <td>" . $row["nome"]. "</td>
                    <td>" . $row["preco"]. "</td>
                    <td>". $row["quantidade"] ."</td>
                    <td>" . $row["peso"] ."</td>
                    <td>
                        <a href = '/LPW1/Trabalhos/Trabalho004/alterar_produto.php?id=".$row['id']."'>✏️</a>
                        <a href = '/LPW1/Trabalhos/Trabalho004/excluir_produto.php?id=".$row['id']."''>🗑️</a>
                    </td>
                </tr>";
            }
            echo "</tbody>";
            echo "</table>";
            } else {
                echo "Nenhum resultado encontrado.";
            }

            // Fecha a conexão com o banco de dados
            $conn->close();

            include("layout/baixo.php");

?>