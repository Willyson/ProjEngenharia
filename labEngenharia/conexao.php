<?php

class ConexaoMySQL{


	public function Conectar(){
	
	try	
	{
		$con = new PDO("mysql:host=localhost;dbname=dbbuscaend", "root", "root"); 

		return $con;
	}
	catch(PDOException $ex)
	{
		echo 'Erro'.$ex->getMessage();
	}
	
	}


}

