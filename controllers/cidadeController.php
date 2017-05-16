<?php
class cidadeController extends controller {
	public function index(){
		
		$cidade = new cidade();

		$dados = array();
		$dados['lista'] = $cidade->getRestCidades();

		$this->loadTemplate('cidade',$dados);
	}

	public function adicionar(){
		
		if(isset($_POST['salvar'])) {
			$add = new cidade();

			$add->setNome(addslashes($_POST['nome']));
			$add->setGeocodigo(addslashes($_POST['geocodigo']));
			$add->setLatitude(addslashes($_POST['latitude']));
			$add->setLongitude(addslashes($_POST['longitude']));

			$add->addCidade();
			echo "<script type='text/javascript'> window.location.href='../cidade'; </script >";
		}
	}
}