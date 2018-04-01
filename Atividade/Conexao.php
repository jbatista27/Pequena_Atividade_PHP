<?php
class Conexao{
	private $con;
	public function getCon(){
		return $this->con;
	}
	public function setCon($data){
		$this->con = $data;
	}
	public function __construct($end, $usuario, $nomeBanco){
		try{
			// Endereço da Conexão
			$servidor = $end;
			$usr = $usuario;
			$pwd = "";
			$bd = $nomeBanco;
			$this->setCon(new PDO("mysql:host=$servidor;dbname=$bd",$usr,$pwd));
			$this->getCon()->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); // Erros em exceções
		}catch(PDOException $ex){
			echo "{$ex->getMessage()}";
		}	
	}
}
?>
