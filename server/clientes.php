<?php

include("pdo_connection.php");

function logar($usuario)
{
    global $PDO;
    $sql = "SELECT * 
            FROM clientes
            WHERE usuario = :usuario
                AND senha = :senha
                AND ISNULL(inativado)";
    $stmt = $PDO->prepare($sql);
    $res = $stmt->execute($usuario);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}

function carregar($id)
{
    global $PDO;
    $sql = "SELECT * FROM clientes WHERE id = :id";
    $stmt = $PDO->prepare($sql);
    $stmt->bindParam(':id', $id);
    $res = $stmt->execute();
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}

function listar()
{
    global $PDO;
    $sql = "SELECT * FROM clientes";
    $result = $PDO->query($sql);
    $rows = $result->fetchAll(PDO::FETCH_ASSOC);

    return $rows;
}

function listarAtivos()
{
    global $PDO;
    $sql = "SELECT * FROM clientes WHERE ISNULL(inativado)";
    $result = $PDO->query($sql);
    $rows = $result->fetchAll(PDO::FETCH_ASSOC);

    return $rows;
}

function cadastrar($usuario)
{
    global $PDO;
    $sql = 'INSERT INTO clientes
    (nome,
    sobrenome,
    cpf,
    email,
    celular,
    usuario,
    senha,
    inativado,
    adm)

    VALUES

    (:nome,
    :sobrenome,
    :cpf,
    :email,
    :celular,
    :usuario,
    :senha,
    :inativado,
    :adm)';

    $stmt = $PDO->prepare($sql);

    $stmt->execute(array(
        ':nome' => $usuario['nome'],
        ':sobrenome' => $usuario['sobrenome'],
        ':cpf' => $usuario['cpf'],
        ':email' => $usuario['email'],
        ':celular' => $usuario['celular'],
        ':usuario' => $usuario['usuario'],
        ':senha' => $usuario['senha'],
        ':inativado' => $usuario['inativado'],
        ':adm' => $usuario['adm']
    ));

    return $PDO->lastInsertId();
}

function editar($usuario)
{
    global $PDO;
    $sql = 'UPDATE clientes SET
        nome = :nome
        sobrenome = :sobrenome
        cpf = :cpf
        email = :email
        celular = :celular
        usuario = :usuario
        senha = :senha
        inativado = :inativado
        adm = :adm
        WHERE id = :id';
    $stmt = $PDO->prepare($sql);

    $stmt->execute(array(
        ':nome' => $usuario['nome'],
        ':sobrenome' => $usuario['sobrenome'],
        ':cpf' => $usuario['cpf'],
        ':email' => $usuario['email'],
        ':celular' => $usuario['celular'],
        ':usuario' => $usuario['usuario'],
        ':senha' => $usuario['senha'],
        ':inativado' => $usuario['inativado'],
        ':adm' => $usuario['adm'],
        ':id' => $usuario['id']
    ));
}

function inativar($id)
{
    global $PDO;
    $sql = 'UPDATE clientes SET
    inativado = :inativado
    WHERE id = :id';
    $stmt = $PDO->prepare($sql);

    $stmt->execute(array(
        ':id' => $id,
        ':inativado' => date('Y-m-d h:i:s')
    ));
}

function reativar($id)
{
    global $PDO;
    $sql = 'UPDATE clientes SET
    inativado = :inativado
    WHERE id = :id';
    $stmt = $PDO->prepare($sql);

    $stmt->execute(array(
        ':id' => $id,
        ':inativado' => null
    ));
}

function apagar($id)
{
    global $PDO;
    $sql = 'DELETE FROM clientes WHERE id = :id';
    $stmt = $PDO->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
}
