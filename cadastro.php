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
    <section class="login-container">
        <div class="login-box">
            <h1 class="login-titulo">Cadastre-se aqui!</h1>

            <form class="login-formulario">

                <div class="login-campo login-campo-full">
                    <label for="nome">Nome</label>
                    <input type="nome" id="nome" name="nome">
                </div>
                
                <div class="login-campo login-campo-full">
                    <label for="e-mail">E-mail</label>
                    <input type="e-mail" id="e-mail" name="e-mail">
                </div>

                <div class="login-campo login-campo-full">
                    <label for="senha">Senha</label>
                    <input type="senha" id="senha" name="senha">
                </div>

                <div class="login-campo login-campo-full">
                    <label for="confirmar senha">Confirme sua senha</label>
                    <input type="senha" id="senha" name="senha">
                </div>

                <div class="login-botoes">
                    <button type="submit"><a href="landingPage.php">Registrar</a></button>
                </div>
            </form>
        </div>
    </section>
</body>

<footer>
    <h1><a>Condições de Uso</a> | <a>Notificação de Privacidade</a> | <a>Cookies</a> | <a>Anúncios Baseados em
            Interesses</a><br>
        © 2021-2026 Amazon.com, Inc. ou suas afiliadas</h1>
</footer>
</body>

</html>