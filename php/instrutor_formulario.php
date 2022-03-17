<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Standard Fit</title>
</head>

<body>
    <!-- cpf, nomeInstrutor, dataNascimento,  email, telefone -->
    <?php include_once "./navbar.php" ?>

    <div class="container col-12">
        <fieldset>
            <legend>Cadastro de Instrutor</legend>
            <form action="./instrutor_registro.php" method="post">
                <div class="form-group mb-3">
                    <label for="cpf_id" class="form-label">CPF</label>
                    <input class="form-control" type="text" name="cpf_txt" id="cpf_id" placeholder="Informe o nome da cidade" required>
                </div>
                <div class="form-group mb-3">
                    <label for="nomeInstrutor_id" class="form-label">Nome </label>
                    <input class="form-control" type="text" name="nomeInstrutor_txt" id="nomeInstrutor_id" placeholder="Informe o nome da cidade" required>
                </div>
                <div class="form-group mb-3">
                    <label for="dataNascimento_id" class="form-label">Data Nascimento</label>
                    <input class="form-control" type="text" name="dataNascimento_txt" id="dataNascimento_id" placeholder="Informe o nome da cidade" required>
                </div>
                <legend>Contato</legend>
                <div class="form-group mb-3">
                    <label for="email_id" class="form-label">Email</label>
                    <input class="form-control" type="text" name="email_txt" id="email_id" placeholder="Informe o nome da cidade" required>
                </div>
                <div class="form-group mb-3">
                    <label for="telefone_id" class="form-label">Telefone</label>
                    <input class="form-control" type="text" name="telefone_txt" id="telefone_id" placeholder="Informe o nome da cidade" required>
                </div>
                <legend>Endereço</legend>
                <div class="form-group mb-3">
                    <label for="cidade_id" class="form-label">Cidade</label>
                    <input class="form-control" type="text" name="cidade_txt" id="cidade_id" placeholder="Informe o nome da cidade" required>
                </div>
                <div class="form-group mb-3">
                    <label for="siglaUf_id" class="form-label">Sigla UF</label>
                    <input class="form-control" type="text" name="siglaUf_txt" id="siglaUf_id" placeholder="Informe o nome da cidade" required>
                </div>
                <div class="form-group mb-3">
                    <label for="bairro_id" class="form-label">Bairro</label>
                    <input class="form-control" type="text" name="bairro_txt" id="bairro_id" placeholder="Informe o nome da cidade" required>
                </div>
                <div class="form-group mb-3">
                    <label for="rua_id" class="form-label">Rua</label>
                    <input class="form-control" type="text" name="rua_txt" id="rua_id" placeholder="Informe o nome da cidade" required>
                </div>
                <div class="form-group mb-3">
                    <label for="numero_id" class="form-label">Número</label>
                    <input class="form-control" type="number" name="numero_txt" id="numero_id" placeholder="Informe o nome da cidade" required>
                </div>
                <div class="form-group mb-3">
                    <label for="complemento_id" class="form-label">Complemento</label>
                    <input class="form-control" type="text" name="complemento_txt" id="complemento_id" placeholder="Informe o nome da cidade" required>
                </div>
                <button class="btn btn-dark" type="submit">Cadastrar</button>
            </form>
        </fieldset>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>