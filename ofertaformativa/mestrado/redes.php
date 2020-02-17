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
      <h5 style="text-transform: uppercase;">Mestrado em Gestão de Redes de Computadores e Sistemas de Comunicações</h5> 
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
      <blockquote >Poderão inscrever-se no Mestrado em Engenharia Informática, na especialidade de Redes de Computadores e Sistemas de Comunicações ministrado pela Universidade Gregório Semedo os candidatos detentores de licenciatura em Ciências da Computação, Engenharia de Informática ou áreas a fins.
      <br><br>
      No caso dos candidatos possuidores de Licenciatura em Área Científica diferente das Tecnologias da Informação, a sua candidatura será analisada de acordo com o Regulamento dos Cursos de Mestrado da Universidade Gregório Semedo.
      </blockquote>  
    </div>

    <div>
      <h5 class="center-align">Saídas Profissionais</h5>
      <blockquote>A conclusão deste curso permite um vasto leque de saídas profissionais, de onde se salientam:<br><br> 
                  Quadros superiores detentores de competências adequadas ao desenvolvimento de empresas de Tecnologias da Informação Avançadas; <br> 
                  Quadros superiores especializados em Informática nas mais diversas instituições públicas e privadas, de qualquer dimensão;<br>
                  Consultores independentes ou quadros de empresas de consultoria;<br>
                  O exercício da docência no domínio das Tecnologias de Informação nos vários graus de ensino.
      </blockquote>  
    </div>

    <div>
      <h5 class="center-align">Apresentação</h5>
      <blockquote>
        O Mestrado em Engenharia Informática, na especialidade de Gestão de Redes de Computadores e Sistemas de Comunicações que a UGS se propõe organizar, destina-se a todos os que possuem uma licenciatura quer nas várias áreas da informática (engenharia, computação, sistemas, etc.) quer uma noutra área científica.  
      </blockquote>  
    </div>
    
    <div>
      <h5 class="center-align">Objectivos</h5>
      <blockquote>
        O Mestrado em Engenharia Informática, na especialidade em Gestão de Redes de Computadores e Sistemas de Comunicações que a UGS se propõe organizar, destina-se a todos os que possuem uma licenciatura quer nas várias áreas da informática (engenharia, computação, sistemas, etc.) quer uma noutra área científica.
        <br><br>
        Neste último caso a UGS exigirá que o candidato possua experiência na utilização de meios informáticos em ambiente profissional e visa formar técnicos e gestores capacitados para liderar e orientar a instalação, parametrização e exploração de sistemas assentes na Internet, bem como para a administração de redes de computadores e servidores, respondendo às exigências das organizações, empresas e instituições privadas e públicas, muito carenciadas de técnicos com know-how nestes domínios.
        <br><br>
        Os candidatos que possuam formação em áreas científicas diversas da Engenharia Informática ou das Ciências de Computação ou afins, têm neste Curso de Mestrado uma oportunidade para reorientarem as suas carreiras profissionais para a área de Tecnologias Informáticas e, uma vez na posse de sólidos conhecimentos científicos e tecnológicos nas áreas da Comunicação de Dados e das Redes de Computadores, prosseguirem com acrescidas competências, as novas carreiras profissionais.
        <br>
        Importa salientar que o Mestrado em Engenharia Informática, na especialidade em Gestão de Redes de Computadores e Sistemas de Comunicações oferecido pela Universidade Gregório Semedo, introduz uma componente dominantemente prática de formação e procura estabelecer uma ligação com o universo empresarial através da participação de técnicos e responsáveis de empresas de relevo nas TI, em seminários especializados a realizar ao longo do curso.
        <br>
        Responde-se, assim, à procura das empresas por recursos humanos com competências neste domínio, formando-se profissionais que saibam localizar, reconhecer, identificar e sobretudo utilizar a pesquisa de modo a agregar valor às suas actividades nos domínios das tecnologias emergentes e das redes e sistemas de computadores. Podemos salientar três factores como distintivos deste curso:
        <br><br>
        1. O primeiro factor prende-se com o objectivo de proporcionar uma formação profissionalizante, embora academicamente exigente. O público-alvo é constituído não só por licenciados que, possuindo uma reduzida experiência profissional, pretendam consolidar a sua formação na área da gestão das tecnologias de informação, mas também por profissionais que procurem aprofundar e actualizar os seus conhecimentos na área.
        <br>
        2. O segundo factor diferenciador é a duração. O curso está concebido para decorrer durante num período de dois anos lectivos, respondendo às necessidades do mercado e possui uma estrutura organizativa desenhada em torno de horários e regimes de frequência que se adaptam à diferente disponibilidade de tempo de cada participante.
        <br>
        3. O terceiro aspecto inovador é o método de aprendizagem. Com efeito, o carácter profissionalizante do curso exige que, para além da transmissão dos conhecimentos indispensáveis à construção de uma base teórica sólida, seja dada uma ênfase muito grande a aspectos práticos. Isto significa que, a par da apresentação e discussão de conceitos, existe um forte recurso ao desenvolvimento de aplicações práticas que pretendam responder a situações concretas.
        <br><br>
        Para a docência deste curso, a UGS dispõe de um corpo docente próprio qualificado, o qual aliará a um rigor científico a sua experiência profissional em gestão e consultoria de empresas, fazendo com que o presente curso constitua um programa de sólida preparação técnica e de valorização profissional.
        <br><br>
        Complementarmente, a UGS conta com a colaboração de docentes de outras Instituições de Ensino Superior e quadros superiores de empresas e instituições, cedidos no âmbito de acordos de cooperação institucional celebrados, factor que permite garantir um elevado nível de qualidade do curso.
        <br><br>
        Um outro aspecto que para a UGS é fundamental, prende-se com a necessidade imperiosa de que a Universidade possua no seu corpo docente quadros com Mestrado obtido nesta área científica, cumprindo com o estatuído na lei e com as exigências de qualidade científica e pedagógica, definidas pela própria instituição.
        <br><br>
        A realização deste curso constitui para a UGS uma óptima oportunidade para assegurar a produção científica na área do Marketing e, através da realização de dissertações direccionadas para as diversas áreas de especialidade das disciplinas leccionadas, garantir que a Universidade disporá, em breve, de quadros com competências diferenciadas nestes domínios.
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
                <td>Gestão de Redes de Computadores e Serviços</td>
                <td>1º Semestre</td>
              </tr>
              <tr>
                <td>Comunicação óptica para Transmissão de Dados</td>
                <td>1º Semestre</td>
              </tr>
              <tr>
                <td>Planeamento se Sistemas de Gestão de Redes</td>
                <td>1º Semestre</td>
              </tr>
              <tr>
                <td>Redes de Acesso para Comunicação de Dados</td>
                <td>1º Semestre</td>
              </tr>
              <tr>
                <td>Cloud Computing</td>
                <td>1º Semestre</td>
              </tr>
              <tr>
                <td>Redes Multimédia</td>
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
                <td>Redes de Sensores sem Fio e Internet das Coisas</td>
                <td>2º Semestre</td>
              </tr>
              <tr>
                <td>Segurança de Sistemas e Administração de Servidores</td>
                <td>2º Semestre</td>
              </tr>
              <tr>
                <td>Visualização de Redes e Sistemas Computacionais</td>
                <td>2º Semestre</td>
              </tr>
              <tr>
                <td>Tópicos Avançados de Redes de Dados em Fio</td>
                <td>2º Semestre</td>
              </tr>
              <tr>
                <td>BIG DATA e Data Science</td>
                <td>2º Semestre</td>
              </tr>
              <tr>
                <td>Gestão de Projectos de Software</td>
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