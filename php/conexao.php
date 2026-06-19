<?php

$host = "localhost";
$usuario = "root";
$senha = "Dudu2031cadu@01";
$banco = "cadastro_clientes";
$porta = 3307;

$conexao = new mysqli($host, $usuario, $senha, $banco, $porta);

if ($conexao->connect_error) {
    die(json_encode([
        "status" => "erro",
        "mensagem" => "erro ao conectar com o banco de dados"
    ]));
}

$conexao->set_charset("utf8");