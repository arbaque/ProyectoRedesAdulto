<?php


class empleo 
{
	private $pkEmpleo;
	private $pkPersona;
	private $empleo;
	private $ciudad;
	private $desde;
	private $hasta;
	private $actualmente;
	private $estado;
	
	function __construct(){
		
	}
	
	
	public function getpkEmpleo(){
		return $this ->pkEmpleo;
	} 
	
	public function setpkEmpleo($pkEmpleo){
		$this->pkEmpleo = $pkEmpleo;
	}
	
	public function getpkPersona(){
		return $this ->pkPersona;
	} 
	
	public function setpkPersona($pkPersona){
		$this->pkPersona = $pkPersona;
	}
	
	public function getEmpleo(){
		return $this ->empleo;
	} 
	
	public function setEmpleo($empleo){
		$this->empleo = $empleo;
	}

	public function getCiudad(){
		return $this ->ciudad;
	}
	
	public function setCiudad($ciudad){
		$this ->ciudad= $ciudad;
	}
	
	public function getDesde(){
		return $this ->desde;
	}
	
	public function setDesde($desde){
		$this ->desde= $desde;
	}
	
	public function getHasta(){
		return $this ->hasta;
	}
	
	public function setHasta($hasta){
		$this ->hasta= $hasta;
	}
		
	public function getActualmente(){
		return $this ->actualmente;
	}
	
	public function setActualmente($actualmente){
		$this ->actualmente= $actualmente;
	}
	
	public function getEstado(){
		return $this ->estado;
	}
	
	public function setEstado($estado){
		$this ->estado= $estado;
	}
	
}

?>