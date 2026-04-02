<?php
require_once("init.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = trim($_POST["nome_produto"]);
    $categoria = trim($_POST["categoria"]);
    $preco = trim($_POST["preco"]);
    $estoque = trim($_POST["estoque"]);
    $descricao = trim($_POST["descricao"]);
    $imagem = trim($_POST["imagem"]);

    if (
        empty($nome) ||
        empty($categoria) ||
        empty($preco) ||
        empty($estoque) ||
        empty($descricao)
    ) {
        echo "Preencha todos os campos obrigatórios.";
        exit;
    }

    $novoProduto = [
        "id" => count($_SESSION["produtos"]) + 1,
        "nome" => $nome,
        "preco" => (float)$preco,
        "categoria" => $categoria,
        "descricao_curta" => $descricao,
        "descricao" => $descricao,
        "imagem" => $imagem
    ];

    $_SESSION["produtos"][] = $novoProduto;

    header("Location: produtos.php");
    exit;
}
?>