<?php

require_once('Pessoa.class.php');
class PessoaDiscente extends Pessoa{

    public $Matricula;
    public $Curso;

function __construct($Nome, $Identificacao){
    parent::__construct($Nome, $Identificacao);

}


function VerPessoa(){
parent::VerPessoa();

    

}

}


?>
