<?php



$servername = "localhost";
$username = "root";
$password = "";
$banco = "clientes";

// Criando a conexao
$conn = new mysqli($servername, $username, $password,$banco);

//Recebendo os dados
$nome = $_POST['nome'];
$idade = $_POST['idade'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];

$salvar =isset($_POST['salvar'])?$_POST['salvar']:""; 
$dadossalvos=isset($_POST['pesquisar'])?$_POST['pesquisar']:"";
$excluir =isset($_POST['excluir'])?$_POST['excluir']:"";

//botão salvar 
if($nome == null || $telefone == null ||$idade == null || $email == null){
    echo "Algum campo em branco";
}
   if($salvar){
        $dados  = "INSERT INTO registros(nome,idade,telefone,email) VALUES ('$nome','$idade','$telefone','$email')";
        $conexao = mysqli_query($conn,$dados);
        echo "Deu certo";
}

if($dadossalvos){
    $dados= "SELECT nome,idade,telefone,email FROM registros";
    $conexao = mysqli_query($conn,$dados);
    while($row = mysqli_fetch_array($conexao)){
        echo $row['nome'];
        echo "<br>";
        echo $row['idade'];
        echo "<br>";
        echo $row['telefone'];
        echo "<br>";
        echo $row['email'];
    }       
   }
   /*elseif($excluir){
    $dados ='DELETE FROM registros';
    $conexao = mysqli_query($conn,$dados);
    echo "Dados excluidos";
   }
}*/
?>