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
			$result = $this->modelo->operacion("insert into post (pkPersona, post, fechaPost, imagen, tipo, tipoImagen, estado) "
			, " values (:pkPersona, :post, :fechaPost, :imagen, :tipo, :tipoImagen, :estado)", array (":pkPersona"=>$ObPost=>getpkPersona()
			, ":post"=>$ObPost=>getPost()
			, ":fechaPost"=>$ObPost=>getfechaPost()
			, ":imagen"=>$ObPost=>getImagen()
			, ":tipo"=>$ObPost=>getTipoPost()
			, ":tipoImagen"=>$ObPost=>getTipoImagen()
			, ":estado"=>$ObPost=>getEstado())) ;
			
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	
	
	public function Fct_ActualizarPost($ObPost)
	{
		try
		{
			$result = $this->modelo->operacion("update post set post = :post, estado = :estado
									,  where pkPost = :pkPost", array (":post"=>$ObPost=> getPost()
									, ":estado" =>$ObPost=>getEstado()
									, ":pkPost" =>$ObPost=>getpkPost() ))
			
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	
	public function Fct_EliminarPost($ObPost)
	{
		try
		{
			$result = $this->modelo->operacion("update post set estado = 'ELI'
									,  where pkPost = :pkPost", array (":pkPost" =>$ObPost=>getpkPost() ))
			
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
		
	}
}
?>