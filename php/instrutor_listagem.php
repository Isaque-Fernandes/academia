<?php

require_once('./instrutor_crud.php');

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Listagem de Instrutores</title>
</head>

<body>
    <?php include_once "./navbar.php" ?>
    <div class="container col-12">
        <table class="table table-stripped">
            <thead>
                <th>idInstrutor</th>
                <th>cpf</th>
                <th>nomeInstrutor</th>
                <th>dataNascimento</th>
                <th>email</th>
                <th>telefone</th>
                <th>nomeCidade</th>
                <th>siglaUf</th>
                <th>bairro</th>
                <th>rua</th>
                <th>numero</th>
                <th>complemento</th>
            </thead>
            <tbody>
                <?php foreach (get() as $instrutor) : ?>
                    <tr>
                        <td><?= $instrutor->idInstrutor ?></td>
                        <td><?= $instrutor->cpf ?></td>
                        <td><?= $instrutor->nomeInstrutor ?></td>
                        <td><?= $instrutor->dataNascimento ?></td>
                        <td><?= $instrutor->email ?></td>
                        <td><?= $instrutor->telefone ?></td>
                        <td><?= $instrutor->cidade ?></td>
                        <td><?= $instrutor->siglaUf ?></td>
                        <td><?= $instrutor->bairro ?></td>
                        <td><?= $instrutor->rua ?></td>
                        <td><?= $instrutor->numero ?></td>
                        <td><?= $instrutor->complemento ?></td>
                        <td>
                            <a href="instrutor_edicao_formulario.php?idInstrutor=<?= $instrutor->idInstrutor ?>"><span style="color: green;"><i class="fa-solid fa-pen-to-square"></i></span></a>
                            <a href="cidade.delete.php?codigo=<?= $instrutor->idInstrutor ?>" onclick="return confirm('Deseja realmente remover a cidade <?= $instrutor->nomeInstrutor ?> ?')"><span style="color: red;"><i class="fa-solid fa-eraser"></i></span></a>
                        </td>
                    </tr>
                <?php endforeach; ?>

            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>