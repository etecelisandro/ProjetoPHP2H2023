<?php 
	
	$ano = '2013' ;
	

	function exibir(){

		GLOBAL $ano;
		$ano++;
		return $ano; 


	}

	echo "<br/> ano " .$ano;
	echo "<br/> ano " .exibir();
	echo "<br/> ano " .exibir();
	echo "<br/> ano " .$ano;


 ?>