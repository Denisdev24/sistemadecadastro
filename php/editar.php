<?php
if(!empty($_POST['id'])){
    include 'conexao.php';

    $id=$_POST['id'];

    $conexao = new \conexao\Conexao;
    $conn = $conexao->Conn();
    $dados = 'SELECT * FROM dados WHERE id= $id';
    $final = $conn->prepare($dados);
    $final->execute(); 

}
?>