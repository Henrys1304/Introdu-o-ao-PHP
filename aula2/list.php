<?php

$arquivo = "users.json";

if (!file_exists($arquivo)) {
    echo "Nenhum usuário cadastrado.<br>";
    echo '<a href="index.html">Voltar</a>';
    exit;
}

$dados = json_decode(file_get_contents($arquivo), true);

if (empty($dados)) {
    echo "Nenhum usuário cadastrado.<br>";
    echo '<a href="index.html">Voltar</a>';
    exit;
}

echo "<h2>Usuários cadastrados</h2>";

foreach ($dados as $u) {
    echo "<hr>";
    echo "ID: {$u['id']}<br>";
    echo "Username: {$u['username']}<br>";
    echo "Email: {$u['email']}<br>";
}

echo "<br><a href='index.html'>⬅ Voltar</a>";
