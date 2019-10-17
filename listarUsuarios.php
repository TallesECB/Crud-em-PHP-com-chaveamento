    <?php
      include_once('includes/componentes/cabecalho.php');
      include_once('includes/logica/funcoes_usuario.php');
      include_once('includes/logica/conecta.php');
    ?>
      <link rel="stylesheet" href="assets/css/listarUsuarios.css">
      <title>Usuarios</title>
    </head>
    
    <body>

      <?php require('includes/componentes/header.php') ?>

      <main>
        <?php
          $logado = $_SESSION['nome'];
          $usuarios = listarUsuarios($conexao);
          
          if(empty($usuarios)){
            ?>
              <section>
                  <p>Não há usuários cadastrados.</p>
              </section>
            <?php
          }

          foreach($usuarios as $usuario){     
            ?>
              <section>
                <p>Nome: <?php echo $usuario['nome']; ?></p>
                <p>Email <?php echo $usuario['email']; ?></p>
                <p>Telefone: <?php echo $usuario['telefone']; ?></p>
                <p>Data de Nascimento: <?php echo $usuario['dt_nascimento']; ?></p>
                <p>Endereço: <?php echo $usuario['endereco']; ?></p>              
              </section>
            <?php
          }
        ?>
      </main>

        <?php require('includes/componentes/footer.php');?>

    </body>
</html>