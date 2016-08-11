<?php

require_once("colector.php");
class demoColector
{
 
 private $modelo;
 public function __construct()
 {
 
 //en $this->con tenemos la conexión con la bd pruebas

 $this->modelo = new colector();
 
 
 }
 
  
 //obtenemos usuarios de una tabla con postgreSql
public function ListarDEMO()
	{
		try
		{
		    $result= $this->modelo->Listar("demo");
                       
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
 
 
 public function InsertDEMO()
 {
 try
		{
		    $result= $this->modelo->operacion("insert into demo (id_demo, nombre) values (1,dd);");
                       
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
 }
 
 public function UpdateDEMO()
 {
 try
		{
		    $result= $this->modelo->operacion("update demo set  where id_demo = 1");
                       
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
 }
 
 public function DeleteDEMO()
 {
 try
		{
		     $result= $this->modelo->operacion("delete from demo where id_demo = 2");
                       
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
 }
 
 
 
}
 ?>
