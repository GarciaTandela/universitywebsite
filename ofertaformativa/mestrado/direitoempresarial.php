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
      <h5 style="text-transform: uppercase;">Mestrado em Direito Empresarial</h5> 
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
      <blockquote >Poderão inscrever-se no Mestrado em Direito na especialidade de Ciências Jurídico-Empresariais, ministrado pela UGS, os candidatos detentores de licenciatura em Direito.
      <br><br>
      A comissão científica do curso poderá admitir à frequência do presente curso, licenciados em qualquer outra área científica, desde que detentores de competências profissionais obtidas no âmbito empresarial ou do relacionamento com a aparelho jurídico-institucional.
      </blockquote>  
    </div>

    <div>
      <h5 class="center-align">Saídas Profissionais</h5>
      <blockquote>As competências científicas e técnicas adquiridas neste curso habilitam-nos ao desempenho de funções especializadas nas seguintes áreas:<br><br>
                  Gabinetes Jurídicos de empresas, instituições e organismos do sector económico;<br>
                  Advocacia exercida no domínio económico e da fiscalidade;<br>
                  Magistratura Judicial e do Ministério Público;<br>
                  Administração Pública;<br>
                  Contencioso de empresas públicas e privadas;<br>
                  Carreira política e diplomática;<br>
                  Registos e Notariado;<br>
                  Investigação Criminal;<br>
                  Jurisconsultadoria.

      </blockquote>  
    </div>

    <div>
      <h5 class="center-align">Apresentação</h5>
      <blockquote>
        O Mestrado em Direito na especialidade de Ciências Jurídico-Empresariais oferecido pela Universidade Gregório Semedo visa aprofundar e alargar os conhecimentos adquiridos nos domínios jurídicos que influenciam e condicionam decisivamente as actividades económicas exercidas pelas empresas públicas e privadas (financeiras e empresariais).   
      </blockquote>  
    </div>
    
    <div>
      <h5 class="center-align">Objectivos</h5>
      <blockquote>
        O Mestrado em Direito na especialidade de CIÊNCIAS JURÍDICO-EMPRESARIAIS (Direito Empresarial) oferecido pela Universidade Gregório Semedo visa aprofundar e alargar os conhecimentos adquiridos nos domínios jurídicos que influenciam e condicionam decisivamente as actividades económicas exercidas pelas organizações.
        <br><br>
        Abordam-se, assim, neste curso matérias situadas no âmbito jurídico-empresarial, de forma a permitir que o formando adquira competências na área jurídica e concede-se, complementarmente, ao estudante uma formação especializada na área das ciências de gestão.
        <br><br>
        O presente curso concede aos licenciados em Direito que actuam profissionalmente no âmbito empresarial, competências específicas para acesso a e/ou o exercício de profissões essencialmente económico-empresariais, para o que se considera relevante o domínio dos direitos ligados ao comércio, às sociedades, aos contratos comerciais, reservando-se um campo especial para o comércio internacional, mas também para outros que são relevantes neste domínio, como é o caso dos direitos fiscal, penal-económico, da propriedade industrial, e mesmo de natureza não jurídica, como é o caso da fiscalidade.
        <br><br>
        Aprofundam-se, assim, conhecimentos adquiridos na licenciatura, os quais, por manifesta falta de tempo, não são ali geralmente tratados com a profundidade desejável e tratam-se assuntos que normalmente não são sequer aflorados durante a licenciatura embora tenham ambos um aspecto comum: são essenciais para o exercício de profissões ligadas ao universo económico-empresarial.
        <br><br>
        Deste modo, concede-se uma sólida formação teórica e prática para a actividade académica ou profissional, preparando os licenciados para o acesso a tais profissões e ajudando os profissionais a actualizar e aprofundar os conhecimentos nas respectivas áreas. Pretende-se que o conhecimento teórico das matérias em causa tenha também uma vertente acentuadamente prática, sustentada numa sistemática análise jurisprudencial.
        <br><br>
        Um outro aspecto que para a UGS é fundamental, prende-se com a necessidade imperiosa de que a Universidade possua no seu corpo docente quadros com Mestrado obtido nesta área científica, cumprindo com o estatuído na lei e com as exigências de qualidade científica e pedagógica definidas pela própria instituição.
        <br>
        Este curso é assim, para a UGS, uma óptima oportunidade para assegurar a produção científica da UGS na área do Direito, e através da realização de dissertações direccionadas para as micro-áreas científicas das diversas disciplinas, que a Universidade disporá, em breve, de quadros com competências diferenciadas nas mesmas.
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
                <td>Economia de Empresas</td>
                <td>1º Semestre</td>
              </tr>
              <tr>
                <td>Noções de Cálculo Financeiro</td>
                <td>1º Semestre</td>
              </tr>
              <tr>
                <td>Contabilidade Financeira </td>
                <td>1º Semestre</td>
              </tr>
              <tr>
                <td>Finanças Corporativas</td>
                <td>1º Semestre</td>
              </tr>
              <tr>
                <td>Introdução aos Mercados Financeiros</td>
                <td>1º Semestre</td>
              </tr>
              <tr>
                <td>Direito Laboral</td>
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
                <td>Direito das Empresas</td>
                <td>2º Semestre</td>
              </tr>
              <tr>
                <td>Direito das Sociedades Comerciais</td>
                <td>2º Semestre</td>
              </tr>
              <tr>
                <td>Direito dos Contratos Comerciais</td>
                <td>2º Semestre</td>
              </tr>
              <tr>
                <td>Direito Bancário, Moeda e Crédito</td>
                <td>2º Semestre</td>
              </tr>
              <tr>
                <td>Direito Fiscal e Fiscalidade</td>
                <td>2º Semestre</td>
              </tr>
              <tr>
                <td>Arbitragem Comercial Internacional</td>
                <td>2º Semestre</td>
              </tr>
              <tr>
                <td>Ética e Responsabilidade Social</td>
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