<html>
	<head>
		<title>Funcoes Arrays</title>
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	</head>
	<body>
		<h1>Funcoes nativas Arrays</h1>

		<div class="container-fluid">
			<ul >
				
				<!-- <?php $string  = "Seu nome"; ?> -->
					
				<?php

					$keys = array('primeiro', 'segundo', 'rubinho');
					$values = array('Hamilton', 'Alonso', 'Rubinho');

					echo "array_combine(keys, values)";
					$new_array = array_combine($keys, $values);
					var_dump($new_array);
					echo "<hr/>";

					echo "array_count_values(keys, values)";
					$new_array2 = array_count_values($values);
					var_dump($new_array2);
					echo "<hr/>";

					echo "array_count_values(keys, values)";
					$values2 = array('Hamilton', 'Alonso', 'Rubinho', 'Hamilton','Hamilton','Hamilton');
					$new_array2 = array_count_values($values2);
					var_dump($new_array2);
					echo "<hr/>";

					echo "array_diff(keys, values)";
					
					$array1= array('um', 'tres', 'quatro','sete');
					$array2= array('um', 'tres', 'cinco','seis');
					$new_array3 = array_diff($array1, $array2);
					var_dump($new_array3);
					echo "<hr/>";

					echo "array_merge(keys, values)";
					
					$array_merge1= array("cor" => "azul", 1,2,6,8);
					$array_merge2= array("cor" => "rosa", 1,"a","2","6",8,10,12);
					$new_array_merge = array_merge($array_merge1, $array_merge2);
					var_dump($new_array_merge);
					echo "<hr/>";

					echo "array_sum(keys, values)";					
					$arraysum= array(1,2,3,4,5,6,7,8);			
					$new_array_sum = array_sum($arraysum);
					var_dump($new_array_sum);
					echo "<hr/>";
				 ?>	
			</ul>
		</div>
		<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Latest compiled JavaScript -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</body>
	
</html>