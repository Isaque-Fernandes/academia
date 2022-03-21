<?php
session_start();
// print_r($_SESSION);
if ((!isset($_SESSION['email']) == true) and (!isset($_SESSION['email']) == true)) {
    header('Location: cadastro_formulario.php');
}
// $logado = $_SESSION['email'];
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="refresh" content="1; URL='./index.php'" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/instrutorformulario.css" />
    <title>Document</title>
</head>


<!-- INICIO MEIO DO SITE -->
<section class="backgroundcontainer">
        <div class="background">


            <!-- IMAGEM BACKGROUND 
            <style>
                body
                {
                    background: url('../img/6.jpg') no-repeat;
                }
            </style>
            <!-- FIM IMAGEM BACKGROUND -->

            <div class="caixamae">
                <div class="login-page">
                <div class="form">


                    <legend>Acesso Permitido</legend>
                </div>
                </div>
            </div>            
        </div>
</section>
<!-- FIM MEIO DO SITE -->



<!--
<body>
    <h1>Acesso Permitido</h1>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>