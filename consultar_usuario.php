<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "gerenciador_tarefas";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    $sql = "SELECT id_usuario, nome_usuario, email_usuario FROM usuario"; 
    $result = $conn->query($sql);

    $usuarios = []; 
    $emails = [];

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $usuarios[] = $row; 
        }
    } else {
        echo "Nenhum usuário encontrado.";
    }
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $emails[] = $row; 
        }
    }

    $conn->close();
?>
