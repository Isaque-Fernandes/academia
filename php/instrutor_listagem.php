<?php
session_start();

if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['email']) == true)) {
    header('Location: cadastro_formulario.php');
}
?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
    <link rel="stylesheet" type="text/css" href="../css/listagem.css" />
    <link rel="stylesheet" type="text/css" href="../css/footer.css" />
    <title>Listagem de Instrutores</title>
</head>

<body>


    <nav class="navbar navbar-expand-md navbar-light bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="./index.php"><img src="../img/logo1.png" alt="..." height="100px"></a>
            <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page" href="./index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Instrutores
                        </a>
                        <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item text-light" href="./instrutor_formulario.php">Cadastro</a></li>
                            <li><a class="dropdown-item text-light" href="./instrutor_redirecionador_listagem.php">Listagem</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Usuários
                        </a>
                        <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item text-light" href="./usuario_formulario.php">Cadastro</a></li>
                            <li><a class="dropdown-item text-light" href="./usuario_redirecionador_listagem.php">Lista</a></li>
                        </ul>
                    </li>

                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" name="instrutor_txt" type="search" placeholder="O que você procura?" aria-label="Search">
                    <button class="btn btn-success" formaction="./instrutor_busca.php" type="submit">Localizar</button>
                    <button class="btn btn-danger" formaction="./cadastro_sair.php" type="submit">Deslogar</button>
                </form>
            </div>
        </div>
    </nav>
   


    <section class="backgroundcontainer">
        <div class="background">
          
            <style>
                body {
                    background: url('../img/1.jpg') no-repeat;
                }
            </style>
    




            <div class="container col-12">
                <legend class="mt-3 mb-3">Listagem de Instrutores</legend>
                <table class="table table-stripped">
                    <thead>
                        <th>ID</th>
                        <th>CPF</th>
                        <th>Nome</th>
                        <th>Data Nascimento</th>
                        <th>Email</th>
                        <th>Telefone</th>
                        <th>Nome Cidade</th>
                        <th>Sigla UF</th>
                        <th>Bairro</th>
                        <th>Rua</th>
                        <th>Número</th>
                        <th>Complemento</th>
                    </thead>
                    <tbody>
                        <?php foreach ($_SESSION['instrutores'] as $instrutor) : ?>
                            <tr>
                                <td><?= $instrutor->idInstrutor ?></td>
                                <td><?= $instrutor->cpf ?></td>
                                <td><?= $instrutor->nomeInstrutor ?></td>
                                <td><?= $instrutor->dataNascimento ?></td>
                                <td><?= $instrutor->email ?></td>
                                <td><?= $instrutor->telefone ?></td>
                                <td><?= $instrutor->cidade ?></td>
                                <td><?= $instrutor->siglaUf ?></td>
                                <td><?= $instrutor->bairro ?></td>
                                <td><?= $instrutor->rua ?></td>
                                <td><?= $instrutor->numero ?></td>
                                <td><?= $instrutor->complemento ?></td>
                                <td>
                                    <a href="instrutor_edicao_formulario.php?idInstrutor=<?= $instrutor->idInstrutor ?>"><span style="color: white;"><i class="fa-solid fa-pen-to-square"></i></span></a>
                                    <a href="instrutor_apagar.php?idInstrutor=<?= $instrutor->idInstrutor ?>" onclick="return confirm('Deseja realmente remover o instrutor <?= $instrutor->nomeInstrutor ?> ?')"><span style="color: red;"><i class="fa-solid fa-eraser"></i></span></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </section>


    <footer>
        <div class="container-footer">
            <div class="text" style="margin:auto;">

                <p style="text-align:center">&copy;Todos os Direitos Reservados</p>
            </div>
        </div>
    </footer>

 



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>