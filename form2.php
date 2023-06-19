<link rel="stylesheet" href="style.css">
<?php


$Pessoa = $_POST['Pessoa'];

if ($Pessoa == "PessoaAdministrativo"){
    require_once("PessoaAdministrativo.class.php");
    

    $Nome = $_POST['Nome'];
    $Identificacao = $_POST['Identificacao'];
    $Setor = $_POST['Setor'];
    $Bloco = $_POST['$Bloco'];
    
    $Pessoa1 = new PessoaAdministrativo($Nome, $Identificacao, $Bloco, $Setor );
    
    echo $Pessoa1->VerPessoa();

  

   

}

elseif ($Pessoa == "PessoaDocente"){
    require_once("PessoaDocente.class.php");

    $Nome = $_POST['Nome'];
    $Identificacao = $_POST['Identificacao'];
    $Bloco = $_POST['Bloco'];
    $Disciplina = $_POST['$Disciplina'];

    $Pessoa2 = new PessoaDocente($Nome, $Identificacao, $Bloco, $Disciplina);

    echo $Pessoa2->VerPessoa();

}

else {
    require_once("PessoaDiscente.class.php");


    $Nome = $_POST['Nome'];
    $Identificacao = $_POST['Identificacao'];
    $Turno = $_POST['Turno$Turno'];
    $Curso = $_POST['$Curso'];

   $Pessoa3 = new PessoaDiscente($Nome, $Identificacao, $Turno, $Curso);

    echo $Pessoa3->VerPessoa();

    
  
    
}


?>
