<?php
    require_once('conecta.php');
    require_once('funcoes.php');
#CADASTRO USUÁRIO
    if(isset($_POST['cadastrar'])){
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $senhaEncriptada = base64_encode($senha);
        $endereco = $_POST['endereco'];
        $telefone = $_POST['telefone'];
        $dt_nascimento = $_POST['dt_nascimento'];
        $array = array($nome, $email, $senhaEncriptada, $endereco, $telefone, $dt_nascimento);
        inserirUsuario($conexao, $array);
        header('location:../../index.php');
    }
#ACESSAR USUÁRIO
    if(isset($_POST['logar'])){
        $email = addslashes($_POST['email']);//impede que o sql seja alterado
        $senha = $_POST['senha'];
        $senhaEncriptada = base64_encode($senha);
        session_start();
        $_SESSION = acessarUsuario($conexao,$email,$senhaEncriptada);
        if($_SESSION){
            header('location:../../home.php');
        }
        else{
            header('location:../../index.php');
        }
    }
#EDITAR USUÁRIO
    if(isset($_POST['editar'])){
    
            $id = $_POST['editar'];
            $array = array($id);
            $usuario=buscarUsuario($conexao, $array);
            require_once('../../alterarUsuario.php');
    }    
#ALTERAR USUÁRIO
    if(isset($_POST['alterar'])){
    
            $id = $_POST['id'];
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $senha = base64_encode($_POST['senha']);
            $endereco = $_POST['endereco'];
            $telefone = $_POST['telefone'];
            $dt_nascimento = $_POST['dt_nascimento'];
            
            $array = array($nome, $email, $senha, $endereco, $telefone, $dt_nascimento, $id);
            alterarUsuario($conexao, $array);
    
            header('location:../../index.php');
    }
#DELETAR USUÁRIO
    if(isset($_POST['deletar'])){
        $id = $_POST['deletar'];
        $array=array($id);
        deletarUsuario($conexao, $array);

        header('Location:../../index.php');
    }

#CADASTRO NOTICIA
    if(isset($_POST['cadastrarnot'])){
        $title = $_POST['title'];
        $info = $_POST['info'];
        $texto = $_POST['texto'];
        $imagem = $_POST['imagem'];
        $array = array($title, $info, $texto, $imagem);
        inserirNoticia($conexao, $array);
        header('location:../../index.php');
    }

#EDITAR NOTICIA
    if(isset($_POST['editarnot'])){
            $idnot = $_POST['editarnot'];
            $array = array($id);
            $noticia=buscarNoticia($conexao, $array);
            require_once('../../alterarNoticia.php');
    }    

#ALTERAR NOTICIA
    if(isset($_POST['alterarnot'])){
    
            $idnot = $_POST['idnot'];
            $title = $_POST['title'];
            $info = $_POST['info'];
            $texto = $_POST['texto'];
            $imagem = $_POST['imagem'];]

            $array = array($title, $info, $texto, $imagem, $idnot);
            alterarNoticia($conexao, $array);
    
            header('location:../../index.php');
    }
#DELETAR NOTICIA
    if(isset($_POST['deletarnot'])){
        $id = $_POST['deletarnot'];
        $array=array($id);
        deletarNoticia($conexao, $array);

        header('Location:../../index.php');
    }

?>