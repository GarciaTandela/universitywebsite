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
      <h5 style="text-transform: uppercase;">Licenciatura em Informática de Gestão</h5> 
  </div>
  <div class="center" style="margin-top: 50px; margin-bottom: 50px;">
    <img class="circle" src="../../assets/img/messani.jpg" style="width: 120px; height: 120px; border: 3px solid teal;">
    <h5>Carlos Messani</h5>
    <p>Decano da FENT</p>
  </div>
  <!-- Conteúdo -->
  <div>

    <div>
      <h5 class="center-align">Regime de Admissão</h5>
      <blockquote >Através do Curso de Acesso à UGS ou  por Exame às disciplinas de: Português + Matemática.</blockquote>  
    </div>

    <div>
      <h5 class="center-align">Saídas Profissionais</h5>
      <blockquote>A licenciatura em Informática de Gestão permite um leque alargado de saídas profissionais, com destaque para as seguintes:<br><br>
                  Gestor de empresa;<br> 
                  Chefe dos serviços de contabilidade ou dos serviços de informática;<br> 
                  Técnico superior na área da gestão empresarial, da contabilidade e da informática;<br>
                  Consultor na área da informatização de empresas.
      </blockquote>  
    </div>

    <div>
      <h5 class="center-align">Apresentação</h5>
      <blockquote>
        As empresas e instituições do nosso País têm assistido, nos últimos anos, a uma crescente utilização das tecnologias de informação quer nos serviços administrativos, quer nas áreas directamente ligadas à produção industrial. O aumento das soluções e tecnologias disponíveis nestes domínios tem levado a uma crescente procura no mercado de trabalho, de profissionais que possuam não só uma formação de base científica adequada que cubra, de forma geral, as áreas situadas no domínio das tecnologias de informação, mas também que possuam formação especializada na sua área específica de actividade, seja ela a do desenvolvimento e exploração de software especializado, seja a da instalação e administração de sistemas e redes. A UGS procura adaptar-se a esta tendência organizando a formação que ministra neste domínio, em torno dos seguintes vectores:
        <br><br>
        Licenciatura em Engenharia Informática (com formação dominante nas áreas do desenvolvimento de software e da gestão de sistemas e redes de computadores); Licenciatura em Informática de Gestão (com formação dominante na implementação e gestão da interrelação entre as soluções informáticas e as práticas de gestão empresarial).
      </blockquote>  
    </div>
    
    <div>
      <h5 class="center-align">Objectivos</h5>
      <blockquote>
        Constitui objectivo do curso de Licenciatura em Informática de Gestão, ministrado pela UGS, a formação de profissionais com capacidades para: organizar e informatizar os processos administrativos empresariais, utilizando quer soluções informáticas standard desenvolvidas por empresas especializadas, quer soluções informáticas desenvolvidas à medida das necessidades dos serviços; desenvolver aplicações informáticas específicas destinadas ao universo empresarial e proceder à sua gestão, manutenção e actualização; assegurar a gestão dos serviços de tecnologias de informação e sistemas informáticos de empresas e serviços da Administração Pública.
      </blockquote>  
    </div>

    <div>
      <h5 class="center-align">Organização</h5>
      <blockquote>
        O curso de Licenciatura em Informática de Gestão tem uma duração de quatro anos lectivos e organiza-se na sua maior parte em ciclos semestrais, dando-se uma sólida formação científica nas áreas da gestão empresarial e da informática, ao mesmo tempo que se ministra formação nas áreas científicas de suporte às mesmas.
        <br><br>
        De salientar que a estrutura curricular prevista no programa para as cadeiras de formação em gestão de empresas, possibilitará a estes profissionais o exercício de funções qualificadas no universo empresarial em outras áreas que não as da informática empresarial. 
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
                <td>Inglês (anual)</td>
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
              <tr>
                <td>Introdução às Tecnologias Informáticas</td>
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
                <td>Inglês (anual)</td>
                <td>2º Semestre</td>
              </tr>
              <tr>
                <td>Análise Matemática II</td>
                <td>2º Semestre</td>
              </tr>
              <tr>
                <td>Cálculo Financeiro</td>
                <td>2º Semestre</td>
              </tr>
              <tr>
                <td>Contabilidade Geral I</td>
                <td>2º Semestre</td>
              </tr>
              <tr>
                <td>Fundamentos de Electrónica</td>
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
                <td>Álgebra Linear</td>
                <td>1º Semestre</td>
              </tr>
              <tr>
                <td>Contabilidade Geral II</td>
                <td>1º Semestre</td>
              </tr>
              <tr>
                <td>Arquitectura de Computadores  I</td>
                <td>1º Semestre</td>
              </tr>
              <tr>
                <td>Sistemas Digitais</td>
                <td>1º Semestre</td>
              </tr>
              <tr>
                <td>Bases de Dados I</td>
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
                <td>Matemática Discreta</td>
                <td>2º Semestre</td>
              </tr>
              <tr>
                <td>Contabilidade Analítica</td>
                <td>2º Semestre</td>
              </tr>
              <tr>
                <td>Arquitectura de Computadores  II</td>
                <td>2º Semestre</td>
              </tr>
              <tr>
                <td>Programação I</td>
                <td>2º Semestre</td>
              </tr>
              <tr>
                <td>Bases de Dados II</td>
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
                <td>Sistemas Operativos I</td>
                <td>1º Semestre</td>
              </tr>
              <tr>
                <td>Engenharia de Redes I</td>
                <td>1º Semestre</td>
              </tr>
              <tr>
                <td>Programação II</td>
                <td>1º Semestre</td>
              </tr>
              <tr>
                <td>Gestão Financeira</td>
                <td>1º Semestre</td>
              </tr>
              <tr>
                <td>Probabilidade e Estatística</td>
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
                <td>Sistemas Operativos II</td>
                <td>2º Semestre</td>
              </tr>
              <tr>
                <td>Engenharia de Redes II</td>
                <td>2º Semestre</td>
              </tr>
              <tr>
                <td>Programação III</td>
                <td>2º Semestre</td>
              </tr>
              <tr>
                <td>Sistemas de Controlo de Gestão</td>
                <td>2º Semestre</td>
              </tr>
              <tr>
                <td>Programação Web e Multimedia</td>
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
                <td>Segurança Informática</td>
                <td>1º Semestre</td>
              </tr>
              <tr>
                <td>Gestão de Sistemas e Redes</td>
                <td>1º Semestre</td>
              </tr>
              <tr>
                <td>Planeamento e Gestão de Projectos Informáticos</td>
                <td>1º Semestre</td>
              </tr>
              <tr>
                <td>Programação IV</td>
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
                <td>Computação Gráfica</td>
                <td>2º Semestre</td>
              </tr>
              <tr>
                <td>Análise de Sistemas</td>
                <td>2º Semestre</td>
              </tr>
              <tr>
                <td>Engenharia de Software</td>
                <td>2º Semestre</td>
              </tr>
              <tr>
                <td>Direito e Auditoria informática</td>
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