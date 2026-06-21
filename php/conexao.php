<?php

$host = "localhost";
$usuario = "root";
$senha = "";
$banco = "cadastro_clientes";
$porta = 3306;

$conexao = new mysqli($host, $usuario, $senha, $banco, $porta);

if ($conexao->connect_error) {
    die(json_encode([
        "status" => "erro",
        "mensagem" => "erro ao conectar com o banco de dados"
    ]));
}

$conexao->set_charset("utf8");