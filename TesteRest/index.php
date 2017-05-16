<html>
<head>
	<title>Teste Consumo WS em PHP</title>
</head>
<body>
	
<form action="" method="POST">
	Digite a cidade: <input type="text" name="nome" id="nome"><p/>
	Digite o geocodigo: <input type="text" name="geocodigo" id="geocodigo"><p/>
	Digite a latitude: <input type="text" name="latitude" id="latitude"><p/>
	Digite a longitude: <input type="text" name="longitude" id="longitude"><p><p>
<input type="submit" name="enviar">

	<?php 
		//$listaTarefas = file_get_contents('http://localhost/api/todo/listar'); 
		$listaTarefas = file_get_contents('http://192.168.1.8:8080/cidades'); 
		$listaTarefas = json_decode($listaTarefas); 
		//print_r($listaTarefas); 
		//exit();
	?>

		<select>
	<?php

		foreach ($listaTarefas as $key => $value) {
			echo "<option value= ".$key->id." > ".$value->nome." </option>";
		}
	?>

		</select>
	


</form>

</body>
</html>

<?php

if(isset($_POST['enviar'])){

	
	$post_array = array(
		'nome' => $_POST['nome'],
		'geocodigo' => $_POST['geocodigo'],
		'latitude' => $_POST['latitude'],
		'longitude' => $_POST['longitude']

		);

	$json = json_encode( $post_array );

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "http://192.168.1.8:8080/cidades/novo");
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json','Content-Length: ' . strlen($json)));
	//curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
	$resposta = curl_exec($ch);
	curl_close($ch);

	//$resposta = json_decode($resposta);

	//echo "<script type='text/javascript'> alert('".$resposta->Retorno."'); </script >";
}

/*
if(isset($_POST['enviar'])){

	
	$post_array = array('titulo' => $_POST['titulo']);

	$json = json_encode( $post_array );

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "http://localhost/api/todo/add");
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $post_array);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
	$resposta = curl_exec($ch);
	curl_close($ch);

	$resposta = json_decode($resposta);

	echo "<script type='text/javascript'> alert('".$resposta->Retorno."'); </script >";
}
*/

?>