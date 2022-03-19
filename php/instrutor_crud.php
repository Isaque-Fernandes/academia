<?php
require_once('./conexao.php');
function instrutorCreate($instrutor)
{
    try {
        $con = getConnection();


        $stmt = $con->prepare("INSERT INTO instrutor
        (cpf, nomeInstrutor, dataNascimento, email, telefone, cidade, siglaUf, bairro, rua, numero, complemento) VALUES
        (:cpf, :nomeInstrutor, :dataNascimento, :email, :telefone, :cidade, :siglaUf, :bairro, :rua, :numero, :complemento)");

        $stmt->bindParam(":cpf", $instrutor->cpf);
        $stmt->bindParam(":nomeInstrutor", $instrutor->nomeInstrutor);
        $stmt->bindParam(":dataNascimento", $instrutor->dataNascimento);
        $stmt->bindParam(":email", $instrutor->email);
        $stmt->bindParam(":telefone", $instrutor->telefone);
        $stmt->bindParam(":cidade", $instrutor->cidade);
        $stmt->bindParam(":siglaUf", $instrutor->siglaUf);
        $stmt->bindParam(":bairro", $instrutor->bairro);
        $stmt->bindParam(":rua", $instrutor->rua);
        $stmt->bindParam(":numero", $instrutor->numero);
        $stmt->bindParam(":complemento", $instrutor->complemento);

        if ($stmt->execute())
            return true;
    } catch (PDOException $erro) {
        return false;
    } finally {
        unset($con);
        unset($stmt);
    }
}

function instrutorGET()
{
    try {
        $con = getConnection();

        $rs = $con->query("SELECT * FROM instrutor");

        $instrutores = array();

        while ($instrutor = $rs->fetch(PDO::FETCH_OBJ)) {
            array_push($instrutores, $instrutor);
        }

        return $instrutores;
    } catch (PDOException $erro) {
        echo "Erro ao listar os instrutores. Erro: {$erro->getMessage()}";
    } finally {
        unset($con);
        unset($rs);
    }
}

function instrutorFind($nomeInstrutor)
{
    try {
        $con = getConnection();

        $stmt = $con->prepare("SELECT  * FROM instrutor WHERE nomeInstrutor LIKE :nomeInstrutor");
        $stmt->bindValue(":nomeInstrutor", "%{$nomeInstrutor}%");

        if ($stmt->execute()) {
            if ($stmt->rowCount() > 0) {

                $instrutores = array();
                while ($instrutor = $stmt->fetch(PDO::FETCH_OBJ)) {
                    array_push($instrutores, $instrutor);
                }

                return $instrutores;
            }
        }
    } catch (PDOException $error) {
        echo "Erro ao buscar o nome '{$nomeInstrutor}'. Erro: {$error->getMessage()}";
    } finally {
        unset($con);
        unset($stmt);
    }
}

function findById($idInstrutor)
{
    try {
        $con = getConnection();

        $stmt = $con->prepare("SELECT * FROM instrutor WHERE idInstrutor = :idInstrutor");

        $stmt->bindParam(":idInstrutor", $idInstrutor);

        if ($stmt->execute()) {
            if ($stmt->rowCount() > 0) {
                return $stmt->fetch(PDO::FETCH_OBJ);
            }
        }
    } catch (PDOException $erro) {
        echo "Erro ao buscar o instrutor pelo id: '{$idInstrutor}'. Erro: {$erro->getMessage()}";
    } finally {
        unset($con);
        unset($stmt);
    }
}

function update($instrutor)
{
    try {
        $con = getConnection();

        // $stmt = $con->prepare("UPDATE consultaInstrutor SET
        //  nomeInstrutor = :nomeInstrutor,
        //  dataNascimento = :dataNascimento,
        //  email = :email,
        //  telefone = :telefone
        //    WHERE idInstrutor = :idInstrutor");

        // $stmt->bindParam(":idInstrutor", $instrutor->idInstrutor);
        // $stmt->bindParam(":nomeInstrutor", $instrutor->nomeInstrutor);
        // $stmt->bindParam(":dataNascimento", $instrutor->dataNascimento);
        // $stmt->bindParam(":email", $instrutor->email);
        // $stmt->bindParam(":telefone", $instrutor->telefone);

        $stmt = $con->prepare("UPDATE instrutor SET
         cpf = :cpf,
         nomeInstrutor = :nomeInstrutor,
         dataNascimento= :dataNascimento,
         email = :email,
         telefone = :telefone,
         cidade = :cidade,
         siglaUf = :siglaUf,
         bairro =  :bairro,
         rua =  :rua,
         numero =  :numero,
         complemento =  :complemento
  
           WHERE idInstrutor = :idInstrutor ");

        $stmt->bindParam(":idInstrutor", $instrutor->idInstrutor);
        $stmt->bindParam(":cpf", $instrutor->cpf);
        $stmt->bindParam(":nomeInstrutor", $instrutor->nomeInstrutor);
        $stmt->bindParam(":dataNascimento", $instrutor->dataNascimento);
        $stmt->bindParam(":email", $instrutor->email);
        $stmt->bindParam(":telefone", $instrutor->telefone);
        $stmt->bindParam(":cidade", $instrutor->cidade);
        $stmt->bindParam(":siglaUf", $instrutor->siglaUf);
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

function apagar($idInstrutor)
{
    try {
        $con = getConnection();

        $stmt = $con->prepare("DELETE FROM instrutor WHERE idInstrutor = ?");
        $stmt->bindParam(1, $idInstrutor);

        if ($stmt->execute())
            return true;
    } catch (PDOException $error) {
        return false;
    } finally {
        unset($con);
        unset($stmt);
    }
}
