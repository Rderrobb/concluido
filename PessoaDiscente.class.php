<?php

require_once('Pessoa.class.php');
class PessoaDiscente extends Pessoa{

    public $Turno;
    public $Curso;

function __construct($Nome, $Identificacao, $Sexo, $Turno, $Curso){
    parent::__construct($Nome, $Identificacao, $Sexo);

    $this->Turno=$Turno;
    $this->Curso=$Curso;
}

function VerPessoa(){
parent::VerPessoa();

    echo "<b>Turno: </b>{$this->Turno}";
    echo "<b>Curso: </b>{$this->Curso}";

    

}

}


?>
