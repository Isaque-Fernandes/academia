<?php

require_once './conexao.php';


// CRIAÇÃO DA FUNÇÃO addUsuario
function addUsuario($usuario)
{
    try {
        $con = getConnection();

        $stmt = $con->prepare("INSERT INTO usuario(cpf, nome, email, telefone, dataNascimento, atestadoMedico, comentario, dataInicio) VALUES (:cpf, :nome, :email, :telefone, :dataNascimento, :atestadoMedico, :comentario, :dataInicio)");

        $stmt->bindParam(":cpf", $usuario->cpf);
        $stmt->bindParam(":nome", $usuario->nome);
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

// CRIAÇÃO DA FUNÇÃO listarUsuario

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
function encontrarUsuario($nome)
{
    try {
        $con = getConnection();

        $stmt = $con->prepare("SELECT nome, cpf, email FROM usuario WHERE nome LIKE :nome");
        $stmt->bindValue(":nome", "%{$nome}%");

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
        echo "Erro encontrar o usuário'{$nome}'. Erro: {$error->getMessage()}";
    } finally {
        unset($con);
        unset($stmt);
    }
}

function encontrarUsuarioId($id)
{
    try {
        $con = getConnection();

        $stmt = $con->prepare("SELECT * FROM usuario WHERE id = :id");

        $stmt->bindParam(":id", $id);

        if ($stmt->execute()) {
            if ($stmt->rowCount() > 0) {
                return $stmt->fetch(PDO::FETCH_OBJ);
            }
        }
    } catch (PDOException $error) {
        echo "Erro ao buscar o usuario pelo identificador: '{$id}'. Erro: {$error->getMessage()}";
    } finally {
        unset($con);
        unset($stmt);
    }
}
function atualizarUsuario($usuario)
{
    try {
        $con = getConnection();

        $stmt = $con->prepare("UPDATE usuario SET nome = :nome, cpf = :cpf WHERE id = :id");

        $stmt->bindParam(":id", $usuario->id);
        $stmt->bindParam(":nome", $usuario->nome);
        $stmt->bindParam(":cpf", $usuario->cpf);

        if ($stmt->execute())
            return true;
    } catch (PDOException $error) {
        return false;
    } finally {
        unset($con);
        unset($stmt);
    }
}

function deletarUsuario($id)
{
    try {
        $con = getConnection();

        $stmt = $con->prepare("DELETE FROM usuario WHERE id = ?");
        $stmt->bindParam(1, $codigo);

        if ($stmt->execute())
            return true;
    } catch (PDOException $error) {
        return false;
    } finally {
        unset($con);
        unset($stmt);
    }
}