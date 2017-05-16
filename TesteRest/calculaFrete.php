<html>
<head>
	<title>Teste Consumo WS em PHP</title>
</head>
<body>
	
<form action="" method="GET">

	<?php  
		$listaTarefas = file_get_contents('http://192.168.1.8:8080/cidades'); 
		$listaTarefas = json_decode($listaTarefas); 
	?>
		Cidade A: 
		<select name="cidadeA" id="CA">
	<?php

		foreach ($listaTarefas as $key => $value) {
			echo "<option value= ".$value->id." > ".$value->nome." </option>";
		}
	?>

		</select>

		<br>Cidade B:
		<select name="cidadeB" id="CB">
	<?php

		foreach ($listaTarefas as $key => $value) {
			echo "<option value= ".$value->id." > ".$value->nome." </option>";
		}
	?>

		</select>
		<p>

	<input type="submit" name="enviar">


</form>

</body>
</html>

<?php

if(isset($_GET['enviar'])){

	
	$teste = file_get_contents("http://192.168.1.8:8080/cidades/calculo/".$_GET['cidadeA']."/".$_GET['cidadeB'].""); 
	$teste = json_decode($teste); 
	
	print_r($teste);
	//$post_array = array(
	//	'geocodigoA' => $_GET['cidadeA'],
	//	'geocodigoB' => $_GET['cidadeB']
	//);

	//$json = json_encode( $post_array );

	//print_r($json);
	//exit();

	/*
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "http://192.168.1.8:8080/cidades/calculo");
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json','Content-Length: ' . strlen($json)));
	curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
	$resposta = curl_exec($ch);
	curl_close($ch);

	$resposta = json_decode($resposta);

	print_r($resposta);

	*/

	//echo "<script type='text/javascript'> alert('".$teste."'); </script >";
	echo "<script type='text/javascript'> alert('CidadeA: ".$teste[0]->geocodigo."\\nCidadeB:".$teste[1]->geocodigo." '); </script >";
}

?>