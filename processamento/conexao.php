<?php

function conectar(){

try {

	$Pdo= new PDO("mysql:host=localhost;dbname=ugs","root","");

} catch (PDOException $e) {

	echo $e->getMessage();
	
}

return $Pdo;



}


?>