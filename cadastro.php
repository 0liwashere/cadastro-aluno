<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Cadastrar Aluno</title>
</head>
<body>

<h2>Cadastro de Aluno</h2>

<form action="inserir.php" method="POST">

Matricula:<br>
<input type="number" name="matricula"><br><br>

Nome:<br>
<input type="text" name="nome"><br><br>

Email:<br>
<input type="email" name="email"><br><br>

<input type="submit" value="Cadastrar">

</form>

</body>
</html>
<?php

$matricula = $_POST["matricula"];
$nome = $_POST["nome"];
$email = $_POST["email"];

$conexao = mysqli_connect("localhost", "root", "", "escola");

$sql = "INSERT INTO alunos (matricula, nome, email)
VALUES ('$matricula', '$nome', '$email')";

if(mysqli_query($conexao, $sql)){
    echo "Aluno cadastrado com sucesso!";
}else{
    echo "Erro ao cadastrar";
}

mysqli_close($conexao);

?>
