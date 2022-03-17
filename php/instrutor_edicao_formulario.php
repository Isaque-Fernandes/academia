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
    <title>Loja Senac - Formulário de Cadastro de Cidades</title>
</head>

<body>

    <?php include_once "./navbar.php" ?>
    <div class="container col-12">
        <fieldset>
            <legend>Edição de Dados - Instrutor</legend>
            <form action="./instrutor_edicao.php" method="post">
                <div class="form-group mb-3">
                    <label for="cpf_id" class="form-label">cpf</label>
                    <input class="form-control" type="text" name="cpf_txt" id="cpf_id" placeholder="Informe o nome da cidade" value="<?= $instrutor->cpf ?>" required>
                </div>
                <div class="form-group mb-3">
                    <label for="nomeInstrutor_id" class="form-label">nomeInstrutor</label>
                    <input class="form-control" type="text" name="nomeInstrutor_txt" id="nomeInstrutor_id" placeholder="Informe o nome da cidade" value="<?= $instrutor->nomeInstrutor ?>" required>
                </div>
                <div class="form-group mb-3">
                    <label for="dataNascimento_id" class="form-label">dataNascimento</label>
                    <input class="form-control" type="text" name="dataNascimento_txt" id="dataNascimento_id" placeholder="Informe o nome da cidade" value="<?= $instrutor->dataNascimento ?>" required>
                </div>
                <div class="form-group mb-3">
                    <label for="email_id" class="form-label">email</label>
                    <input class="form-control" type="text" name="email_txt" id="email_id" placeholder="Informe o nome da cidade" value="<?= $instrutor->email ?>" required>
                </div>
                <div class="form-group mb-3">
                    <label for="telefone_id" class="form-label">telefone</label>
                    <input class="form-control" type="text" name="telefone_txt" id="telefone_id" placeholder="Informe o nome da cidade" value="<?= $instrutor->telefone ?>" required>
                </div>
                <div class="form-group mb-3">
                    <label for="cidade_id" class="form-label">cidade</label>
                    <input class="form-control" type="text" name="cidade_txt" id="cidade_id" placeholder="Informe o nome da cidade" value="<?= $instrutor->cidade ?>" required>
                </div>
                <div class="form-group mb-3">
                    <label for="siglaUf_id" class="form-label">siglaUf</label>
                    <input class="form-control" type="text" name="siglaUf_txt" id="siglaUf_id" placeholder="Informe o nome da cidade" value="<?= $instrutor->siglaUf ?>" required>
                </div>
                <div class="form-group mb-3">
                    <label for="bairro_id" class="form-label">bairro</label>
                    <input class="form-control" type="text" name="bairro_txt" id="bairro_id" placeholder="Informe o nome da cidade" value="<?= $instrutor->bairro ?>" required>
                </div>
                <div class="form-group mb-3">
                    <label for="rua_id" class="form-label">rua</label>
                    <input class="form-control" type="text" name="rua_txt" id="rua_id" placeholder="Informe o nome da cidade" value="<?= $instrutor->rua ?>" required>
                </div>
                <div class="form-group mb-3">
                    <label for="numero_id" class="form-label">numero</label>
                    <input class="form-control" type="text" name="numero_txt" id="numero_id" placeholder="Informe o nome da cidade" value="<?= $instrutor->numero ?>" required>
                </div>
                <div class="form-group mb-3">
                    <label for="complemento_id" class="form-label">complemento</label>
                    <input class="form-control" type="text" name="complemento_txt" id="complemento_id" placeholder="Informe o nome da cidade" value="<?= $instrutor->complemento ?>" required>
                </div>

                <button class="btn btn-dark" type="submit" name="idInstrutor_txt" value="<?= $instrutor->idInstrutor ?>">Editar</button>
            </form>
        </fieldset>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>