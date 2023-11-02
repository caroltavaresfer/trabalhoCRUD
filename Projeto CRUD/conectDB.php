<?php
//Tratamento de Erros
error_reporting(E_ALL); //define o tipo de report de erros para E_ALL, ou seja, TODOS os tipos de erro serão reportados na depuração
ini_set('display_errors', 0); //define tipo de exibição de erros para '0', eles não serão exibidos na saída

//variaveis de conexão
$servername = "127.0.0.1"; //IP do banco de dados, nome do servidor que estamos utilizando
$username = "root"; // usuario para acessar o banco
$password = ""; //senha para acessar o banco (não aplicavel)
$database = "projetoCRUD"; //nome do nosso banco de dados

// Conecta ao MySQL
$conn = new mysqli($servername, $username, $password, $database); 
/* 'con' é nossa variavel que representa a conexão com o banco
 'mysqli' é a função do php para interagir com bancos de dados
 todas as informações entre parenteses são nossas variais de conexão que foram definidas no bloco anterior
*/

//Verifica status da conexão
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error); //'die' é para encerrar a execução do programa
}
?>