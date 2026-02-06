<?php
// Verifica se os dados vieram via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = $_POST['id'];
    $title = $_POST['title'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $category = $_POST['category'];
    $image = $_POST['image'];
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Produto Cadastrado</title>
</head>
<body>

    <h2>Produto Cadastrado com Sucesso</h2>

    <p><strong>ID:</strong> <?= $id ?></p>
    <p><strong>Título:</strong> <?= $title ?></p>
    <p><strong>Preço:</strong> R$ <?= number_format($price, 2, ',', '.') ?></p>
    <p><strong>Descrição:</strong> <?= $description ?></p>
    <p><strong>Categoria:</strong> <?= $category ?></p>

    <p><strong>Imagem:</strong></p>
    <img src="<?= $image ?>" width="150">

</body>
</html>
