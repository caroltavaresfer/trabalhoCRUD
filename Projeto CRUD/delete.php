<?php
include 'conectDB.php';

// Verifica se um CPF foi passado via GET
if (isset($_GET['cpf']) && !empty($_GET['cpf'])) {
    $cpf = $_GET['cpf'];

    // Deleta o registro baseado no CPF
    $sql = "DELETE FROM clientes WHERE cpf = '$cpf'";

    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("Registro excluído com sucesso!"); window.location.href = "Crud.php";</script>';
    } else {
        echo '<script>alert("Erro ao excluir o registro: ' . $conn->error . '"); window.location.href = "Crud.php";</script>';
    }
} else {
    echo '<script>alert(""CPF do registro não fornecido"); window.location.href = "Crud.php";</script>';
}

$conn->close();
?>
