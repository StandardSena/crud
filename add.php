<html>
<head>
	<title>Add Usuarios</title>
</head>

<body>
<?php
//Incluindo o arquivo de conexão com o banco de dados usando o include_once
//para saber a diferença entre  o include_once e o require acesse o link do canal standard sena
// https://www.youtube.com/watch?v=yWybn1Cop0o
include_once("config.php");

if(isset($_POST['Submit'])) {	
	$nome = mysqli_real_escape_string($mysqli, $_POST['nome']);
	$idade = mysqli_real_escape_string($mysqli, $_POST['idade']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);
		
	// checando se os campos estão vazios 
	if(empty($nome) || empty($idade) || empty($email)) {
				
		if(empty($nome)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
		if(empty($idade)) {
			echo "<font color='red'>Age field is empty.</font><br/>";
		}
		
		if(empty($email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}
		
		//link para a próxima pagina com script javascript 
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		//fazendo insert na tabela que usuarios 
		$result = mysqli_query($mysqli, "INSERT INTO usuarios(nome,idade,email) VALUES('$nome','$idade','$email')");
		
		
		echo "<font color='green'>usuario adicionado com sucesso.";
		echo "<br/><a href='index.php'>Ver Resultados</a>";
	}
}
?>
</body>
</html>
