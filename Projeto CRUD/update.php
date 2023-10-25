<?php
if (isset($_POST['atualizar'])) {

    //chama arquivo de conexão com o banco
    require 'conectDB.php';

    // Campos que serão atualizados e as chaves
    $nomeCompleto = $_POST['nomeCompleto'];
    $email = $_POST['email'];
    $endereco = $_POST['endereco'];
    $dataNascimento = $_POST['dataNascimento'];
    $valorTotalCompra = $_POST['valorTotalCompra'];
    $numeroParcela = $_POST['numeroParcela'];

    // Consulta SQL para atualizar os campos do cliente com base no CPF
    $sql = "UPDATE clientes SET nomeCompleto = '$nomeCompleto' email = '$email', endereco = '$endereco', dataNascimento = '$dataNascimento', valorTotalCompra = '$valorTotalCompra', numeroParcela = '$numeroParcela' WHERE id = $cpf";

    $conn->close();
}
?>
