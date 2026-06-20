<?php

header("Content-Type: application/json");

include "conexao.php";

$id = $_POST["id"] ?? "";
$nome = $_POST["nome"] ?? "";
$email = $_POST["email"] ?? "";
$telefone = $_POST["telefone"] ?? "";

if ($id == "" || $nome == "" || $email == "" || $telefone == "") {
    echo json_encode([
        "status" => "erro",
        "mensagem" => "Preencha todos os campos"
    ]);
    exit;
}

$sql = "UPDATE clientes SET nome = ?, email = ?, telefone = ? WHERE id = ?";

$stmt = $conexao->prepare($sql);
$stmt->bind_param("sssi", $nome, $email, $telefone, $id);

if ($stmt->execute()) {
    echo json_encode([
        "status" => "sucesso",
        "mensagem" => "Cliente atualizado com sucesso"
    ]);
} else {
    echo json_encode([
        "status" => "erro",
        "mensagem" => "Erro ao atualizar cliente"
    ]);
}