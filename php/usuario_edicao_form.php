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

    <?php include_once "./navbar.php" ?>
    <div class="container col-12">
        <fieldset>
            <legend>Edição de Dados - Usuário</legend>
            <form action="./usuario_edicao.php" method="post">
                <div class="form-group mb-3">
                    <label for="nome_id" class="form-label">Nome</label>
                    <input class="form-control" type="text" name="txtNome" id="nome_id" placeholder="Informe o Nome" value="<?= $usuario->nome ?>" required>
                </div>
                <div class="form-group mb-3">
                    <label for="cpf_id" class="form-label">CPF</label>
                    <input class="form-control" type="text" name="txtCpf" id="cpf_id" placeholder="Informe o cpf" value="<?= $usuario->cpf ?>" required>
                </div>
                <div class="form-group mb-3">
                    <label for="email_id" class="form-label">Email</label>
                    <input class="form-control" type="text" name="txtEmail" id="email_id" placeholder="Informe o email" value="<?= $usuario->email ?>" required>
                </div>
                <div class="form-group mb-3">
                    <label for="telefone_id" class="form-label">Telefone</label>
                    <input class="form-control" type="text" name="txtTelefone" id="telefone_id" placeholder="Informe o Telefone" value="<?= $usuario->telefone ?>" required>
                </div>
                <div class="form-group mb-3">
                    <label for="dataNascimento_id" class="form-label">Data de nascimento</label>
                    <input class="form-control" type="text" name="txtDataNascimento" id="dataNascimento_id" placeholder="Informe a Data de nascimento" value="<?= $usuario->dataNascimento ?>" required>
                </div>
                <div class="form-group mb-3">
                    <label for="atestadoMedico_id" class="form-label">Atestado Médico</label>
                    <input class="form-control" type="text" name="txtAtestadoMedico" id="atestadoMedico_id" placeholder="Informe o Atestado Médico" value="<?= $usuario->atestadoMedico ?>" required>
                </div>
                <div class="form-group mb-3">
                    <label for="comentario_id" class="form-label">Comentário</label>
                    <input class="form-control" type="text" name="txtComentario" id="comentario_id" placeholder="Informe o comentario" value="<?= $usuario->comentario ?>" required>
                </div>
                <div class="form-group mb-3">
                    <label for="dataInicio_id" class="form-label">Data Início</label>
                    <input class="form-control" type="text" name="txtDataInicio" id="dataInicio_id" placeholder="Informe o Data Início" value="<?= $usuario->dataInicio ?>" required>
                </div>



                <button class="btn btn-dark" type="submit" name="txtID" value="<?= $usuario->id ?>">Editar</button>
            </form>
        </fieldset>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>