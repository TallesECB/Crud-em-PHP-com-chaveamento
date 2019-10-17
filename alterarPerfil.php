<!DOCTYPE html>
  <html>
    <?php
     include_once('includes/componentes/cabecalho.php');
     include_once('includes/componentes/header.php');
     include_once('includes/logica/conecta.php');
     include_once('includes/logica/funcoes_usuario.php')
    ?>
      <title>Alterar Usuário</title>
    </head>
    <body>
      <?php
        $id = $_SESSION['id'];

        try {
          $array = array($id);
          $usuario = buscarUsuario($conexao, $array);
          $senhaNova = base64_decode($usuario['senha']);
        }
        catch(PDOExepction $e) {
          echo 'Error:' . $e->getMessage();
        }

      ?>
      <main>
          <section>

            <form action="includes/logica/logica_usuario.php" method="post">

              <p><label for="nome">Nome: </label><input type="text" name="nome" id="nome" value="<?php echo $usuario['nome']; ?>"></p>
              <p><label for="email">Email: </label><input type="text" name="email" id="email" value="<?php echo $usuario['email']; ?>"></p>
              <p><label for="senha">Senha: </label><input type="password" name="senha" id="senha" value="<?php echo $senhaNova?>"></p>
              <p><label for="endereco">Endereço: </label><input type="text" name="endereco" id="endereco" value="<?php echo $usuario['endereco']; ?>"></p>
              <p><label for="telefone">Telefone: </label> <input type="text" name="telefone" id="telefone" value="<?php echo $usuario['telefone']; ?>"></p>
              <p><label for="dt_nascimento">Data Nascimento: </label><input type="text" name="dt_nascimento" id="dt_nascimento" value="<?php echo $usuario['dt_nascimento']; ?>"> </p>
              
              <input type="hidden" id='id' name='id' value="<?php echo $usuario['id']; ?>">
              
              <p> 
                <input type="submit" id='atualizar' name='atualizar' value="Atualizar">
              </p>        
            
            </form>

          </section>
      </main>

  </body>
</html>