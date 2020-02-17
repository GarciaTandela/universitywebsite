<?php

//Verifica se o usuário já se encontra logado
session_start();

if (isset($_SESSION["numLogin"])) 
{
  
  header("Location:administrador/painel.php");
  
}
else
{


}

?>


<!DOCTYPE html>
<html lang="pt">
<head>
	<title>Universidade Gregório Semedo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/admin.css">
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="icon" href="img/icon.png">
	  <meta name="robots" content="index, follow">
    <meta name="author" content="Yannick Silva">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>  
    <meta charset="utf-8">          
</head>
<body>

<!-- Formulário de Login -->
  <section id="contact" class="section">
    <div class="container central">
      <div class="row">
        <div class="col s12 l6 offset-l3 wow fadeInDown" data-wow-duration="2s" data-wow-delay="1s">
          <div class=" center">
            <a href="#!" class="center"><img class="responsive-img logo" src="assets/img/ugs.png"></a>
          </div>
          <div class="card-panel white wow fadeInRight" data-wow-duration="2s" data-wow-delay="1s">
            <h5 class="center">Fazer login</h5>
            <form action="processamento/admin.php" method="POST">
              <div class="input-field">
                <i class="material-icons prefix">email</i>
                <input type="email" placeholder="Email" name="Email" required>
              </div>
              <div class="input-field">
                <i class="material-icons prefix">lock</i>
                <input type="password" placeholder="Senha" name="Senha" required>
              </div>
              <a href="" class="right black-text esqueci">Esqueci a senha</a>
              <input type="submit" value="Entrar" class="btn btn-large btn-extend b ">
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>




<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script type="text/javascript" src="assets/js/wow.min.js"></script>
<script type="text/javascript" src="assets/js/admin.js"></script>
<script>
	new WOW().init();
</script>
</body>
</html>