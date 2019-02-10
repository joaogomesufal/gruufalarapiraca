<?php
require __DIR__ . '/vendor/autoload.php';
use App\Actions\GRUAction;

if(isset($_POST['generatePDF'])) {
	GRUAction::generate($_POST['CPF'], $_POST['nome'], intval($_POST['valor']));
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<title>Geração de GRU UFAL</title>
	<link rel="stylesheet" href="./public/css/bootstrap.css">
	<link rel="stylesheet" href="./public/css/app.css">
</head>
<body>
	<div class="container" id="app">
		<form method="POST">
			
			<div class="row">
				<div class="col-md-4 col-md-offset-4">
					<img id="logo-image" src="./public/images/logo-gru.svg" alt="Universidade Federal de Alagoas - Campus Arapiraca. Guia de Recolhimento da União. Restaurante Universitário.">
				</div>
			</div>
			<div class="row" id="description-app">
				<div class="col-md-4 col-md-offset-4">
					<h4>Guia de Recolhimento da União</h4>
					<p>Aplicação com intuito de simplificar o processo de emissão da GRU para o RU Campus Arapiraca.</p>
				</div>
			</div>

			<div class="row">
				<div class="col-md-4 col-md-offset-4 col-xs-12 col-sm-12">
					<div class="row">
						<div class="col-md-12">	
							<div class="form-group">
								<label>Nome *</label>
								<input type="text" name="nome" class="form-control" required>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">	
							<div class="form-group">
								<label>CPF *</label>
								<input type="text" name="CPF" data-mask="000.000.000-00" class="form-control" required placeholder="000.000.000-00">
							</div>
						</div>	
					</div>
					
					<div class="row">
						<div class="col-md-12">	
							<div class="form-group">
								<label>Refeições *</label>
								<small class="form-text text-value-gru" style="display: block;">
									Valor a ser pago R$ <span id="valueGRUSpan">3</span>
								</small>
								<input type="number" value="1" id="mealsQuantity" class="form-control" required>

								<input type="hidden" name="valor" id="valueGRU">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">	
							<button type="submit" name="generatePDF" class="btn btn-app btn-block">
								<span class="glyphicon glyphicon-print"></span> &nbsp;
								Gerar
							</button>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
	<script src="./public/js/jquery.min.js"></script>
	<script src="./public/js/jquery.mask.min.js"></script>
	<script src="./public/js/app.js"></script>
</body>
</html>
