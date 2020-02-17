<?php

//Verifca se o usuário encontra-se logado
session_start();

if (isset($_SESSION["numLogin"])) 
{
  
}
else
{

  header("Location:../admin.php");

}

?>

<!DOCTYPE html>
<html lang="pt">
<head>
	<title>Universidade Gregório Semedo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/css/admin.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="icon" href="img/icon.png">
	  <meta name="robots" content="index, follow">
    <meta name="author" content="Yannick Silva">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>  
    <meta charset="utf-8">          
</head>
<body>

<!-- Dashboard -->
<nav class="white hide-on-large-only">
  <div class="nav wrapper">
    <div class="container">
      <a href="" class="brand-logo center black-text"> Sds</a>
      <a href="" class="button-collapse show-on-large" data-activates="sidenav"><i class="material-icons black-text">menu</i></a>
    </div>
  </div>
</nav>

<?php 

  //Recolha dos dados do usuário
  $Id = $_SESSION["id"];
  include '../processamento/conexao.php';

    $Pdo=conectar();

    $User = $Pdo->prepare("Select Primeiro_Nome,Ultimo_Nome,Email,Foto,Genero from administrador where IdAdministrador=:id");
    $User->bindValue(":id",$Id);

    $User->execute();

    if ($User->rowCount()>0) 
    {

      while ($linha=$User->fetch(PDO::FETCH_ASSOC)) 
      {
  
        $Nome = $linha["Primeiro_Nome"];
        $Apelido = $linha["Ultimo_Nome"];
        $Email = $linha["Email"];
        $Foto = $linha["Foto"];
        $Genero = $linha["Genero"];

        if($Foto == "" && $Genero == "Masculino") 
        {
          $Foto = "../assets/img/male.png";
        }
        else if ($Foto == "" && $Genero == "Feminino") 
        {
          $Foto = "../assets/img/female.png";
        }
        else
        {
          $dir = "../assets/img/".$Foto;
        }

      }

    }
    
?>
<ul class="sidenav sidenav-fixed blue darken-3" id="slide-out">
    <li>
      <div class="user-view">
        <div class="background">
          <a href="#"><img src="../assets/img/abstract1.jpg" width="100%"></a>
        </div>
        <?php  echo'<img  src="'.$Foto.'" width="100%" class="circle"/>';   ?> 
        <a href="#" class="white-text name"><?php echo $Nome." ".$Apelido; ?></a>
        <a href="#" class="white-text email"><?php echo $Email; ?></a>
      </div>  
    </li>
    <li><a href="painel.php" class="white-text"><i class="material-icons white-text">home</i>Página Inicial</a></li>
    <li><a href="cliente.php" class="white-text"><i class="material-icons white-text">people</i><span class="new badge" data-badge-caption="Mensagens" id="Conta"></span>Clientes</a></li>
    <li><a href="aluno.php" class="white-text"><i class="material-icons white-text">mail</i><span class="new badge" data-badge-caption="Mensagens">4</span>Alunos</a></li>
    <li><a href="prof.php" class="white-text"><i class="material-icons white-text">face</i>Info dos Professores</a></li>
    <li><a href="noticia.php" class="white-text"><i class="material-icons white-text">local_activity</i>Notícias/Eventos</a></li>
    <li><a href="aviso.php" class="white-text"><i class="material-icons white-text">info</i>Avisos/Comunicados</a></li>
    <li><a href="calendario.php" class="white-text"><i class="material-icons white-text">calendar_today</i>Calendário Escolar</a></li>
    <li><a href="configuracao.php" class="white-text"><i class="material-icons white-text">edit</i>Configurações</a></li>
    <li><a href="../processamento/sair.php" class="white-text"><i class="material-icons white-text">exit_to_app</i>Sair</a></li>
</ul>
<!-- Finished Dashboard -->

<!-- Contéudo do Home-->
<div class="content">
  <div class="row">
      <div class="col s12 l5 offset-l4 m5">
            <div class=" center" style="margin-top: 270px;">
              <a href="#!" class="center"><img class="responsive-img logo" src="../assets/img/ugs.png"></a>
            </div>
            <h5 class="center">Bemvindo <?php echo $Nome." ".$Apelido; ?></h5>
      </div>
  </div>
</div>
 
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script type="text/javascript" src="../assets/js/admin.js"></script>
<script type="text/javascript" src="../assets/js/painel.js"></script>
</body>
</html>