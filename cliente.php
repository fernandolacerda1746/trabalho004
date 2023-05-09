<?php

include("session.php");
include("layout/topo.php");
include("database/database.php");

    // Executa uma consulta SQL
    $sql = "SELECT * 
            FROM cliente";
    $result = $conn->query($sql);

    // Exibe os resultados em uma tabela HTML
    if ($result->num_rows > 0) {
        echo "<h1>Cadastro de Clientes</h1><br>";
        echo "<a href = 'novo_cliente.php' class = 'btn btn-primary'>Novo Cliente</a>";
        echo "<table class = table table-hover>";
        echo "<thead>";
        echo "<tr><th>ID</th><th>Nome</th><th>Data de Nascimento</th><th>Cidade Nascimento</th><th>Cliente Ativo</th><th></th></tr>";
        echo "</thead>";
        echo "<tbody>";

        while($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["id"]. "</td>
                    <td>" . $row["nome"]. "</td>
                    <td>" . $row["data_nascimento"]. "</td>
                    <td>". $row["cidade_nasc"] ."</td>
                    <td>" . $row["ativo"] ."</td>
                    <td>
                        <a href = '/LPW1/Trabalhos/Trabalho004/alterar_cliente.php?id=".$row['id']."'>✏️</a>
                        <a href = '/LPW1/Trabalhos/Trabalho004/excluir_cliente.php?id=".$row['id']."''>🗑️</a>
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