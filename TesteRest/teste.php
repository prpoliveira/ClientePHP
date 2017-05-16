<html>
<head>
	<title>Teste Consumo WS em PHP</title>
</head>
<body>
	
<form action="" method="POST">
	Digite a status: <input type="text" name="status" id="status"><p/>
	Digite o titulo: <input type="text" name="titulo" id="titulo"><p><p>
<input type="submit" name="enviar">

	<?php 
		$listaTarefas = file_get_contents('http://localhost/api/todo/listar'); 
		$listaTarefas = json_decode($listaTarefas); 
		//print_r($listaTarefas); 
		//exit();
	?>

		<select>
	<?php

		foreach ($listaTarefas as $key => $value) {
			echo "<option value= ".$key->id." > ".$value->titulo." </option>";
		}
	?>

		</select>
	


</form>

</body>
</html>

<?php

if(isset($_POST['enviar'])){

	
	$post_array = array(
		'status' => $_POST['status'],
		'titulo' => $_POST['titulo']
	);

	$json = json_encode( $post_array );

	$post_array = json_decode($json);


	//echo $post_array->status;
	//exit;

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "http://192.168.1.8:8080/cidades/novo");
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS,"status =".$_POST['status']."&titulo =".$_POST['status']);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json','Content-Length: ' . strlen($json)));
	//curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
	$resposta = curl_exec($ch);
	curl_close($ch);

	//$resposta = json_decode($resposta);

	//echo "<script type='text/javascript'> alert('".$resposta->Retorno."'); </script >";
}


?>