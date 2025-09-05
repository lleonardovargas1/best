<?php
include_once 'conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>QGURI</title>
  <link rel="stylesheet" href="./styleindex.css">
</head>
<body>
  <header>
    <div class="logo">
      <h1>QGURI</h1>
    </div>
    <div class="search-bar">
      <input type="text" placeholder="Busque seu produto...">
      <button>🔍</button>
    </div>
    <nav class="menu">
      <a href="#">🛒 Carrinho</a>
      <a href="#">Login</a>
      <a href="#">Cadastro</a>
      <input type="text" placeholder="Informe seu CEP">
    </nav>
  </header>

  <main>
    <aside class="filter">
      <h2>Filtrar Produtos</h2>
      <label><input type="checkbox"> Eletrônicos</label>
      <label><input type="checkbox"> Moda</label>
      <label><input type="checkbox"> Casa</label>
      <label><input type="checkbox"> Esporte</label>
    </aside>
    <section class="products">
    <?php
    $sql = 'SELECT * FROM coisas;';

    $resultado = mysqli_query($conexao, $sql);

    while($linha = mysqli_fetch_assoc($resultado)){
      echo '<a href="produto.php" class="product">
        <img src="'.$linha['Imagem'].'" alt="Produto 1">
        <h3>'.$linha['Nome'].'</h3>
        <p>R$ '.$linha['Preco'].'</p>
      </a>';
    }
    ?>
    </section>
  </main>

  <footer>
    <p>(51) 99999-9999</p>
    <p> Rua BLABLABLA, 123 - Porto Alegre - RS</p>
    <p> Siga: a gente @lojaQGURIOFC</p>
  </footer>
</body>
</html>
