<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Escolha" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <center>
        <img src="logo.png" alt="logo" width="150px">
    </center>

    <div>
        <form action="exibir.php" method="post">
            <label><input type="radio" name="Pessoa" value="PessoaAdministrativo"> Func.Administrativo</label>
            <br><br>
            <label><input type="radio" name="Pessoa" value="PessoaDocente"> Func.Docente</label>
            <br><br>
            <label><input type="radio" name="Pessoa" value="PessoaDiscente"> Aluno</label>
            <br><br>
    </div>

    <div>
        <label>Nome: </label><input type="text" name="Nome" placeholder="Digite Seu Nome">
        <br><br>
        <label>Identificação: </label><input type="text" name="Identificacao" placeholder="Insira Sua Matricula">
    </div>


    <div>
        <input type="submit" value="Prosseguir">
    </div>

    </form>


</body>

</html>
