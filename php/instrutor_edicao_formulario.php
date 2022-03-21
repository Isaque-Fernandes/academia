<?php
require_once('./instrutor_acao.php');

$instrutor = findById($_GET["idInstrutor"]);


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
    <link rel="stylesheet" type="text/css" href="../css/instrutorformulario.css" />
    <link rel="stylesheet" type="text/css" href="../css/footer.css" />
    <title>Loja Senac - Formulário de Cadastro de Cidades</title>
</head>

<body>

    <!-- INÍCIO NAVBAR -->
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
                    <button class="btn btn-success" formaction="#" type="submit">Localizar</button>
                    <button class="btn btn-danger" formaction="./cadastro_sair.php" type="submit">Deslogar</button>
                </form>
            </div>
        </div>
    </nav>
    <!-- FIM DO NAVBAR -->

    <!-- INICIO MEIO DO SITE -->
<section class="backgroundcontainer">
        <div class="background">


            <!-- IMAGEM BACKGROUND -->
            <style>
                body
                {
                    background: url('../img/10bg-cadastro.jpg') no-repeat;
                }
            </style>
            <!-- FIM IMAGEM BACKGROUND -->





            <!--FORMULÁRIO DE CADASTRO-->
            <div class="caixamae">
                <div class="login-page">
                <div class="form">


                    <legend>Edição de Dados - Instrutor</legend>
            
                    <form class="register-form" action="./instrutor_edicao.php" method="post">

                    <input type="text" name="cpf_txt" id="cpf_id" placeholder="Informe o nome do cpf" value="<?= $instrutor->cpf ?>" required>
                    <input type="text" name="nomeInstrutor_txt" id="nomeInstrutor_id"  value="<?= $instrutor->nomeInstrutor ?>" required>
                    <input type="date" name="dataNascimento_txt" id="dataNascimento_id"  value="<?= $instrutor->dataNascimento ?>" required>
                    <input type="text" name="email_txt" id="email_id"  value="<?= $instrutor->email ?>" required>
                    <input type="text" name="telefone_txt" id="telefone_id"  value="<?= $instrutor->telefone ?>" required>
                    <input type="text" name="cidade_txt" id="cidade_id"  value="<?= $instrutor->cidade ?>" required>
                    <input type="text" name="siglaUf_txt" id="siglaUf_id"  value="<?= $instrutor->siglaUf ?>" required>
                    <input type="text" name="bairro_txt" id="bairro_id"  value="<?= $instrutor->bairro ?>" required>
                    <input type="text" name="rua_txt" id="rua_id"  value="<?= $instrutor->rua ?>" required>
                    <input type="text" name="numero_txt" id="numero_id"  value="<?= $instrutor->numero ?>" required>
                    <input type="text" name="complemento_txt" id="complemento_id"  value="<?= $instrutor->complemento ?>" required>

                        <!-- <button class="btn btn-dark" type="submit">Cadastrar</button> -->
                        <button type="submit" name="idInstrutor_txt" value="<?= $instrutor->idInstrutor ?>">Editar</button>
                    </form>
                </div>
                </div>
            </div>              <!--FIM FORMULÁRIO DE CADASTRO-->
        </div>
    </section>
<!-- FIM MEIO DO SITE -->

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