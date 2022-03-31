<?php 

include "conexao.php";

    //PARAMETROS VINDO DO FORMULARIO

    // echo $_POST['nome'];
    // echo "<br/>";
    // echo $_POST['email'];
    // echo "<br/>";
    // echo $_POST['idade'];
    // echo "<br/>";
    // echo $_POST['cpf'];
    // echo "<br/>";
    // echo $_POST['rua'];
    // echo "<br/>";
    // echo $_POST['bairro'];
    // echo "<br/>";
    // echo $_POST['cidade'];
    // echo "<br/>";
    // echo $_POST['uf'];
    // echo "<br/>";
    // echo $_POST['numero'];
    // echo "<br/>";
    // echo $_POST['tel'];
    // echo "<br/>";
    // echo $_POST['cel'];
    // echo "<br/>";


    //$_GET[''];

    $nome  = $_POST['nome'];
    $sobrenome  = $_POST['sobrenome'];
    $email = $_POST['email'];
    $idade = $_POST['idade'];
    $cpf   = $_POST['cpf'];
    $rua    =   $_POST['rua'];
    $bairro =    $_POST['bairro'];
    $cidade =   $_POST['cidade'];
    $uf     =   $_POST['uf'];
    $numero =   $_POST['numero'];
    $telefone = $_POST['tel'];
    $celular    =   $_POST['cel'];


    //var_dump($sobrenome, $nome);
    //die();


    $sqlInsertUser = "insert into usuario (nome, email, idade, cpf) values ('$nome', '$email', $idade, '$cpf')";
    $resUser = $conn->query($sqlInsertUser);


    $sql1 = "select id from usuario  order by id desc limit 1";// Pegar o id do usuário que você acabou de inserir
		$result1 = $conn->query($sql1);

        $idUsuarioInserido = null;
        while($row1 = $result1->fetch_assoc()) {
            $idUsuarioInserido =  $row1['id'];
        }

    $sqlInserttel = "insert into telefone (id_usuario, tel, cel) values ($idUsuarioInserido, '$telefone', '$celular')";
    $restel = $conn->query($sqlInserttel);

    $sqlInsertend = "insert into endereco (id_usuario, rua, bairro, cidade, uf, numero) values ($idUsuarioInserido, '$rua', '$bairro', '$cidade', '$uf', '$numero')";
    $resend = $conn->query($sqlInsertend);
        
    /*
         
    
    
    
    */
    
    
    
    
    
    
    
    
        /*if($resUser){
        echo "Usuário inserido com sucesso!!! <br/> Id do usuário inserido: " . $idUsuarioInserido;
    }else{
        echo "Erro ao incluir o usuário.";
    }*/

?>