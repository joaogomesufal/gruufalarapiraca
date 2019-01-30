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
		<div class="row">
			
			<form method="POST">
				<div class="col-md-4">
					<div class="form-group">
						<label>Nome: </label>
						<input type="text" name="nome" class="form-control">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label>CPF: </label>
						<input type="text" name="CPF" class="form-control">
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label>Valor: </label>
						<input type="number" name="valor" class="form-control">
					</div>
				</div>
				<div class="col-md-2">
					<button type="submit" name="generatePDF" class="btn btn-success btn-block" style="margin-top:  22px;">
						<span class="glyphicon glyphicon-ok-sign"></span> &nbsp;
						Gerar
					</button>
				</div>
			</form>
			
		</div>
	</div>
</body>

	<script src="node_modules/jquery/dist/jquery.js"></script>
	<script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
</html>
