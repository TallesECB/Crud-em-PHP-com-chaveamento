<?php
 
    function inserirUsuario($conexao,$array){
       try {
            $query = $conexao->prepare("insert into usuarios (nome, email, senha, endereco, telefone, dt_nascimento) values (?, ?, ?, ?, ?, ?)");
            $usuario = $query->execute($array);
        
            return $usuario;
        }catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }

    }


    function alterarUsuario($conexao, $array){
        try {
            $query = $conexao->prepare("update usuarios set nome= ?, email = ?, senha= ?, endereco= ?, telefone= ?, dt_nascimento=? where id = ?");
            $usuario = $query->execute($array);   
            return $usuario;
        }catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }


    function deletarUsuario($conexao, $array){
        try {
            $query = $conexao->prepare("delete from usuarios where id = ?");
            $usuario = $query->execute($array);   
             return $usuario;
        }catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }

    }
 
    function listarUsuarios($conexao){
      try {
        $query = $conexao->prepare("SELECT * FROM usuarios");      
        $query->execute();
        $usuarios = $query->fetchAll();
        return $usuarios;
      }catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
      }  

    }

     function buscarUsuario($conexao,$array){
        try {
        $query = $conexao->prepare("select * from usuarios where id= ?");
        if($query->execute($array)){
            $usuario = $query->fetch(); //coloca os dados num array $usuario
            return $usuario;
        }
        else{
            return false;
        }
         }catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
      }  
    }
      function acessarUsuario($conexao,$array){
        try {
        $query = $conexao->prepare("select * from usuarios where email=? and senha=?");
        if($query->execute($array)){
            $usuario = $query->fetch(); //coloca os dados num array $usuario
          if ($usuario)
            {  
                return $usuario;
            }
        else
            {
                return false;
            }
        }
        else{
            return false;
        }
         }catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
      }  
    }
    
   ?>