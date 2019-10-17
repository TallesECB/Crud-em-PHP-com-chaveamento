<?php
 
    function inserirUsuario($conexao,$array){
       try {
            $usuarios = $conexao->prepare("insert into usuarios (nome, email, senha, endereco, telefone, dt_nascimento) values (?, ?, ?, ?, ?, ?)");
            $query = $usuarios->execute($array);
        
            return $query;
        }catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }

    }


    function alterarUsuario($conexao, $array){
        try {
            $usuarios = $conexao->prepare("update usuarios set nome= ?, email = ?, senha= ?, endereco= ?, telefone= ?, dt_nascimento=? where id = ?");
            $query = $usuarios->execute($array);   
            return $query;
        }catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }


    function deletarUsuario($conexao, $array){
        try {
            $usuarios = $conexao->prepare("delete from usuarios where id = ?");
            $query = $usuarios->execute($array);   
             return $query;
        }catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }

    }
 
    function listarUsuarios($conexao){
      try {
        $medicamentos = $conexao->prepare("SELECT * FROM usuarios");      
        $medicamentos->execute();
        $query = $medicamentos->fetchAll();
        return $query;
      }catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
      }  

    }

     function buscarUsuario($conexao,$array){
        try {
        $usuarios = $conexao->prepare("select * from usuarios where id= ?");
        if($usuarios->execute($array)){
            $usuario = $usuarios->fetch(); //coloca os dados num array $usuario
            return $usuario;
        }
        else{
            return false;
        }
         }catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
      }  
    }
    
    function inserirNoticia($conexao,$array){
       try {
            $query = $conexao->prepare("insert into noticias (title, info, texto, imagem) values (?, ?, ?, ?)");
            $noticia = $query->execute($array);
        
            return $noticia;
        }catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }

    }

    function alterarNoticia($conexao, $array){
        try {
            $query = $conexao->prepare("update noticias set title= ?, info = ?, texto= ?, imagem= ? where idnot = ?");
            $noticia = $query->execute($array);   
            return $noticia;
        }catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }


    function deletarNoticia($conexao, $array){
        try {
            $query = $conexao->prepare("delete from noticias where idnot = ?");
            $noticia = $query->execute($array);   
             return $noticia;
        }catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }

    }
 
    function listarNoticia($conexao){
      try {
        $query = $conexao->prepare("SELECT * FROM noticias");      
        $query->execute();
        $noticias = $query->fetchAll();
        return $noticias;
      }catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
      }  

    }

     function buscarNoticia($conexao,$array){
        try {
        $query = $conexao->prepare("select * from noticias where idnot= ?");
        if($query->execute($array)){
            $noticia = $query->fetch(); //coloca os dados num array $noticia
            return $noticia;
        }
        else{
            return false;
        }
         }catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
      }  
    }
    
   ?>