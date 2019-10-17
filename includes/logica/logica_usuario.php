<?php
    require_once('conecta.php');
    require_once('funcoes_usuario.php');
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
#ENTRAR
    if(isset($_POST['entrar'])){
        $email = addslashes($_POST['email']);//impede que o sql seja alterado
        $senha = $_POST['senha'];
        $senhaEncriptada = base64_encode($senha);
        $array = array($email, $senhaEncriptada);
        $usuario = acessarUsuario($conexao,$array);
        if($usuario){
            session_start();
            $_SESSION['logado'] = true;
            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];
            header('location:../../index.php');
        }
        else{
            header('location:../../login.php');
        }
    }

#SAIR
    if(isset($_POST['sair'])){
            session_start();
            session_destroy();
            header('location:../../login.php');
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
        $array = array($id);
        deletarUsuario($conexao, $array);

        header('Location:../../index.php');
    }

#EXCLUIR USUARIO LOGADO
    if(isset($_REQUEST['excluir'])) {
        session_start();
        $idUser = $_REQUEST['id'];
        $array = array($idUser);
        $result = excluirUsuario($conexao, $array);
        if($result) {
            session_destroy();
            header('location:../../index.php');
        } else {
            header('location:../../index.php');
        }    
    } 

#ALTERAR PERFIL DO USUÁRIO LOGADO 
    if(isset($_REQUEST['atualizar'])) {
        $id = $_REQUEST['numero_id'];
        $nome = $_POST['nome'];
        $senha = base64_encode($_POST['senha']);
        $email = $_POST['email'];
        $endereco = $_POST['endereco'];
        $telefone = $_POST['telefone'];
        $dt_nascimento = $_POST['dt_nascimento'];
        $array = array($nome, $email, $senha, $endereco, $telefone, $dt_nascimento, $id);
        alterarPerfil($conexao, $array);

    }           


?>