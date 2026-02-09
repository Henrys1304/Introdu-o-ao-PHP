<?php

$arquivo = "products.json";

if (!file_exists($arquivo)) {
    file_put_contents($arquivo, "[]");
}

$produto = [
    "id" => $_POST['id'],
    "title" => $_POST['title'],
    "price" => $_POST['price'],
    "description" => $_POST['description'],
    "category" => $_POST['category'],
    "image" => $_POST['image']
];

$dados = json_decode(file_get_contents($arquivo), true);
if (!is_array($dados)) $dados = [];

$dados[] = $produto;

file_put_contents($arquivo, json_encode($dados, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

echo "Produto cadastrado com sucesso!<br><br>";
echo '<a href="produtos.html">Voltar</a>';
