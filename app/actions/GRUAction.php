<?php

namespace App\Actions;

use \GruSiafi\UgIfro;
use \GruSiafi\UnidadeGestora;
use \GruSiafi\GruSiafi;
use \GruSiafi\DadosGru;
use \GruSiafi\Recolhimento as R;

class GRUAction {

	public static function generate($cpf, $nome, $valor)
	{	
		$ug = new UnidadeGestora();
		$ug->setCodigo('153037')
		    ->setGestao('15222')
		    ->setCodigoCorrelacao('904')
		    ->setNomeUnidade('UNIVERSIDADE FEDERAL DE ALAGOAS')
		    ->setCodigoRecolhimento(R::SERVICOS_DE_HOSPEDAGEM_E_ALIMENTACAO);

		$dadosGru = new DadosGru(
		    '15303715222',
		    $cpf,
		    utf8_decode($nome),
		    number_format($valor, 2, ',', '.'),
		    number_format($valor, 2, ',', '.'));

		$now_date = new \DateTime();
		$now = $now_date->format('m/Y');
		$now_date->add(new \DateInterval('P4D')); // P1D means a period of 1 day
		$payment_date = $now_date->format('d/m/Y');
		

		$dadosGru->setCompetencia($now);
		$dadosGru->setVencimento($payment_date);

		$gruSiafi = new GruSiafi($ug, $dadosGru);

		header("Content-type:application/pdf");
		header("Content-Disposition:inline");

		echo $gruSiafi->getPDF();
	}

	private static function paymenteDate() {
		//Data de pagamento
		
		return [$now_date, $payment_date];
	}
}