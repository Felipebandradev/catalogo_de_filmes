<?php

require_once "conecta.php";

function ler_genero( PDO $conexao){
    $sql = "SELECT * FROM generos ORDER BY nome_genero";

    try {    
     $consulta = $conexao->prepare($sql);

     $consulta->execute();

     $resultado= $consulta->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $erro) {
 
     die("ERRO: ".$erro->getMessage());
 
    }
 
    return $resultado;
};

function inserir_genero(PDO $conexao, string $genero){

    $sql = "INSERT INTO generos(nome_genero) VALUES (:nome)";

    try {
        $consulta = $conexao->prepare($sql);

        $consulta->bindValue(":nome",$genero, PDO::PARAM_STR);

        $consulta->execute();
    } catch (Exception $erro) {
       die("Erro ao inserir:".$erro->getMessage());
    }

};

function ler_um_genero(PDO $conexao,int $id_genero){
    $sql ="SELECT * FROM generos WHERE id = :id";

    try {
        $consulta = $conexao->prepare($sql);
        $consulta->bindValue(":id", $id_genero, PDO::PARAM_INT);
        $consulta->execute();
        $resultado = $consulta->fetch(PDO::FETCH_ASSOC);
    } catch (Exception $erro) {
        die("Erro ao Cerregar: ".$erro->getMessage());
    }

    return $resultado;
}

function atualizar_genero(PDO $conexao, string $genero, int $id){
    $sql = "UPDATE generos SET nome_genero = :nome WHERE id = :id" ;
    try{
    $consulta = $conexao->prepare($sql);
    $consulta->bindValue(":nome",$genero, PDO::PARAM_STR);
    $consulta->bindValue(":id",$id,PDO::PARAM_INT);
    $consulta->execute();
    } catch(Exception $erro){
        die("Erro ao Alterar: ".$erro->getMessage());
    }
}