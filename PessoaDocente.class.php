<?php

require_once('Pessoa.class.php');
class PessoaDocente extends Pessoa{

    public $Bloco;
    public $Disciplina;

function __construct($Nome, $Identificacao, $Bloco, $Disciplina){
    parent::__construct($Nome, $Identificacao);

    $this->Bloco=$Bloco;
    $this->Disciplina=$Disciplina;
}

function Bloco(){
    return $this->Bloco;
}
function Disciplina(){
    return $this->Disciplina;
}


function VerPessoa(){
parent::VerPessoa();

    echo "<b>Nome: </b>{$this->Nome}";
    echo "<b>Identificacao: </b>{$this->Identificacao}";
    echo "<b>Bloco: </b>{$this->Bloco}";
    echo "<b>Disciplina: </b>{$this->Disciplina}";

}


}


?>