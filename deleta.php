<?php
    try {
        $conecta = mysqli_connect("localhost","jussimar","","crud"); 
                                //servidor , usuario banco, senha, nome do banco
    
        $id = $_GET['id'];
        
        $query = "delete from pessoa where cd_pessoa = $id";
        
        mysqli_query($conecta,$query);
        echo "registro removido com sucesso";
    } catch (Exception $e ) {
        echo "Erro ao deletar: ".$e;
    }