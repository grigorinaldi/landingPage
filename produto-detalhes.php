<?php
require_once 'init.php';

$id = isset($_GET['id']) ? (int) $_GET['id'] : 0;
$ids = array_column($_SESSION['produtos'], 'id');
$index = array_search($id, $ids);

if ($index !== false) {
    $produto = $_SESSION['produtos'][$index];
} else {
    header('Location: 404.php');
    exit();
}

$produto = $_SESSION['produtos'][$index];
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $nomeLoja; ?></title>
    <link rel="stylesheet" href="./landingPage.css">
</head>
<body>

    <?php require 'partials/header.php'; ?>

    <main class="container-detalhes">
        <div class="sessao-produto">
            <div class="foto-produto">
                <img src="<?php echo $produto['imagem']; ?>" alt="<?php echo $produto['nome']; ?>">
            </div>

            <div class="info-produto">
                <h1><?php echo $produto['nome']; ?></h1>
                <hr>

                <p><strong>Categoria:</strong> <?php echo $produto['categoria']; ?></p>
                <p class="preco-pagina"><strong>Preço:</strong> R$ <?php echo $produto['preco']; ?></p>
                <p><strong>Quantidade em estoque:</strong> <?php echo $produto['estoque']; ?></p>
                <p><strong>Descrição:</strong> <?php echo $produto['descricao']; ?></p>

                <div class="acoes">
                    <button class="btn-comprar-agora">Comprar Agora</button>
                    <button class="btn-carrinho">Adicionar ao Carrinho</button>
                </div>
            </div>
        </div>

        <div class="especificacoes-tecnicas">
            <h2>Detalhes do Produto</h2>
            <table class="tabela-specs">
                <tr>
                    <th>Nome</th>
                    <td><?php echo $produto['nome']; ?></td>
                </tr>
                <tr>
                    <th>Categoria</th>
                    <td><?php echo $produto['categoria']; ?></td>
                </tr>
                <tr>
                    <th>Preço</th>
                    <td>R$ <?php echo $produto['preco']; ?></td>
                </tr>
                <tr>
                    <th>Estoque</th>
                    <td><?php echo $produto['estoque']; ?></td>
                </tr>
                <tr>
                    <th>Descrição</th>
                    <td><?php echo $produto['descricao']; ?></td>
                </tr>
            </table>
        </div>
    </main>

    <?php require 'partials/footer.php'; ?>

</body>
</html>