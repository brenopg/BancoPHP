<!DOCTYPE html>
<html>
<head>
	<title>Usuários Cadastrados</title>
</head>
<body>
	<?php
	$servername="localhost";
	$username="root";
	$password="";
	$dbname="base_teste";

	$conn = new PDO("mysql:host=$servername;dbname=$dbname",$username);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$consulta = $conn->query("SELECT nome, id FROM usuarios;");

	echo "Usuários Cadastrados<br><br>";
	while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) { 
		echo "Id: {$linha['id']} / Nome: {$linha['nome']}<br />";
		 } 
?>
</body>
</html>

