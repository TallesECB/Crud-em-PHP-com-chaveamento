    <?php
      include_once('includes/componentes/cabecalho.php');
    ?>
      <link rel="stylesheet" href="assets/css/index.css">
      <title>Cadastrar Usuário</title>
  </head>
  <body>

    <?php require('includes/componentes/header.php') ?>

    <main>
        <section> 
          <form action="includes/logica/logica_usuario.php" method="post">
            
            <p><label for="nome">Nome: </label><input type="text" name="nome" id="nome"></p>
            <p><label for="email">Email: </label><input type="text" name="email" id="email"></p>
            <p><label for="senha">Senha: </label><input type="password" name="senha" id="senha"></p>
            <p><label for="endereco">Endereço: </label><input type="text" name="endereco" id="endereco"></p>
            <p><label for="telefone">Telefone: </label> <input type="text" name="telefone" id="telefone"></p>
            <p><label for="dt_nascimento">Data Nascimento: </label><input type="text" name="dt_nascimento" id="dt_nascimento">

            <p><button type="submit" id='cadastrar' name='cadastrar' value="Cadastrar"> Cadastrar </button></p>

          </form>
        </section>
    </main>

   <?php require('includes/componentes/footer.php');?>

  </body>
</html>