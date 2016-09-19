<?php

header("Content-Type: text/html;charset=utf-8");
require_once "db.class.php";

class Noticia extends Database {
 	    				
		 function Categorias($categorias){
		 	$this->conectar();	
		 	//$sentencia = $this->consulta("SELECT id_genero FROM generos WHERE genero='$generos'");
		 	$mysqli = mysqli_connect("localhost","root","root","pokemon");
		 	$sql = ("SELECT id_categoria FROM noticia WHERE genero='$generos'");
		 	$result = mysqli_query($mysqli, $sql);
		 	$resultarr = mysqli_fetch_assoc($result);
		 	$id = (int) $resultarr;
		 	var_dump($resultarr);
			return $resultarr["id_genero"];	
		 }


		} 
?>




