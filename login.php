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
            <h1 class="login-titulo">Bem Vindo(a)!</h1>

            <form class="login-formulario">
                <div class="login-campo login-campo-full">
                    <label for="nome">E-mail</label>
                    <input type="e-mail" id="e-mail" name="e-mail">
                </div>

                <div class="login-campo login-campo-full">
                    <label for="email">Senha</label>
                    <input type="senha" id="senha" name="senha">
                </div>
                    <a href="#" class="login-esqueceu">Esqueceu a sua senha?</a>
                <div class="login-botoes">
                    <button type="submit">Entrar</button>
                </div>
                    <span class="login-cadastrese">Ainda não está registrado? <a href="cadastro.php">Cadastre-se agora.</a></span>
            </form>
        </div>
    </section>
</body>

<?php
        require 'partials/footer.php';
    ?>
</body>

</html>