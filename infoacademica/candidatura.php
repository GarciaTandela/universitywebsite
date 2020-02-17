<!DOCTYPE html>
<html lang="pt">
<head>
	<title>Universidade Gregório Semedo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link  href="https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/animate.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="icon" href="img/icon.png">
    <meta name="description" content="Universidade Gregório Semedo, é uma melhores existentes em Angola e que tem formado muitos quadros ao longo dos anos em diversas áreas de actuação.">
  	<meta name="keywords" content="Universidade, Ensino Superior, Cursos Ensino Superior">
  	<meta name="robots" content="index, follow">
  	<meta name="author" content="Yannick Silva">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>  
    <meta charset="utf-8">          
    <style type="text/css">
      table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
    </style>
</head>
<body style="background-color: white;">

<!-- HEADER -->
<nav>
      <div class="nav-wrapper white">
        <div class="">
            <a href="../index.php" class="brand-logo header "><img class="responsive-img logo" src="../assets/img/ugs.png"></a>
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
    <li><a href="../ofertaformativa/especializacao.php" class="black-text">Cursos de Pôs-Graduação ou Especialização</a></li>
    <li><a href="../ofertaformativa/licenciatura.php" class="black-text">Cursos de Licenciatura</a></li>
    <li><a href="../ofertaformativa/mestrado.php" class="black-text">Cursos de Mestrado</a></li>
    <li><a href="../ofertaformativa/acesso.php" class="black-text">Curso de Acesso ao Ensino Superior</a></li>
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

