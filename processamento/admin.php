<?php

$Email=$_POST['Email'];

$Senha=$_POST['Senha'];

class Admin  
{
	
	function loginUser($Email,$Senha)
	{

		include 'conexao.php';
		$Pdo=conectar();

		
		$loginUser = $Pdo->prepare("Select IdAdministrador from administrador where Email=:email and Senha=:senha");
		$loginUser->bindValue(":email",$Email);
		$loginUser->bindValue(":senha",$Senha);

		$loginUser->execute();

		if ($loginUser->rowCount()>0) 
		{
			$chave1="abcdefghijklmnopqrstuvwxyz";
			$chave2="ABCDEFGHIJKLMNOPQRSTUVWXYZ";
			$chave3="0123456789";
			$chave=str_shuffle($chave1.$chave2.$chave3);
			$tam=strlen($chave);
			$num="";
			$id="";
			$qtde=rand(20,50);

			for ($i=0; $i<$qtde;$i++) 
			{ 
				
				$pos=rand(0,$tam);

				$num.=substr($chave,$pos,1);


			}

			while ($linha=$loginUser->fetch(PDO::FETCH_ASSOC)) 
			{
	
				$id = $linha["IdAdministrador"];

			}

			session_start();

			$_SESSION["numLogin"]=$num;
			$_SESSION["id"]=$id;
			
			header("Location:../administrador/painel.php");

		}
		else
		{
			echo "Email ou senha incorrecta, por favor tente novamente.";
		}

	}

}

$User = new Admin();

if (isset($_POST["Email"]) && isset($_POST["Senha"])) 
{
	$User->loginUser($Email,$Senha);
}
else
{
	echo "Dados não submetidos, submeta-os";
}

?>
