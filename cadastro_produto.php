<?php
require_once("init.php");
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $nomeLoja; ?> - Cadastro de Produtos</title>
    <link rel="stylesheet" href="./landingPage.css">
</head>

<body>

    <?php require 'partials/header.php'; ?>

    <section class="login-container">
        <div class="login-box">
            <h1 class="login-titulo">Cadastro de Produtos</h1>

            <form action="recebe_produto.php" method="POST" class="login-formulario">

                <div class="login-campo login-campo-full">
                    <label for="nome_produto">Nome do produto</label>
                    <input type="text" name="nome_produto" id="nome_produto" required>
                </div>

                <div class="login-campo login-campo-full">
                    <label for="categoria">Categoria</label>
                    <input type="text" name="categoria" id="categoria" required>
                </div>

                <div class="login-campo login-campo-full">
                    <label for="preco">Preço</label>
                    <input type="number" step="0.01" name="preco" id="preco" required>
                </div>

                <div class="login-campo login-campo-full">
                    <label for="estoque">Quantidade em estoque</label>
                    <input type="number" name="estoque" id="estoque" required>
                </div>

                <div class="login-campo login-campo-full">
                    <label for="descricao">Descrição</label>
                    <textarea name="descricao" id="descricao" rows="4" required></textarea>
                </div>

                <div class="login-campo login-campo-full">
                    <label for="imagem">Link da imagem</label>
                    <input type="text" name="imagem" id="imagem">
                </div>

                <div class="login-botoes">
                    <button type="submit">Cadastrar produto</button>
                </div>
            </form>
        </div>
    </section>

    <?php require 'partials/footer.php'; ?>

</body>
</html>