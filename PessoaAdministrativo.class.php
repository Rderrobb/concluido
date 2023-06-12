<?php

require_once('Pessoa.class.php');
class PessoaAdministrativo extends Pessoa{

    public $Setor;
    public $Bloco;



function __construct($Nome, $Identificacao,){
    parent::__construct($Nome, $Identificacao);

    
}

function VerPessoa(){
parent::VerPessoa();

}
}
    



?>
