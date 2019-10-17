<footer id='footer'>
  <div id='catEye'></div>
  <nav id='menu'>
    <ul id='listaMenu'>
      
      <li><a href="cadastrarUsuario.php">Adicionar Usuario</a></li>    
      <li><a href="listarUsuarios.php">Listar Usuario</a></li>   
      <li><a href="cadastrarNoticia.php">Adicionar Noticia</a></li> 
      <li><a href="listarNoticias.php">Listar Noticia</a></li>  
      <br> 
      <li><a href="alterarPerfil.php">Alterar Perfil</a></li>
      <li><a href="excluirUsuario.php">Excluir Conta Logada</a></li>     
      <br>
      <li><a href="pesquisarUsuario.php">Pesquisar Usuario</a></li> 
      <li><a href="pesquisarNoticias.php">Pesquisar Noticia</a></li> 


        <form action="includes/logica/logica_usuario.php" method="post">
          <input type="submit" name="sair" value="Sair">
        </form>
      </li>
    </ul>
  </nav>
</footer>