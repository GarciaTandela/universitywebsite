<?php

session_start();

if (isset($_SESSION["numLogin"])) 
{

	session_destroy();
	
	header("Location:../admin.php");
}
else
{

	echo "Não funcionou o logout";

}

?>