<?php

class comentario{
	
	private $pkComentario;
	private $pkPersona;
	private $Pkpost;
	private $comentario;
	private $fechaComentario;
	private $estado;
	
	function __construct(){
		
	}
	
	
	public function getpkComentario(){
		return $this ->pkComentario;
	} 
	
	public function setpkComentario($pkComentario){
		$this->pkComentario = $pkComentario;
	}

	public function getpkPersona(){
		return $this ->pkPersona;
	} 
	
	public function setpkPersona($pkPersona){
		$this->pkPersona = $pkPersona;
	}
	
	public function getPkpost(){
		return $this ->Pkpost;
	} 
	
	public function setPkpost($Pkpost){
		$this->Pkpost = $Pkpost;
	}
	
	public function getComentario(){
		return $this ->comentario;
	} 
	
	public function setComentario($comentario){
		$this->comentario = $comentario;
	}
	
	public function getFechaComentario(){
		return $this ->fechaComentario;
	} 
	
	public function setFechaComentario($fechaComentario){
		$this->fechaComentario = $fechaComentario;
	}
	
	public function getEstado(){
		return $this ->estado;
	} 
	
	public function setEstado($estado){
		$this->estado = $estado;
	}
	
	
	
}

?>