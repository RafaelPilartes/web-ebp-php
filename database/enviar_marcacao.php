<?php
include "conexao.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$numero = $_POST['numero'];
$data_marcacao = $_POST['data_marcacao'];
$servico = $_POST['servico'];
$estado = 'Pendente';

$sql = "INSERT INTO scheduling (name_user, email_user, phone_user, data_marcacao, servico, estado) VALUES ('$nome', '$email', '$numero', '$data_marcacao', '$servico', '$estado')";

if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Marcação enviada com sucesso!');</script>"; // Exibe um alerta de sucesso
    echo "<script>window.history.back();</script>"; // Redireciona para a página anterior
} else {
    echo "Erro ao enviar a marcação: " . $conn->error;
}

$conn->close();
