<?php


$Pessoa = $_POST['Pessoa'];



if ($Pessoa == "PessoaAdministrativo"){
    require_once("PessoaAdministrativo.class.php");
    
    $Nome = $_POST['Nome'];
    $Identificacao = $_POST['Identificacao'];
    $Setor = $_POST['Setor'];
    $Bloco = $_POST['Bloco'];

    

    echo "<h1>Seja bem vindo a area administrativa $Nome, identificação: $Identificacao</h1>";

    echo "<html>";
    echo "<head>";
    echo "<link rel='stylesheet' href='style.css'>";
    echo "<title>Formulario 2</title>";
    echo "</head>";
    echo "<body>";
    echo "<form action='exibir.php'>";
    echo "<label>Setor: </label><input type='text' name='Setor' value='Setor'>";
    echo "<label>Bloco: </label><input type='text' name='Bloco' value='Bloco'>";
    echo "<input type='submit' value='enviar'>";
    echo "</form>";



}


?>