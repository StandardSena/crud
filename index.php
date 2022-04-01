<?php
//incluindo a pagina de conexão com o banco de dados 
// video meu explicando a diferença entre include e require 
// https://www.youtube.com/watch?v=yWybn1Cop0o
// CREATED BY FERNANDO SENA 
include_once("config.php");

//$result = mysql_query("SELECT * FROM usuarios ORDER BY id DESC"); // variavel res faz um SELECT todas as colunas da tabela usuarios  e ordena pela id em ordem decrescente
$result = mysqli_query($mysqli, "SELECT * FROM usuarios ORDER BY id DESC"); // using mysqli_query instead
?>

<html>
<head>	
	<title>Homepage</title>
</head>

<body>
<a href="add.html">Adicionar Novo usuario</a><br/><br/>

	<table width='80%' border=0>

	<tr bgcolor='#4682B4'>
		<td>Nome</td>
		<td>Idade</td>
		<td>Email</td>
		<td>Atualizar</td>
	</tr>
	<?php 
	//para cada coluna ele chama a váriavel res 
while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['nome']."</td>";
		echo "<td>".$res['idade']."</td>";
		echo "<td>".$res['email']."</td>";	
		echo "<td><a href=\"edit.php?id=$res[id]\">editar</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Você tem certeza que deseja deletar?')\">Deletar</a></td>";		
	}
	?>
	</table>
	
	<h3>PERSISTÊNCIA É O CAMINHO DA VITÓRIA </h3>
	<br>
	<img src=""><h4>MEU CANAL</h4></A><br>
	<a href="https://www.youtube.com/channel/UCLyOSK9E8CA-mkvV8eEZvWg">YOUTUBE LINK</a>
	<img src=""><h4>MEU INSTAGRAM</h4><br>
	<a href="https://www.instagram.com/fernandosenatoget/">INSTAGRAM LINK</a>
<img src=""><h4>MEU GITHUB</h4></A></body><br>
<a href="https://github.com/StandardSena">GITHUB LINK </a>
</html>
