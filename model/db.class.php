<?php

class Database {

 private $conexion;
  
  public function getConexion(){
  	return $this->conexion;
  }

	public function conectar()
	{
		if(!isset($this->conexion))
		{
		  $this->conexion = (mysqli_connect("localhost","root","root","pokemon")); 		  
		}
	}	

	public function consulta($sql){

		$resultado = mysqli_query($this->conexion,$sql);
		echo mysqli_error($this->conexion);	
  		return $resultado; 
	}
	
	function numero_de_filas($result){
		
		return mysqli_num_rows($result);
	}
	
	function fetch_assoc($result){
		
			return mysqli_fetch_assoc($result);
	}
		
	public function disconnect()
	{
		mysqli_close($this->conexion);
	}
	
}
?>