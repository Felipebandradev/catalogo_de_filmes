<?php 
require_once "../src/funcoes-genero.php";

$ler_genero = ler_genero($conexao);

$quantidade = count($ler_genero);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Gêneros |Filmes</title>

    <link rel="stylesheet" href="../css/estilos.css">
</head>
<body>
    <main>
       <header>
            <h1 class="logo"><a href="../index.php"><img src="../img/logo.svg" alt="Logo filmes" ></a></h1>

            <nav >
                <ul class="menu">
                    <li><a href="genero-filmes/visualizar.php">Gêneros dos Filmes</a></li>
                    <li><a href="">Filmes</a></li>
                </ul>
            </nav>    
        </header>
        <section class="destaque-genero">
            <h2> Todos os Gêneros</h2>
            
            <p><a href="inserir.php">Inserir o Gênero</a></p>
        </section>
<section class="tabela_genero">
    <table>
        <caption>Lista de Gêneros: <?=$quantidade?></caption>
    
        <thead>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th >Operações</th>
            </tr>
        </thead>
        <?php
        foreach ($ler_genero as $genero){
        ?>
        <tr>
            <td><?=$genero["id"]?></td>
            <td><?=$genero["nome_genero"]?></td>
            <td>
                <a href="atualizar.php?id=<?=$genero["id"]?>">Editar 🖋</a>
                <a href="">Excluir 🗑</a>
            </td>
        </tr>
        <?php }?>
    </table>
</section>

<?php
require "../rodape.php";
?>