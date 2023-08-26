<?php
 require_once "../src/funcoes-genero.php";

$id = filter_input(INPUT_GET,"id", FILTER_SANITIZE_NUMBER_INT);

$genero = ler_um_genero($conexao, $id);

if (isset($_POST['atualizar'])){

    $nome = filter_input(INPUT_POST,"nome",FILTER_SANITIZE_SPECIAL_CHARS);

    atualizar_genero($conexao, $nome,$id);

    /* Redirecionamento */
     header("location:visualizar.php");
} 

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atualizar gêneros | Filmes</title>

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

<section class="destaque-inserir-genero">
    <h2> Formulario Gênero do Filme</h2>
</section>
<section class="inserir-genero">
    <h2>Atualizar o Gênero</h2>
    <form action="" method="post">
        <p>
            <label for="nome">Novo nome:</label>
            <input value="<?=$genero['nome_genero']?>" type="text" name="nome" id="nome" required>
        </p>
    
        <button type="submit" name="atualizar">atualizar o Gênero</button>
    </form>
</section>



<div class="voltar">
    <p><a href="visualizar.php">Voltar</a></p>
</div>




<?php
require "../rodape.php";
?>