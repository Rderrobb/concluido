<?php

require_once('Pessoa.class.php');
class PessoaAdministrativo extends Pessoa{

    public $Setor;
    public $Bloco;



function __construct($Nome, $Identificacao, $Setor, $Bloco){
    parent::__construct($Nome, $Identificacao);

    $this->Setor=$Setor;
    $this->Bloco=$Bloco;
   
    
}

function Setor(){
    return $this->Setor();
}
function Bloco(){
    return $this->Bloco;
}

function VerPessoa(){
parent::VerPessoa();

    echo "<b>Nome: </b>{$this->Nome}<br/>";
    echo "<b>Identificação: </b>{$this->Identificacao}";
    echo "<b>Setor: </b>{$this->Setor}";
    echo "<b>Bloco: </b>{$this->Bloco}";

}
}
    



?>