<!DOCTYPE html>
<html lang="pt">
<head>
	<title>Universidade Gregório Semedo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="icon" href="img/icon.png">
    <meta name="description" content="Universidade Gregório Semedo, é uma melhores existentes em Angola e que tem formado muitos quadros ao longo dos anos em diversas áreas de actuação.">
	<meta name="keywords" content="Universidade, Ensino Superior, Cursos Ensino Superior">
	<meta name="robots" content="index, follow">
	<meta name="author" content="Yannick Silva">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>  
    <meta charset="utf-8">          
</head>
<body style="background-color: white;">

<!-- HEADER -->
<nav>
      <div class="nav-wrapper white">
        <div class="">
            <a href="#" class="brand-logo header "><img class="responsive-img logo" src="../assets/img/ugs.png"></a>
            <!-- Menu mobile-->
          <a href="#" data-target="mobile-demo" class="sidenav-trigger black-text"><i class="material-icons">menu</i></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
              <li><a href="../index.php" class="black-text">Página Inicial</a></li>
              <li><a class="dropdown-trigger black-text" href="#!" data-target="universidade">A Universidade<i class="material-icons right">arrow_drop_down</i></a></li>
              <li><a class="dropdown-trigger black-text" href="#!" data-target="academica">Informações Acadêmicas<i class="material-icons right">arrow_drop_down</i></a></li>
              <li><a class="dropdown-trigger black-text" href="#!" data-target="oferta">Ofertas Formativa<i class="material-icons right">arrow_drop_down</i></a></li>
              <li><a class="dropdown-trigger black-text" href="#!" data-target="estudantil">Informações e Serviços Estudantil<i class="material-icons right">arrow_drop_down</i></a></li>
          </ul>
        </div>
        
      </div>
</nav>

    <!-- Menu da parte mobile-->
    <ul class="sidenav collapsible" id="mobile-demo">

      <li>
        <div class="collapsible-header"><a href="../index.php" class="black-text">Página Inicial</a></div>
      </li>

      <li>
        <div class="collapsible-header">A Universidade</div>
        <div class="collapsible-body">
          <ul>
            <li><a href="../universidade/historiaemissao.php" class="black-text">História e Missão</a></li>
            <li><a href="../universidade/mensagemreitor.php" class="black-text">Mensagem do Reitor</a></li>
            <li><a href="../universidade/campus.php" class="black-text">Campus da UGS</a></li>
            <li><a href="../universidade/video.php" class="black-text">Video Institucional</a></li>
            <li><a href="../assets/Organograma_UGS_.pdf" download="Organograma_UGS_.pdf" class="black-text">Organograma</a></li>
          </ul>  
        </div>
      </li>

      <li>
        <div class="collapsible-header">Informações Acadêmicas</div>
        <div class="collapsible-body">
          <ul>
            <li><a class="dropdown-cand black-text" href="../infoacademica/candidatura.php" data-target="candidatura">Candidaturas</a></li>
          </ul>
        </div>
      </li>

      <li>
        <div class="collapsible-header">Ofertas Formativa</div>
        <div class="collapsible-body">
          <ul>
            <li><a href="../ofertaformativa/especializacao.php" class="black-text">Cursos de Especialização</a></li>
            <li><a href="../ofertaformativa/licenciatura.php" class="black-text">Cursos de Licenciatura</a></li>
            <li><a href="../ofertaformativa/mestrado.php" class="black-text">Cursos de Mestrado</a></li>
            <li><a href="../ofertaformativa/acesso.php" class="black-text">Curso de Acesso</a></li>
          </ul>
        </div>
      </li>

      <li>
        <div class="collapsible-header">Informações e Serviços Estudantil</div>
        <div class="collapsible-body">
          <ul>
            <li><a href="#!" class="black-text">Associação de Estudantes</a></li>
            <li><a href="#!" class="black-text">Avisos e Comunicados</a></li>
            <li><a href="#!" class="black-text">Notícias e Eventos</a></li>
            <li><a href="#!" class="black-text">Depoimento de Alunos</a></li>
            <li><a href="#!" class="black-text">Calendário Escolar</a></li>
          </ul>
        </div>
      </li>

    </ul>
    <!-- -->

    <!-- Dropdown da Universidade -->
  <ul id="universidade" class="dropdown-content">
    <li><a href="../universidade/historiaemissao.php" class="black-text">História e Missão</a></li>
    <li><a href="../universidade/mensagemreitor.php" class="black-text">Mensagem do Reitor</a></li>
    <li><a href="../universidade/campus.php" class="black-text">Campus da UGS</a></li>
    <li><a href="../universidade/video.php" class="black-text">Video Institucional</a></li>
    <li><a href="../assets/Organograma_UGS_.pdf" download="Organograma_UGS_.pdf" class="black-text">Organograma</a></li>
  </ul>

  <!-- Dropdown da Informações Acadêmicas -->
  <ul id="academica" class="dropdown-content">
    <li><a class="dropdown-cand black-text" href="../infoacademica/candidatura.php" data-target="candidatura">Candidaturas</a></li>
  </ul>

  <!-- Dropdown da Oferta Formativa-->
  <ul id="oferta" class="dropdown-content">
    <li><a href="especializacao.php" class="black-text">Cursos de Pôs-Graduação ou Especialização</a></li>
    <li><a href="licenciatura.php" class="black-text">Cursos de Licenciatura</a></li>
    <li><a href="mestrado.php" class="black-text">Cursos de Mestrado</a></li>
    <li><a href="acesso.php" class="black-text">Curso de Acesso ao Ensino Superior</a></li>
  </ul>

  <!-- Dropdown da Informações e Serviços Estudantil -->
  <ul id="estudantil" class="dropdown-content">
    <li><a href="#!" class="black-text">Associação de Estudantes</a></li>
    <li><a href="#!" class="black-text">Avisos e Comunicados</a></li>
    <li><a href="#!" class="black-text">Notícias e Eventos</a></li>
    <li><a href="#!" class="black-text">Depoimento de Alunos</a></li>
    <li><a href="#!" class="black-text">Calendário Escolar</a></li>
  </ul>
