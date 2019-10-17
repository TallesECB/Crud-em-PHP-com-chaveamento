  <?php
    include_once('includes/componentes/cabecalho.php');
  ?>
    <link rel="stylesheet" href="assets/css/index.css">
    <title>Cadastrar Noticias</title>
  </head>

  <body>

    <?php require('includes/componentes/header.php') ?>

    <main>
        <section>

        <form action="includes/logica/logica_noticia.php" method="post">

          <p><label for="title">Title: </label><input type="text" name="title" id="title"></p>
          <p><label for="info">info: </label><input type="text" name="info" id="info"></p>
          <p><label for="texto">Texto: </label><input type="text" name="texto" id="texto"></p>
          <p><label for="imagem">Imagem.caminho: </label><input type="text" name="imagem" id="imagem"></p>

          <p><button type="submit" id='cadastrarnot' name='cadastrarnot' value="Cadastrar"> Cadastrar </button></p>  

        </form>

        </section>
    </main>
    <?php require('includes/componentes/footer.php');?>
  </body>
</html>