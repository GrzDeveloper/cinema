<html>
	<head>
			<title>Compra de Ingressos Unicine</title>
		<link rel="icon" type="image/x.icon" href="Cine.png">
			<style>
		
			*{
				margin: 0;
				padding: 0;
				background-color: beige;
			}
			
			h1.title{
				background-color: #800000;
				color: beige;
				padding: 10px;
			}
			</style>
		</head>
	<body>
		<div>
			<h1 class="title">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Unicine</h1>
			<center>
			<img src="Logo.png"class="logo" width="270" height="170">
			</div>
		<center><h1>
	<?php
		$num1=50;
		$num2=25;
		$int=$_GET['int'];
		$meia=$_GET['meia'];
		$resultint=0;
		$resultmeia=0;
		$valor=0;
			if($int==0 && $meia==0){
				echo"QUANTIDADE DE INGRESSOS NÃO SELECIONADA!";
			}
			elseif($int+$meia > 10){
				echo"QUANTINDADE DE INGRESSOS EXCEDIDA!";
			}
			elseif($int<10){
				$resultint=$num1*$int;
				$resultmeia=$num2*$meia;
				$valor=$resultmeia+$resultint;
				echo"O valor dos ingressos é: ";
				echo"R$ $valor,00";
			}else{
				echo"O valor permitido em uma compra é de até 10 ingressos!";
			
			}
			
				
				
				
				
			
	?>
	</body>
</html>