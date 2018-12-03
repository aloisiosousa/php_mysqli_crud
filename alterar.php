<?php 
	
	include_once 'form_editar.php';
	include_once 'conexao.php';

	$id = $_GET['id'];
	$nome  = isset($_POST['nome'])?$_POST['nome']:"";
	$num   = isset($_POST['num'])?$_POST['num']:"";
	$cargo = isset($_POST['cargo'])?$_POST['cargo']:"";

	$alterar = $conn->query("update tb_cadastrado set nome ='$nome', num ='$num', cargo ='$cargo' where id='$id'");
	
	if(mysqli_affected_rows($conn) > 0){
		header("location: mostrar.php");
	}
	
?>