<?php
require_once('./usuario_acao.php');
$usuario = findById($_GET["idUsuario"]);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Standard</title>
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
                    <input class="form-control me-2" name="instrutor_txt" type="search" placeholder="O que você procura?" aria-label="Search">
                    <button class="btn btn-outline-success" formaction="./instrutor_busca.php" type="submit">Localizar</button>
                </form>
            </div>
        </div>
    </nav>
    <div class="container col-12">
        <fieldset>
            <legend>Edição de Dados - Usuário</legend>
            <form action="./usuario_edicao.php" method="post">
                <div class="form-group mb-3">
                    <label for="nomeUsuario_id" class="form-label">Nome</label>
                    <input class="form-control" type="text" name="nomeUsuario_txt" id="nomeUsuario_id" placeholder="Informe o Nome" value="<?= $usuario->nomeUsuario ?>" required>
                </div>
                <div class="form-group mb-3">
                    <label for="cpf_id" class="form-label">CPF</label>
                    <input class="form-control" type="text" name="cpf_txt" id="cpf_id" placeholder="Informe o cpf" value="<?= $usuario->cpf ?>" required>
                </div>
                <div class="form-group mb-3">
                    <label for="email_id" class="form-label">Email</label>
                    <input class="form-control" type="text" name="email_txt" id="email_id" placeholder="Informe o email" value="<?= $usuario->email ?>" required>
                </div>
                <div class="form-group mb-3">
                    <label for="telefone_id" class="form-label">Telefone</label>
                    <input class="form-control" type="text" name="telefone_txt" id="telefone_id" placeholder="Informe o Telefone" value="<?= $usuario->telefone ?>" required>
                </div>
                <div class="form-group mb-3">
                    <label for="dataNascimento_id" class="form-label">Data de nascimento</label>
                    <input class="form-control" type="text" name="dataNascimento_txt" id="dataNascimento_id" placeholder="Informe a Data de nascimento" value="<?= $usuario->dataNascimento ?>" required>
                </div>
                <div class="form-group mb-3">
                    <label for="atestadoMedico_id" class="form-label">Atestado Médico</label>
                    <input class="form-control" type="text" name="atestadoMedico_txt" id="atestadoMedico_id" placeholder="Informe o Atestado Médico" value="<?= $usuario->atestadoMedico ?>" required>
                </div>
                <div class="form-group mb-3">
                    <label for="comentario_id" class="form-label">Comentário</label>
                    <input class="form-control" type="text" name="comentario_txt" id="comentario_id" placeholder="Informe o comentario" value="<?= $usuario->comentario ?>" required>
                </div>
                <div class="form-group mb-3">
                    <label for="dataInicio_id" class="form-label">Data Início</label>
                    <input class="form-control" type="text" name="dataInicio_txt" id="dataInicio_id" placeholder="Informe o Data Início" value="<?= $usuario->dataInicio ?>" required>
                </div>



                <button class="btn btn-dark" type="submit" name="idUsuario_txt" value="<?= $usuario->idUsuario ?>">Editar</button>
            </form>
        </fieldset>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>