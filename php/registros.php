
  <?php
  //Chamando a conexão
     include 'conexao.php';
    $conexao = new \conexao\Conexao;
    $conn = $conexao->Conn();
    $dados = 'SELECT * FROM dados';
    $final = $conn->prepare($dados);
    $final->execute(); 
?>

    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
      <style>
        table{
           border-collapse: collapse;
            background: #FFFFF0;
            margin: auto;
}
 
        td {
          border: 1px solid black;
          text-align: center;
} 
        th {
          border: 1px solid black;
          background: #F0FFF0;
}
      </style>
    </head>
    <body>
      <table id="tabela">
        <tr><th>Nome</th> <th>Endereço</th> <th>Email</th> </tr>
      <?php
      foreach($final as $novo){
        $id = $novo['id'];
        echo "<tr><td>".$novo['nome']."</td><td>".$novo['endereco']."</td><td>".$novo['email']."</td> <td><a href='editar.php?=$id>Editar</a></td></tr>";
      }
      ?>
      </table>
      <a href="http://sisitemadecadastro/index.html">Página principal</a>
    </body>
    </html>