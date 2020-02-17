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
      <h5 style="text-transform: uppercase;">Licenciatura em Gestão Comercial e Marketing</h5> 
  </div>
  <div class="center" style="margin-top: 50px; margin-bottom: 50px;">
    <img class="circle" src="../../assets/img/messani.jpg" style="width: 120px; height: 120px; border: 3px solid teal;">
    <h5>Carlos Messani</h5>
    <p>Decano da FCSDH</p>
  </div>
  <!-- Conteúdo -->
  <div>

    <div>
      <h5 class="center-align">Regime de Admissão</h5>
      <blockquote>Através do Curso de Acesso à UGS ou  por Exame às disciplinas de: Português + Matemática.</blockquote>  
    </div>

    <div>
      <h5 class="center-align">Saídas Profissionais</h5>
      <blockquote>As principais saídas profissionais dos licenciados em Gestão Comercial e Marketing pela Universidade Gregório Semedo são:
      <br><br>
      Direcção de empresas comerciais grossistas, retalhistas, de importação e de distribuição;<br>
      Direcção ou chefia de serviços comerciais, de marketing e de publicidade nas empresas;<br>
      Exercício de funções técnicas no domínio da importação, transporte, distribuição e comercialização de bens transaccionáveis;<br>
      Exercício de funções técnicas no estudo e análise de mercados, no posicionamento estratégico de produtos, na elaboração e gestão de campanhas publicitárias de marketing e outras.

      </blockquote>  
    </div>

    <div>
      <h5 class="center-align">Apresentação</h5>
      <blockquote>
        A Licenciatura em Gestão Comercial e Marketing começou a ser ministrada pela UGS – Universidade Gregório Semedo – e licenciou os seus primeiros profissionais em 2008, sendo de assinalar a resposta muito positiva do mercado de trabalho, que absorveu os novos graduados com ofertas salariais e de enquadramento operacional bastante apelativas.
        <br><br>
        A rápida expansão do número de estabelecimentos e de redes comerciais existentes em todo o País, tem levado a uma maior sofisticação da actividade comercial, com uma clara separação entre o comércio grossista e o comércio retalhista, a práticas generalizadas de posicionamento comercial estratégico e ao aparecimento de parcerias estratégicas entre as empresas que operam neste sector.
      </blockquote>  
    </div>
    
    <div>
      <h5 class="center-align">Objectivos</h5>
      <blockquote>
        É objectivo da Licenciatura em Gestão Comercial e Marketing ministrada pela UGS, a formação de profissionais detentores de: forte sensibilidade e sólida formação no plano mais amplo da Gestão, nomeadamente da Gestão Comercial, nas vertentes quantitativa, comportamental e da resolução de problemas; conhecimentos específicos nos domínios estratégico e operacional do Marketing; competências nas áreas da gestão empresarial, nomeadamente nos domínios da contabilidade, da gestão financeira e da estratégia empresarial, com que irão ser confrontados quando no exercício da sua actividade empresarial.
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
                <td>Língua Inglesa I (anual)</td>
                <td>1º Semestre</td>
              </tr>
              <tr>
                <td>Introdução à Gestão de Empresas</td>
                <td>1º Semestre</td>
              </tr>
              <tr>
                <td>Metodologia da Investigação Científica</td>
                <td>1º Semestre</td>
              </tr>
              <tr>
                <td>Introdução à Informática</td>
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
                <td>Língua Inglesa I (anual)</td>
                <td>2º Semestre</td>
              </tr>
              <tr>
                <td>Introdução ao Marketing</td>
                <td>2º Semestre</td>
              </tr>
              <tr>
                <td>Gestão de Recursos Humanos</td>
                <td>2º Semestre</td>
              </tr>
              <tr>
                <td>Atelier de Comunicação Digital</td>
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
                <td>Língua Inglesa II (anual)</td>
                <td>1º Semestre</td>
              </tr>
              <tr>
                <td>Comportamento Humano e Processos Organizacionais</td>
                <td>1º Semestre</td>
              </tr>
              <tr>
                <td>Introdução à Economia</td>
                <td>1º Semestre</td>
              </tr>
              <tr>
                <td>Gestão Integrada da Comunicação</td>
                <td>1º Semestre</td>
              </tr>
              <tr>
                <td>Gestão Comercial</td>
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
                <td>Língua Inglesa II (anual)</td>
                <td>2º Semestre</td>
              </tr>
              <tr>
                <td>Fundamentos de Matemática</td>
                <td>2º Semestre</td>
              </tr>
              <tr>
                <td>Direito Comercial e do Consumidor</td>
                <td>2º Semestre</td>
              </tr>
              <tr>
                <td>Negociação e Vendas</td>
                <td>2º Semestre</td>
              </tr>
              <tr>
                <td>Estratégia Empresarial</td>
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
                <td>Marketing Estratégico</td>
                <td>1º Semestre</td>
              </tr>
              <tr>
                <td>Concepção e Gestão da Publicidade</td>
                <td>1º Semestre</td>
              </tr>
              <tr>
                <td>Comportamento de Compra</td>
                <td>1º Semestre</td>
              </tr>
              <tr>
                <td>Fundamentos de Estatística</td>
                <td>1º Semestre</td>
              </tr>
              <tr>
                <td>Gestão do Preço e do Produto</td>
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
                <td>Planeamento de Marketing</td>
                <td>2º Semestre</td>
              </tr>
              <tr>
                <td>Fundamentos de Contabilidade</td>
                <td>2º Semestre</td>
              </tr>
              <tr>
                <td>Estudos de Mercados</td>
                <td>2º Semestre</td>
              </tr>
              <tr>
                <td>Logística e Distribuição I</td>
                <td>2º Semestre</td>
              </tr>
              <tr>
                <td>Marketing Directo e Web Marketing</td>
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
                <td>Fundamentos de Finanças</td>
                <td>1º Semestre</td>
              </tr>
              <tr>
                <td>Marketing Relacional, CRM e Datamining</td>
                <td>1º Semestre</td>
              </tr>
              <tr>
                <td>Comércio Internacional</td>
                <td>1º Semestre</td>
              </tr>
              <tr>
                <td>Gestão da Força de Vendasl</td>
                <td>1º Semestre</td>
              </tr>
              <tr>
                <td>Logística e Distribuição II</td>
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
                <td>Marketing Internacional</td>
                <td>2º Semestre</td>
              </tr>
              <tr>
                <td>Marketing B2B e Marketing de Serviços</td>
                <td>2º Semestre</td>
              </tr>
              <tr>
                <td>Gestão dos Transportes</td>
                <td>2º Semestre</td>
              </tr>
              <tr>
                <td>Gestão da Marca</td>
                <td>2º Semestre</td>
              </tr>
              <tr>
                <td>Trabalho de Conclusão de Curso</td>
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