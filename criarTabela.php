<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "base_teste";

try{
	//sempre precisa se conectar a um banco de dados
	$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	//setando PDO exception
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$sql = "CREATE TABLE usuarios(
	id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
	nome VARCHAR(50) UNIQUE,
	senha VARCHAR(5000)
	)";
	echo "tabela criada!";

	//usando exec porque não tem retorno
	$conn->exec($sql);
}catch(PDOException $e){
	echo $sql . "<br>" . $e->getMessage();
}
$conn = null;
?>

