<link rel="stylesheet" href="style.css">
<?php


$Pessoa = $_POST['Pessoa'];

if ($Pessoa == "PessoaAdministrativo"){
    require_once("PessoaAdministrativo.class.php");
    

    $Nome = $_POST['Nome'];
    $Identificacao = $_POST['Identificacao'];
    $Setor = $_POST['Setor'];
    $Bloco = $_POST['Bloco'];
    
    $Pessoa1 = new PessoaAdministrativo($Nome, $Identificacao, $Bloco, $Setor );
    
    echo $Pessoa1->VerPessoa();

    



   

}

elseif ($Pessoa == "PessoaDocente"){
    require_once("PessoaDocente.class.php");

    $Nome = $_POST['Nome'];
    $Identificacao = $_POST['Identificacao'];
    $Bloco = $_POST['Bloco'];
    $Disciplina = $_POST['Disciplina'];

    $Pessoa1 = new PessoaDocente($Nome, $Identificacao, $Bloco, $Disciplina);

    echo $Pessoa1->VerPessoa();

}

else {
    require_once("PessoaDiscente.class.php");


    $Nome = $_POST['Nome'];
    $Identificacao = $_POST['Identificacao'];
    $Turno = $_POST['Turno'];
    $Curso = $_POST['Curso'];

   $Pessoa1 = new PessoaDiscente($Nome, $Identificacao, $Turno, $Curso);

    echo $Pessoa1->VerPessoa();

    
  
    
}


?>
