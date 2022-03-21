<?php

require_once("./conexao.php");


function addUsuario($usuario)
{
    try {
        $con = getConnection();

        $stmt = $con->prepare("INSERT INTO usuario
        (cpf, nomeUsuario, email, telefone, dataNascimento, atestadoMedico, comentario, dataInicio) 
        VALUES 
        (:cpf, :nomeUsuario, :email, :telefone, :dataNascimento, :atestadoMedico, :comentario, :dataInicio)");

        $stmt->bindParam(":cpf", $usuario->cpf);
        $stmt->bindParam(":nomeUsuario", $usuario->nomeUsuario);
        $stmt->bindParam(":email", $usuario->email);
        $stmt->bindParam(":telefone", $usuario->telefone);
        $stmt->bindParam(":dataNascimento", $usuario->dataNascimento);
        $stmt->bindParam(":atestadoMedico", $usuario->atestadoMedico);
        $stmt->bindParam(":comentario", $usuario->comentario);
        $stmt->bindParam(":dataInicio", $usuario->dataInicio);



        if ($stmt->execute())
            return true;
    } catch (PDOException $error) {
        return false;
    } finally {
        unset($con);
        unset($stmt);
    }
}



function listarUsuario()
{
    try {
        $con = getConnection();

        $rs = $con->query("SELECT * FROM usuario");

        $usuarios = array();

        while ($usuario = $rs->fetch(PDO::FETCH_OBJ)) {
            array_push($usuarios, $usuario);
        }

        return $usuarios;
    } catch (PDOException $error) {
        echo "Erro ao listar os Usuários. Erro: {$error->getMessage()}";
    } finally {
        unset($con);
        unset($rs);
    }
}


function usuarioFind($nomeUsuario)
{
    try {
        $con = getConnection();

        $stmt = $con->prepare("SELECT * FROM usuario WHERE nomeUsuario LIKE :nomeUsuario");
        $stmt->bindValue(":nomeUsuario", "%{$nomeUsuario}%");

        if ($stmt->execute()) {
            if ($stmt->rowCount() > 0) {
                
                $usuarios = array();
                while ($usuario = $stmt->fetch(PDO::FETCH_OBJ)) {
                    array_push($usuarios, $usuario);
                }

                return $usuarios;
            }
        }
    } catch (PDOException $error) {
        echo "Erro encontrar o usuário'{$nomeUsuario}'. Erro: {$error->getMessage()}";
    } finally {
        unset($con);
        unset($stmt);
    }
}

function findById($idUsuario)
{
    try {
        $con = getConnection();

        $stmt = $con->prepare("SELECT * FROM usuario WHERE idUsuario = :idUsuario");

        $stmt->bindParam(":idUsuario", $idUsuario);

        if ($stmt->execute()) {
            if ($stmt->rowCount() > 0) {
                return $stmt->fetch(PDO::FETCH_OBJ);
            }
        }
    } catch (PDOException $erro) {
        echo "Erro ao buscar o instrutor pelo id: '{$idUsuario}'. Erro: {$erro->getMessage()}";
    } finally {
        unset($con);
        unset($stmt);
    }
}


function atualizarUsuario($usuario){
        try{
            $con = getConnection();

            $stmt = $con->prepare("UPDATE usuario SET cpf = :cpf, nomeUsuario = :nomeUsuario, email=:email, telefone=:telefone, dataNascimento=:dataNascimento, atestadoMedico=:atestadoMedico, comentario=:comentario, dataInicio=:dataInicio WHERE idUsuario =:idUsuario ");

            $stmt->bindParam(":idUsuario", $usuario->idUsuario);
            $stmt->bindParam(":nomeUsuario", $usuario->nomeUsuario);
            $stmt->bindParam(":cpf", $usuario->cpf);
            $stmt->bindParam(":email", $usuario->email);
            $stmt->bindParam(":telefone", $usuario->telefone);
            $stmt->bindParam(":atestadoMedico", $usuario->atestadoMedico);
            $stmt->bindParam(":comentario", $usuario->comentario);
            $stmt->bindParam(":dataNascimento", $usuario->dataNascimento);
            $stmt->bindParam(":dataInicio", $usuario->dataInicio);

            if ($stmt->execute())
                return true;
            } catch (PDOException $error) {
                return false;
            } finally {
                unset($con);
                unset($stmt);
            }
}
function deletarUsuario($idUsuario)
{
    try {
        $con = getConnection();

        $stmt = $con->prepare("DELETE FROM usuario WHERE idUsuario =?");
        $stmt->bindParam(1,$idUsuario);
        

        if ($stmt->execute())
            return true;
    } catch (PDOException $error) {
        return false;
    } finally {
        unset($con);
        unset($stmt);
    }
}