<!DOCTYPE html>
<html>
    <?php
     include_once('includes/componentes/cabecalho.php');
     include_once('includes/componentes/header.php');
    ?>
      <title>Alterar Usuário</title>
  </head>
  <body>

    <main>
        <section>

          <form action="logica_noticia.php" method="post">
            
            <p><label for="title">Title: </label><input type="text" name="title" id="title" value="<?php echo $noticia['title']; ?>"></p>
            <p><label for="info">Info: </label><input type="text" name="info" id="info" value="<?php echo $noticia['info']; ?>"></p>
            <p><label for="texto">Texto: </label><input type="text" name="texto" id="texto" value="<?php echo $noticia['texto']; ?>"></p>
            <p><label for="imagem">Imagem.caminho: </label><input type="text" name="imagem" id="imagem" value="<?php echo $noticia['imagem']; ?>"></p>
            
            <input type="hidden" id='idnot' name='idnot' value="<?php echo $noticia['idnot']; ?>">
            
            <p> 
              <input type="submit" id='alterarnot' name='alterarnot' value="Alterar">
            </p>        

          </form>

        </section>
    </main>

  </body>
</html>