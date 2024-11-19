<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuários</title>
    <link rel="stylesheet" href="style/CadastroUsuario.css">
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
    <h1 class="title">Cadastro de Usuários</h1>
        <form action="cadastrar_usuario.php" method="POST">
            <div>
                <label for="nome">Nome:</label> <br>
                <input type="text" name="nome" id="nome">
            </div>
            <div>
                <label for="email">Email:</label> <br>
                <input type="email" name="email" id="email">
            </div>
            <button>Cadastrar</button>
        </form>
    </section>
</body>
</html>