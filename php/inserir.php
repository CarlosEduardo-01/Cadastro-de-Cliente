<?php
    header("content-Type: application/json");

    include "conexao.php";

    $nome = $_POST["nome"] ?? "";
    $email = $_POST["email"] ?? "";
    $telefone = $_POST["telefone"] ?? "";

    if ($nome == ""  || $email == ""  || $telefone == "" ) {
        echo json_encode([
            "status" => "erro",
            "mensagem" => "preencha todos os campos"
        ]);
        exit;
    }

    $sql = "INSERT INTO clientes (nome, email, telefone) VALUES (?, ?, ?)";

    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("sss", $nome, $email, $telefone);

    if ($stmt->execute()) {
        echo json_encode([
            "status" => "sucesso",
            "mensagem" => "cliente cadastado com sucesso"
        ]);
    }

    else {
        echo json_encode([
            "status" => "erro",
            "mensagem" => "erro ao cadastrar cliente"
        ]);
    }