<!DOCTYPE html>
<html>
	<?php
		include_once('includes/componentes/cabecalho.php');
		include_once('includes/componentes/header.php');
		include_once('includes/logica/funcoes_usuario.php');
		include_once('includes/logica/funcoes_noticia.php');
		include_once('includes/logica/conecta.php');
	?>
    	<title>Listar Usuário e Noticias</title>
	</head>

	<body>  
		<main>
	        <h2> Usuário Logado:  <?php echo $_SESSION['nome']; ?>  </h2>
	        <h3> Listagem de Usuários </h3>
		    <?php
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
		                    <p>Endereço: <?php echo $usuario['endereco']; ?></p>
		                    <p>Telefone: <?php echo $usuario['telefone']; ?></p>
		                    <p>Data Nascimento: <?php echo $usuario['dt_nascimento']; ?></p>
		                    <form action="includes/logica/logica_usuario.php" method="post">
		                        <button type="submit" name="editar" value="<?php echo $usuario['id']; ?>"> Editar </button>
		                        <button type="submit" name="deletar" value="<?php echo $usuario['id']; ?>" onclick = "return confirma_excluir()"> Deletar </button> 
		                    </form>
		                    <br><br>                                                          
		                </section>
		            <?php
		        }
		    ?>
		    <h3> Listagem de Noticias </h3>
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
		                    <p>title: <?php echo $noticia['title']; ?></p>
		                    <p>Info <?php echo $noticia['info']; ?></p>
		                    <p>Texto: <?php echo $noticia['texto']; ?></p>
		                    <p>Nome imagem e caminho: <?php echo $noticia['imagem']; ?></p>
		                  
		                    <form action="includes/logica/logica_noticia.php" method="post">
		                        <button type="submit" name="editarnot" value="<?php echo $noticia['idnot']; ?>"> Editar </button>
		                        <button type="submit" name="deletarnot" value="<?php echo $noticia['idnot']; ?>" onclick = "return confirma_excluir()"> Deletar </button> 
		                    </form>
		                    <br><br>                                                          
		                </section>
		            <?php
		        }
		    ?>		

	   	 	<h2> Upload de arquivos </h2>
			<form method=POST action="executa_upload.php" enctype="multipart/form-data">
				<input type="hidden" name ="MAX_FILE_SIZE" value="200000">
				Arquivo:  <input type="file" name="arquivo">
				<input type="submit" name="acao" value="Enviar Arquivo">	
			</form>

		</main>

		<?php require('includes/componentes/footer.php');?>
		
	</body>

	<script type="text/javascript">
	    function confirma_excluir()
	    {
	        resp=confirm("Confirma Exclusão?")

	        if (resp==true)
	        {

	            return true;
	        }
	        else
	        {
	            return false;

	        }

	    }

	</script>
</html>