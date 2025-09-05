<?php
  include_once 'conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Produto</title>
</head>
<body>
  <?php
    $sql = 'SELECT * FROM coisas ';  
    $retorno = mysqli_query($conexao, $sql);
   
    if ($linha = mysqli_fetch_assoc($retorno)) {
      echo '
     
          <h2 class="titulo-categoria">'.$linha['Nome'].'</h2>
        
      
 
          <div class="container-produtos">
            <div class="caixa-produto">
              <img src="'.$linha['Imagem'].'" alt="'.$linha['Nome'].'" class="img-produto">
              <h3>'.$linha['Nome'].'</h3>
              <p class="descricao-produto">'.$linha['Descricao'].'</p>
              <div class="container-comprar">
                <p>CEP</p>
                <input></input>
              </div>
              <div class="container-comprar">
                <button class="botao-comprar">Comprar</button>
            </div>
          </div>
        </section>
      </main>
      ';
    } else {
      echo "<p>Produto não encontrado.</p>";
    }
  ?>
</body>
</html>