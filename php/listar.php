<?php

    header("content-Type: application/json");

    include "conexao.php";

    $sql = "SELECT * FROM clientes ORDER BY id DESC";

    $resultado = $conexao->query($sql);

    $clientes = [];

    while ($linha = $resultado->fetch_assoc()) {
        $clientes[] = $linha;
    }

    echo json_encode($clientes);