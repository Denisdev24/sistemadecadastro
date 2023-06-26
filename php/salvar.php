<?php
    //Conexão
    require 'conexao.php';
   
    $conexao = new \conexao\Conexao;
    $con = $conexao->Conn();

    //Recebendo dados
    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $email = $_POST['email'];

    //Salvando no Banco de dados
        $dados = "INSERT INTO dados(nome,endereco,email) VALUES ('$nome','$endereco','$email')";
        $final= $con->prepare($dados);

        $final->bindValue('nome',$nome);
        $final->bindValue('endereco',$endereco);
        $final->bindValue('email',$email);

        $final->execute();

        echo "Dados Salvos";
   

?>