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
            <?php foreach ($viagens_pendentes as $viagem): ?>
                <div class="card">
                    <p><strong>Descrição:</strong> <?= $viagem['descricao'] ?></p>
                    <p><strong>Rota:</strong> <?= $viagem['rota'] ?></p>
                    <p><strong>Prioridade:</strong> <?= $viagem['prioridade'] ?></p>
                    <p><strong>Motorista:</strong> <?= $viagem['motorista'] ?></p>
                    <form action="Form_Editar_Viagem.php" method="get" style="display:inline;">
                        <input type="hidden" name="id" value="<?= $viagem['id'] ?>">
                        <button type="submit" class="btn">Editar</button>
                    </form>
                    <form action="excluir_viagem.php" method="post" style="display:inline;" onsubmit="return confirm('Tem certeza que deseja excluir esta viagem?');">
                        <input type="hidden" name="id" value="<?= $viagem['id'] ?>">
                        <button type="submit" class="btn">Excluir</button>
                    </form>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="column">
            <h3>Fazendo</h3>
            <?php foreach ($viagens_em_transito as $viagem): ?>
                <div class="card">
                    <p><strong>Descrição:</strong> <?= $viagem['descricao'] ?></p>
                    <p><strong>Setor:</strong> <?= $viagem['rota'] ?></p>
                    <p><strong>Prioridade:</strong> <?= $viagem['prioridade'] ?></p>
                    <p><strong>Vinculado a:</strong> <?= $viagem['motorista'] ?></p>
                    <form action="Form_Editar_Viagem.php" method="get" style="display:inline;">
                        <input type="hidden" name="id" value="<?= $viagem['id'] ?>">
                        <button type="submit" class="btn">Editar</button>
                    </form>
                    <form action="excluir_viagem.php" method="post" style="display:inline;" onsubmit="return confirm('Tem certeza que deseja excluir esta viagem?');">
                        <input type="hidden" name="id" value="<?= $viagem['id'] ?>">
                        <button type="submit" class="btn">Excluir</button>
                    </form>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="column">
            <h3>Pronto</h3>
            <?php foreach ($viagens_finalizadas as $viagem): ?>
                <div class="card">
                    <p><strong>Descrição:</strong> <?= $viagem['descricao'] ?></p>
                    <p><strong>Rota:</strong> <?= $viagem['rota'] ?></p>
                    <p><strong>Prioridade:</strong> <?= $viagem['prioridade'] ?></p>
                    <p><strong>Motorista:</strong> <?= $viagem['motorista'] ?></p>
                    <form action="Form_Editar_Viagem.php" method="get" style="display:inline;">
                        <input type="hidden" name="id" value="<?= $viagem['id'] ?>">
                        <button type="submit" class="btn">Editar</button>
                    </form>
                    <form action="excluir_viagem.php" method="post" style="display:inline;" onsubmit="return confirm('Tem certeza que deseja excluir esta viagem?');">
                        <input type="hidden" name="id" value="<?= $viagem['id'] ?>">
                        <button type="submit" class="btn">Excluir</button>
                    </form>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
</body>
</html>