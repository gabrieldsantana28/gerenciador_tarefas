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
    $motorista_id = $_POST['motorista'];
    $descricao = $_POST['descricao'];
    $rota = $_POST['rota'];
    $prioridade = $_POST['prioridade'];
    $data_cadastro = date('Y-m-d');

    $sql = "INSERT INTO viagens (id_motorista, descricao, rota, prioridade, data_cadastro) 
            VALUES ('$motorista_id', '$descricao', '$rota', '$prioridade', '$data_cadastro')";

    if ($conn->query($sql) === TRUE) {
        echo "<h1><center>Tarefa cadastrada com sucesso.</center></h1>";
        echo "<br>";
        echo "<form action='index.php' method='get' style='display:inline;'>";
        echo "<center><button type='submit' class='btn'>Voltar ao Menu</button></center>";
        echo "</form>";
    } else {
        echo "Erro: " . $sql . "<br>" . $conn->error;
    }
}

// Fecha a conexão
$conn->close();
?>