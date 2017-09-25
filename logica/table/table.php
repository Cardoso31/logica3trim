
<?php 
$exibe1=file_get_contents('exemplo.html');
echo "$exibe1";




//aqui é onde você diz quantos numeros vão aparecer
$conteudo=file('agenda.csv');

	echo '<table>';

	foreach ($conteudo as $linha) {
		for ($x=0; $x <sizeof($linha) ; $x++) { 
		$partes= explode(";",$linha[$x]);
		for ($i=0; $i <sizeof($linha) ; $i++) {  
		echo('<tr>');
		for ($i2=0; $i2 <sizeof($partes) ; $i2++) { 
		echo('<td><center>'.$partes[$i2].'</center></td>');
		}
	}
		echo('</tr>');	
	}

}
	echo'</table>';
$exibe2=file_get_contents('exemplo2.html');
echo "$exibe2";
?>