<?php

require_once('Pessoa.class.php');
class PessoaAdministrativo extends Pessoa{
    public $Setor;
    public $Bloco;
    



function __construct($Nome, $Identificacao, $Bloco, $Setor){
    parent::__construct($Nome, $Identificacao);

    $this->Setor=$Setor;
    $this->Bloco=$Bloco;
   
    
}

function VerPessoa(){
parent::VerPessoa();

    echo "<b>Setor: </b>{$this->Setor}";
    echo "<b>Bloco: </b>{$this->Bloco}";

}
}
    



?>
