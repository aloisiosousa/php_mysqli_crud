<?php 

	include_once 'conexao.php';

	$sql = mysqli_query($conn, "SELECT * FROM tb_cadastrado") or die(Error);
	while ($dados = mysqli_fetch_assoc($sql)){

		echo  	'<td>Id:' 		. $dados['id']. "<br> ". 
				'<td> Nome:'	. $dados['nome']. "<br>".
				'<td> Número:'	. $dados['num']."<br>".
				'<td> Cargo:'	. $dados['cargo'].'<br><br>';

			};
	
 ?>

