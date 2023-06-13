

<?php


$Pessoa = $_POST['Pessoa'];

if ($Pessoa == "PessoaAdministrativo"){
    require_once("PessoaAdministrativo.class.php");


    $Nome = $_POST['Nome'];
    $Identificacao = $_POST['Identificacao'];
    $Setor = $_POST['Setor'];
    $Bloco = $_POST['Bloco'];

    $Pessoa1 = new PessoaAdministrativo($Nome, $Identificacao, $Setor, $Bloco );

    echo $Pessoa1=VerPessoa();

    echo "Ola $Nome, aqui estao algumas informações suas:
        Seu numero de Identificação e: $Identificacao
        Seu setor e: $Setor
        Seu bloco e o: $Bloco    
        ";
    
    /*$Pesssoa1 = new PessoaAdministrativo($Nome, $Identificacao, $Setor, $Bloco);

    echo "<link rel='stylesheet' href='style.css'>";
    echo "<h2>Seja bem vindo a area Administrativa $Nome!</h2>";
    echo $Pesssoa1->VerPessoa();
    echo "<p><!DOCTYPE html>
    <html>
    <head>
      <title>Formulário</title>
    </head>
    <body>
    <form action='exibir.php' method='POST'>
        <p>Setor: <input type='text' name='Setor' value='Bloco' ></p>
        <p>Bloco: <input type='text' name='Bloco' value='Bloco' ></p>
        <p><input type='submit' value='prosseguir'></p>
    </form>
    </body>
    </html></p>";*/

}

elseif ($Pessoa == "PessoaDocente"){
    require_once("PessoaDocente.class.php");

    $Nome = $_POST['Nome'];
    $Identificacao = $_POST['Identificacao'];

    $Pessoa1 = new PessoaDocente($Nome, $Identificacao, $Bloco, $Disciplina);
    /*echo "<link rel='stylesheet' href='style.css'>";
    echo "<h2>Seja bem vindo a area do Profrssor $Nome!</h2>";
    echo $Pessoa1->VerPessoa();
    echo "<p><!DOCTYPE html>
    <html>
    <head>
      <title>Formulário</title>
    </head>
    <body>
    <form action='exibir2.php' method='POST'>
        <p>Qual a sua disciplina: <input type='text' name='Disciplina'></p>
        <p>Qual bloco voce atua: <input type='text' name='Bloco'></p>
        <p><input type='submit' value='prosseguir'></p>
    </form>
    </body>
    </html></p>";*/
}
else {
     require_once("PessoaDiscente.class.php");

    $Nome = $_POST['Nome'];
    $Identificacao = $_POST['Identificacao'];

    $Pessoa1 = new PessoaDiscente($Nome, $Identificacao,  $Turno, $Curso);
    
    /*echo "<link rel='stylesheet' href='style.css'>";
    echo "<h2>Seja bem vindo a area do Aluno $Nome!</h2>";
    echo $Pessoa1->VerPessoa();
    echo "<html>
    <head>
    </head>
    <body>
    <form action='' method='POST'>
        <p>Qual o seu curso: <input type='text' name='Curso'></p>
        <p>Qual Periodo: <input type='text' name='Periodo'></p>

        <p><input type='submit' value='prosseguir'></p>
        
    </form>
    </body>
    </html></p>";*/
    

}

?>