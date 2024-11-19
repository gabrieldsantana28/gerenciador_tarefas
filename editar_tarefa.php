<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "gerenciador_tarefas";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    $tarefa = null;
    $usuarios = [];

    if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql_tarefa = "SELECT * FROM tarefa WHERE id_tarefa = $id";
        $result_tarefa = $conn->query($sql_tarefa);

        if ($result_tarefa->num_rows > 0) {
            $tarefa = $result_tarefa->fetch_assoc();
        } else {
            echo "Tarefa não encontrada.";
            exit;
        }
    }

    $sql_usuarios = "SELECT id_usuario, nome_usuario FROM usuario";
    $result_usuarios = $conn->query($sql_usuarios);

    if ($result_usuarios->num_rows > 0) {
        while($row = $result_usuarios->fetch_assoc()) {
            $usuarios[] = $row;
        }
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
        $id = $_POST['id'];
        $id_usuario = $_POST['usuario'];
        $descricao = $_POST['descricao'];
        $setor = $_POST['setor'];
        $prioridade = $_POST['prioridade'];

        $sql = "UPDATE tarefa SET fk_id_usuario='$id_usuario', descricao_tarefa='$descricao', setor_tarefa='$setor', prioridade_tarefa='$prioridade' WHERE id_tarefa=$id";

        if ($conn->query($sql) === TRUE) {
            echo "<h1><center>Tarefa atualizada com sucesso.</center></h1>";
            echo "<br>";
            echo "<form action='Form_GerenciamentoTarefas.php' method='get' style='display:inline;'>";
            echo "<center><button type='submit' class='btn'>Voltar para Gerenciamento de Tarefas</button></center>";
            echo "</form>";
        } else {
            echo "Erro ao atualizar tarefa: " . $conn->error;
        }
    }

    $conn->close();
?>