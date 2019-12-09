<?php

	session_start();
	include_once('servidor.php');

	function ValidarCPF($Objcpf){
		$cpf = preg_replace("/[^0-9]/","", $cpf);
		$digitoum = 0;
		$digitodois = 0;


		for($i = 0, $x = 10; $i <= 8; $i++, $x--){
			$digitoum += $cpf[$i] * $x;

		}

		for($i = 0, $x = 11; $i <= 9; $i++, $x--){
			if(str_repeat($i, 11)==$cpf){
				return false;
			}

			$digitodois += $cpf[$i] * $x;

		}

		$calculoum = (($digitoum%11) < 2) ? 0 : 11-($digitoum%11);

		$calculodois = (($digitodois%11) < 2) ? 0 : 11-($digitodois%11);

		if($calculoum <> $cpf[9] || $calculodois <> $cpf[10]){
			return false;
		}
		return true;
	}
}
?>