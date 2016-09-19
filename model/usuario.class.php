<?php

require_once "db.class.php";

class Usuario extends Database {

	function usuario($usuario=NULL){
		$this->conectar();		
		$query = $this->consulta("SELECT * FROM usuario WHERE nombre_usuario='$usuario'");
 	    $this->disconnect();					
		if($this->numero_de_filas($query) > 0) 
		{		
				while ( $tsArray = $this->fetch_assoc($query) ) 
					$data[] = $tsArray;			
		
				return $data;
		}else
		{	
			return '';
		}			
	}

	function insertar($nombreusuario, $password, $email, $equipo){

		$this->conectar();	
			echo "Conectado <br>";
		$sentencia = "INSERT INTO usuario(nombre_usuario,pass,email,equipo) VALUES ('$nombreusuario', '$password' '$email', '$equipo')";	
		echo $sentencia;
		if($this->consulta($sentencia)){
			$this->disconnect();	
			return true;
		}else{
			$this->disconnect();
			echo "No se ha podido realizar la consulta";
			
			return false;
		}
	}	
 	
 	function entrar($nombreusuario, $password){

 		$this->conectar();

 		$query = $this->consulta("SELECT nombre_usuario, pass FROM usuario WHERE nombre_usuario='$nombreusuario' AND pass='$password'");
 	    
 	    $this->disconnect();					
		if($this->numero_de_filas($query) > 0)
		{		
				return true;
		}else
		{	
			return false;
		}		

 	}    
 	    				
	
}

?>