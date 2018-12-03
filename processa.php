<?php 
 
include_once 'conexao.php';

	$nome 	= isset($_POST['nome']) == true ?$_POST['nome']:"";
	$num	= isset($_POST['num']) == true ?$_POST['num']:"";
	$cargo  = isset($_POST['cargo']) == true ?$_POST['cargo']:"";

	//inserir dados no banco de dados.

	$sql = "INSERT INTO tb_cadastrado (nome, num, cargo) VALUES ('$nome', '$num', '$cargo')";

		if ($conn->query($sql) == TRUE) {

			header('Location: mostrar.php');

		} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
		}
		$conn->close();

?>