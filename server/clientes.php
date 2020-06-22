<?php

include("pdo-connection.php");

function logar($usuario)
{
    global $PDO;
    $sql = "SELECT * FROM clientes
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

function usuarioTipos()
{
    global $PDO;
    $sql = "SELECT * FROM usuario_tipos";
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
    nascimento,
    email,
    celular,
    cep,
    endereco,
    numero,
    bairro,
    complemento,
    cidade,
    uf,
    usuario,
    senha,
    inativado,
    adm)

    VALUES

    (:nome,
    :sobrenome,
    :cpf,
    :nascimento,
    :email,
    :celular,
    :cep,
    :endereco,
    :numero,
    :bairro,
    :complemento,
    :cidade,
    :uf,
    :usuario,
    :senha,
    :inativado,
    :adm)';

    $stmt = $PDO->prepare($sql);

    $stmt->execute(array(
        ':nome' => $clientes['nome'],
        ':sobrenome' => $clientes['sobrenome'],
        ':cpf' => $clientes['cpf'],
        ':nascimento' => $clientes['nascimento'],
        ':email' => $clientes['email'],
        ':celular' => $clientes['celular'],
        ':cep' => $clientes['cep'],
        ':endereco' => $clientes['endereco'],
        ':numero' => $clientes['numero'],
        ':bairro' => $clientes['bairro'],
        ':complemento' => $clientes['complemento'],
        ':cidade' => $clientes['cidade'],
        ':uf' => $clientes['uf'],
        ':usuario' => $clientes['usuario'],
        ':senha' => $clientes['senha'],
        ':inativado' => $clientes['inativado'],
        ':adm' => $clientes['adm']
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
        nascimento = :nascimento
        email = :email
        celular = :celular
        cep = :cep
        endereco = :endereco
        numero = :numero
        bairro = :bairro
        complemento = :complemento
        cidade = :cidade
        uf = :uf
        usuario = :usuario
        senha = :senha
        inativado = :inativado
        adm = :adm
        WHERE id = :id';
    $stmt = $PDO->prepare($sql);

    $stmt->execute(array(
        ':nome' => $clientes['nome'],
        ':sobrenome' => $clientes['sobrenome'],
        ':cpf' => $clientes['cpf'],
        ':nascimento' => $clientes['nascimento'],
        ':email' => $clientes['email'],
        ':celular' => $clientes['celular'],
        ':cep' => $clientes['cep'],
        ':endereco' => $clientes['endereco'],
        ':numero' => $clientes['numero'],
        ':bairro' => $clientes['bairro'],
        ':complemento' => $clientes['complemento'],
        ':cidade' => $clientes['cidade'],
        ':uf' => $clientes['uf'],
        ':usuario' => $clientes['usuario'],
        ':senha' => $clientes['senha'],
        ':inativado' => $clientes['inativado'],
        ':adm' => $clientes['adm'],
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
