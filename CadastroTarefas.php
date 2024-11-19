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
                <li><a href="#cadastro-usuarios">Cadastro de Usuários</a></li>
                <li><a href="#cadastro-tarefas">Cadastro de Tarefas</a></li>
                <li><a href="#gerenciar-tarefas">Gerenciar Tarefas</a></li>
            </ul>
        </nav>
    </header>
    <section>
    <h1 class="title">Cadastro de Tarefas</h1>
        <form action="">
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
                    <option value="">Nome do Usuário</option>
                </select>
            </div>
            <div>
                <label for="prioridade">Prioridade:</label> <br>
                <select name="prioridade" id="prioridade">
                    <option value="">Prioridade aqui</option>
                </select>
            </div>
            <button>Cadastrar</button>
        </form>
    </section>
</body>
</html>