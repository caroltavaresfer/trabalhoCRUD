<?php
require 'conectDB.php';

$sql = "SELECT * FROM clientes";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<tr>"; // Adiciona os cabeçalhos da tabela
    echo "<th>Nome Completo</th>";
    echo "<th>Email</th>";
    echo "<th>CPF</th>";
    echo "<th>Endereço</th>";
    echo "<th>Data de Nascimento</th>";
    echo "<th>Valor Total da Compra</th>";
    echo "<th>Número de Parcelas</th>";
    echo "<th>Ações</th>";
    echo "</tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['nomeCompleto'] . "</td>";
        echo "<td>" . $row['email'] . "</td>";
        echo "<td>" . $row['cpf'] . "</td>";
        echo "<td>" . $row['endereco'] . "</td>";
        echo "<td>" . $row['dataNascimento'] . "</td>";
        echo "<td>" . $row['valorTotalCompra'] . "</td>";
        echo "<td>" . $row['numeroParcelas'] . "</td>";
        echo "<td>
            <a href='read.php?cpf=" . $row['cpf'] . "' class='btn btn-info btn-sm'>Detalhes</a>
            <a href='formulario_ed.php?cpf=" . $row['cpf'] . "' class='btn btn-primary btn-sm'>Editar</a>
            <a href='delete.php?cpf=" . $row['cpf'] . "' class='btn btn-danger btn-sm'>Excluir</a>
        </td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='8'>Nenhum registro encontrado</td></tr>";
}
?>
