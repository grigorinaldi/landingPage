<?php
include 'data.php';
//print '<pre>';
//print_r($produtos_base);

?>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $nomeLoja; ?></title>
    <link rel="stylesheet" href="./landingPage.css">
</head>

<body>
    <?php
    require 'partials/header.php';
    ?>
    <div class="catalogo-filtro">
        <ul class="lista-catalogo">
            <?php
            foreach ($categorias as $kcat => $nome) {
                print '<li><a href="#">' . $nome . '</a></li>';
            }
            ?>
        </ul>
    </div>
    <div class="juntar">
        <?php
        foreach ($produtos_base as $produto) {
            print '
                <div class="card">
            <img src="' . $produto['imagem'] . 'width="300" height="170">
            <h2>' . $produto['nome'] . '<br><br>' . $produto['preco'] . '</h2>
            <a href="#" class="link">
                <h3 class="card_h2">Comprar</h3>
            </a>
        </div>';
        }
        ?>

        <?php
        require 'partials/footer.php';
        ?>
</body>

</html>