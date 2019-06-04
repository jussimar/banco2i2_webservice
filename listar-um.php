<?php
    try {
        $conecta = mysqli_connect("localhost","jussimar","","crud"); 
                                //servidor , usuario banco, senha, nome do banco
    
        $id = $_GET['id'];
        
        $query = "select * from pessoa where cd_pessoa = $id";
        
        
        $resultado = mysqli_query($conecta,$query);
       
       
        
        while($linha = mysqli_fetch_assoc($resultado)){
             
        $registro = array(
            'pessoas'=>array(
                'codigo' => $linha['cd_pessoa'],
                'nome' => $linha['nm_pessoa'],
                'email' => $linha['ds_email'],
            )
        );
        
            
        }
       
        echo json_encode($registro);
 
    } catch (Exception $e ) {
        echo "Erro ao buscar: ".$e;
    }