<?php
include 'data.php';
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
    <div class="juntar">
        <div class="card">
            <img src="data:image/jpeg;base64,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"
                alt="Mesa Orgânica Geometric" width="300" height="170">
            <h2>Mesa Orgânica Geometric<br><br>Preço: R$6.930,00</h2>
            <a href="mesa_organica.php" class="link"><h3 class="card_h2">Comprar</h3></a>
        </div>

        <div class="card">
            <img src="https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcQy0fLkbB0SW_qeMYYScansjBJsi2kZljkEsAD-J2l5NMO_0A-kcKDWDz-k_OgxTX4fdz-6gkjWa9uht9lmkLLFWT9SnkBFfmQ01ExHFXYqMFSiBo0Ma_ReMQ" alt="Buffet de madeira" width="300" height="170">
            <h2>Buffet de madeira<br><br>Preço: R$4.500,00</h2>
            <a href="#" class="link"><h3 class="card_h2">Comprar</h3></a>
        </div>

        <div class="card">
            <img src="data:image/jpeg;base64,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"
                alt="Mesa Orgânica Geometric" width="300" height="170">
            <h2>Cadeira Portugal <br><br>Preço: R$500,00</h2>
            <a href="#" class="link"><h3 class="card_h2">Comprar</h3></a>
        </div>

        <div class="card">
            <img src="https://casavee.cdn.magazord.com.br/img/2025/11/produto/8700/serraltense1261-sfi-rack-grande-ind.jpg?ims=fit-in/1000x1000/filters:fill(white)"
                            alt="Mesa Orgânica Geometric" width="300" height="170">
            <h2>Rack de madeira<br><br>Preço: R$2.500,00</h2>
            <a href="#" class="link"><h3 class="card_h2">Comprar</h3></a>
        </div>
    </div>

    <section class="contato-container">
        <div class="contato-box">
            <h1 class="contato-titulo">Área de contato</h1>

            <form class="contato-formulario">
                <div class="contato-campo contato-campo-full">
                    <label for="nome">Nome</label>
                    <input type="text" id="nome" name="nome">
                </div>

                <div class="contato-campo contato-campo-full">
                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email">
                </div>

                <div class="contato-campo contato-campo-full">
                    <label for="mensagem">Mensagem</label>
                    <textarea id="mensagem" name="mensagem"></textarea>
                </div>

                <div class="contato-botoes">
                    <button type="reset">Limpar</button>
                    <button type="submit">Enviar</button>
                </div>
            </form>
        </div>
    </section>
    <?php
        require 'partials/footer.php';
    ?>
</body>

</html>