<?php

class Pessoa{

    public $Nome;
    public $Identificacao;
    public $Sexo;

    function __construct($Nome, $Identificacao){
        $this->Nome = $Nome;
        $this->Identificacao = $Identificacao;
        $this->Sexo = $Sexo;
    }

    function VerPessoa(){

        echo "<b>Nome: </b>{$this->Nome}<br/><br/>";
        echo "<b>Identificacao: </b>{$this->Identificacao}<br/><br/>";
        echo "<b>Sexo: </b>{$this->Sexo}<br/><br/>";
    }

}
?>
