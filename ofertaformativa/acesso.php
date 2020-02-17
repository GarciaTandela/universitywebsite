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

<!-- Section Mestrado-->
<div class="section container" style="margin-top: 10px;">
    <div class="center-align">
        <h5 style="text-transform: uppercase;">Curso de Acesso ao Ensino Superior</h5> 
    </div>

    <div class="row">
      <div class="col s12 m12 l12">
          <h6><b>O que é o Curso de Acesso ao Ensino Superior ?</b></h6>
          <blockquote>
            <p>O curso de acesso é um preparatório que tem como principal objectivo preparar os candidatos para fase de ingresso no ensino superior. O curso preparatório da UGS tem a duração de 6 semanas, compreendidas nos meses de Janeiro e Fevereiro, para dar aos candidatos inscritos formação no domínio das matérias que serão objecto de avaliação.</p>
          </blockquote>
      </div>  
    </div>

    <div class="row">
      <div class="col s12 m12 l12">
          <h6><b>A quem é dirigido?</b></h6>
          <blockquote>
            <p>O curso de acesso é dirigido a todos aqueles que tenham concluído o ensino médio e pretendam candidatar-se a uma vaga no 1.º ano de qualquer um dos cursos de licenciatura oferecidos pela UGS.</p>
          </blockquote>
      </div>  
    </div>

    <div class="row">
      <div class="col s12 m12 l12">
          <h6><b>E que vantagem tem?</b></h6>
          <blockquote>
            <p>Na UGS, o curso de acesso tem a vantagem de decorrer ao mesmo tempo em dois períodos, diurno e pós-laboral. Em 2019 há uma novidade: UGS vantagens+, que oferece a todos os candidatos admitidos via curso de acesso um seminário sobre «Gestão de tempo e organização de estudo» e «isenção total de pagamento de candidatura». O curso de acesso foi concebido para ser uma primeira experiência de integração e contacto com a filosofia pedagógica e axiológica da UGS como instituição de ensino superior, que  se traduzirá num passo certo para o sucesso na vida académica.</p>
          </blockquote>
      </div>  
    </div>

    <div class="row">
      <div class="col s12 m12 l12">
          <h6><b>Quando terminam as inscrições?</b></h6>
          <blockquote>
            <p>As inscrições no curso de acesso estão abertas desde Outubro de 2019 e terminam no início de Janeiro de 2020.</p>
            <p>Documentos necessários para a inscrição no curso de acesso:
              <ul>
                <li>Cópia do bilhete de identidade.</li>
                <li>Formuário de Inscrição (consulte a secretária)</li>
              </ul>
            </p>
          </blockquote>
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