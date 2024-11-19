<?php include 'editar_tarefa.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style/EditarTarefas.css">
    <title>Editar Tarefa</title>
</head>
<body>
    <header>
        <h1>Gerenciamento de Tarefas</h1>
        <nav class="menu">
            <ul>
                <li><a href="Form_CadastroUsuario.php">Cadastro de Usuários</a></li>
                <li><a href="Form_CadastroTarefas.php">Cadastro de Tarefas</a></li>
                <li><a href="Form_GerenciamentoTarefas.php">Gerenciar Tarefas</a></li>
            </ul>
        </nav>
    </header>
    <div class="container">
        <h2>Editar Tarefa</h2>
        <br>
        <?php if ($tarefa): ?>
            <form action="editar_tarefa.php" method="post">
                <input type="hidden" name="id" value="<?= $tarefa['id_tarefa'] ?>">

                <div class="form-group">
                    <label for="usuario">Usuário:</label>
                    <select id="usuario" name="usuario" required>
                        <?php foreach ($usuarios as $usuario): ?>
                            <option value="<?= $usuario['id_usuario'] ?>" <?= $tarefa['id_usuario'] == $usuario['id'] ? 'selected' : '' ?>>
                                <?= $usuario['nome_usuario'] ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <div class="form-group">
                    <label for="descricao">Descrição da Viagem:</label>
                    <input type="text" id="descricao" name="descricao" value="<?= $tarefa['descricao_tarefa'] ?>" required>
                </div>

                <div class="form-group">
                    <label for="rota">Setor:</label>
                    <input type="text" id="setor" name="setor" value="<?= $tarefa['setor_tarefa'] ?>" required>
                </div>

                <div class="form-group">
                    <label for="prioridade">Prioridade:</label>
                    <select id="prioridade" name="prioridade" required>
                        <option value="baixa" <?= $tarefa['prioridade_tarefa'] == 'baixa' ? 'selected' : '' ?>>Baixa</option>
                        <option value="media" <?= $tarefa['prioridade_tarefa'] == 'media' ? 'selected' : '' ?>>Média</option>
                        <option value="alta" <?= $tarefa['prioridade_tarefa'] == 'alta' ? 'selected' : '' ?>>Alta</option>
                    </select>
                </div>

                <button type="submit" class="btn">Alterar</button>
            </form>
        <?php else: ?>
            <p>Tarefa não encontrada.</p>
        <?php endif; ?>
    </div>
</body>
</html>