<!-- -->

<!-- Section Escolher a UGS-->
<div class="section" style="padding-bottom: 68px;">
    <div class="center-align">
        <h5 style="text-transform: uppercase;">Cursos de Especialização/Pôs-Graduação</h5> 
    </div>
    <!-- Row 1 -->
    <div class="row container">

        <div class="col s12 m6 l6">

          <table class="highlight">
                <thead class="blue white-text">
                  <tr class="">
                      <th><h6 style="text-transform: uppercase;">Faculdade de Ciências Económicas e Empresariais</h6></th>
                  </tr>
                </thead>

                <tbody>
                  <tr>
                    <td style="cursor: pointer;"><a href="especializacao/contabilidade.php" class="black-text">Contabilidade e Finanças Empresariais</a></td>
                  </tr>
                </tbody>
          </table>

            

        </div>

        <div class="col s12 m6 l6">
            
            <table class="highlight">
                <thead class="blue white-text">
                  <tr>
                      <th><h6 style="text-transform: uppercase;">Faculdade de Ciências Sociais e do Desenvolvimento Humano</h6></th>
                  </tr>
                </thead>

                <tbody>
                  <tr>
                    <td style="cursor: pointer;"><a href="especializacao/marketing.php
                      " class="black-text">Marketing e Publicidade</a></td>
                  </tr>
                  <tr>
                    <td style="cursor: pointer;"><a href="especializacao/vendas.php" class="black-text">Gestão Comercial e Vendas</a></td>
                  </tr>
                  <tr>
                    <td style="cursor: pointer;"><a href="especializacao/humanos.php" class="black-text">Gestão Aplicada de Recursos Humanos</a></td>
                  </tr>
                </tbody>
             </table>

        </div>

    </div>

    <!-- Row 2 -->
    <div class="row container">

        <div class="col s12 m6 l6">
            
             <table class="highlight center">
                <thead class="blue white-text">
                  <tr>
                      <th><h6 style="text-transform: uppercase;">Faculdade de Engenharia e Novas Tecnologias</h6></th>
                  </tr>
                </thead>

                <tbody>
                  <tr>
                    <td style="cursor: pointer;"><a href="especializacao/eletronica.php" class="black-text">Electrónica e Sistemas Digitais</a></td>
                  </tr>
                  <tr>
                    <td style="cursor: pointer;"><a href="especializacao/redes.php" class="black-text">Administração de Redes de Computadores</a></td>
                  </tr>
                  <tr>
                    <td style="cursor: pointer;"><a href="especializacao/web.php" class="black-text">Desenvolvimento para Web e Dispositivos Móveis</a></td>
                  </tr>
                </tbody>
             </table>

        </div>
        
    </div>
    
</div>

<!-- Footer -->
<footer class="page-footer cyan darken-3">
          <div class="container">
            <div class="row">
              <div class="col l12 s12 center">
                <a href=""><i class="fa fa-facebook small white-text"></i></a>
        <a href=""><i class="fa fa-whatsapp small white-text"></i></a>
        <a href=""><i class="fa fa-google small white-text"></i></a>
        <a href=""><i class="fa fa-instagram small white-text"></i></a>
        <a href=""><i class="fa fa-envelope small white-text"></i></a>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container white-text center">
            Copyright © Garcia Tandela 2019. Todos os direitos reservados.
            </div>
          </div>
</footer>




<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
crossorigin="anonymous"></script>
<script src="https://use.fontawesome.com/76eb4f9ef1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script type="text/javascript" src="../assets/js/ugs.js"></script>
</body>
</html>