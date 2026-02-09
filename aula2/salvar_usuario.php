<?php

$arquivo = "users.json";

if (!file_exists($arquivo)) {
    file_put_contents($arquivo, "[]");
}

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$usuarios = json_decode(file_get_contents($arquivo), true);
if (!is_array($usuarios)) $usuarios = [];

$id = count($usuarios) + 1;

$novo = [
    "id" => $id,
    "username" => $username,
    "email" => $email,
    "password" => $password
];

$usuarios[] = $novo;

file_put_contents($arquivo, json_encode($usuarios, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

echo "Usuário cadastrado com sucesso!<br><br>";
echo '<a href="index.html">Voltar</a>';
