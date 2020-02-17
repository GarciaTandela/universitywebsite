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
      <h5 style="text-transform: uppercase;">Mestrado em Gestão Comercial</h5> 
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
      <blockquote>O presente curso tem como público-alvo quadros superiores com formação nas áreas de Gestão, Economia ou afins que pretendem dedicar-se à Gestão Comercial e, para este efeito, desejam adquirir competências específicas nesta área.
      <br>
      Serão bem recebidos profissionais com formação noutras áreas que desejem adquirir, aprofundar ou actualizar conhecimentos nos temas técnicos específicos tratados ao longo do curso.
      </blockquote>  
    </div>

    <div>
      <h5 class="center-align">Saídas Profissionais</h5>
      <blockquote>As principais saídas profissionais para os Especialistas em Gestão Comercial são:
                  <br><br>
                  A Direcção de empresas cujo objecto é o comércio grossista ou retalhista ou que possuam um forte sector comercial;<br>
                  A Direcção ou chefia de serviços comerciais;<br>
                  O exercício de funções técnicas no domínio da importação, transporte, distribuição e comercialização de bens transaccionáveis;<br>
                  O Exercício de funções técnicas no estudo e análise de mercados, no posicionamento estratégico de produtos e outras que a nossa economia certamente criará a curto prazo.<br>
      </blockquote>  
    </div>

    <div>
      <h5 class="center-align">Apresentação</h5>
      <blockquote>
        O Curso de Mestrado em Gestão de Empresas na especialidade de Gestão Comercial, desenvolve-se na sequência da Licenciatura em Gestão Comercial e Marketing e visa completar a formação obtida na licenciatura, aprofundando os conhecimentos adquiridos e introduzindo uma componente prática de formação através da participação de responsáveis de algumas das grandes empresas nacionais em seminários especializados ao longo do ano.    
      </blockquote>  
    </div>
    
    <div>
      <h5 class="center-align">Objectivos</h5>
      <blockquote>
        Os desafios que a economia angolana enfrenta nas áreas da Gestão Comercial, situam-se entre os mais importantes para o aumento da produtividade e para o suporte às novas actividades produtivas.
        <br><br>
        Por esse motivo, a Universidade Gregório Semedo decidiu disponibilizar esta formação que constitui, sem dúvida, uma aposta inovadora no panorama do ensino superior nacional, procurando criar profissionais altamente qualificados nestes sectores estratégicos.
        <br><br>
        A UGS responde, desta forma, às necessidades de quadros das empresas que têm como actividade dominante a importação, exportação, armazenagem, transportação e distribuição de mercadorias e bens industriais.
        <br><br>
        O Curso de Mestrado em Gestão de Empresas na especialidade de Gestão Comercial oferecido pela Universidade Gregório Semedo, desenvolve-se na sequência da Licenciatura em Gestão Comercial e Marketing que a UGS oferece com assinalável sucesso desde 2004 e visa completar a formação obtida na licenciatura, aprofundando os conhecimentos adquiridos e introduzindo uma componente prática de formação através da participação de responsáveis de algumas das grandes empresas nacionais em seminários especializados ao longo do ano. 
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
                <td>Economia de Empresa</td>
                <td>1º Semestre</td>
              </tr>
              <tr>
                <td>Introdução a Gestão Comercial e Logísitica</td>
                <td>1º Semestre</td>
              </tr>
              <tr>
                <td>Novas Tecnologias na Gestão</td>
                <td>1º Semestre</td>
              </tr>
              <tr>
                <td>Noções de Cálculo Financeiro e Estatística</td>
                <td>1º Semestre</td>
              </tr>
              <tr>
                <td>Contabilidade Financeira</td>
                <td>1º Semestre</td>
              </tr>
              <tr>
                <td>Introdução à Gestão dos Transportes</td>
                <td>1º Semestre</td>
              </tr>
              <tr>
                <td>Direito Comercial e do Consumidor</td>
                <td>1º Semestre</td>
              </tr>
              <tr>
                <td>Gestão de Compras</td>
                <td>1º Semestre</td>
              </tr>
              <tr>
                <td>Metodologia de Investigação Científica</td>
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
                <td>Direcção Comercial e Gestão da Força de Vendas</td>
                <td>2º Semestre</td>
              </tr>
              <tr>
                <td>Comportamento do Consumidor</td>
                <td>2º Semestre</td>
              </tr>
              <tr>
                <td>Gestão de Preços e Produtos</td>
                <td>2º Semestre</td>
              </tr>
              <tr>
                <td>Contabilidade de Gestão</td>
                <td>2º Semestre</td>
              </tr>
              <tr>
                <td>Técnicas de Negociação</td>
                <td>2º Semestre</td>
              </tr>
              <tr>
                <td>Gestão de Stocks e Distribuição</td>
                <td>2º Semestre</td>
              </tr>
              <tr>
                <td>Gestão da Cadeia de Abastecimentos</td>
                <td>2º Semestre</td>
              </tr>
              <tr>
                <td>Comércio Internacional</td>
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
                <td>Elaboração do Projecto de Dissertação</td>
                <td>1º Semestre</td>
              </tr>
              <tr>
                <td>Desenvolvimento da Investigação Orientada</td>
                <td>1º Semestre</td>
              </tr>
              <tr>
                <td>Estágio</td>
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
                <td>Desenvolvimento da Investigação Orientada</td>
                <td>2º Semestre</td>
              </tr>
              <tr>
                <td>Divulgação dos Resultados</td>
                <td>2º Semestre</td>
              </tr>
              <tr>
                <td>Elaboração e Defesa da Dissertação</td>
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