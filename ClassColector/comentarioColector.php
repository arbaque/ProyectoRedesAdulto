<?php

require_once("../Colector/colector.php");

class comentarioColector
{

	private $modelo;
	
	public function __construct()
	{
	}

	this.modelo = new colector;
	
	
	public Function Fct_ListarComentario()
	{
		try
		{
			$result= $this->modelo->Listar("comentarioPost");
                       
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	
	public Function Fct_ConsComentario
	{
		try
		{
			
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	
	
	public Function Fct_IngresoComentario($ObComentario)
	{
		try
		{
			$result = $this->modelo->operacion("insert into comentarioPost (pkComentario, pkPersona, pkpost, comentario, fechacomentario, estado) "
			, " values (:pkComentario, :pkPersona, :pkPost, :comentario, :fechaComentario, :estado)", array (":pkComentario"=>$ObComentario=>getpkComentario()
			, ":pkPersona"=>$ObComentario=>getpkPersona()
			, ":pkPost"=>$ObComentario=>getPkpost()
			, ":comentario"=>$ObComentario=>getComentario()
			, ":fechaComentario"=>$ObComentario=>getFechaComentario()
			, ":estado"=>$ObComentario=>getEstado())) ;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
		
	}
	
	public function Fct_ActualizarComentario($ObComentario)
	{
		try
		{
			$result = $this->modelo->operacion("update comentarioPost set comentario = :comentario , estado = :estado
									,  where pkComentario = :pkComentario", array (":comentario"=>$ObComentario=> getComentario()
									, ":estado" =>$ObComentario=>getEstado()
									, ":pkComentario" =>$ObComentario=>getpkComentario() ))
			
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	
	public function Fct_EliminarComentario($ObComentario)
	{
		try
		{
			$result = $this->modelo->operacion("update comentarioPost set estado = 'ELI'
									,  where pkComentario = :pkComentario", array (":pkComentario" =>$ObComentario=>getpkComentario() ))
			
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
		
	}
	
	
	
}

?>