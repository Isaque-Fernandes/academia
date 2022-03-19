<?php
session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Listagem de Instrutores</title>
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
                            <li><a class="dropdown-item" href="./usuario_listagem.php">Lista</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Ficha Treino
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="./fichaTreino_formulario.php">Cadastro</a></li>
                            <li><a class="dropdown-item" href="./fichaTreino_redirecionador_listagem.php">Listagem</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" name="fichaTreino_txt" type="search" placeholder="O que você procura?" aria-label="Search">
                    <button class="btn btn-outline-success" formaction="./fichaTreino_busca.php" type="submit">Localizar</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container col-12">
        <legend class="mt-3 mb-3">Listagem de Instrutores</legend>
        <table class="table table-stripped">
            <thead>
                <th>Nome do Usuário</th>
                <th>Nome do Instrutor</th>
            </thead>
            <tbody>
                <?php foreach ($_SESSION['fichaTreino'] as $fichaTreino) : ?>
                    <tr>
                        <td><?= $fichaTreino->nomeUsuario ?></td>
                        <td><?= $fichaTreino->nomeInstrutor ?></td>
                        <td>
                            <a href="fichaTreino_edicao_formulario.php?idUsuarioTreino=<?= $fichaTreino->idUsuarioTreino ?>"><span style="color: green;"><i class="fa-solid fa-pen-to-square"></i></span></a>
                            <a href="fichaTreino_apagar.php?idUsuarioTreino=<?= $fichaTreino->idUsuarioTreino ?>" onclick="return confirm('Deseja realmente remover o instrutor <?= $fichaTreino->idUsuarioTreino ?> ?')"><span style="color: red;"><i class="fa-solid fa-eraser"></i></span></a>
                        </td>
                    </tr>

                <?php endforeach; ?>

            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>