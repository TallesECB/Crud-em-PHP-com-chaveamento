<?php
    require_once('conecta.php');
    require_once('funcoes_noticia.php');
    
#CADASTRO NOTICIA
    if(isset($_POST['cadastrarnot'])){
        $title = $_POST['title'];
        $info = $_POST['info'];
        $texto = $_POST['texto'];
        $imagem = $_POST['imagem'];
        $array = array($title, $info, $texto, $imagem);
        inserirNoticias($conexao, $array);
        header('location:../../index.php');
    }

#EDITAR NOTICIA
    if(isset($_POST['editarnot'])){
            $idnot = $_POST['editarnot'];
            $array = array($idnot);
            $noticia = buscarNoticias($conexao, $array);
            require_once('../../alterarNoticia.php');
    }    

#ALTERAR NOTICIA
    if(isset($_POST['alterarnot'])){
    
            $idnot = $_POST['idnot'];
            $title = $_POST['title'];
            $info = $_POST['info'];
            $texto = $_POST['texto'];
            $imagem = $_POST['imagem'];

            $array = array($title, $info, $texto, $imagem, $idnot);
            alterarNoticias($conexao, $array);
    
            header('location:../../index.php');
    }
#DELETAR NOTICIA
    if(isset($_POST['deletarnot'])){
        $idnot = $_POST['deletarnot'];
        $array = array($idnot);
        deletarNoticias($conexao, $array);

        header('location:../../index.php');
    }


?>