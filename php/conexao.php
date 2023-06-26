<?php
namespace conexao;

use PDO;
//Classe de conexão
class Conexao{
    public $conexao;

    public function Conn(){
        if(!isset($this->conexao)){
            $this->conexao = new \PDO("mysql:host=localhost;dbname=registro", "root", "");
        }
        return $this->conexao;
    }

}

?>