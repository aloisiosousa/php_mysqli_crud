<?php 

	include_once 'conexao.php';

	$consultar = $conn->query("select * from tb_cadastrado");

	while ($dados = $consultar->fetch_assoc()) {

		$id 	= $dados['id'];
		$nome 	= $dados['nome'];
		$num	= $dados['num'];
		$cargo	= $dados['cargo'];


		echo "<tr>";
			echo "<td>$id<td>$nome<td>$num<td>$cargo";
			echo "<td><a href='form_editar.php?id=$id' class='btn'>Editar</a>";
			echo "<td><a href='delete.php?id=$id' class='btn'>Excluir</a>";
		echo "<tr>";
	}

?>