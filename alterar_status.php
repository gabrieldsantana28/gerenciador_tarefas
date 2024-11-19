<?php
// Configuração do banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gerenciador_tarefas";

// Criação da conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificação da conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Verifica se a requisição é POST e se os campos necessários foram enviados
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id_tarefa'], $_POST['status'])) {
    $id = $_POST['id_tarefa'];
    $status = $_POST['status'];

    // Prepara a consulta SQL para evitar injeção
    $stmt = $conn->prepare("UPDATE tarefa SET status_tarefa = ? WHERE id_tarefa = ?");
    $stmt->bind_param("si", $status, $id);

    // Executa a consulta e verifica o resultado
    if ($stmt->execute()) {
        echo "<h1><center>Status da tarefa atualizado com sucesso.</center></h1>";
        echo "<br>";
        echo "<form action='Form_GerenciamentoTarefas.php' method='get' style='display:inline;'>";
        echo "<center><button type='submit' class='btn'>Voltar para Gerenciamento de Tarefas</button></center>";
        echo "</form>";
    } else {
        echo "<h1><center>Erro ao atualizar tarefa: " . $stmt->error . "</center></h1>";
    }

    // Fecha a consulta
    $stmt->close();
} else {
    echo "<h1><center>Dados inválidos ou incompletos fornecidos.</center></h1>";
}

// Fecha a conexão
$conn->close();
?>
