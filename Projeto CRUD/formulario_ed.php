<?php
include 'conectDB.php';

// Verifica se um CPF foi passado via GET
if (isset($_GET['cpf']) && !empty($_GET['cpf'])) {
    $cpf = $_GET['cpf'];

    // Recupera os detalhes do registro a ser editado
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

// Verifica se o formulário foi submetido para atualização
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recebe os dados do formulário
    $nomeCompleto = $_POST['nomeCompleto'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $endereco = $_POST['endereco'];
    $dataNascimento = $_POST['dataNascimento'];
    $valorTotalCompra = $_POST['valorTotalCompra'];
    $numeroParcelas = $_POST['numeroParcelas'];

    // Atualiza os dados na tabela do banco de dados
    $sql = "UPDATE clientes SET 
            nomeCompleto = '$nomeCompleto',
            email = '$email',
            cpf = '$cpf',
            endereco = '$endereco',
            dataNascimento = '$dataNascimento',
            valorTotalCompra = '$valorTotalCompra',
            numeroParcelas = '$numeroParcelas'
            WHERE cpf = '$cpf'";

        if ($conn->query($sql) === TRUE) {
            echo '<script>alert("Registro atualizado com sucesso!"); window.location.href = "Crud.php";</script>';
            exit();
        } else {
            echo '<script>alert("Erro ao atualizar registro: ' . $conn->error . '"); window.location.href = "Crud.php";</script>';
            exit();
        }
}
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Atualizar Registro</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
    <div class="container">
        <h2>Atualizar Registro</h2>
        <form method="post">
            <div class="form-group">
                <label for="nomeCompleto">Nome Completo:</label>
                <input type="text" class="form-control" id="nomeCompleto" name="nomeCompleto" value="<?php echo $row['nomeCompleto']; ?>">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo $row['email']; ?>">
            </div>
            <div class="form-group">
                <label for="cpf">CPF:</label>
                <input type="text" class="form-control" id="cpf" name="cpf" value="<?php echo $row['cpf']; ?>">
            </div>
            <div class="form-group">
                <label for="endereco">Endereço:</label>
                <input type="text" class="form-control" id="endereco" name="endereco" value="<?php echo $row['endereco']; ?>">
            </div>
            <div class="form-group">
                <label for="dataNascimento">Data de Nascimento:</label>
                <input type="date" class="form-control" id="dataNascimento" name="dataNascimento" value="<?php echo $row['dataNascimento']; ?>">
            </div>
            <div class="form-group">
                <label for="valorTotalCompra">Valor Total da Compra:</label>
                <input type="text" class="form-control" id="valorTotalCompra" name="valorTotalCompra" value="<?php echo $row['valorTotalCompra']; ?>">
            </div>
            <div class="form-group">
                <label for="numeroParcelas">Número de Parcelas:</label>
                <select class="form-control" id="numeroParcelas" name="numeroParcelas">
                    <?php
                    for ($i = 1; $i <= 10; $i++) {
                        $selected = ($i == $row['numeroParcelas']) ? 'selected' : '';
                        echo "<option value='$i' $selected>$i x</option>";
                    }
                    ?>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Atualizar</button>
        </form>
    </div>
</body>
</html>