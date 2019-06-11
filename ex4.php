<?php


	function peso ($sx,$altu) {
		if ($sx == 1) {
			$pesoideal = (62.1 * $altu) - 44.7;
			return $pesoideal;
    		}
    		if ($sx == 2) {
        		$pesoideal = (72.7 * $altu) - 58;
        		return $pesoideal;
    		}
	}

	echo "Informe seu sexo (1-Feminino e 2-Masculino) ";
	$sx = (int)fgets(STDIN);

	echo "Informe sua altura: ";
	$altu = (float)fgets(STDIN);

	$pesoideal = peso($sx,$altu);

	echo "O seu peso ideal é: $pesoideal kg";
