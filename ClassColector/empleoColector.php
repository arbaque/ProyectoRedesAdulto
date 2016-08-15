<?php

equire_once("../Colector/colector.php");

class empleoColector
{

	private $modelo;
	
	public function __construct()
	{
	}

	this.modelo = new colector;
	
	public Function Fct_ListarEmpleo()
	{
		try
		{
			$result= $this->modelo->Listar("empleos");
                       
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	
	public Function Fct_ConsEmpleo()
	{
		try
		{
			
		}
			catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	
	public Function Fct_IngresoEmpleo($ObEmpleo)
	{
		try
		{
			$result = $this->modelo->operacion("insert into empleos (pkEmpleo, pkPersona, empleo, ciudad, desde, hasta, actualmente, estado) "
			, " values (:pkEmpleo, :pkPersona, :empleo, :ciudad, :desde, :hasta, :actualmente)", array (":pkEmpleo"=>$ObEmpleo=>getpkEmpleo()
			, ":pkPersona"=>$ObEmpleo=>getpkPersona()
			, ":empleo"=>$ObEmpleo=>getEmpleo()
			, ":ciudad"=>$ObEmpleo=>getCiudad()
			, ":desde"=>$ObEmpleo=>getDesde()
			, ":hasta"=>$ObEmpleo=>getHasta()
			, ":actualmente"=>$ObEmpleo=>getActualmente()
			, ":estado"=>$ObEmpleo=>getEstado())) ;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
		
	}
	
	
	public function Fct_ActualizarEmpleo($ObEmpleo)
	{
		try
		{
			$result = $this->modelo->operacion("update empleos set empleo = :empleo, ciudad = :ciudad, desde = :desde, hasta =:hasta, actualmente = :actualmente, estado = :estado
									,  where pkComentario = :pkComentario", array (":empleo"=>$ObEmpleo=>getEmpleo()
									,":ciudad" => $ObEmpleo=>getCiudad()
									,":desde" => $ObEmpleo=>getDesde()
									,":hasta" => $ObEmpleo=>getHasta()
									,":actualmente" => $ObEmpleo=>getActualmente()
									, ":estado" =>$ObEmpleo=>getEstado()
									, ":pkComentario" =>$ObEmpleo=>getpkEmpleo() ))
			
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	
	public function Fct_EliminarComentario($ObEmpleo)
	{
		try
		{
			$result = $this->modelo->operacion("update empleo set estado = 'ELI'
									,  where pkEmpleo = :pkEmpleo", array (":pkEmpleo" =>$ObEmpleo=>getpkEmpleo() ))
			
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
		
	}
	
	
	
	
}

?>