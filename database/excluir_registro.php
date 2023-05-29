<?php
include "conexao.php";

$id = $_GET['id'];

$sql = "DELETE FROM scheduling WHERE id = $id";

if ($conn->query($sql) === TRUE) {
  echo "<script>alert('Registro excluído com sucesso!');</script>"; // Exibe um alerta de sucesso
  echo "<script>window.location.href='http://localhost/ebp/admin/marcacoes.php';</script>"; // Redireciona para a página de contato após o envio
} else {
  echo "Erro ao excluir o registro: " . $conn->error;
}

$conn->close();
