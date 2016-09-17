<html>
	<head>
		<title>Primeira Pagina</title>
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
					for($i = 0; $i < 10; $i++){

						echo "<tr>";
						echo "<td>Linha {$i}.01</td>";
						echo "<td>LInha {$i}.02</td>";
						echo "</tr>";
					}
				?>	
					
			</tbody>
		</table>
	</body>
	
</html>