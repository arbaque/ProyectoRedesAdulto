<?php

require_once("../Colector/colector.php");

class postColector
{
	private $modelo;
	
	public function __construct()
	{
	}
	
	this.modelo = new colector;
	
	
	public Function Fct_ListarPost()
	{
		try
		{
			$result= $this->modelo->Listar("post");
                       
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	
	public function Fct_IngresoPost($ObPost){
		try
		{
			$result = $this->modelo->operacion("insert into post (pkPersona, post, fechaPost, imagen, tipo, tipoImagen) "
			, " values (:pkPersona, :post, :fechaPost, :imagen, :tipo, :tipoImagen)", array (":pkPersona"=>$ObPost=>getpkPersona()
			, ":post"=>$ObPost=>getPost()
			, ":fechaPost"=>$ObPost=>getfechaPost()
			, ":imagen"=>$ObPost=>getImagen()
			, ":tipo"=>$ObPost=>getTipoPost()
			, ":tipoImagen"=>$ObPost=>getTipoImagen())) ;
			
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	
	
	
	public function Fct_ActualizarPost()
	{
		try
		{
			
			
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	
	public function Fct_EliminarPost()
	{
		try
		{
			
			
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
		
	}
}
?>