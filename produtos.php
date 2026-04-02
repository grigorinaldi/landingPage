<?php
require_once "init.php";
$categoria_get = isset($_GET["categoria"])? trim($_GET["categoria"]):"";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $nomeLoja; ?></title>
    <link rel="stylesheet" href="./landingPage.css">
</head>

<body>
    <?php require 'partials/header.php'; ?>

    <main class="conteudo">
        <div class="catalogo-filtro">
            <ul class="lista-catalogo">
                <?php
                foreach ($categorias as $kcat => $nome) {
                    print '<li><a href="produtos.php?categoria=' . $kcat . '">' . $nome . '</a></li>';
                }
                ?>
            </ul>
        </div>

        <div class="juntar">
            <?php
            foreach ($_SESSION["produtos"] as $produto) {
            
                if ($categoria_get === '' || $produto['categoria']===$categoria_get) {

                print '
                <div class="card">
                    <img src="' . $produto['imagem'] . '" width="300" height="170">
                    <h2>' . $produto['nome'] . '<br><br>R$ ' . number_format($produto['preco'], 2, ',', '.') . '</h2>
                    <a href="#" class="link">
                        <h3 class="card_h2">Comprar</h3>
                    </a>
                </div>';
            }
            }
            ?>
        </div>
    </main>

    <?php require 'partials/footer.php'; ?>
</body>
</html>