<?php
    try {
        $conecta = mysqli_connect("localhost","jussimar","","crud"); 
                                //servidor , usuario banco, senha, nome do banco
    
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        
        $query = "insert into pessoa values (null, '$nome', '$email');";
        
        mysqli_query($conecta,$query);
        echo "Cadastro realizado com sucesso";
    } catch (Exception $e ) {
        echo "Erro ao cadastrar: ".$e;
    }