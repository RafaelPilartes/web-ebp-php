<?php
include "conexao.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$numero = $_POST['numero'];
$mensagem = $_POST['mensagem'];

$sql = "INSERT INTO messages_contact (name_user, email_user, numero, messages) VALUES ('$nome', '$email', '$numero', '$mensagem')";

if ($conn->query($sql) === TRUE) {
  echo "<script>alert('Mensagem enviada com sucesso!');</script>"; // Exibe um alerta de sucesso
  echo "<script>window.location.href='http://localhost/ebp/#contact';</script>"; // Redireciona para a página de contato após o envio
} else {
  echo "Erro ao enviar a mensagem: " . $conn->error;
}

$conn->close();
