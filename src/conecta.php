<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "catalogo_de_filmes";

try{

    $conexao = new PDO(
        "mysql:host=$servidor;dbname=$banco;cherset=utf8",
        $usuario,$senha
    );

    $conexao->setAttribute(
        PDO::ATTR_ERRMODE,
        PDO::ERRMODE_EXCEPTION
    );

} catch(Exception $erro){

    die("Deu ruim: ".$erro->getMessage());
}