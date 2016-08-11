<?php

require_once("../Colector/colector.php");
class demoColector
{
 
 private $modelo;
 public function __construct()
 {
 
 //en $this->con tenemos la conexión con la bd pruebas

 $this->modelo = new colector();
 
 
 }
 
  
 //obtenemos usuarios de una tabla con postgreSql
public function Listarpersona()
	{
		try
		{
		    $result= $this->modelo->Listar("persona");
                       
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
 
 
 public function Insertpersona($ObGenero)
 {
 try
		{
		     $result= $this->modelo->operacion("INSERT INTO persona (nombres, apellidos,fechaNacimiento,correo,telefono,genero) values (:nombres, :apellidos, :fechaNacimiento, :correo, :telefono, :genero)",array(":descripcion"=>$ObGenero=> $get_nombres(),":apellidos" => $ObGenero=> $get_apellidos(),":apellidos" => $ObGenero=> $get_apellidos()
,":fechaNacimiento" => $ObGenero=> $get_fechaNacimiento()
,":correo" => $ObGenero=> $get_correo()
,":telefono" => $ObGenero=> $get_telefono()
,":genero" => $ObGenero=> $get_genero()));
                       
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
 }
 
 public function Updatepersona($ObGenero)
 {
 try
		{

$result= $this->modelo->operacion("update persona set nombres = :nombres , apellidos =:apellidos,fechaNacimiento = :fechaNacimiento,correo = :correo,telefono = :telefono ,genero = :genero where pkPersona = :pkPersona)",array(":descripcion"=>$ObGenero=> $get_nombres(),":apellidos" => $ObGenero=> $get_apellidos(),":apellidos" => $ObGenero=> $get_apellidos()
,":fechaNacimiento" => $ObGenero=> $get_fechaNacimiento()
,":correo" => $ObGenero=> $get_correo()
,":telefono" => $ObGenero=> $get_telefono()
,":genero" => $ObGenero=> $get_genero()
,":pkPersona" => $ObGenero=> $get_genero()));
		 
                       
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
 }
 
 public function Deletepersona($ObGenero)
 {
 try
		{
		      $result= $this->modelo->operacion("delete from persona  where pkPersona = :pkPersona)",array(":pkPersona" => $ObGenero=> $get_genero()));
                       
			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
 }
 
 
 
}
 ?>
