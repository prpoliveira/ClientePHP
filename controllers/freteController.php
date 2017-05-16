<?php
class freteController extends controller {
	public function index(){
		
		$cidade = new cidade();

		$dados = array();
		$dados['lista'] = $cidade->getRestCidades();
		


		$this->loadTemplate('frete', $dados);
	}

	public function calculo(){

		if(isset($_POST['calcula'])){

			$cidade = new cidade();	

			$cidade->setCidadeA(addslashes($_POST['cidadeA']));
			$cidade->setCidadeB(addslashes($_POST['cidadeB']));

			$dados = array(
				'lista' => $cidade->getRestCidades(), 
				'fretao' => $cidade->getFrete()
			);
			
			$this->loadTemplate('frete', $dados);
		
		}
	}

}