<?php
include 'conectDB.php';

// Verifica se um CPF foi passado via GET
if (isset($_GET['cpf']) && !empty($_GET['cpf'])) {
    $cpf = $_GET['cpf'];

    // Seleciona o registro do banco de dados baseado no CPF
    $sql = "SELECT * FROM clientes WHERE cpf = '$cpf'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo '<script>alert("Nenhum registro encontrado"); window.location.href = "Crud.php";</script>';
        exit();
    }
} else {
    echo '<script>alert("CPF do registro não fornecido"); window.location.href = "Crud.php";</script>';
    exit();
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Detalhes do Registro</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
    <div class="container">
        <h2>Detalhes do Registro</h2>
        <div>
            <p><strong>Nome Completo:</strong> <?php echo $row['nomeCompleto']; ?></p>
            <p><strong>Email:</strong> <?php echo $row['email']; ?></p>
            <p><strong>CPF:</strong> <?php echo $row['cpf']; ?></p>
            <p><strong>Endereço:</strong> <?php echo $row['endereco']; ?></p>
            <p><strong>Data de Nascimento:</strong> <?php echo $row['dataNascimento']; ?></p>
            <p><strong>Valor Total da Compra:</strong> <?php echo $row['valorTotalCompra']; ?></p>
            <p><strong>Número de Parcelas:</strong> <?php echo $row['numeroParcelas']; ?></p>
        </div>
    </div>
</body>
</html>
