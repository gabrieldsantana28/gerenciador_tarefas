<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "gerenciador_tarefas";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = $_POST['nome'];
        $email = $_POST['email'];

        $sql = "INSERT INTO usuario (nome_usuario, email_usuario) VALUES ('$nome', '$email')";

        if ($conn->query($sql) === TRUE) {
            echo "<h1><center>Usuário cadastrado com sucesso.</center></h1>";
            echo "<br>";
            echo "<form action='index.php' method='get' style='display:inline;'>";
            echo "<center><button type='submit' class='btn'>Voltar ao Menu</button></center>";
            echo "</form>";
        } else {
            echo "Erro: " . $sql . "<br>" . $conn->error;
        }
    }

    $conn->close();
?>