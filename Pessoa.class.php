<?php

class Pessoa{

    public $Nome;
    public $Identificacao;
    

    function __construct($Nome, $Identificacao){
        
        $this->Nome = $Nome;
        $this->Identificacao = $Identificacao;
        

    }

    function VerPessoa(){

        echo "<b>Nome: </b>{$this->Nome}<br/><br/>";
        echo "<b>Identificacao: </b>{$this->Identificacao}<br/><br/>";
        
    }

}
?>