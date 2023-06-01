<?php
include "conexao.php";

// Verifica se foi enviado um ID válido para edição
if (isset($_POST['id'])) {
    $id = $_POST['id'];

    // Consulta o registro pelo ID
    $sql = "SELECT * FROM scheduling WHERE id = $id";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();

        // Valores atuais do registro
        $nomeAtual = $row['name_user'];
        $emailAtual = $row['email_user'];
        $numeroAtual = $row['phone_user'];
        $servicoAtual = $row['servico'];
        $estadoAtual = $row['estado'];
        $dataMarcadaAtual = $row['data_marcacao'];

        // Processa o formulário de edição
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Novos valores enviados pelo formulário
            $novoNome = $_POST['nome'];
            $novoEmail = $_POST['email'];
            $numeroNovo = $_POST['numero'];
            $dataMarcadaNovo = $_POST['data_marcacao'];
            $servicoNovo = $_POST['servico'];
            $estadoNovo = $_POST['estado'];

            if (empty($dataMarcadaNovo)) {
                $dataMarcadaNovo = $dataMarcadaAtual;
            }
            if (empty($estadoNovo)) {
                $estadoNovo = $estadoAtual;
            }
            if (empty($servicoNovo)) {
                $servicoNovo = $servicoAtual;
            }

            // Executa a consulta de atualização
            $sqlAtualizar = "UPDATE scheduling SET 
            name_user = '$novoNome',
            email_user = '$novoEmail',
            phone_user = '$numeroNovo',
            data_marcacao = '$dataMarcadaNovo',
            servico = '$servicoNovo',
            estado = '$estadoNovo'
             WHERE id = $id";

            if ($conn->query($sqlAtualizar) === TRUE) {
                echo "<script>alert('Registro atualizado com sucesso!'); window.history.back();</script>";
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
