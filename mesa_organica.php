<?php
include 'data.php';
?>

<html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $nomeLoja; ?></title>
    <link rel="stylesheet" href="./landingPage.css">
</head>
<body>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giogio móveis</title>
    <link rel="stylesheet" href="./landingPage.css">
</head>

<body>
    <?php
        require 'partials/header.php';
    ?>

    <main class="container-detalhes">
        <div class="sessao-produto">
            <div class="foto-produto">
                <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/
                2wCEAAkGBxASEhIPEhMPEBAPEg0QDw8QEBAPEA8VFRYWFhUSFRcYHSggGBolHRMVITEhJSkrLi4uFx8zODMtNygtLisBCgoKDg0OGhAQGy0mICUtLS0tLTE3LTc1LS0tNzAtLS8tLS0tKy0sLS0tNS0tLS0rLS01LystLS0tLTUrLS0tLf/AABEIAOEA4QMBIgACEQEDEQH/xAAbAAEAAQUBAAAAAAAAAAAAAAAAAwECBAYHBf/EAEQQAAIBAQMHCQQHBwQDAQAAAAABAgMEESEFBhIxYXGxEzJBUXKBkaHBBzPR8CJCUnOCssIVIyRDU2PDNGKDopKT8RT/xAAZAQEAAwEBAAAAAAAAAAAAAAAAAQMEBQL/xAAkEQEBAAEEAgEFAQEAAAAAAAAAAQIDBBExMkEhEhQiUXFCM//
                aAAwDAQACEQMRAD8A7iAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAC2rUjFOUmoxim5SbuSS1ts0nK+feLjZoJpYcrUTue2Mfj4HjPUxw7e8NPLPpvBZVrRjjKUYrrk0l5nI7Vl62VedXq7oPkluuhdeYHJtu9u99LeL8TNlu56jTNpfdddqZeskddooblUhJ+TIXnNYv68O5SfocsjTLuTRXd5l+nv7TH9uqxzhsb/AJ9Jb5aPEyaOUqE+bVoy7NSEuDORckU5PYmJvb+i7Sft2hMHGqVScOa5w7EnHgZ1LLtqjza9b8UnP8157m9nuPF2l9V1cHNaOd9tjrnTqdunH9NxnUc+6y59GnLszlT4plk3WnVd22pG+A1Khn3RfPpVo9nQmuK4Ho0M7bFLDldF9U4Tj53XeZbNbC+1d0s56e4DFs+UqFTmVaU9kakZPwTMo9yy9K7OAAEgAAAAAAAAAAAAAAADw89aM5WOtoXtxUKkktcoQkpTS26Kb7jmcF3rBp60ztDRyjOPJDsdfQu/hqzk7NP6sG8XZ5Pou+r1rczFu9O38o27TOeNYSS6kX8mujDuLVCXUXJM5zdwo4NBokj3l9+7gOUsdxW0NbSdQXSrijodTI5EKbHcyXQa6mV7rhyINBfKKOmT/OJa47CUcIHEja3GQ4FjW4nlHCBp9KJrPb6tPmVK1PZCc4rwTuBRo9TLhFnPb17NnZbI/wA1TXVUhCXmkn5nqWbPusveUaU9sJSp8dI1TRKaCLcdbOe1V0cL6dAs+fNmeE4Vqb67ozj5O/yPUs2cdjqaq1NbJ30n/
                wB7jlugtpR09vii2bvP2ru1xvTs1OpGSvi1Jdaaa8i44xT04u+LcX1xk4vyPSs2cdtp6qtRrqqXVPOV78y6bue4qu0vquqg0Cy591l7ylTn2XKm/U9ey58WaXPjVpvpdynHxTv8i3HX077VXQznptAPOsmXLLUu0K1Nt6ouWhJ/hlcz0S2WXpVZZ2AAlAAABiZUydStFKVCrHSpzVzXSn0ST6GusywLOSXhyjKWT6timqVZudKTaoWm7Ca6Iz6ppeOssTTOp22x060JUqsYzhNXSjLVv2Pac5y7mxWsl9SnpWiy67tdagtt3Ojt8btb5uvtbPywdHR3My+Mu2JcuvxLXEx6FpjJXxaa4byTTMLWlu2jw7ixSKpgVvu60L7+oJspK7pQFjjsLXHaTK7ofcxo95PIx/pbyjl1pmVGK6rhKG5jkYaaewkUVtJXSXUFT+dY5EWhu4FeT2E6p7hobPMnlHDH5P5uK8mZKRW7cOUcMRwKaBlumWuPy0TyMSUCxwRlygi109/EnkYjgZViylXo+7qTgl9VSbh/4vDyIpQ3Ebg//mJ6mVnSLjL23HJOe7vUbRFNf1aaxW2Uenu8Dc7PXjOKnBqUZK+MlimcZ0WbZ7PbdJVZ2Z4wlCVVL7Li4xbW/S8kbNDXtv05MevoST6sW/AA3MQAAAAA0rPLNWjoTtdH9zWi4uSh7urpSSelHoeOta+m80nlZRejNOL6HrUt3X84HVs6f9LV/wCP88TnNVKSaaTT0r01euk527mMz6dHa5W4MenJEqfURqk0r19JY4N3S7p4+Ek1uL4R0rlFpz/pv6FXui3dP8Dk9iMl07fH5afrntIpbmXKSfWQXO9q5prnRd+lHetaLk2VPabQbKcm+8sjK4lhW6wKK9a7i53dKLuVRW5PpHIsik9TLnB9XoVcF84FL+oIWuV3QxysSkm9jLFd1EiTlEUdS4iaW4rGL6MfMCSMy5sxatojDnShHfJJmBUy7QTSUpTbwShGUr3svPUlqHrygiNw2kNlVuq+5sVplfqlVXIRe2+Vy8z06GaOVanOdksye2Vaou5LRfiXY6GpfSvLWwndedoP5RWVG7FtQ2zlGmvGTSNksvs71cvbbVU61RULPF7LsT2LDmPk6k9LkI1JfarynXb7ptrwRdjs8vdU5bvH05/
                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" alt="Mesa Orgânica Geometric">
            </div>

            <!-- Informações de Compra -->
            <div class="info-produto">
                <h1>Mesa Orgânica Geometric</h1>
                <hr>
                <p class="preco-pagina">R$ 6.930,00</p>
                <p class="parcelamento">ou 10x de R$ 693,00 sem juros</p>
                
                <div class="acoes">
                    <button class="btn-comprar-agora">Comprar Agora</button>
                    <button class="btn-carrinho">Adicionar ao Carrinho</button>
                </div>
            </div>
        </div>

        <!-- Tabela de Especificações Técnicas -->
        <div class="especificacoes-tecnicas">
            <h2>Ficha Técnica</h2>
            <table class="tabela-specs">
                <tr>
                    <th>Material</th>
                    <td>Madeira Maciça de Reflorestamento</td>
                </tr>
                <tr>
                    <th>Acabamento</th>
                    <td>Verniz Acetinado de alta resistência</td>
                </tr>
                <tr>
                    <th>Dimensões</th>
                    <td>2.40m (L) x 1.10m (P) x 0.75m (A)</td>
                </tr>
                <tr>
                    <th>Peso Suportado</th>
                    <td>Até 80kg distribuídos</td>
                </tr>
                <tr>
                    <th>Garantia</th>
                    <td>1 ano contra defeitos de fabricação</td>
                </tr>
            </table>
        </div>
    </main>

    <?php
        require 'partials/footer.php';
    ?>
</body>
</html>