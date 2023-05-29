<?php
include "conexao.php";

$id = $_GET['id'];

$sql = "DELETE FROM messages_contact WHERE id = $id";

if ($conn->query($sql) === TRUE) {
  echo "<script>alert('Mensagem excluída com sucesso!');</script>"; // Exibe um alerta de sucesso
  echo "<script>window.location.href='http://localhost/ebp/admin/mensagens.php';</script>"; // Redireciona para a página de contato após o envio
} else {
  echo "Erro ao excluir a mensagens: " . $conn->error;
}

$conn->close();
