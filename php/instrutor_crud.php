<?php
require_once('./conexao.php');
function create($instrutor)
{
    try {
        $con = getConnection();

        $stmt = $con->prepare("INSERT INTO cidade(nomeCidade, siglaUf) VALUES (:nomeCidade, :siglaUf)");

        $stmt->bindParam(":nomeCidade", $instrutor->nomeCidade);
        $stmt->bindParam(":siglaUf", $instrutor->siglaUf);

        $stmt->execute();
        unset($stmt);

        $stmt = $con->prepare("INSERT INTO endereco(cidade_id, bairro, rua, numero, complemento) VALUES
         (last_insert_id(), :bairro, :rua, numero, complemento)");

        $stmt->bindParam(":bairro", $instrutor->bairro);
        $stmt->bindParam(":rua", $instrutor->rua);
        $stmt->bindParam(":numero", $instrutor->numero);
        $stmt->bindParam(":complemento", $instrutor->complemento);


        if ($stmt->execute())
            return true;
    } catch (PDOException $error) {
        return false;
    } finally {
        unset($con);
        unset($stmt);
    }
}
