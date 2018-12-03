<?php 

	$conn = mysqli_connect("localhost", "root", "123456", "db_escola"); //or die ("Erro de Conexão.")
	$conn->set_charset('utf8'); 

	if(!$conn){
			die("Falha na conexao: " . mysqli_connect_error());
		}else{
		echo "Conexao realizada com sucesso";
	}


/*
	$conn = new mysqli("localhost", "root", "", "db_aula");
	$conn->set_charset('utf8'); 

	if($conn->connect_error){
		die("Falha de Conexão" . $conn->connect_error);
	}else{
		echo "Conexão com sucesso";
	}

*/
?>