<?php
include "conexao.php";

// Verifica se foi enviado um ID válido para edição
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Consulta o registro pelo ID
    $sql = "SELECT * FROM scheduling WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();

        // Valores atuais do registro
        $nomeAtual = $row['nome'];
        $emailAtual = $row['email'];
        $mensagemAtual = $row['mensagem'];

        // Processa o formulário de edição
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Novos valores enviados pelo formulário
            $novoNome = $_POST['nome'];
            $novoEmail = $_POST['email'];
            $novaMensagem = $_POST['mensagem'];

            // Executa a consulta de atualização
            $sqlAtualizar = "UPDATE scheduling SET nome = '$novoNome', email = '$novoEmail', mensagem = '$novaMensagem' WHERE id = $id";

            if ($conn->query($sqlAtualizar) === TRUE) {
                echo "<script>alert('Registro atualizado com sucesso!'); window.location.href = 'contato.php';</script>";
                exit();
            } else {
                echo "Erro ao atualizar o registro: " . $conn->error;
            }
        }
    } else {
        echo "Registro não encontrado.";
    }
} else {
    echo "ID inválido.";
}

$conn->close();