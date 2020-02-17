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
    <link rel="stylesheet" type="text/css" href="../assets/css/painel.css">
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
          <img src="../assets/img/abstract1.jpg" width="100%">
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

<!-- Contéudo do Mensagem Cliente-->
<div class="content">
  <div class="row">
      <div class="col s12 l10 offset-l1 m5 ajuste">
            <h5 class="center">Depoimentos dos Alunos</h5>

            <div class="card">
              <div class="card-tabs">
                <ul class="tabs tabs-fixed-width">
                  <li class="tab"><a class="active" href="#test4">Depoimentos aprovados</a></li>
                  <li class="tab"><a href="#test5">Por serem aprovados<span class="new badge" data-badge-caption="">4</span></a></li>
                </ul>
              </div>
              <div class="card-content">

                <!-- Todos depoimentos-->
                <div id="test4">
                  <div class="row">

                    <!-- Listas de depoimento clientes-->
                    <div class="col s12 l6 grey lighten-4">
                      <ul class="collection">
                          <li class="collection-item avatar">
                            <img src="assets/img/gaming2.jpg" alt="" class="circle">
                            <span class="title">Garcia Tandela</span>
                            <p>Curso: Informática de Gestão<br> 
                               Status: Aluno activo
                            </p>
                            <br>
                            <p class="truncate">One common flaw we've seen in many frameworks is a lack of support for truly responsive text. While elements on the page resize fluidly, text still resizes on a fixed basis. To ameliorate this problem, for text heavy pages, we've created a class that fluidly scales text size and line-height to optimize readability for the user. Line length stays between 45-80 characters and line height scales to be larger on smaller screens.</p>
                            <a href="#modal1" class="secondary-content modal-trigger tooltipped" data-position="bottom" data-tooltip="Apagar depoimento"><i class="material-icons">delete</i></a>
                          </li>
                          <li class="collection-item avatar">
                            <img src="assets/img/gaming2.jpg" alt="" class="circle">
                            <span class="title">Garcia Tandela</span>
                            <p>Curso: Informática de Gestão<br> 
                               Status: Aluno activo
                            </p>
                            <br>
                            <p class="truncate">One common flaw we've seen in many frameworks is a lack of support for truly responsive text. While elements on the page resize fluidly, text still resizes on a fixed basis. To ameliorate this problem, for text heavy pages, we've created a class that fluidly scales text size and line-height to optimize readability for the user. Line length stays between 45-80 characters and line height scales to be larger on smaller screens.</p>
                            <a href="#modal1" class="secondary-content tooltipped" data-position="bottom" data-tooltip="Apagar depoimento"><i class="material-icons">delete</i></a>
                          </li>
                          <li class="collection-item avatar">
                            <img src="assets/img/gaming2.jpg" alt="" class="circle">
                            <span class="title">Garcia Tandela</span>
                            <p>Curso: Informática de Gestão<br> 
                               Status: Aluno activo
                            </p>
                            <br>
                            <p class="truncate">One common flaw we've seen in many frameworks is a lack of support for truly responsive text. While elements on the page resize fluidly, text still resizes on a fixed basis. To ameliorate this problem, for text heavy pages, we've created a class that fluidly scales text size and line-height to optimize readability for the user. Line length stays between 45-80 characters and line height scales to be larger on smaller screens.</p>
                            <a href="#modal1" class="secondary-content modal-trigger tooltipped" data-position="bottom" data-tooltip="Apagar depoimento"><i class="material-icons">delete</i></a>
                          </li>
                      </ul>
                      <!-- Modal Structure -->
                      <div id="modal1" class="modal">
                        <div class="modal-content">
                          <h4>Informação!</h4>
                          <p>Depoimento apagado com êxito.</p>
                        </div>
                        <div class="modal-footer">
                          <a href="#!" class="modal-close waves-effect waves-green btn-flat">OK</a>
                        </div>
                      </div>
                    </div>

                    <!-- Visualização de mensagens -->
                    <div class="col s12 l6 white">
                      <div class="">
                        <span class="title">Nome: Garcia Tandela</span>
                            <p>Curso: Informática de Gestão<br>
                               Ano: 3º<br>
                               Status: Aluno activo
                            </p>
                            <br>
                            <p>One common flaw we've seen in many frameworks is a lack of support for truly responsive text. While elements on the page resize fluidly, text still resizes on a fixed basis. To ameliorate this problem, for text heavy pages, we've created a class that fluidly scales text size and line-height to optimize readability for the user. Line length stays between 45-80 characters and line height scales to be larger on smaller screens.</p>
                      </div>
                    </div>

                  </div>

                </div>

                <!-- Depoimentos por serem aprovados-->
                <div id="test5">
                  <div class="row">

                    <!-- Listas de depoimentos por serem aprovados -->
                    <div class="col s12 l6 grey lighten-4">
                      <ul class="collection">
                          <li class="collection-item avatar">
                            <img src="assets/img/gaming2.jpg" alt="" class="circle">
                            <span class="title">Garcia Tandela</span>
                            <p>Curso: Informática de Gestão<br>
                               Estado: Aluno activo
                            </p>
                            <br>
                            <p class="truncate">One common flaw we've seen in many frameworks is a lack of support for truly responsive text. While elements on the page resize fluidly, text still resizes on a fixed basis. To ameliorate this problem, for text heavy pages, we've created a class that fluidly scales text size and line-height to optimize readability for the user. Line length stays between 45-80 characters and line height scales to be larger on smaller screens.</p>
                            <a href="#modal2" class="secondary-content tooltipped modal-trigger" data-position="bottom" data-tooltip="Marcar como aprovada"><i class="material-icons">done</i></a>
                          </li>
                          <li class="collection-item avatar">
                            <img src="assets/img/gaming2.jpg" alt="" class="circle">
                            <span class="title">Garcia Tandela</span>
                            <p>Curso: Informática de Gestão<br> 
                               Estado: Ex Aluno
                            </p>
                            <br>
                            <p class="truncate">One common flaw we've seen in many frameworks is a lack of support for truly responsive text. While elements on the page resize fluidly, text still resizes on a fixed basis. To ameliorate this problem, for text heavy pages, we've created a class that fluidly scales text size and line-height to optimize readability for the user. Line length stays between 45-80 characters and line height scales to be larger on smaller screens.</p>
                            <a href="#modal2" class="secondary-content tooltipped modal-trigger" data-position="bottom" data-tooltip="Marcar como aprovada"><i class="material-icons">done</i></a>
                          </li>
                          <li class="collection-item avatar">
                            <img src="assets/img/gaming2.jpg" alt="" class="circle">
                            <span class="title">Garcia Tandela</span>
                            <p>Curso: Informática de Gestão<br> 
                               Estado: Aluno activo
                            </p>
                            <br>
                            <p class="truncate">One common flaw we've seen in many frameworks is a lack of support for truly responsive text. While elements on the page resize fluidly, text still resizes on a fixed basis. To ameliorate this problem, for text heavy pages, we've created a class that fluidly scales text size and line-height to optimize readability for the user. Line length stays between 45-80 characters and line height scales to be larger on smaller screens.</p>
                            <a href="#modal2" class="secondary-content tooltipped modal-trigger" data-position="bottom" data-tooltip="Marcar como aprovada"><i class="material-icons">done</i></a>
                          </li>
                      </ul>
                      <!-- Modal Structure -->
                      <div id="modal2" class="modal">
                        <div class="modal-content">
                          <h4>Informação!</h4>
                          <p>Depoimento aprovado com êxito.</p>
                        </div>
                        <div class="modal-footer">
                          <a href="#!" class="modal-close waves-effect waves-green btn-flat">OK</a>
                        </div>
                      </div>

                    </div>

                    <!-- Visualização de depoimentos por serem aprovados -->
                    <div class="col s12 l6">
                      <div class="center">
                        <h6>Depoimento não seleccionado</h6>
                      </div>
                    </div>
                    
                  </div>

                </div>

              </div>
            </div>

      </div>
  </div>
</div>
 
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script type="text/javascript" src="../assets/js/painel.js"></script>
</body>
</html>