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
      <h5 style="text-transform: uppercase;">Licenciatura em Organização e Gestão de Empresas</h5> 
  </div>
  <div class="center" style="margin-top: 50px; margin-bottom: 50px;">
    <img class="circle" src="../../assets/img/messani.jpg" style="width: 120px; height: 120px; border: 3px solid teal;">
    <h5>Carlos Messani</h5>
    <p>Decano da FCEE</p>
  </div>
  <!-- Conteúdo -->
  <div>

    <div>
      <h5 class="center-align">Regime de Admissão</h5>
      <blockquote>Através do Curso de Acesso à UGS ou  por Exame às disciplinas de: Português + Matemática.</blockquote>  
    </div>

    <div>
      <h5 class="center-align">Saídas Profissionais</h5>
      <blockquote>Este curso favorece um leque alargado de saídas profissionais com destaque para quadros e gestores de empresas e instituições que desenvolvem a sua actividade nos principais sectores económicos, nomeadamente banca, seguros, auditoria, indústria e consultoria, administração pública, ensino e investigação. Entre as funções que os novos licenciados podem desempenhar, encontram-se as de: gestor empresarial; analista de investimento e de crédito; auditor financeiro (externo) e auditor interno; especialista em avaliação de projectos de investimento e reestruturação empresarial; director da área de negócios; coordenador da área administrativa; coordenador do sistema de informação contabilística e orçamental; director comercial; gestor de carteiras de produtos financeiros; gestor de contas; gestor de tesouraria; técnico oficial de contas, em regime liberal.
      </blockquote>  
    </div>

    <div>
      <h5 class="center-align">Apresentação</h5>
      <blockquote>
        O curso de Licenciatura em Organização e Gestão de Empresas pretende formar técnicos superiores com competências para actuarem nos diversos domínios da actividade empresarial. Dá-se, neste curso, a par da formação em Informática, Informática Aplicada à Gestão e Língua Inglesa, entre outras, uma importância muito particular à formação em áreas que constituem uma base muito significativa para o desenvolvimento futuro de actividade profissional, nomeadamente: a Contabilidade, Cálculo Financeiro, Gestão Financeira, Análise Económico-Financeira da Empresa, Fusões e Aquisições de Empresas, Sistemas de Controlo de Gestão e Auditoria; o Marketing e os Estudos de Mercado; a Gestão de Recursos Humanos, o Comportamento Humano e Processos Organizacionais e a Legislação Laboral e Procedimentos Disciplinares; a Logística e Gestão de Operações; a Estratégia Empresarial e a Elaboração, Análise e Avaliação de Projectos de Investimento.
      </blockquote>  
    </div>
    
    <div>
      <h5 class="center-align">Objectivos</h5>
      <blockquote>
        Constitui objectivo do Programa de Licenciatura em Organização e Gestão de Empresas, com especialização em Contabilidade e Finanças, ministrado pela UGS – Universidade Gregório Semedo, a formação de profissionais nas áreas da gestão de empresas, da contabilidade e da gestão financeira.
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
                <td>Análise Matemática I</td>
                <td>1º Semestre</td>
              </tr>
              <tr>
                <td>Metodologia da Investigação Científica</td>
                <td>1º Semestre</td>
              </tr>
              <tr>
                <td>Introdução à Gestão de Empresas</td>
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
                <td>Análise Matemática II</td>
                <td>2º Semestre</td>
              </tr>
              <tr>
                <td>Introdução à Informática</td>
                <td>2º Semestre</td>
              </tr>
              <tr>
                <td>Contabilidade Geral I</td>
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
                <td>Introdução ao Marketing</td>
                <td>1º Semestre</td>
              </tr>
              <tr>
                <td>Contabilidade Geral II</td>
                <td>1º Semestre</td>
              </tr>
              <tr>
                <td>Cálculo Financeiro</td>
                <td>1º Semestre</td>
              </tr>
              <tr>
                <td>Gestão de Recursos Humanos</td>
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
                <td>Direito das Empresas</td>
                <td>2º Semestre</td>
              </tr>
              <tr>
                <td>Contabilidade Analítica I</td>
                <td>2º Semestre</td>
              </tr>
              <tr>
                <td>Introdução à Economia</td>
                <td>2º Semestre</td>
              </tr>
              <tr>
                <td>Comportamento Humano e Processos Organizacionais</td>
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
                <td>Estratégia Empresarial</td>
                <td>1º Semestre</td>
              </tr>
              <tr>
                <td>Estatística I</td>
                <td>1º Semestre</td>
              </tr>
              <tr>
                <td>Logística</td>
                <td>1º Semestre</td>
              </tr>
              <tr>
                <td>Contabilidade Analítica II</td>
                <td>1º Semestre</td>
              </tr>
              <tr>
                <td>História Económica Contemporânea</td>
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
                <td>Instituições e Mercados Financeiros</td>
                <td>2º Semestre</td>
              </tr>
              <tr>
                <td>Estatística II</td>
                <td>2º Semestre</td>
              </tr>
              <tr>
                <td>Gestão de Operações</td>
                <td>2º Semestre</td>
              </tr>
              <tr>
                <td>Gestão Financeira I</td>
                <td>2º Semestre</td>
              </tr>
              <tr>
                <td>Legislação Laboral e Procedimentos Disciplinares</td>
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
                <td>Informática Aplicada à Gestão</td>
                <td>1º Semestre</td>
              </tr>
              <tr>
                <td>Sistemas de Controlo de Gestão</td>
                <td>1º Semestre</td>
              </tr>
              <tr>
                <td>Estudos de Mercado</td>
                <td>1º Semestre</td>
              </tr>
              <tr>
                <td>Gestão Financeira II</td>
                <td>1º Semestre</td>
              </tr>
              <tr>
                <td>Elaboração, Análise e Avaliação de Projectos</td>
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
                <td>Análise Económico-Financeira da Empresa</td>
                <td>2º Semestre</td>
              </tr>
              <tr>
                <td>Auditoria</td>
                <td>2º Semestre</td>
              </tr>
              <tr>
                <td>Fusões e Aquisições de Empresas</td>
                <td>2º Semestre</td>
              </tr>
              <tr>
                <td>Economia Monetária Internacional</td>
                <td>2º Semestre</td>
              </tr>
              <tr>
                <td>Trabalho de Conclusão  de Curso</td>
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