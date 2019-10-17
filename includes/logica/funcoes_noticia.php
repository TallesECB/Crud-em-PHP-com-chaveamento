<?php
 
    function inserirNoticias($conexao,$array){
       try {
            $query = $conexao->prepare("insert into noticias (title, info, texto, imagem) values (?, ?, ?, ?)");
            $noticia = $query->execute($array);
        
            return $noticia;
        }catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }

    }

    function alterarNoticias($conexao, $array){
        try {
            $query = $conexao->prepare("update noticias set title= ?, info = ?, texto= ?, imagem= ? where idnot = ?");
            $noticia = $query->execute($array);   
            return $noticia;
        }catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }


    function deletarNoticias($conexao, $array){
        try {
            $query = $conexao->prepare("delete from noticias where idnot = ?");
            $noticia = $query->execute($array);   
             return $noticia;
        }catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }

    }
 
    function listarNoticias($conexao){
      try {
        $query = $conexao->prepare("SELECT * FROM noticias");      
        $query->execute();
        $noticias = $query->fetchAll();
        return $noticias;
      }catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
      }  

    }

     function buscarNoticias($conexao,$array){
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