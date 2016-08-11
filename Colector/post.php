<?php
class post{

	private $pkPost;
	private $pkPersona;
	private $post;
	Private $fechaPost;
	private $imagen;
	Private $tipoPost;
	Private $tipoImagen;
	
	function __construct(){
		
	}
		
	public function getpkPost(){
		return $this ->pkPost;
	} 
	
	public function setpkPost($pkPost){
		$this->pkPost = $pkPost;
	}
	
	public function getpkPersona() {  
     return $this->pkPersona;  
    }  
    
	public function setpkPersona($pkPersona) {  
     $this->pkPersona = $pkPersona;  
    }  
	
	public function getPost(){
		return $this->post;
	}
	
	public function setPost($post){
		$this->post = $post;
	}
	
	public function getfechaPost(){
		return $this->fechaPost;
	}
	
	public function setPost($fechaPost){
		$this->fechaPost = $fechaPost;
	}

	public function getImagen(){
		return $this->imagen;
	}
	
	public function setImagen($imagen){
		$this->imagen = $imagen;
	}
	
	public function getTipoPost(){
		return $this->tipoPost;
	}
	
	public function setTipoPost($tipoPost){
		$this->tipoPost = $tipoPost;
	}
	
	public function getTipoImagen(){
		return $this->tipoImagen;
	}
	
	public function setTipoImagen($tipoImagen){
		$this->tipoImagen = $tipoImagen;
	}
	
	
}
?>