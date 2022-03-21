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
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
    <link rel="stylesheet" type="text/css" href="../css/usuarioformulario.css" />
    <link rel="stylesheet" type="text/css" href="../css/footer.css" />
    <title>Standard</title>
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
                    <button class="btn btn-success" formaction="#" type="submit">Localizar</button>
                    <button class="btn btn-danger" formaction="./cadastro_sair.php" type="submit">Deslogar</button>
                </form>
            </div>
        </div>
    </nav>

<section class="backgroundcontainer">
        <div class="background">


          
            <style>
                body
                {
                    background: url('../img/10bg-cadastro.jpg') no-repeat;
                }
            </style>
        
            <div class="caixamae">
                <div class="login-page">
                <div class="form">


                    <legend>Edição de Dados - Usuário</legend>
            
                    <form class="register-form" action="./usuario_edicao.php" method="post">

                    <input type="text" name="nomeUsuario_txt" id="nomeUsuario_id" placeholder="Informe o Nome" value="<?= $usuario->nomeUsuario ?>" required>
                    <input type="text" name="cpf_txt" id="cpf_id" placeholder="Informe o cpf" value="<?= $usuario->cpf ?>" required>
                    <input type="text" name="email_txt" id="email_id" placeholder="Informe o email" value="<?= $usuario->email ?>" required>
                    <input type="text" name="telefone_txt" id="telefone_id" placeholder="Informe o Telefone" value="<?= $usuario->telefone ?>" required>
                    <input type="text" name="dataNascimento_txt" id="dataNascimento_id" placeholder="Informe a Data de nascimento" value="<?= $usuario->dataNascimento ?>" required>
                    <input type="text" name="atestadoMedico_txt" id="atestadoMedico_id" placeholder="Informe o Atestado Médico" value="<?= $usuario->atestadoMedico ?>" required>
                    <input type="text" name="comentario_txt" id="comentario_id" placeholder="Informe o comentario" value="<?= $usuario->comentario ?>" required>

                    <input type="text" name="dataInicio_txt" id="dataInicio_id" placeholder="Informe o Data Início" value="<?= $usuario->dataInicio ?>" required>
       

                        
                        <button type="submit" name="idUsuario_txt" value="<?= $usuario->idUsuario ?>">Editar</button>
                    </form>
                </div>
                </div>
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