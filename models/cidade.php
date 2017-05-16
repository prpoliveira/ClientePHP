<?php

class cidade {
	
	private $nome;
	private $geocodigo;
	private $latitude;
	private $longitude;
	private $cidadeA;
	private $cidadeB;

	public function getRestCidades(){

		$arr = file_get_contents('http://localhost:8080/cidades');  

		$arr = json_decode($arr); 

		return $arr;
	}

	public function addCidade(){
		
		$post_array = array(
			'nome' => $this->nome,
			'geocodigo' => $this->geocodigo,
			'latitude' => $this->latitude,
			'longitude' => $this->longitude
		);

		$json = json_encode( $post_array );

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "http://localhost:8080/cidades/novo");
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json','Content-Length: ' . strlen($json)));
		curl_setopt($ch, CURLOPT_RETURNTRANSFER,false);
		$resposta = curl_exec($ch);
		curl_close($ch);

	}

	public function getFrete(){
		
		$frete = file_get_contents("http://localhost:8080/cidades/calculo/".$this->cidadeA."/".$this->cidadeB.""); 
		$frete = json_decode($frete);

		return $frete;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function setNome($nome){
		$this->nome = $nome;
	}

	public function setGeocodigo($geocodigo){
		$this->geocodigo = $geocodigo;
	}

	public function setLatitude($latitude){
		$this->latitude = $latitude;
	}

	public function setLongitude($longitude){
		$this->longitude = $longitude;
	}

	public function setCidadeA($cidA){
		$this->cidadeA = $cidA;
	}

	public function setCidadeB($cidB){
		$this->cidadeB = $cidB;
	}

	public function getId(){
		return $this->id;
	}

	public function getNome(){
		return $this->nome;
	}

	public function getGeocodigo(){
		return $this->geocodigo;
	}

	public function getLatitude(){
		return $this->latitude;
	}

	public function getLongitude(){
		return $this->longitude;
	}

	public function getCidadeA(){
		return $this->cidadeA;
	}

	public function getCidadeB(){
		return $this->cidadeB;
	}
}