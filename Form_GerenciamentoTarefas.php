<?php include 'consultar_tarefas.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciamento de Tarefas</title>
    <link rel="stylesheet" href="style/GerenciamentoTarefas.css">
</head>
<body>
    <header >
        <h1>Gerenciamento de Tarefas</h1>
        <nav class="menu">
            <ul>
                <li><a href="Form_CadastroUsuario.php">Cadastro de Usuários</a></li>
                <li><a href="Form_CadastroTarefas.php">Cadastro de Tarefas</a></li>
                <li><a href="Form_GerenciamentoTarefas.php">Gerenciar Tarefas</a></li>
            </ul>
        </nav>
    </header>
    <section>
    <h1 class="title">Tarefas</h1>
    <div class="column">
            <h3>A Fazer</h3>
            <?php foreach ($tarefas_afazer as $tarefa): ?>
                <div class="card">
                    <p><strong>Descrição:</strong> <?= $tarefa['descricao_tarefa'] ?></p>
                    <p><strong>Setor:</strong> <?= $tarefa['setor_tarefa'] ?></p>
                    <p><strong>Prioridade:</strong> <?= $tarefa['prioridade_tarefa'] ?></p>
                    <p><strong>Vinculado a:</strong> <?= $tarefa['usuario'] ?></p>
                    <form action="Form_EditarTarefa.php" method="get" style="display:inline;">
                        <input type="hidden" name="id" value="<?= $tarefa['id_tarefa'] ?>">
                        <button type="submit" class="btn">Editar</button>
                    </form>
                    <form action="excluir_tarefa.php" method="post" style="display:inline;" onsubmit="return confirm('Tem certeza que deseja excluir esta viagem?');">
                        <input type="hidden" name="id" value="<?= $tarefa['id_tarefa'] ?>">
                        <button type="submit" class="btn">Excluir</button>
                    </form>
                    <form action="alterar_status.php" method="post">
                        <input type="hidden" name="id_tarefa" value="<?= $tarefa['id_tarefa'] ?>">
                        <select name="status">
                            <option value="afazer">A fazer</option>
                            <option value="fazendo">Fazendo</option>
                            <option value="pronto">Pronto</option>
                        </select>
                        <button type="submit" class="btn">Alterar Status</button>
                    </form>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="column">
            <h3>Fazendo</h3>
            <?php foreach ($tarefas_fazendo as $tarefa): ?>
                <div class="card">
                    <p><strong>Descrição:</strong> <?= $tarefa['descricao_tarefa'] ?></p>
                    <p><strong>Setor:</strong> <?= $tarefa['setor_tarefa'] ?></p>
                    <p><strong>Prioridade:</strong> <?= $tarefa['prioridade_tarefa'] ?></p>
                    <p><strong>Vinculado a:</strong> <?= $tarefa['usuario'] ?></p>
                    <form action="Form_EditarTarefa.php" method="get" style="display:inline;">
                        <input type="hidden" name="id" value="<?= $tarefa['id_tarefa'] ?>">
                        <button type="submit" class="btn">Editar</button>
                    </form>
                    <form action="excluir_tarefa.php" method="post" style="display:inline;" onsubmit="return confirm('Tem certeza que deseja excluir esta viagem?');">
                        <input type="hidden" name="id" value="<?= $tarefa['id_tarefa'] ?>">
                        <button type="submit" class="btn">Excluir</button>
                    </form>
                    <form action="alterar_status.php" method="post">
                        <input type="hidden" name="id_tarefa" value="<?= $tarefa['id_tarefa'] ?>">
                        <select name="status">
                            <option value="afazer">A fazer</option>
                            <option value="fazendo">Fazendo</option>
                            <option value="pronto">Pronto</option>
                        </select>
                        <button type="submit" class="btn">Alterar Status</button>
                    </form>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="column">
            <h3>Pronto</h3>
            <?php foreach ($tarefas_pronto as $tarefa): ?>
                <div class="card">
                    <p><strong>Descrição:</strong> <?= $tarefa['descricao_tarefa'] ?></p>
                    <p><strong>Setor:</strong> <?= $tarefa['setor_tarefa'] ?></p>
                    <p><strong>Prioridade:</strong> <?= $tarefa['prioridade_tarefa'] ?></p>
                    <p><strong>Vinculado a:</strong> <?= $tarefa['usuario'] ?></p>
                    <form action="Form_EditarTarefa.php" method="get" style="display:inline;">
                        <input type="hidden" name="id" value="<?= $tarefa['id_tarefa'] ?>">
                        <button type="submit" class="btn">Editar</button>
                    </form>
                    <form action="excluir_tarefa.php" method="post" style="display:inline;" onsubmit="return confirm('Tem certeza que deseja excluir esta viagem?');">
                        <input type="hidden" name="id" value="<?= $tarefa['id_tarefa'] ?>">
                        <button type="submit" class="btn">Excluir</button>
                    </form>
                    <form action="alterar_status.php" method="post">
                        <input type="hidden" name="id_tarefa" value="<?= $tarefa['id_tarefa'] ?>">
                        <select name="status">
                            <option disable selected value="">Selecione</option>
                            <option value="afazer">A fazer</option>
                            <option value="fazendo">Fazendo</option>
                            <option value="pronto">Pronto</option>
                        </select>
                        <button type="submit" class="btn">Alterar Status</button>
                    </form>
                </div>
            <?php endforeach; ?>
            
        </div>
    </section>
</body>
</html>