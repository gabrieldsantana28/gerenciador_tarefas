<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "gerenciador_tarefas";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
        $id = $_POST['id'];

        $sql = "DELETE FROM tarefa WHERE id_tarefa = $id";

        if ($conn->query($sql) === TRUE) {
            echo "<h1><center>Tarefa excluída com sucesso.</center></h1>";
            echo "<br>";
            echo "<form action='Form_GerenciamentoTarefas.php' method='get' style='display:inline;'>";
            echo "<center><button type='submit' class='btn'>Voltar para Gerenciamento de Tarefas</button></center>";
            echo "</form>";
        } else {
            echo "Erro ao excluir tarefa: " . $conn->error;
        }
    }

    $conn->close();
?>