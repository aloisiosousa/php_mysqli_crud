<?php 

	include_once 'conexao.php';

	
	$sql = "DELETE FROM tb_cadastrado WHERE id=2";

	if (mysqli_query($conn, $sql)){

		echo "Registro deletado com sucesso.";

		echo "<br><br>";

		header('Location: mostrar.php');
	}

	else{

		echo "Você errou alguma coisa, tente novamente.";
	}

 ?>