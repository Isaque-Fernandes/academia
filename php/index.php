<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<<<<<<< HEAD
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
    <link rel="stylesheet" type="text/css" href="../css/footer.css" />
=======
    <link rel="stylesheet" type="text/css" href="../resources/css/index.css" />
    <link rel="stylesheet" type="text/css" href="../resources/css/style.css" />
    <link rel="stylesheet" type="text/css" href="../home.css" />
    <link href="../resources/css/footer.css" rel="stylesheet" />
>>>>>>> 47ee84113ec190f2d396349a1196f0ace1855f69
    <title>Standard - Home</title>
</head>

<body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark static-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="./index.php"><img src="../resources/img/logo1.png" alt="" width="150"></a>
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

<<<<<<< HEAD
   
   <!-- INICIO FOOTER -->

            <footer id="myFooter">
                <div class="container2">
                    <p class="footer-copyright">©2022 Todos os direitos reservados Standard Fit</p>
                </div>
                <div class="footer-social">
                    <a href="https://www.instagram.com/jhonatans.a/" class="social-icons"><i class="fa fa-facebook"></i></a>
                    <a href="https://www.instagram.com/jhonatans.a/" class="social-icons"><i class="fa fa-instagram"></i></a>
                    <a href="https://www.instagram.com/jhonatans.a/" class="social-icons"><i class="fa fa-youtube"></i></a>
                    <a href="https://www.instagram.com/jhonatans.a/" class="social-icons"><i class="fa fa-twitter"></i></a>
                </div>
            </footer>
            <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- FIM DO FOOTER -->
=======

    <div class="carous">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../resources/./img/./1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../resources/./img/./3.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../resources/./img/./11bgindex.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>


    <!-- INICIO CAIXA MOTIVACIONAL-->

    <div class="containermotivacional">
        <div class="row">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <img src="../resources/img/4.jpg">
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Standard Fit</h5>
                        <p class="card-text">Os Melhores Equipamentos, no Melhor Lugar Para Treinar!</p>
                        <a href="#" class="btn btn-primary"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
>>>>>>> 47ee84113ec190f2d396349a1196f0ace1855f69

    <!-- FIM CAIXA MOTIVACIONAL-->




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>