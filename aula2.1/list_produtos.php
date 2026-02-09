<?php

$arquivo = "products.json";

if (!file_exists($arquivo)) {
    echo "Nenhum produto cadastrado.<br>";
    echo '<a href="produtos.html">Voltar</a>';
    exit;
}

$dados = json_decode(file_get_contents($arquivo), true);

if (empty($dados)) {
    echo "Nenhum produto cadastrado.<br>";
    echo '<a href="produtos.html">Voltar</a>';
    exit;
}

echo "<h2>Produtos cadastrados</h2>";

foreach ($dados as $p) {
    echo "<hr>";
    echo "ID: {$p['id']}<br>";
    echo "Título: {$p['title']}<br>";
    echo "Preço: R$ {$p['price']}<br>";
    echo "Descrição: {$p['description']}<br>";
    echo "Categoria: {$p['category']}<br>";
    echo "<img src='{$p['image']}' width='150'><br>";
}

echo "<br><a href='index.html'>⬅ Voltar</a>";
