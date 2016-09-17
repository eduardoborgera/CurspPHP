<html>
	<head>
		<title>Carros</title>
	</head>
	<body>
		<?php echo"Teste"?>
		<table border="2" >
			<thead>
				<th>Coluna 01</th>
				<th>Coluna 02</th>
			</thead>
			<tbody>
				<tr>
					<td>Linha 01</td>
					<td>LInha 02</td>
				</tr>
			</tbody>
		</table>
		<br/>
		<table border="2" >
			<thead>
				<th>Coluna 01</th>
				<th>Coluna 02</th>
			</thead>
			<tbody>
				<?php 
					require "array/donos_carro.php";
					require "array/carro_db.php";

					foreach ($array as $valor_chave) {
						
						echo $valor_chave."<br/>";
					}

					echo"<br/>";

					foreach ($array as $valor_chave => $valor) {
						
						echo "$valor_chave ===> $valor <br/>";
					}

					echo"<br/>";

					foreach ($carros as $carro ) {
						
						echo "$carro<br/>";
					}

					//for ($i=0; $i <= count($array) ; $i++) { 
						
						//echo $array[$i]. "<br/>";
					//}
				?>	
					
			</tbody>
		</table>
	</body>
	
</html>