<?php include 'consultar_usuario.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Tarefas</title>
    <link rel="stylesheet" href="style/CadastroTarefas.css">
</head>
<body>
    <header >
        <h1>Gerenciamento de Tarefas</h1>
        <nav class="menu">
            <ul>
                <li><a href="Form_CadastrarUsuario.php">Cadastro de Usuários</a></li>
                <li><a href="Form_CadastrarTarefas.php">Cadastro de Tarefas</a></li>
                <li><a href="Form_GerenciamentoTarefas.php">Gerenciar Tarefas</a></li>
            </ul>
        </nav>
    </header>
    <section>
    <h1 class="title">Cadastro de Tarefas</h1>
        <form action="cadastrar_tarefa.php" method="POST">
            <div>
                <label for="descricao">Descrição:</label> <br>
                <input type="text" name="descricao" id="descricao">
            </div>
            <div>
                <label for="setor">Setor:</label> <br>
                <input type="text" name="setor" id="setor">
            </div>
            <div>
                <label for="usuario">Usuário:</label> <br>
                <select name="usuario" id="usuario">
                    <?php foreach ($usuarios as $usuario): ?>
                        <option value="<?= $usuario['id_usuario'] ?>"><?= $usuario['nome_usuario'] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div>
                <label for="prioridade">Prioridade:</label> <br>
                <select name="prioridade" id="prioridade">
                    <option value="baixa">Baixa</option>
                    <option value="media">Média</option>
                    <option value="alta">Alta</option>
                </select>
            </div>
            <button>Cadastrar</button>
        </form>
    </section>
</body>
</html>