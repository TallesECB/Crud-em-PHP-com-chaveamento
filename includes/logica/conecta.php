<?php
   try {
    $conexao = new PDO("pgsql:host=localhost; port=5432; dbname=Talles; user=postgres; password=senha5");
    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }catch(PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
?>