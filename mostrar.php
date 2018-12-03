<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

<div class="row">
	<div class="container col-sm-6">
		<h1 class="display-4 text-center">Consulta de Registro</h1>
		<table class="table table-hover">
			<thead>
				<tr>
					<th >ID</th>
					<th>Nome</th>
					<th>Número</th>
					<th>Cargo</th>
				</tr>
			</thead>

			<tbody>
							
				<?php include_once 'consultar.php' ?>
				<tr>
					<a href="form_cadastro.php" class="btn">Tela Cadastro</a>
				</tr>

			</tbody>

		</table>
	</div>		
</div>	