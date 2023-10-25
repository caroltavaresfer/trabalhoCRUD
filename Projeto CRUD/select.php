<?php
//chama arquivo de conexão com o banco
require 'conectDB.php';

//faz SELECT do banco
$sql = "SELECT * FROM clientes";
$data = $conn->query($sql);

//monta a tabela
foreach ($data as $row) {
    echo '<tr>';
    echo '<td>' . $row['nomeCompleto'] . '</td>';
    echo '<td>' . $row['email'] . '</td>';
    echo '<td>' . $row['cpf'] . '</td>';
    echo '<td>' . $row['endereco'] . '</td>';
    echo '<td>' . $row['dataNascimento'] . '</td>';
    echo '<td>' . $row['valorTotalCompra'] . '</td>';
    echo '<td>' . $row['numeroParcela'] . '</td>';
    echo '</tr>';
}

?>