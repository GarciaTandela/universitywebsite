<!DOCTYPE html>
<html lang="pt">
<head>
	<title>Universidade Gregório Semedo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../../assets/css/style.css">
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
            <a href="#" class="brand-logo header "><img class="responsive-img logo" src="../../assets/img/ugs.png"></a>
            <!-- Menu mobile-->
          <a href="#" data-target="mobile-demo" class="sidenav-trigger black-text"><i class="material-icons">menu</i></a>
            <ul id="nav-mobile" class="right hide-on-med-and-down">
              <li><a href="../../index.php" class="black-text">Página Inicial</a></li>
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
        <div class="collapsible-header"><a href="../../index.php" class="black-text">Página Inicial</a></div>
      </li>

      <li>
        <div class="collapsible-header">A Universidade</div>
        <div class="collapsible-body">
          <ul>
            <li><a href="../../universidade/historiaemissao.php" class="black-text">História e Missão</a></li>
            <li><a href="../../universidade/mensagemreitor.php" class="black-text">Mensagem do Reitor</a></li>
            <li><a href="../../universidade/campus.php" class="black-text">Campus da UGS</a></li>
            <li><a href="../../universidade/video.php" class="black-text">Video Institucional</a></li>
            <li><a href="../../assets/Organograma_UGS_.pdf" download="Organograma_UGS_.pdf" class="black-text">Organograma</a></li>
          </ul>  
        </div>
      </li>

      <li>
        <div class="collapsible-header">Informações Acadêmicas</div>
        <div class="collapsible-body">
          <ul>
            <li><a class="dropdown-cand black-text" href="../../infoacademica/candidatura.php" data-target="candidatura">Candidaturas</a></li>
          </ul>
        </div>
      </li>

      <li>
        <div class="collapsible-header">Ofertas Formativa</div>
        <div class="collapsible-body">
          <ul>
            <li><a href="../../ofertaformativa/especializacao.php" class="black-text">Cursos de Especialização</a></li>
            <li><a href="../../ofertaformativa/licenciatura.php" class="black-text">Cursos de Licenciatura</a></li>
            <li><a href="../../ofertaformativa/mestrado.php" class="black-text">Cursos de Mestrado</a></li>
            <li><a href="../../ofertaformativa/acesso.php" class="black-text">Curso de Acesso</a></li>
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
    <li><a href="../../universidade/historiaemissao.php" class="black-text">História e Missão</a></li>
    <li><a href="../../universidade/mensagemreitor.php" class="black-text">Mensagem do Reitor</a></li>
    <li><a href="../../universidade/campus.php" class="black-text">Campus da UGS</a></li>
    <li><a href="../../universidade/video.php" class="black-text">Video Institucional</a></li>
    <li><a href="../../assets/Organograma_UGS_.pdf" download="Organograma_UGS_.pdf" class="black-text">Organograma</a></li>
  </ul>

  <!-- Dropdown da Informações Acadêmicas -->
  <ul id="academica" class="dropdown-content">
    <li><a class="dropdown-cand black-text" href="../../infoacademica/candidatura.php" data-target="candidatura">Candidaturas</a></li>
  </ul>

  <!-- Dropdown da Oferta Formativa-->
  <ul id="oferta" class="dropdown-content">
    <li><a href="../especializacao.php" class="black-text">Cursos de Pôs-Graduação ou Especialização</a></li>
    <li><a href="../licenciatura.php" class="black-text">Cursos de Licenciatura</a></li>
    <li><a href="../mestrado.php" class="black-text">Cursos de Mestrado</a></li>
    <li><a href="../acesso.php" class="black-text">Curso de Acesso ao Ensino Superior</a></li>
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
<div class="section container z-depth-0" style="padding-bottom: 68px; margin-top: 15px;">
  <div class="center-align">
      <h5 style="text-transform: uppercase;">Licenciatura em Ciências Política e Administração do Território</h5> 
  </div>
  <div class="center" style="margin-top: 50px; margin-bottom: 50px;">
    <img class="circle" src="../../assets/img/messani.jpg" style="width: 120px; height: 120px; border: 3px solid teal;">
    <h5>Carlos Messani</h5>
    <p>Decano da FCJP</p>
  </div>
  <!-- Conteúdo -->
  <div>

    <div>
      <h5 class="center-align">Regime de Admissão</h5>
      <blockquote >Através do Curso de Acesso à UGS ou por Exame às disciplinas de: Português + História.</blockquote>  
    </div>

    <div>
      <h5 class="center-align">Saídas Profissionais</h5>
      <blockquote>Os licenciados em Ciência Política e Administração do Território poderão exercer actividades num amplo mercado de trabalho, que inclui não apenas os órgãos da Administração Pública, nacionais, regionais/provinciais ou locais, mas igualmente em organizações autónomas e empresas públicas e privadas.<br><br>
                  Entre as funções que constituem saída profissional para os futuros licenciados contam-se:<br><br>
                  Carreira política;<br> 
                  Carreira diplomática;<br> 
                  Quadro da administração pública com responsabilidades políticas, nos diversos níveis da administração do território;<br>
                  Técnico superior e responsável por serviços do estado;<br>
                  Gestor de empresas públicas e privadas. 
                  
      </blockquote>  
    </div>

    <div>
      <h5 class="center-align">Apresentação</h5>
      <blockquote>
        A Licenciatura em Ciência Política e Administração do Território oferecida pela Universidade Gregório Semedo, dá uma formação pluridisciplinar que integra competências no domínio da Ciência Política, da Economia e Gestão Pública, da Administração Pública e do Direito e pretende, no seu domínio, dar respostas qualificadas e sustentáveis, técnica e politicamente, para o enorme esforço de reconstrução e desenvolvimento que Angola hoje enfrenta e que se manterá como “obrigação” estratégica nas próximas décadas. 
      </blockquote>  
    </div>
    
    <div>
      <h5 class="center-align">Objectivos</h5>
      <blockquote>
        O curso tem por objectivo formar profissionais capazes de responder às necessidades e desafios que se colocam actualmente à Administração Pública nas sociedades modernas, preparando quadros com um conhecimento multi e transdisciplinar da realidade angolana, em como dos contextos internacionais em que a mesma se insere, particularmente a SADC e os Países de Língua Oficial Portuguesa. Os novos licenciados poderão integrar as estruturas administrativas, provinciais e municipais, assim como organizações que tenham com a Administração Pública, aos seus vários níveis, relações de grande interdependência e possuirão competências que lhes permitam: definir e implementar políticas sectoriais, ao nível da administração central, regional, provincial e local; intervir nos vários sectores políticos e administrativos da sociedade angolana e internacional, mas também noutras esferas da vida social, política e económica; intervir nos diversos domínios do ordenamento do território e do desenvolvimento económico e social.
      </blockquote>  
    </div>

    <div>
      <h5 class="center-align">Organização</h5>
      <blockquote>
        Com um curriculum científico constituído por um conjunto de cadeiras obrigatórias que espelham a actualidade e a dinâmica das matérias leccionadas, este curso confere ao aluno um conjunto de conhecimentos teóricos onde se leccionam as bases da ciência política e da ciência da administração e da gestão, a par do ensino quer das disciplinas jurídicas que confluem sobre a administração pública quer de matérias de índole técnico-prática ligadas à actividade de gestão da coisa pública – parte das quais será ensinada em regime de seminário, com a participação de profissionais particularmente qualificados e experientes.
        <br><br>
        Com isto, procurar-se-á atingir uma especial interpenetração entre formação teórica e formação técnica e prática, sem prescindir também da formação cultural e humanística geral que um licenciado deve apresentar e que é especialmente importante em quem se vocaciona para o serviço público.    
      </blockquote>  
    </div>

    <div>
      <h5 class="center-align">Planos de Estudo</h5>

      <!-- 1 ano-->
      <div class="row">

        <!-- 1 semestre-->
        <div class="col s12 m6 l6">
          <table class="highlight">
            <thead>
              <tr class="blue white-text">
                  <th>1º Ano</th>
                  <th>Semestre</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td>Técnicas de Comunicação e Expressão (anual)</td>
                <td>1º Semestre</td>
              </tr>
              <tr>
                <td>Metodologia da Investigação Científica (anual)</td>
                <td>1º Semestre</td>
              </tr>
              <tr>
                <td>Economia (anual)</td>
                <td>1º Semestre</td>
              </tr>
              <tr>
                <td>Ciência Política (anual)</td>
                <td>1º Semestre</td>
              </tr>
              <tr>
                <td>Introdução à Informática</td>
                <td>1º Semestre</td>
              </tr>
              <tr>
                <td>Introdução ao Estudo do Direitoa</td>
                <td>1º Semestre</td>
              </tr>
            </tbody>
          </table>  
        </div>

        <!-- 2 semestre-->
        <div class="col s12 m6 l6">
          <table class="highlight">
            <thead>
              <tr class="blue white-text">
                  <th>1º Ano</th>
                  <th>Semestre</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td>Técnicas de Comunicação e Expressão (anual)</td>
                <td>2º Semestre</td>
              </tr>
              <tr>
                <td>Metodologia da Investigação Científica (anual)</td>
                <td>2º Semestre</td>
              </tr>
              <tr>
                <td>Economia (anual)</td>
                <td>2º Semestre</td>
              </tr>
              <tr>
                <td>Ciência Política (anual)</td>
                <td>2º Semestre</td>
              </tr>
              <tr>
                <td>História da Administração Pública e Sistemas de Administração</td>
                <td>2º Semestre</td>
              </tr>
              <tr>
                <td>Direito Constitucional</td>
                <td>2º Semestre</td>
              </tr>
            </tbody>
          </table>  
        </div>
      </div>
      <!-- -->

      <!-- 2 ano-->
      <div class="row">

        <!-- 1 semestre-->
        <div class="col s12 m6 l6">
          <table class="highlight">
            <thead>
              <tr class="blue white-text">
                  <th>2º Ano</th>
                  <th>Semestre</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td>Teoria do Poder (anual)</td>
                <td>1º Semestre</td>
              </tr>
              <tr>
                <td>Ciência da Administração (anual)</td>
                <td>1º Semestre</td>
              </tr>
              <tr>
                <td>Gestão de Recursos Humanos</td>
                <td>1º Semestre</td>
              </tr>
              <tr>
                <td>Introdução à Gestão</td>
                <td>1º Semestre</td>
              </tr>
              <tr>
                <td>Sociologia Geral</td>
                <td>1º Semestre</td>
              </tr>
              <tr>
                <td>Seminário: Urbanismo e Transportes</td>
                <td>1º Semestre</td>
              </tr>
            </tbody>
          </table>  
        </div>

        <!-- 2 semestre-->
        <div class="col s12 m6 l6">
          <table class="highlight">
            <thead>
              <tr class="blue white-text">
                  <th>2º Ano</th>
                  <th>Semestre</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td>Teoria do Poder (anual)</td>
                <td>2º Semestre</td>
              </tr>
              <tr>
                <td>Ciência da Administração (anual)</td>
                <td>2º Semestre</td>
              </tr>
              <tr>
                <td>Relações Internacionais</td>
                <td>2º Semestre</td>
              </tr>
              <tr>
                <td>Geografia Humana</td>
                <td>2º Semestre</td>
              </tr>
              <tr>
                <td>Direito Internacional Público</td>
                <td>2º Semestre</td>
              </tr>
              <tr>
                <td>Finanças Públicas e Direito Financeiro</td>
                <td>2º Semestre</td>
              </tr>
            </tbody>
          </table>  
        </div>
      </div>
      <!-- -->

      <!-- 3 ano-->
      <div class="row">

        <!-- 1 semestre-->
        <div class="col s12 m6 l6">
          <table class="highlight">
            <thead>
              <tr class="blue white-text">
                  <th>3º Ano</th>
                  <th>Semestre</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td>Sociologia Política da Administração Pública (anual)</td>
                <td>1º Semestre</td>
              </tr>
              <tr>
                <td>Direito Administrativo e Fiscal (anual)</td>
                <td>1º Semestre</td>
              </tr>
              <tr>
                <td>Direito da Economia (anual)</td>
                <td>1º Semestre</td>
              </tr>
              <tr>
                <td>Economia Internacional</td>
                <td>1º Semestre</td>
              </tr>
              <tr>
                <td>Contabilidade Geral</td>
                <td>1º Semestre</td>
              </tr>
              <tr>
                <td>Seminário: Ambiente e Saúde Pública</td>
                <td>1º Semestre</td>
              </tr>
            </tbody>
          </table>  
        </div>

        <!-- 2 semestre-->
        <div class="col s12 m6 l6">
          <table class="highlight">
            <thead>
              <tr class="blue white-text">
                  <th>3º Ano</th>
                  <th>Semestre</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td>Sociologia Política da Administração Pública (anual)</td>
                <td>2º Semestre</td>
              </tr>
              <tr>
                <td>Direito Administrativo e Fiscal (anual)</td>
                <td>2º Semestre</td>
              </tr>
              <tr>
                <td>Direito da Economia (anual)</td>
                <td>2º Semestre</td>
              </tr>
              <tr>
                <td>Contabilidade Analítica</td>
                <td>2º Semestre</td>
              </tr>
              <tr>
                <td>Economia do Desenvolvimento</td>
                <td>2º Semestre</td>
              </tr>
              <tr>
                <td>Seminário: Energia e Águas</td>
                <td>2º Semestre</td>
              </tr>
            </tbody>
          </table>  
        </div>
      </div>
      <!-- -->

      <!-- 4 ano-->
      <div class="row">

        <!-- 1 semestre-->
        <div class="col s12 m6 l6">
          <table class="highlight">
            <thead>
              <tr class="blue white-text">
                  <th>4º Ano</th>
                  <th>Semestre</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td>Economia Urbana (anual)</td>
                <td>1º Semestre</td>
              </tr>
              <tr>
                <td>Contabilidade Pública e Auditoria (anual)</td>
                <td>1º Semestre</td>
              </tr>
              <tr>
                <td>Direito da Contratação Pública</td>
                <td>1º Semestre</td>
              </tr>
              <tr>
                <td>Planeamento e Controlo de Gestão</td>
                <td>1º Semestre</td>
              </tr>
              <tr>
                <td>Direito da Função Pública</td>
                <td>1º Semestre</td>
              </tr>
              <tr>
                <td>Seminário: Esgotos, Saneamento Básico e Tratamento de Resíduos</td>
                <td>1º Semestre</td>
              </tr>
            </tbody>
          </table>  
        </div>

        <!-- 2 semestre-->
        <div class="col s12 m6 l6">
          <table class="highlight">
            <thead>
              <tr class="blue white-text">
                  <th>4º Ano</th>
                  <th>Semestre</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td>Economia Urbana (anual)</td>
                <td>2º Semestre</td>
              </tr>
              <tr>
                <td>Contabilidade Pública e Auditoria (anual)</td>
                <td>2º Semestre</td>
              </tr>
              <tr>
                <td>Direito do Urbanismo</td>
                <td>2º Semestre</td>
              </tr>
              <tr>
                <td>Direito da Administração Pública e Autárquica</td>
                <td>2º Semestre</td>
              </tr>
              <tr>
                <td>Comunicação e Marketing Político</td>
                <td>2º Semestre</td>
              </tr>
              <tr>
                <td>Trabalho Final de Curso</td>
                <td>2º Semestre</td>
              </tr>
            </tbody>
          </table>  
        </div>
      </div>
      <!-- -->

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
<script type="text/javascript" src="../../assets/js/ugs.js"></script>
</body>
</html>