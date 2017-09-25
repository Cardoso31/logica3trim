
<html>
<?php 
$exibe1=file_get_contents('exemplo.html');
echo "$exibe1";

//aqui é onde você diz quantos numeros vão aparecer
for($i2=0; $i2<=15;$i2++){
	$deci=$i2;
	$aux = "";
		for ($i=0; $i <8 ; $i++) { 
			$resto = $deci % 2;
			$aux = $aux . $resto;
			$deci=$deci/2;
			$invertido = strrev($aux);

		$tras=strrev($invertido);
		$conta=0;
		for ($cada=0; $cada <strlen($tras) ; $cada++) { 
			$recebe=$tras[$cada]*pow(2, $cada);
			$conta=$recebe+$conta;
		}
		}
		print("<tr><td><center>".$invertido."</center></td><td><center>".$conta."</center></td>");


		$tras=strrev($invertido);
		$conta=0;
		for ($cada=0; $cada <strlen($tras) ; $cada++) { 
			$recebe=$tras[$cada]*pow(2, $cada);
			$conta=$recebe+$conta;
		}

		
	}

$exibe2=file_get_contents('exemplo2.html');
echo "$exibe2";
?>
</html>