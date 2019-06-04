<?php

    try {
        $conecta = mysqli_connect("localhost","jussimar","","crud"); 
                                //servidor , usuario banco, senha, nome do banco
        
        $codigo = $_POST['codigo'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        
        $query = "update pessoa set nm_pessoa='$nome',ds_email='$email' where cd_pessoa = $codigo";
        
        mysqli_query($conecta,$query);
        echo "alteração realizado com sucesso";
    } catch (Exception $e ) {
        echo "Erro ao cadastrar: ".$e;
    }
