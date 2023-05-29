<?php
$servername = "localhost"; // Insira o nome do servidor do MySQL
$username = "root"; // Insira seu nome de usuário do MySQL
$password = ""; // Insira sua senha do MySQL
$dbname = "odnumiar"; // Insira o nome do banco de dados

// Estabelece a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}
