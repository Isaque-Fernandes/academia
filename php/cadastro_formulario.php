<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
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

                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" name="instrutor_txt" type="search" placeholder="O que você procura?" aria-label="Search">
                    <button class="btn btn-success" formaction="#" type="submit">Localizar</button>
                    <button class="btn btn-danger" formaction="./cadastro_sair.php" type="submit">Deslogar</button>
                </form>
            </div>
        </div>
    </nav>

    <h1>Acesso Restrito</h1>

    <form action="./cadastro_teste.php" method="post">
        <p>
            <label for="">Email</label>
            <input class="form-control" type="text" name="email_txt" placeholder="Email">
        </p>
        <p>
            <label for="">Senha</label>
            <input type="password" name="senha_txt" class="form-control" placeholder="Senha">
        </p>
        <input type="submit" value="Enviar" class="btn btn-dark" name="botao_txt">

    </form>

        <!-- INICIO FOOTER -->
<footer>
    <div class="container-footer">
        <div class="text text-1">
            <ul>
                <li><h2>Instrutor</h2></li>
                <li><a href="./instrutor_formulario.php">Cadastro</a></li>
                <li><a href="./instrutor_listagem.php">Lista</a></li>
            </ul>
        </div>
        <div class="text_img">
            <a href="./index.php"><img src="../img/logo1.png" height="100px" alt="logomarca"></a>
        </div>
        <div class="text">
            <ul>
                <li><h2>Usuario</h2></li>
                <li><a href="./usuario_formulario.php">Cadastro</a></li>
                <li><a href="./usuario_listagem.php">Lista</a></li>
             </ul>
        </div>
    </div>
</footer>

<!-- FIM DO FOOTER -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</body>

</html>