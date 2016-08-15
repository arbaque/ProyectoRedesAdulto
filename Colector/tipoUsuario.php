<?php
class tipoUsuario{
	private $pkTipoUsuario;
	private $descripcion;
	private $estado;

	function __construct(){
		
	}
	
	public function getpkTipoUsuario(){
		return $this ->pkTipoUsuario;
	} 
	
	public function setpkTipoUsuario($pkTipoUsuario){
		$this->pkTipoUsuario = $pkTipoUsuario;
	}

	public function getDescripcion(){
		return $this ->descripcion;
	} 
	
	public function setDescripcion($descripcion){
		$this->descripcion = $descripcion;
	}

	public function getEstado(){
		return $this ->estado;
	} 
	
	public function setEstado($estado){
		$this->estado = $estado;
	}

}
?>