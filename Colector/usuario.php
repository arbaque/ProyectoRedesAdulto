<?php
class usuario{
	private $pkUsuario;
	private $pkTipoUsuario;
	private $pkPersona;	
	private $alias;
	private $clave;
	
	function __construct(){
		
	}

	public function getpkUsuario(){
		return $this ->pkUsuario;
	} 
	
	public function setpkUsuario($pkUsuario){
		$this->pkUsuario = $pkUsuario;
	}

	public function getpkTipoUsuario(){
		return $this ->pkTipoUsuario;
	} 
	
	public function setpkTipoUsuario($pkTipoUsuario){
		$this->pkTipoUsuario = $pkTipoUsuario;
	}

	public function getpkPersona(){
		return $this ->pkPersona;
	} 
	
	public function setpkPersona($pkPersona){
		$this->pkPersona = $pkPersona;
	}
	
	public function getAlias(){
		return $this ->alias;
	} 
	
	public function setAlias($alias){
		$this->alias = $alias;
	}
	
	public function getClave(){
		return $this ->Clave;
	} 
	
	public function setClave($clave){
		$this->clave = $clave;
	}

}
?>