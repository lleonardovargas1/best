<?php
// Simulação de um "banco de dados" de produtos em array
$produtos = [
    1 => [
        'id' => 1,
        'nome' => 'Notebook Ultra 14"',
        'categoria' => 'Notebooks',
        'preco' => 'R$ 3.999,90',
        'descricao' => 'Processador Intel i5, 8 GB RAM, SSD 256 GB, tela 14 polegadas. Ideal para estudo e trabalho.',
        'imagem' => 'https://images.unsplash.com/photo-1517336714731-489689fd1ca8?auto=format&fit=crop&w=800&q=80'
    ],
    2 => [
        'id' => 2,
        'nome' => 'Mouse Gamer RGB',
        'categoria' => 'Acessórios',
        'preco' => 'R$ 199,90',
        'descricao' => 'Mouse ergonômico com iluminação RGB, 6 botões programáveis e 12000 DPI.',
        'imagem' => 'https://images.unsplash.com/photo-1587202372775-9897a4a8f7e6?auto=format&fit=crop&w=800&q=80'
    ],
    3 => [
        'id' => 3,
        'nome' => 'Headset Surround 7.1',
        'categoria' => 'Áudio',
        'preco' => 'R$ 349,90',
        'descricao' => 'Fone com som surround 7.1, microfone com cancelamento de ruído e iluminação LED.',
        'imagem' => 'https://images.unsplash.com/photo-1616594039964-953d68d1a6e2?auto=format&fit=crop&w=800&q=80'
    ]
];


// Captura o ID da URL
$id = $_GET['id'] ?? null;

// Verifica se o produto existe
$produto = $produtos[$id] ?? null;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Detalhes do Produto</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1 class="titulo-loja">Loja Exemplo</h1>

    <?php if ($produto): ?>
        <nav class="breadcrumb">
            <a href="categorias.php">Categorias</a> >
            <a href="categoria.php?nome=<?= urlencode($produto['categoria']) ?>"><?= $produto['categoria'] ?></a> >
            <span><?= $produto['nome'] ?></span>
        </nav>

        <div class="produto-detalhes">
            <div class="imagem">
                <img src="<?= $produto['imagem'] ?>" alt="<?= $produto['nome'] ?>">
            </div>
            <div class="info">
                <h2><?= $produto['nome'] ?></h2>
                <p class="categoria">Categoria: <?= $produto['categoria'] ?></p>
                <p class="preco"><?= $produto['preco'] ?></p>
                <p class="descricao"><?= $produto['descricao'] ?></p>
                <a href="categoria.php?nome=<?= urlencode($produto['categoria']) ?>" class="btn-voltar">Voltar à categoria</a>
            </div>
        </div>
    <?php else: ?>
        <div class="mensagem-erro">
            <h2>Produto não encontrado 😢</h2>
            <p>Verifique se o ID está correto ou <a href="categorias.php">volte para a lista de categorias</a>.</p>
        </div>
    <?php endif; ?>

</body>
</html>
