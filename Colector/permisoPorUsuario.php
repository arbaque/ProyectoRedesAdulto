<?php
class permisoPorUsuario{
	private $pkPermiso;
	private $pkUsuario;
	private $estado;

	function __construct(){
		
	}
	
	public function getpkPermiso(){
		return $this ->pkPermiso;
	} 
	
	public function setpkPermiso($pkPermiso){
		$this->pkPermiso = $pkPermiso;
	}

	public function getpkUsuario(){
		return $this ->pkUsuario;
	} 
	
	public function setpkUsuario($pkUsuario){
		$this->pkUsuario = $pkUsuario;
	}

	public function getEstado(){
		return $this ->estado;
	} 
	
	public function setEstado($estado){
		$this->estado = $estado;
	}

}
?>