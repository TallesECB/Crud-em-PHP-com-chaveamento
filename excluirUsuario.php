<!DOCTYPE html>
  <html>
    <?php
     include_once('includes/componentes/cabecalho.php');
     include_once('includes/componentes/header.php');
    ?>
      <title>Excluir Usuário</title>
    </head>
    <body>

      <main>
          <section>
            <h2>Tem certeza que deseja mesmo excluir a sua conta <?php echo $_SESSION['nome'];?>?</h2>
            <form action="includes/logica/logica_usuario.php" method="post">
              <input type="hidden" id='id' name='id' value="<?php echo $_SESSION['id']; ?>">
              <input type="submit" id='alterar' name='excluir' value="deletar">
            </form>

          </section>
      </main>

  </body>
</html>