<?php include_once 'conexao.php';?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Página do Administrador de Cadastro Mysqli</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<?php 

		include_once 'conexao.php';

		$id = $_GET['id'];
	
		$consultar = $conn->query("select * from tb_cadastrado where id='$id'");

		while($dados = $consultar->fetch_assoc()){
			$nome   = $dados['nome'];
			$num	= $dados['num'];
			$cargo 	= $dados['cargo'];
		}
	?>

	<div class="row">
		<div class="container col-sm-6">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="panel-heading text-center display-4">ALTERAR DADOS</div>

    				<form action="alterar.php?id=<?php echo $id;?>"
    						 method="post" accept-charset="utf-8" class="form-group">

    					<label for="nome">Nome:</label>
    					<input type="text" name="nome" value="<?php echo $nome;?>" class="form-control">
    						
    					<label for="num">Número:</label>
    					<input type="text" name="num" value="<?php echo $num;?>" class="form-control">

    					<label for="cargo">Cargo:</label>
    					<input type="text" name="cargo" value="<?php echo $cargo;?>" class="form-control">

    					<br>
    					<input type="submit" name="btn" value="ALTERAR" class="btn btn-success">
    					<a href="mostrar.php" class="btn red">Cancelar</a>

    				</form>
				</div>
			</div>
		</div>			
	</div>
</body>
</html>