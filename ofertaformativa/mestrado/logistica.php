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
      <h5 style="text-transform: uppercase;">Mestrado em Gestão da Logística e dos Transportes</h5> 
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
      <blockquote>Poderão inscrever-se no Mestrado em Gestão de Empresas na especialidade de Logística e Transportes da Universidade Gregório Semedo os candidatos detentores de licenciatura em Gestão Comercial e Marketing, Organização e Gestão de Empresas, Economia ou Gestão de Empresas, e licenciatura em Ciências Tecnológicas.
      <br><br>
      Poderão ser ainda admitidos candidatos detentores de licenciatura noutra área científica desde que disponham de formação e experiência significativa na actividade de gestão empresarial.
      <br>
      Serão bem recebidos profissionais com formação noutras áreas que desejem adquirir, aprofundar ou actualizar conhecimentos nos temas técnicos específicos tratados ao longo do curso.
      </blockquote>  
    </div>

    <div>
      <h5 class="center-align">Saídas Profissionais</h5>
      <blockquote>O Mestrado em Gestão em Gestão de Empresas na especialidade de Logística e Transportes oferece um vasto leque de saídas profissionais, de onde se salientam:
                  <br><br>
                  O exercício de funções técnicas e de gestão em empresas vocacionadas para a importação, armazenagem e distribuição de produtos e equipamentos;<br>
                  O exercício de funções técnicas e de gestão no domínio dos serviços de compras, importação, armazenagem e distribuição;<br>
                  Quadros superiores especializados em Logística nas mais diversas instituições públicas e privadas, de qualquer dimensão;<br>
                  Consultores independentes ou quadros de empresas de consultoria;<br>
                  Docentes para os vários graus de ensino, nomeadamente o ensino superior;
      </blockquote>  
    </div>

    <div>
      <h5 class="center-align">Apresentação</h5>
      <blockquote>
        Com o objectivo de transmitir essa formação especializada nos domínios da gestão e da logística empresarial, a Universidade Gregório Semedo oferece esta nova vertente formativa visando completar a formação obtida nas licenciaturas e estabelecendo uma forte ligação com o universo empresarial através da participação de responsáveis de algumas das grandes empresas nacionais em seminários a realizar ao longo do curso.     
      </blockquote>  
    </div>
    
    <div>
      <h5 class="center-align">Objectivos</h5>
      <blockquote>
        A Logística é um sector de actividade com importância crescente, quer ao nível de oportunidades de trabalho, quer ao nível do volume de negócios.
        <br><br>
        A globalização dos mercados, a diminuição do ciclo de vida dos produtos, a externalização de muitas das actividades produtivas e da distribuição, a par com a importância que hoje assume o nível de serviço ao cliente, conferiram à Logística capacidades de diferenciação que assumem importância estratégica na rendibilidade das empresas.
        <br><br>
        Actualmente, considera-se que a Logística atravessa toda a cadeia de valor das organizações nos aspectos relacionados com o planeamento, manuseamento, armazenagem e movimentação de materiais, ao longo de todo o ciclo de produção e comercialização de qualquer bem ou serviço tornando-se a função logística essencial ao desenvolvimento sustentado das organizações, facto já amplamente reconhecido aos níveis mais elevados de Direcção e Administração das empresas.
        <br><br>
        As qualificações exigidas aos profissionais que exercem funções de Gestão alteraram-se nos últimos anos, passando os lugares com intervenção logística a ser desempenhados, preferencialmente, por indivíduos com forte preparação académica e prática nos domínios da Engenharia ou da Gestão.
        <br><br>
        Com o objectivo de transmitir essa formação especializada nos domínios da gestão e da logística empresarial, a Universidade Gregório Semedo oferece esta nova vertente formativa visando completar a formação obtida nas licenciaturas e estabelecendo uma forte ligação com o universo empresarial através da participação de responsáveis de algumas das grandes empresas nacionais em seminários a realizar ao longo do curso.
        <br><br>
        Sendo factor distintivo deste curso proporcionar uma formação profissionalizante academicamente exigente, o seu público-alvo é constituído quer por licenciados que, possuindo uma reduzida experiência profissional, pretendam consolidar a sua formação na área da logística empresarial em todos os seus segmentos funcionais, quer por profissionais que procurem um aprofundamento e actualização dos temas técnicos tratados no curso.
        <br><br>
        Outro aspecto inovador do presente curso pretende ser o método de aprendizagem. Com efeito, o carácter profissionalizante do curso exige que, para além da transmissão dos conhecimentos indispensáveis à construção de uma base teórica sólida, seja dada uma ênfase muito grande a aspectos práticos. Isto significa que, a par da apresentação e discussão de conceitos, há uma forte utilização de case studies que permitem a análise, discussão e tomada de decisões – preferencialmente em grupo – relativas a situações concretas.
        <br><br>
        O Mestrado em Gestão de Empresas na especialidade de Logística e Transportes ministrado pela UGS vem, assim, proporcionar uma formação de carácter exigente que propicia o desenvolvimento das competências críticas ao pleno desempenho de funções técnicas na área da gestão da logística das empresas industriais ou de serviços a todos os que desejem adquirir competências nesta área.
        <br><br>
        A UGS dispõe de um corpo docente próprio qualificado, o qual aliará a um rigor científico a sua experiência profissional em gestão e consultoria de empresas, fazendo com que o presente curso constitua um programa de sólida preparação técnica e de valorização profissional.
        <br><br>
        Complementarmente, a UGS conta com a colaboração de docentes de outras Instituições de Ensino Superior e quadros superiores de empresas e instituições, cedidos no âmbito de acordos de cooperação institucional celebrados, factor que permite garantir um elevado nível de qualidade do curso.
        <br><br>
        Um outro aspecto que para a UGS é fundamental, prende-se com a necessidade imperiosa de que a Universidade possua no seu corpo docente quadros com Mestrado obtido nesta área científica, cumprindo com o estatuído na lei e com as exigências de qualidade científica e pedagógica, definidas pela própria instituição.
        <br><br>
        A realização deste curso constitui para a UGS uma óptima oportunidade para assegurar a produção científica na área da Logística e, através da realização de dissertações direccionadas para as diversas áreas de especialidade das disciplinas leccionadas, garantir que a Universidade disporá, em breve, de quadros com competências diferenciadas nestes domínios. 
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
                <td>Gestão de Stocks I</td>
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
                <td>Sistemas de Transportes Internos e Internacionais</td>
                <td>2º Semestre</td>
              </tr>
              <tr>
                <td>Armazenagem</td>
                <td>2º Semestre</td>
              </tr>
              <tr>
                <td>Gestão da Cadeia de Abastecimento</td>
                <td>2º Semestre</td>
              </tr>
              <tr>
                <td>Contabilidade de Gestão</td>
                <td>2º Semestre</td>
              </tr>
              <tr>
                <td>Gestão da Distribuição</td>
                <td>2º Semestre</td>
              </tr>
              <tr>
                <td>Gestão de Stocks II</td>
                <td>2º Semestre</td>
              </tr>
              <tr>
                <td>Finanças Corporativas</td>
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