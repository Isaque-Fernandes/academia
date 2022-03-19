<?php
// require_once('./usuario_acao.php');
session_start(); ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Listagem de Usuários</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="./index.php">Standard Fit</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Instrutores
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="./instrutor_formulario.php">Cadastro</a></li>
                            <li><a class="dropdown-item" href="./instrutor_redirecionador_listagem.php">Listagem</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Usuários
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="./usuario_formulario.php">Cadastro</a></li>
                            <li><a class="dropdown-item" href="./usuario_redirecionador_listagem.php">Lista</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Ficha Treino
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="./fichaTreino_formulario.php">Cadastro</a></li>
                            <li><a class="dropdown-item" href="./fichaTreino_listagem.php">Listagem</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" name="usuario_txt" type="search" placeholder="O que você procura?" aria-label="Search">
                    <button class="btn btn-outline-success" formaction="./usuario_busca.php" type="submit">Localizar</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="container col-12">
        <legend class="mt-3 mb-3">Listagem de Usuários</legend>
        <table class="table table-stripped">
            <thead>
                <th>ID</th>
                <th>CPF</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Data de Nascimento</th>
                <th>Atestado Médico</th>
                <th>Comentário</th>
                <th>Data de Início</th>
            </thead>
            <tbody>
                <?php foreach ($_SESSION['usuarios'] as $usuario) : ?>
                    <tr>
                        <td><?= $usuario->idUsuario ?></td>
                        <td><?= $usuario->cpf ?></td>
                        <td><?= $usuario->nomeUsuario ?></td>
                        <td><?= $usuario->email ?></td>
                        <td><?= $usuario->telefone ?></td>
                        <td><?= $usuario->dataNascimento ?></td>
                        <td><?= $usuario->atestadoMedico ?></td>
                        <td><?= $usuario->comentario ?></td>
                        <td><?= $usuario->dataInicio ?></td>
                        <td>
                            <a href="usuario_edicao_formulario.php?idUsuario=<?= $usuario->idUsuario ?>"><span style="color: green;"><i class="fa-solid fa-pen-to-square"></i></span></a>
                            <a href="usuario_apagar.php?idUsuario=<?= $usuario->idUsuario ?>" onclick="return confirm('Deseja realmente remover o usuário <?= $usuario->nomeUsuario ?> ?')"><span style="color: red;"><i class="fa-solid fa-eraser"></i></span></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>