<?php
session_start();
// unset($_SESSION['email']);
// unset($_SESSION['senha']);
// header('Location: cadastro_formulario.php');

// session_start();
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
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
    <link rel="stylesheet" type="text/css" href="../css/usuarioformulario.css" />
    <link rel="stylesheet" type="text/css" href="../css/footer.css" />
    <title>Standard Fit</title>

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
                            <li ><a class="dropdown-item text-light" href="./usuario_redirecionador_listagem.php">Lista</a></li>
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


                    <legend>Cadastro de Usuário</legend>
            
                    <form class="register-form" action="./usuario_registro.php" method="post">

                        <input type="text" name="cpf_txt" id="cpf_id" placeholder="CPF" required>
                        <input  type="text" name="nomeUsuario_txt" id="nomeUsuario_id" placeholder="Informe o Nome" required>
                        <input  type="date" name="dataNascimento_txt" id="dataNascimento_id" placeholder="Data Nascimento" required>

                        <legend>Contato</legend>
                        <input  type="text" name="email_txt" id="email_id" placeholder="Informe o Email" required>
                        <input  type="text" name="telefone_txt" id="telefone_id" placeholder="Informe o Telefone" required>

                        <legend>Opcional</legend>
                        <input  type="text" name="atestadoMedico_txt" id="atestadoMedico_id" placeholder="Informe o Atestado Médico" required>
                        <input  type="text" name="comentario_txt" id="comentario_id" placeholder="Informe o Comentário" required>

                        <legend>Data de Início</legend>
                        <input  type="date" name="dataInicio_txt" id="dataInicio_id" placeholder="Data de Início" required>

                        <!-- <button class="btn btn-dark" type="submit">Cadastrar</button> -->
                        <button class="btn btn-dark" type="submit" name="botao_txt">Cadastrar</button>
                    </form>
                </div>
                </div>
            </div>              <!--FIM FORMULÁRIO DE CADASTRO-->
        </div>
    </section>
<!-- FIM MEIO DO SITE -->

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


</html>