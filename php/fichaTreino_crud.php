<?php
require_once("./conexao.php");

function fichaTreinoCreate($fichaTreino)
{
    try {
        $con = getConnection();


        $stmt = $con->prepare("INSERT INTO usuarioTreino
        (id_usuario, id_instrutor) VALUES
        (:id_usuario, :id_instrutor)");

        $stmt->bindParam(":id_usuario", $fichaTreino->id_usuario);
        $stmt->bindParam(":id_instrutor", $fichaTreino->id_instrutor);


        if ($stmt->execute())
            return true;
    } catch (PDOException $erro) {
        return false;
    } finally {
        unset($con);
        unset($stmt);
    }
}


function fichaTreinoGET()
{
    try {
        $con = getConnection();

        $rs = $con->query("SELECT nomeUsuario, nomeInstrutor FROM fichaTreino");



        $fichasTreino = array();

        while ($fichaTreino = $rs->fetch(PDO::FETCH_OBJ)) {
            array_push($fichasTreino, $fichaTreino);
        }

        return $fichasTreino;
    } catch (PDOException $erro) {
        echo "Erro ao listar os instrutores. Erro: {$erro->getMessage()}";
    } finally {
        unset($con);
        unset($rs);
    }
}

function fichaTreinoFind($nomeUsuario)
{
    try {
        $con = getConnection();

        $stmt = $con->prepare("SELECT  * FROM fichaTreino WHERE nomeUsuario LIKE :nomeUsuario");
        $stmt->bindValue(":nomeUsuario", "%{$nomeUsuario}%");

        if ($stmt->execute()) {
            if ($stmt->rowCount() > 0) {

                $fichasTreino = array();
                while ($fichaTreino = $stmt->fetch(PDO::FETCH_OBJ)) {
                    array_push($fichasTreino, $fichaTreino);
                }

                return $fichasTreino;
            }
        }
    } catch (PDOException $error) {
        echo "Erro ao buscar o usuário '{$nomeUsuario}'. Erro: {$error->getMessage()}";
    } finally {
        unset($con);
        unset($stmt);
    }
}


function findById($IdUsuarioTreino)
{
    try {
        $con = getConnection();

        $stmt = $con->prepare("SELECT * FROM usuarioTreino WHERE IdUsuarioTreino = :IdUsuarioTreino");

        $stmt->bindParam(":IdUsuarioTreino", $IdUsuarioTreino);

        if ($stmt->execute()) {
            if ($stmt->rowCount() > 0) {
                return $stmt->fetch(PDO::FETCH_OBJ);
            }
        }
    } catch (PDOException $erro) {
        echo "Erro ao buscar o instrutor pelo id: '{$IdUsuarioTreino}'. Erro: {$erro->getMessage()}";
    } finally {
        unset($con);
        unset($stmt);
    }
}

function update($fichaTreino)
{
    try {
        $con = getConnection();

        $stmt = $con->prepare("UPDATE usuarioTreino SET
         id_usuario = :id_usuario,
         id_instrutor = :id_instrutor
  
           WHERE IdUsuarioTreino = :IdUsuarioTreino ");

        $stmt->bindParam(":IdUsuarioTreino", $fichaTreino->IdUsuarioTreino);
        $stmt->bindParam(":id_usuario", $fichaTreino->id_usuario);
        $stmt->bindParam(":id_instrutor", $fichaTreino->id_instrutor);


        if ($stmt->execute())
            return true;
    } catch (PDOException $error) {
        return false;
    } finally {
        unset($con);
        unset($stmt);
    }
}


function apagar($IdUsuarioTreino)
{
    try {
        $con = getConnection();

        $stmt = $con->prepare("DELETE FROM usuarioTreino WHERE IdUsuarioTreino = ?");
        $stmt->bindParam(1, $IdUsuarioTreino);

        if ($stmt->execute())
            return true;
    } catch (PDOException $error) {
        return false;
    } finally {
        unset($con);
        unset($stmt);
    }
}
