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
		<center>
	<?php
			echo"Pagina 1 -index.php<br/><br/>";
			echo"Na primeira pagina 'index.php' Dentro da tag head colocamos o titulo e uma tag de link para um icone na aba do site com a logo criada por nos
		dentro de head abrimos a tag style, para definir os estilos que teria todo o layout da pagina. 
			Chamamos a classe criada ja dentro de body, junto com a tag para definir especificamente oque queriamos que acontecece com aquela parte em especifico.
			Ainda dentro do index, colocamos imagens de compra de ingressos, e com o comando 'href' (que serve para fazer aquela determinada imagem te direcionar para outra pagina)
			definimos pagina 2 como nosso destino de pagina de compra.
			OBS: para colocar cor usamos 'color' e mexer na margem usamos 'margin'";
			echo"<br/><br/>Pagina 2.php<br/><br/>";
			echo"Em questão de layout, foi uma copia do index, para manter a mesma estrutura, porem agora colocado os valores dos ingressos a esquerda
				para o cliente ficar ciente dos valores que os ingressos estão custando. No centro, uma barra para informar a quantindade de ingressos que 
				sera ser selecionado
				OBS: o '&nbsp serve para dar uma espaço' e uma '<div>'para dividir uma coisa da outra e as informacoes colocadas nao serem selecionadas para todos
				esta pagina, utilizando o form, sera direcionada para a pagina 3, onde mostrara o valor dos ingressos selecionados pelo usuario.";
			echo"<br/><br/>Pagina 3.php<br/><br/>";
			echo"Novamente repetindo todo o layout das duas ultimas paginas, a pagina 3 faz o uso do PHP, usando 'IF ELSE' ele tem todas as informações 
			de selecao de ingressos, ja incluindo os valores informados para o usuario na pagina 2. Declaramos as variaveis necessarias para cair nos valores
			sendo a variavel 'int' e 'meia' o usuario que ira selecionar la na pagina 2.";
	?>
</html>