<?php

require_once('Pessoa.class.php');
class PessoaDocente extends Pessoa{

    public $Bloco;
    public $Disciplina;

function __construct($Nome, $Identificacao){
    parent::__construct($Nome, $Identificacao);

    

}


function VerPessoa(){
parent::VerPessoa();
    
}


}


?>
