  <?php
    include_once('includes/componentes/cabecalho.php');
    include_once('includes/logica/funcoes_noticia.php');
    include_once('includes/logica/conecta.php');
  ?>
    <link rel="stylesheet" href="assets/css/listarUsuarios.css">
    <title>Noticias</title>
  </head>
  <body>

    <?php require('includes/componentes/header.php') ?>
    
    <main>
      <?php
          $noticias = listarNoticias($conexao);
          
          if(empty($noticias)){
              ?>
                  <section>
                      <p>Não há noticias registradas.</p>
                  </section>
              <?php
          }

          foreach($noticias as $noticia){
              ?>
                  <section>
                      <p>Title: <?php echo $noticia['title']; ?></p>
                      <p>Info <?php echo $noticia['info']; ?></p>
                      <p>Texto: <?php echo $noticia['texto']; ?></p>
                      <p>Imagem.caminho: <?php echo $noticia['imagem']; ?></p>
                  </section>
              <?php
            }
        ?>
    </main>

    <?php require('includes/componentes/footer.php');?>

  </body>
</html>