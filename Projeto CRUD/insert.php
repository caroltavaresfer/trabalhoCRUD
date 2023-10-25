<?php
// Verifica se o formulário foi submetido
if(isset($_POST['salvar'])){

//chama arquivo de conexão com o banco
require 'conectDB.php';

// Obtém a informação do formulário
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$endereco = $_POST['endereco'];
$dataNascimento = $_POST['dataNascimento'];
$valorTotalCompra = $_POST['valorTotalCompra'];
$numeroParcela = $_POST['numeroParcela'];

// Prepara a consulta SQL para inserir a informação
$sql = "INSERT INTO clientes (email, cpf, endereco, dataNascimento, valorTotalCompra, numeroParcela) VALUES ('$email', '$cpf', '$endereco', '$dataNascimento', '$valorTotalCompra', '$numeroParcela')";
}
?>