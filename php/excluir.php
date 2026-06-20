<?php

header("Content-Type: application/json");

include "conexao.php";

$id = $_POST["id"] ?? "";

if ($id == "") {
    echo json_encode([
        "status" => "erro",
        "mensagem" => "ID não informado"
    ]);
    exit;
}

$sql = "DELETE FROM clientes WHERE id = ?";

$stmt = $conexao->prepare($sql);
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    echo json_encode([
        "status" => "sucesso",
        "mensagem" => "Cliente excluído com sucesso"
    ]);
} else {
    echo json_encode([
        "status" => "erro",
        "mensagem" => "Erro ao excluir cliente"
    ]);
}