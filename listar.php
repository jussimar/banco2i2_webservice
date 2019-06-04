<?php
    try {
        $conecta = mysqli_connect("localhost","jussimar","","crud"); 
                                //servidor , usuario banco, senha, nome do banco
    
        
        $query = "select * from pessoa order by cd_pessoa asc";
        
        
        $resultado = mysqli_query($conecta,$query);
        
        $registro = array(
            'pessoas'=>array()
        );
        
        $i =0;
        
        while($linha = mysqli_fetch_assoc($resultado)){
            $registro['pessoas'][$i] = array(
                'codigo' => $linha['cd_pessoa'],
                'nome' => $linha['nm_pessoa'],
                'email' => $linha['ds_email'],
            );
            $i++;
        }
      
       echo json_encode($registro);
 
    } catch (Exception $e ) {
        echo "Erro ao buscar: ".$e;
    }