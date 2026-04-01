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

            <form action="recebe.php" method="POST" class="login-formulario">

                <div class="login-campo login-campo-full">
                    <label for="nome">Nome</label>
                    <input type="nome" placeholder="" name="nome">
                </div>
                
                <div class="login-campo login-campo-full">
                    <label for="e-mail">E-mail</label>
                    <input type="email" placeholder="" name="email">
                </div>

                <div class="login-campo login-campo-full">
                    <label for="senha">Senha</label>
                    <input type="text" placeholder="" name="senha">
                </div>

                <div class="login-campo login-campo-full">
                    <label for="confirmar senha">Confirme sua senha</label>
                    <input type="text" placeholder="" name="confirmacao">
                </div>

                <div class="login-botoes">
                    <button type="submit"><a>Registrar</a></button>
                </div>
            </form>
        </div>
    </section>
</body>

<?php
        require 'partials/footer.php';
    ?>
</body>

</html>