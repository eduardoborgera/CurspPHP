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
					require "array/carro_db.php";

					for($i = 0; $i < count($carros); $i++){

						echo "<tr>";
						echo "<td>{$i}</td>";
						echo "<td>". $carros[$i]."</td>";
						echo "</tr>";
					}
				?>	
					
			</tbody>
		</table>
	</body>
	
</html>