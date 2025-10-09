<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<script src="js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="css/estilo-index.css">
    <title>Honk</title>

</head>

<body>

    <nav class="navbar navcolor">
  <div class="container navcolor">
    <a class="navbar-brand" href="#">
      <img src="imagens-logo/LOGO 100PX.png" alt="Bootstrap">
    <p1 class="titulo"></p1>
    </a>
  </div>
  <div>
    <a href="noticias/noticias.php"><p1 type="button" class="subtitulo ajuste">Notícias</p1></a>
    <a href="sobre-nos/sobre-nos.html"><p1 class="subtitulo">Sobre Nós</p1></a>
  </div>
</nav>

<div class="main-container imagem-fundo">

  <div class="card-container">
<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">$POST_TITLE</h5>
    <p class="card-text">
      <?php
      include 'config/select.php';
      ?>
    </p>
    <a href="#" class="btn btn-primary">Noticia</a>
  </div>
</div>
</div>
</div>
</body>

</html>