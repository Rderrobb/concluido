<link rel="stylesheet" href="style.css">
<?php


$Pessoa = $_POST['Pessoa'];


if  ($Pessoa == "PessoaAdministrativo"){

 
    echo "<h2>Seja bem vindo a area Administrativa!</h2>";
    echo "<html>";
    echo "<head>";
    echo "<title>exibir2</title>";
    echo "</head>";
    echo "<body>";
    echo "<form method='post' action='exibir2.php'>";
    echo "<label>Nome: </label><input type='text' name='Nome' >";
    echo "<label>Identificacao: </label><input type='text' name='Identificacao'>";
    echo "<label>Setor: </label><input type='text' name='Setor'>";
    echo "<label>Bloco: </label><input type='text' name='Bloco'>";
    echo "<label>Selecione seu Sexo:</label>";
    echo "<select name='Sexo'>"; 
    echo "<option name='Sexo' value='Masculino'>Masculino</option>";
    echo "<option name='Sexo' value='Feminino'>Feminino</option>";
    echo "<option name='Sexo' value='Nao especificar'>Não especificar</option>";
    echo "</select>";
    echo "<input type='hidden' name='Pessoa' value='PessoaAdministrativo'>";
    echo "<input type='submit' value='enviar'>";
    echo "</form>";
    echo "</body>";
    echo "</html>";
    

   

}

elseif ($Pessoa == "PessoaDocente"){
 
    
    echo "<h2>Seja bem vindo a area do professor!</h2>";
    echo "<html>";
    echo "<head>";
    echo "<title>exibir2</title>";
    echo "</head>";
    echo "<body>";
    echo "<form  method='post' action='exibir2.php'>";
    echo "<label>Nome: </label><input type='text' name='Nome'>";
    echo "<label>Identificacao: </label><input type='text' name='Identificacao'>";
    echo "<label>Bloco: </label><input type='text' name='Bloco' value=''>";
    echo "<label>Disciplina: </label><input type='text' name='Disciplina' value=''>";
    echo "<label>Selecione seu Sexo:</label>";
    echo "<select name='Sexo'>"; 
    echo "<option name='Sexo' value='Masculino'>Masculino</option>";
    echo "<option name='Sexo' value='Feminino'>Feminino</option>";
    echo "<option name='Sexo' value='Nao especificar'>Não especificar</option>";
    echo "</select>";
    echo "<input type='submit' value='enviar'>";
    echo "<input type='hidden' name='Pessoa' value='PessoaDocente'>";
    echo "</form>";
    echo "</body>";
    echo "</html>";
}

else {
    
    
    echo "<h2>Seja bem vindo a area do Aluno!</h2>";
    echo "<html>";
    echo "<head>";
    echo "<title>exibir</title>";
    echo "</head>";
    echo "<body>";
    echo "<form  method='post' action='exibir2.php'>";
    echo "<label>Nome: </label><input type='text' name='Nome'>";
    echo "<label>Identificacao: </label><input type='text' name='Identificacao' >";
    echo "<label>Turno: </label><input type='text' name='Turno' value=''>";
    echo "<label>Curso: </label><input type='text' name='Curso' value=''>";
    echo "<label>Selecione seu Sexo:</label>";
    echo "<select name='Sexo'>"; 
    echo "<option name='Sexo' value='Masculino'>Masculino</option>";
    echo "<option name='Sexo' value='Feminino'>Feminino</option>";
    echo "<option name='Sexo' value='Nao especificar'>Não especificar</option>";
    echo "</select>";
    echo "<input type='submit' value='enviar'>";
    echo "<input type='hidden' name='Pessoa' value='PessoaDiscente'>";
    echo "</form>";
    echo "</body>";
    echo "</html>";
    
  
    
}


?>






