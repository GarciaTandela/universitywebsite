<?php

class Cliente
{

	function cadastrarCliente($nome,$apelido,$telemovel,$mensagem)
	{

		include 'conexao.php';
		$status = "Não visualizada";
		$Pdo=conectar();

		$cadastrarCliente=$Pdo->prepare("Insert into cliente(Primeiro_Nome,Ultimo_Nome,Telemovel,Mensagem,Status) values(:Nome,:Apelido,:Telemovel,:Mensagem,:Status)");

		$cadastrarCliente->bindValue(":Nome",$nome);
		$cadastrarCliente->bindValue(":Apelido",$apelido);
		$cadastrarCliente->bindValue(":Telemovel",$telemovel);
		$cadastrarCliente->bindValue(":Mensagem",$mensagem);
		$cadastrarCliente->bindValue(":Status",$status);

		$cadastrarCliente->execute();

		if (isset($cadastrarCliente)) 
		{

			//header("Location:listar.php");
			echo "A sua mensagem foi enviada, entraremos em contacto o mais breve possível.";

		}
		else
		{

			echo "Mensagem não enviada, por favor tente novamente.";
		}

	}

	// Irá fazer contagem das mensagens não lidas
	function contarMensagem()
	{
		include 'conexao.php';
		$Pdo=conectar();

		$Status = "Não visualizada";
		$contarMensagem = $Pdo->prepare("Select count(*) as Mensagem from cliente where Status=:status");
		$contarMensagem->bindValue(":status",$Status);

		$contarMensagem->execute();

		if ($contarMensagem->rowCount()>0) 
		{
			
			while ($linha=$contarMensagem->fetch(PDO::FETCH_ASSOC)) 
			{
	
				$Mensagem = $linha["Mensagem"];

				echo $Mensagem;
			}

		}
		else
		{
			echo "100";
		}

	}

	//Listagem de clientes
	function listarCliente()
	{
		include 'conexao.php';
		$Pdo=conectar();

		$listarCliente = $Pdo->prepare("Select *from cliente");

		$listarCliente->execute();

		if ($listarCliente->rowCount()>0) 
		{
			
			while ($linha=$listarCliente->fetch(PDO::FETCH_ASSOC)) 
			{
	
				$Nome = $linha["Primeiro_Nome"]." ".$linha["Ultimo_Nome"];
				$Status = $linha["Status"];

				if ($Status == "Não visualizada") 
				{
					echo "

						<li class='collection-item avatar ' id='teste'>

                            <img src='../assets/img/gaming2.jpg' class='circle'>
                            <span class='title' id='Name'>$Nome</span>
                            <p id='Telemovel'>Contacto: $linha[Telemovel]<br>
                               <p id='Estado'>Status: $Status</p>
                            </p>
                            <br>
                            <p class='truncate' id='Mess'>$linha[Mensagem]</p>
                            <a href='#' class='secondary-content tooltipped' data-position='bottom' data-tooltip='Marcar como lida'><i class='material-icons'>star_border</i></a>

                        </li>


					";
				}
				else
				{
					echo "

						<li class='collection-item avatar '>

                            <img src='../assets/img/gaming2.jpg' class='circle'>
                            <span class='title' id='Name'>$Nome</span>
                            <p id='Telemovel'>Contacto: $linha[Telemovel]<br>
                               <p id='Estado'>Status: $Status</p>
                            </p>
                            <br>
                            <p class='truncate' id='Mess'>$linha[Mensagem]</p>
                            <a href='#modal1' class='secondary-content tooltipped modal-trigger' data-position='bottom' data-tooltip='Apagar mensagem'><i class='material-icons'>delete</i></a>

                        </li>


					";

				}

				
				
			}

		}
		else
		{
			echo "100";
		}

	}

}

$Cliente = new Cliente();

if (isset($_POST["Mensagem"])) 
{
	$Primeiro_Nome = $_POST["Nome"];
	$Ultimo_Nome = $_POST["Apelido"];	
	$Telemovel = $_POST["Telemovel"];
	$Mensagem = $_POST["Mensagem"];
	
	$Cliente->cadastrarCliente($Primeiro_Nome,$Ultimo_Nome,$Telemovel,$Mensagem);
}
else if(isset($_GET["primeiro"]))
{
	$Cliente->listarCliente();
}
else
{
	$Cliente->contarMensagem();
}

?>