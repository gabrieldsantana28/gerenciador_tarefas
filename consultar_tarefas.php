<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "gerenciador_tarefas";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    $sql = "SELECT tarefa.id_tarefa, tarefa.descricao_tarefa, tarefa.setor_tarefa, tarefa.prioridade_tarefa, tarefa.status_tarefa, usuario.nome_usuario AS usuario
            FROM tarefa
            JOIN usuario ON tarefa.fk_id_usuario = usuario.id_usuario";
    $result = $conn->query($sql);

    $tarefas_afazer = [];
    $tarefas_fazendo = [];
    $tarefas_pronto = [];

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            switch ($row['status_tarefa']) {
                case 'A fazer':
                    $tarefas_afazer[] = $row;
                    break;
                case 'Fazendo':
                    $tarefas_fazendo[] = $row;
                    break;
                case 'Pronto':
                    $tarefas_pronto[] = $row;
                    break;
            }
        }
    }

    $conn->close();
?>