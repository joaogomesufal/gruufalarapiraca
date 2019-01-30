<?php
require __DIR__ . '/vendor/autoload.php';

use App\Actions\GRUAction;

if(isset($_POST['generatePDF'])) {
	GRUAction::generate($_POST['nome'], $_POST['CPF'], intval($_POST['valor']));
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Geração de GRU UFAL</title>
	<link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
</head>
<body>
	<div class="container">

			<form method="POST">
				<div class="col-md-6 col-md-offset-3" style="margin-top: 20px;">
					<div class="panel panel-primary">
						<div class="panel-heading">
							Formulário para emição de GRU - Restaurante Universitário
						</div>

						<div class="panel-body">
							<div class="row">
								<div class="col-md-12">	
									<div class="form-group">
										<label>Nome: </label>
										<input type="text" name="nome" class="form-control">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-12">	
									<div class="form-group">
										<label>CPF: </label>
										<input type="text" name="CPF" class="form-control">
									</div>
								</div>	
							</div>
							
							<div class="row">
								<div class="col-md-12">	
									<div class="form-group">
										<label>Valor: </label>
										<input type="number" name="valor" class="form-control">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-12">	
									<button type="submit" name="generatePDF" class="btn btn-primary btn-block" style="margin-top:  22px;">
										<span class="glyphicon glyphicon-print"></span> &nbsp;
										Gerar
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</body>

	<script src="node_modules/jquery/dist/jquery.js"></script>
	<script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
</html>