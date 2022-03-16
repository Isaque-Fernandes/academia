<?php
    require_once('./usuario_crud.php');
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Cadastro Usuários</title>
</head>

<body>
    
    <div class="container col-6">
        <fieldset>
            <legend>Cadastro de Usuário</legend>
            <form action="./usuario_registro.php" method="post">
                <div class="form-group mb-3">
                    <label for="nome_id" class="form-label">Nome</label>
                    <input class="form-control" type="text" name="txtNome" id="nome_id" placeholder="Nome do usuário" required>
                </div>
                <div class="form-group mb-3">
                    <label for="cpf_id" class="form-label">CPF</label>
                    <input class="form-control" type="text" name="txtCpf" id="cpf_id" placeholder="CPF do usuário" required>
                </div>
                <div class="form-group mb-3">
                    <label for="email_id" class="form-label">Email</label>
                    <input class="form-control" type="text" name="txtEmail" id="email_id" placeholder="Email do usuário" required>
                </div>
                <div class="form-group mb-3">
                    <label for="telefone_id" class="form-label">Telefone</label>
                    <input class="form-control" type="text" name="txtTelefone" id="telefone_id" placeholder="Telefone do usuário" required>
                </div>
                <div class="form-group mb-3">
                    <label for="dataNascimento_id" class="form-label">Data de Nascimento</label>
                    <input class="form-control" type="text" name="txtDataNascimento" id="dataNascimento_id" placeholder="Data de nascimento do usuário" required>
                </div>
                <div class="form-group mb-3">
                    <label for="atestadoMedico_id" class="form-label">Atestado Médico</label>
                    <input class="form-control" type="text" name="txtAtestadoMedico" id="atestadoMedico_id" placeholder="Atestado médico do usuário" required>
                </div>
                <div class="form-group mb-3">
                    <label for="comentario_id" class="form-label">Comentário</label>
                    <input class="form-control" type="text" name="txtComentario" id="comentario_id" placeholder="Comentario" required>
                </div>
                <div class="form-group mb-3">
                    <label for="dataInicio_id" class="form-label">Data de início</label>
                    <input class="form-control" type="text" name="txtDataInicio" id="dataInicio_id" placeholder="Data de Início do usuário" required>
                </div>
                <div class="form-group mb-3">
                    <label for="assinatura_id" class="form-label">Assinatura</label>
                    <select class="form-select" aria-label="Selecione um Plano" name="txtAssinaturaID" id="assinatura_id" required>
                        <option selected disabled>Selecione um Plano</option>
                        <?php foreach (listarUsuario() as $usuario) : ?>
                            <option value="<?= $usuario['id'] ?>"><?= "{$usuario['planos']} - {$usuario['precos']}" ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>


                <button class="btn btn-dark" type="submit">Cadastrar</button>
            </form>
        </fieldset>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>