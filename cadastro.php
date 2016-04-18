<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8" />
	<title>Login</title>
</head>
<body><form action="cadastro.php">

    Usuário : <?php echo $_POST["nome"]; ?><br>
    Senha : <?php echo $_POST["senha"]; ?><br>

<?php
    $nome = $_POST["nome"];
    $senha = $_POST["senha"];
    
    $servername="localhost";
	$username="root";
	$password="";
	$dbname="base_teste";

try{
	$conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$query = $conn->prepare('INSERT into usuarios(nome,senha) VALUES(:nome,:senha)');
	$query->execute(array(
		':nome' =>$nome,':senha'=>$senha));
	echo "Usuário cadastrado.";
}
catch(PDOException $e){   
	echo $sql . "<br>" . $e->getMessage();
	}
$conn = null;
?>

</form> 
</body>
</html>