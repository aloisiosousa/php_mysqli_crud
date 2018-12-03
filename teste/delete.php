<?php 

	include_once 'conexao.php';

	$delete = $conn->query("DELETE FROM tb_cadastrado WHERE id=6");


	if(mysqli_affected_rows($conn) > 0){

		header('Location: mostrar.php');
	}else{

		echo "Tem algo de errado, tente novamente.";
	}

 ?>