<!-- Candidatura -->
<section class="section">

  <!-- Licenciatura -->
  <div class="container">

    <div class="center-align">
      <h5 style="text-transform: uppercase;">Candidatura para Licenciatura</h5> 
    </div>

    <div class="row">

      <!-- Alunos Novos -->
      <div class="col s12 l12">

        <table class="highlight">
          <thead>
            <tr class="blue white-text">
                <th style="text-transform: uppercase;" colspan="2"><h6 class="center-align">Candidatura para alunos novos</h6></th>
            </tr>
          </thead>

          <thead>
            <tr class="blue white-text">
                <th><h6 class="center-align">Preço</h6></th>
                <th><h6 class="center-align">Observação</h6></th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td>Inscrição - 12.500 KZ</td>
              <td>O Valor a ser pago pela inscrição apenas dá-te acesso ao exame de admissão.</td>
            </tr>
            <tr>
              <td>Matrícula - 17.500 KZ</td>
              <td>A matrícula é efectuada somente uma vez durante o ano lectivo.</td>
            </tr>
            <tr>
              <td>Propina - 32.200 KZ</td>
              <td>Este valor é aplicável a todos os cursos de licenciatura, sendo que o mesmo é pago até 10 Meses.</td>
            </tr>
          </tbody>

          <thead>
            <tr class="blue white-text">
                <th><h6 class="center-align">Documentos</h6></th>
                <th><h6 class="center-align">Observação</h6></th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td>2 Fotos tipo passe</td>
              <td>As fotos a serem entregues no acto da matrícula devem ser recentes.</td>
            </tr>
            <tr>
              <td>Certificado Original, Autenticado ou Declaração da Escola</td>
              <td>A Declaração da Escola possui um prazo de validade de até 1 ano e apôs isso deve ser entregue o Certificado Original ou Autenticado.</td>
            </tr>
            <tr>
              <td>Recenseamento Militar ou Declaração Militar (Para os homens)</td>
              <td>A entrega do recenseamento militar deve ser entregue apenas por aqueles que já completaram os seus 18 anos de idade.</td>
            </tr>
            <tr>
              <td>Atestado Médico</td>
              <td></td>
            </tr>
            <tr>
              <td>Cópia do Bilhete de Identidade</td>
              <td></td>
            </tr>
          </tbody>

        </table>

      </div>
      <!-- -->

    </div>

    <div class="row">

      <!-- Alunos Antigos -->
      <div class="col s12 l12">
        <table class="highlight">
          <thead>
            <tr class="blue white-text">
                <th style="text-transform: uppercase;" colspan="2"><h6 class="center-align">Reconfirmação da matrícula</h6></th>
            </tr>
          </thead>

          <thead>
            <tr class="blue white-text">
                <th><h6 class="center-align">Preço</h6></th>
                <th><h6 class="center-align">Observação</h6></th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td>Matrícula - 12.500 KZ</td>
              <td>A matrícula é efectuada somente uma vez durante o ano lectivo.</td>
            </tr>
            <tr>
              <td>Propina - 32.200 KZ</td>
              <td>Este valor é aplicável a todos os cursos de licenciatura, sendo que o mesmo é pago até 10 Meses.</td>
            </tr>
          </tbody>

          <thead>
            <tr class="blue white-text">
                <th><h6 class="center-align">Documentos</h6></th>
                <th><h6 class="center-align">Observação</h6></th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td>2 Fotos tipo passe</td>
              <td>As fotos a serem entregues no acto da reconfirmação devem ser recentes.</td>
            </tr>
            <tr>
              <td>Cópia do Bilhete de Identidade</td>
              <td></td>
            </tr>
            <tr>
              <td>Atestado Médico</td>
              <td></td>
            </tr>
          </tbody>

        </table>
  
      </div>
      <!-- -->  

    </div>

  </div>

  <!-- Mestrado -->
  <div class="container" style="margin-top: 70px;">

    <div class="center-align">
      <h5 style="text-transform: uppercase;">Candidatura para Mestrado</h5> 
    </div>

    <div class="row">

      <!-- Alunos Novos -->
      <div class="col s12 l12">

        <table class="highlight">
          <thead>
            <tr class="teal white-text">
                <th style="text-transform: uppercase;" colspan="2"><h6 class="center-align">Candidatura para alunos novos</h6></th>
            </tr>
          </thead>

          <thead>
            <tr class="teal white-text">
                <th><h6 class="center-align">Preço</h6></th>
                <th><h6 class="center-align">Observação</h6></th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td>Inscrição - 45.000 KZ</td>
              <td></td>
            </tr>
            <tr>
              <td>Matrícula - 60.000 KZ</td>
              <td>A matrícula é efectuada somente uma vez durante o ano lectivo.</td>
            </tr>
            <tr>
              <td>Propina - 55.000 KZ</td>
              <td>Este valor é aplicável a todos os cursos de mestrado, sendo que o mesmo é pago até 8 Meses.</td>
            </tr>
          </tbody>

          <thead>
            <tr class="teal white-text">
                <th><h6 class="center-align">Documentos</h6></th>
                <th><h6 class="center-align">Observação</h6></th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td>2 Fotos tipo passe</td>
              <td>As fotos a serem entregues no acto da matrícula devem ser recentes.</td>
            </tr>
            <tr>
              <td>Certificado Original ou Autenticado reconhecido pelo INAAREES</td>
              <td></td>
            </tr>
            <tr>
              <td>Recenseamento Militar ou Declaração Militar (Para os homens)</td>
              <td></td>
            </tr>
            <tr>
              <td>Atestado Médico</td>
              <td></td>
            </tr>
            <tr>
              <td>Cópia do Bilhete de Identidade</td>
              <td></td>
            </tr>
          </tbody>

        </table>

      </div>
      <!-- -->

    </div>

    <div class="row">

      <!-- Alunos Antigos -->
      <div class="col s12 l12">
        <table class="highlight">
          <thead>
            <tr class="teal white-text">
                <th style="text-transform: uppercase;" colspan="2"><h6 class="center-align">Reconfirmação da matrícula</h6></th>
            </tr>
          </thead>

          <thead>
            <tr class="teal white-text">
                <th><h6 class="center-align">Preço</h6></th>
                <th><h6 class="center-align">Observação</h6></th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td>Matrícula - 60.000 KZ</td>
              <td>A matrícula é efectuada somente uma vez durante o ano lectivo.</td>
            </tr>
            <tr>
              <td>Propina - 55.000 KZ</td>
              <td>Este valor é aplicável a todos os cursos de mestrado, sendo que o mesmo é pago até 8 Meses.</td>
            </tr>
          </tbody>

          <thead>
            <tr class="teal white-text">
                <th><h6 class="center-align">Documentos</h6></th>
                <th><h6 class="center-align">Observação</h6></th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td>2 Fotos tipo passe</td>
              <td>As fotos a serem entregues no acto da reconfirmação devem ser recentes.</td>
            </tr>
            <tr>
              <td>Cópia do Bilhete de Identidade</td>
              <td></td>
            </tr>
            <tr>
              <td>Atestado Médico</td>
              <td></td>
            </tr>
          </tbody>

        </table>
  
      </div>
      <!-- -->  

    </div>

  </div>

  <!-- Especialização -->
  <div class="container" style="margin-top: 70px;">

    <div class="center-align">
      <h5 style="text-transform: uppercase;">Candidatura para Especialização</h5> 
    </div>

    <div class="row">

      <!-- Alunos Novos -->
      <div class="col s12 l12">

        <table class="highlight">
          <thead>
            <tr class="blue-grey white-text">
                <th style="text-transform: uppercase;" colspan="2"><h6 class="center-align">Candidatura para alunos novos</h6></th>
            </tr>
          </thead>

          <thead>
            <tr class="blue-grey white-text">
                <th><h6 class="center-align">Preço</h6></th>
                <th><h6 class="center-align">Observação</h6></th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td>Matrícula - 12.500 KZ</td>
              <td>A matrícula é efectuada somente uma vez durante o ano lectivo.</td>
            </tr>
            <tr>
              <td>Propina - 30.000 KZ</td>
              <td>Este valor é aplicável a todos os cursos de especialização, sendo que o mesmo é pago até 8 Meses.</td>
            </tr>
          </tbody>

          <thead>
            <tr class="blue-grey white-text">
                <th><h6 class="center-align">Documentos</h6></th>
                <th><h6 class="center-align">Observação</h6></th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td>2 Fotos tipo passe</td>
              <td>As fotos a serem entregues no acto da matrícula devem ser recentes.</td>
            </tr>
            <tr>
              <td>Certificado Original ou Autenticado do ensino secundário</td>
              <td></td>
            </tr>
            <tr>
              <td>Atestado Médico</td>
              <td></td>
            </tr>
            <tr>
              <td>Cópia do Bilhete de Identidade</td>
              <td></td>
            </tr>
          </tbody>

        </table>

      </div>
      <!-- -->

    </div>

    <div class="row">

      <!-- Alunos Antigos -->
      <div class="col s12 l12">
        <table class="highlight">
          <thead>
            <tr class="blue-grey white-text">
                <th style="text-transform: uppercase;" colspan="2"><h6 class="center-align">Reconfirmação da matrícula</h6></th>
            </tr>
          </thead>

          <thead>
            <tr class="blue-grey white-text">
                <th><h6 class="center-align">Preço</h6></th>
                <th><h6 class="center-align">Observação</h6></th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td>Matrícula - 12.500 KZ</td>
              <td>A matrícula é efectuada somente uma vez durante o ano lectivo.</td>
            </tr>
            <tr>
              <td>Propina - 55.000 KZ</td>
              <td>Este valor é aplicável a todos os cursos de especialização, sendo que o mesmo é pago até 8 Meses.</td>
            </tr>
          </tbody>

          <thead>
            <tr class="blue-grey white-text">
                <th><h6 class="center-align">Documentos</h6></th>
                <th><h6 class="center-align">Observação</h6></th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td>2 Fotos tipo passe</td>
              <td>As fotos a serem entregues no acto da reconfirmação devem ser recentes.</td>
            </tr>
            <tr>
              <td>Cópia do Bilhete de Identidade</td>
              <td></td>
            </tr>
            <tr>
              <td>Atestado Médico</td>
              <td></td>
            </tr>
          </tbody>

        </table>
  
      </div>
      <!-- -->  

    </div>

  </div>



</section>

<!-- -->


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