<?php
include 'conectDB.php';

// Verificação se os campos obrigatórios não estão vazios
// Verificação se os campos obrigatórios não estão vazios
if (
    !empty($_POST['nomeCompleto']) &&
    !empty($_POST['email']) &&
    !empty($_POST['cpf']) &&
    !empty($_POST['endereco']) &&
    !empty($_POST['dataNascimento']) &&
    !empty($_POST['valorTotalCompra']) &&
    !empty($_POST['numeroParcelas'])
) {
    // Receber os dados do formulário
    $nomeCompleto = $_POST['nomeCompleto'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $endereco = $_POST['endereco'];
    $dataNascimento = $_POST['dataNascimento'];
    $valorTotalCompra = $_POST['valorTotalCompra'];
    $numeroParcelas = $_POST['numeroParcelas'];

    // Inserir os dados na tabela do banco de dados
    $sql = "INSERT INTO clientes (nomeCompleto, email, cpf, endereco, dataNascimento, valorTotalCompra, numeroParcelas) 
            VALUES ('$nomeCompleto', '$email', '$cpf', '$endereco', '$dataNascimento', '$valorTotalCompra', '$numeroParcelas')";

    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("Novo registro criado com sucesso!"); window.location.href = "Crud.php";</script>';
    } else {
        echo '<script>alert("Erro: ' . $conn->error . '"); window.location.href = "Crud.php";</script>';
    }
} else {
    echo '<script>alert("Por favor, preencha todos os campos obrigatórios."); window.location.href = "Crud.php";</script>';
}

$conn->close();
?>