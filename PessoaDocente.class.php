<?php

require_once('Pessoa.class.php');
class PessoaDocente extends Pessoa{

    public $Bloco;
    public $Disciplina;

function __construct($Nome, $Identificacao, $Sexo, $Bloco, $Disciplina){
    parent::__construct($Nome, $Identificacao, $Sexo);

    $this->Bloco=$Bloco;
    $this->Disciplina=$Disciplina;
}


function VerPessoa(){
parent::VerPessoa();

    echo "<b>Bloco: </b>{$this->Bloco}";
    echo "<b>Disciplina: </b>{$this->Disciplina}";

}


}


?>
