<?php $cor1 = '#b6aa1b6b';
$cor2 = '#ffeb00ed';
$cor3 = '#d3a02e'; ?>
<!-- Scroll Bar style-->
<style type="text/css">
  /* width */
  ::-webkit-scrollbar {
    width: 8px;
  }

  /* Track */
  ::-webkit-scrollbar-track {
    background: #f1f1f1;
  }

  /* Handle */
  ::-webkit-scrollbar-thumb {
    background: <?= $cor3 ?>;
  }

  /* Handle on hover */
  ::-webkit-scrollbar-thumb:hover {
    background: #494949;
  }
</style>
<!-- End Scroll Bar style-->


<style type="text/css">
  #alert {
    display: none;
  }

  .erro-alert {
    padding: 20px;
    background-color: #ce5656;
    color: white;
  }

  .success-alert {
    background-color: #77bf5f;
    color: white;
  }

  .closebtn {
    margin-left: 15px;
    color: white;
    font-weight: bold;
    float: right;
    font-size: 22px;
    line-height: 20px;
    cursor: pointer;
    transition: 0.3s;
  }

  .closebtn:hover {
    color: black;
  }
</style>

<!-- General Style -->
<style type="text/css">
  html {
    scroll-behavior: smooth;
  }

  *,
  *::before,
  *::after {
    transition: none;
  }

  .text-primary {
    color: <?= $cor3 ?> !important;
  }

  .alert {
    position: fixed;
    z-index: 10000000000000000000000000;
    top: 15%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 25%;
  }

  .conteudoAlert {
    max-height: 130px;
    overflow-y: hidden;
  }

  .row {
    margin-right: 0px !important;
    margin-left: 0px !important;
  }

  #header {
    padding: 0px !important;
    max-width: 1440px;
  }

  #header_container {
    height: auto;
  }

  #logo img {
    width: 120px;
    /*border: solid 1px #fff;*/
    border-radius: 50%;
  }

  .page-section {
    padding-top: 110px;
  }

  #copyright a:hover {
    color: #56AED4;
  }

  #pageintro {
    padding: 100px 0 40px;
  }

  #pageintro .intro_areas {
    position: absolute;
    width: 50%;
    right: 10px;
  }

  #pageintro .intro_areas ul {
    list-style: none;
    /*  */
    font-size: 22pt;
    font-variant-caps: petite-caps;
    color: <?= $cor3 ?>;
  }

  #pageintro .intro_areas ul li {
    padding-right: 85px;
    padding-top: 10px;
    font-weight: 900;
    font-style: italic;
    /*-webkit-text-stroke-width: 1px; */
    /*-webkit-text-stroke-color: #000; */
  }

  #pageintro .intro_areas ul li:first-of-type {
    padding-top: 0px;
    /*-webkit-text-stroke-width: 1px; */
    /*-webkit-text-stroke-color: #000; */
  }

  #pageintro .introtxt {
    display: block;
    position: relative;
    max-width: 100%;
    padding-left: 30px;
    z-index: 1;
    color: #ffffff;
    font-weight: 900;
    font-size: 15pt;
  }

  #pageintro .introtxt h2 {
    font-size: 60px;
    font-weight: 900;
  }

  #pageintro .introtxt p:last-of-type {
    margin-top: 10px;
    margin-bottom: 40px;
  }

  #topbar {
    display: flex;
  }

  .navbar-toggler {
    background: <?= $cor3 ?>;
  }

  #menunav {
    font-size: 11pt;
    margin: 0 auto;
    text-align: center;
    position: relative;
  }

  #menunav .active a,
  #menunav a:hover,
  #menunav li:hover>a {
    color: #000;
    background-color: inherit;
  }

  .navbar-light .navbar-nav .nav-link:focus,
  .navbar-light .navbar-nav .nav-link:hover {
    color: inherit;
  }

  #menunav li {
    margin: 0 45px 0 45px;
  }

  #navbarNav {
    margin: 0 auto;
  }

  #logo_menu {}

  #logo_menu img {
    width: 55px;
  }

  .sticky {
    position: fixed;
    top: 0;
    width: 100%;
    z-index: 100;
    background: <?= $cor3 ?>;
    transition: 1s;
  }

  .sticky+.content {
    padding-top: 102px;
  }

  .sticky #menunav {
    max-width: 1330px;
  }

  .sticky #menunav li {
    margin: 0 45px 0 45px;
  }

  .btn,
  .btn.inverse:hover {
    color: #FFFFFF;
    background-color: <?= $cor3 ?>;
    border-color: <?= $cor1 ?>;
  }

  .loader {
    border: 5px solid #f3f3f3;
    border-top: 5px solid <?= $cor2 ?>;
    border-radius: 50%;
    width: 35px;
    height: 35px;
    animation: spin 2s linear infinite;
    margin: 25px auto;
  }

  .loader2 {
    border: 5px solid #f3f3f3;
    border-top: 5px solid #ffeb00ed;
    border-radius: 50%;
    width: 35px;
    height: 35px;
    animation: spin 2s linear infinite;
    margin: 20% auto;
  }

  .loader-body {
    position: fixed;
    background-color: #484848cc;
    width: 100%;
    height: 100%;
    top: 0;
    z-index: 10000000;
    display: none;
  }


  @keyframes spin {
    0% {
      transform: rotate(0deg);
    }

    100% {
      transform: rotate(360deg);
    }
  }

  .wrapper {
    padding-bottom: 20px;
  }

  .hover-underline-menu {
    width: 100%;
  }

  a:hover {
    text-decoration: none !important;
  }

  .hover-underline-menu .menu {
    /*background-color: #2C3840;*/
    margin: 0 auto;
  }

  .hover-underline-menu .menu a {
    color: #fefefe;
    padding: 1.2rem 1.5rem;
  }

  .hover-underline-menu .menu .underline-from-center {
    position: relative;
    font-size: 14pt;
    color: #fff;
    font-variant-caps: small-caps;
  }

  .hover-underline-menu .menu .underline-from-center::after {
    content: "";
    position: absolute;
    top: calc(100% - 0.825rem);
    border-bottom: 0.125rem solid #fefefe;
    left: 50%;
    right: 50%;
    transition: all 0.5s ease;
  }

  #menunav .active a::after {
    content: "";
    border-bottom: 0.125rem solid #fefefe;
    left: 0;
    right: 0;
  }

  .hover-underline-menu .menu .underline-from-center:hover::after {
    left: 0;
    right: 0;
    transition: all 0.5s ease;
  }

  #footer {
    padding: 0px 0px 80px;
  }

  #backtotop.visible {
    visibility: visible;
    opacity: .8;
  }

  #backtotop {
    color: #FFFFFF;
    background-color: <?= $cor2 ?>;
  }

  #backtotop:hover {
    opacity: 0.3;
  }

  .page-section h1 {
    color: <?= $cor3 ?>;
    margin-bottom: 70px;
    text-transform: inherit;
  }

  .md-v-line {
    position: absolute;
    border-left: 1px solid rgba(0, 0, 0, .125);
    height: 45px;
    top: 0px;
    left: 54px;
  }

  #quem_somos {
    padding-top: 0px;
  }

  #quem_somos.page-section h1 {
    color: #000;
  }

  .list-group-item:first-child {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
  }

  .list-group-item:last-child {
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
  }

  .list-group-item {
    margin: -2px 0px 20px;
    height: 46px;
    padding: 0px 0px 0px 10px;
    border: 1px solid rgb(0, 0, 0);
    background-color: #fff;
  }

  .list-group-item:hover {
    background-color: <?= $cor3 ?>;
    color: #fff;
    border: solid 1px;
    transition: none;
    transition-delay: 0;
  }

  .list-group-item-content {
    font-size: 12px;
    height: 100%;
    display: inline-flex;
  }

  .list-group-item-content .list-icon {
    padding: 15px 17px 0px 0px;
    height: 101%;
    border-right: solid 1px;
    margin-left: 5px;
    width: 29px;
    text-align: center;
  }

  .tab-content {
    color: #fff;
  }

  .list-group-item-content h5 {
    font-size: 12px;
    padding: 16px 0px 0px 8px;
  }

  #area_atuacao {
    /*font-family: 'Courier New';*/
    text-align: justify;
  }


  #area_atuacao h1 i img {
    height: auto;
    width: 44px;
    margin-bottom: 14px;
  }

  #area_atuacao {
    font-family: "Lucida Console", Monaco, monospace;
  }

  #area_atuacao.page-section {
    padding-top: 35px;
  }

  .area_atuacao_descricao h2 {
    color: <?= $cor3 ?>;
    padding-bottom: 10px;
    text-align: left;
  }

  .list-group-item.active {
    z-index: 0;
    color: #fff;
    background-color: <?= $cor3 ?>;
    border-color: <?= $cor3 ?>;
    border: solid 1px;
  }

  .tab-pane {
    text-align: justify;
  }

  #quem_somos .bg {
    background-repeat: no-repeat;
    background-size: contain;
  }

  #quem_somos .quem-somos-content {
    padding: 100px 50px 0px 200px;
    text-align: justify;
  }

  .quem-somos-content p {
    font-size: 13pt;
  }

  #quem_somos .bg .bglogo {
    padding: 0;
  }

  #quem_somos .quem-somos-content h1 {
    margin-bottom: 40px;
  }

  .title-section {
    font-family: fantasy;
  }

  .quem-somos-imgs {
    margin-top: 15px;
  }

  .quem-somos-imgs img {
    width: 100%;
    height: 100%;
  }

  .publicacao-subtitle {
    padding: 0px 30px;
    text-align: justify;
  }

  #publicacoes.page-section h1 {
    margin-bottom: 30px;
  }

  #publicacoes .container {
    padding: 15px 5px;
  }

  #publicacoes .card {
    border-left: solid 6px;
    border-color: <?= $cor3 ?>;
  }

  #publicacoes .card-text {
    margin-bottom: 20px !important;
  }

  #publicacoes .div-text-link {
    padding: 10px 0px;
    border-top: 1px solid #eee;
    width: 100%;
  }

  #publicacoes .div-text-link a {
    float: right;
    font-style: oblique;
    font-weight: bold;
    color: #000;
  }

  #publicacoes .div-text-link a:hover {
    color: blue;
  }

  #footer {
    padding: 0px 70px;
  }

  .footer_whatsapp a {
    color: #12ca12;
  }

  .footer_whatsapp a:hover {
    color: #fff;
  }

  .footer_whatsapp i {
    position: relative !important;
    display: initial !important;
  }
</style>
<!-- End General Style -->

<!-- Contact Style -->
<style type="text/css">
  input:focus,
  textarea:focus,
  *:required:focus {
    border-color: <?= $cor3 ?>;
  }

  .form-well {
    width: 50%;
    margin: 0 auto;
  }

  .form-well .form-well {
    border: none;
    box-shadow: none;
  }

  .blue-txt {
    color: <?= $cor3 ?>;
  }

  .form-well legend {
    font-size: 25px;
    margin: 10px 0 25px;
  }

  .group {
    position: relative;
    margin-bottom: 35px;
  }

  input {
    font-size: 18px;
    padding: 5px 10px 10px 5px;
    display: block;
    width: 100%;
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
  }

  input:focus {
    outline: none;
  }

  /* LABEL ======================================= */

  .form-well form label {
    color: #484848;
    font-size: 18px;
    font-weight: normal;
    position: absolute;
    pointer-events: none;
    left: 15px;
    top: 10px;
    transition: 0.2s ease all;
    -moz-transition: 0.2s ease all;
    -webkit-transition: 0.2s ease all;
  }

  /* active state */

  .form-well form input:focus~label,
  .form-well form input:valid~label {
    top: -20px;
    font-size: 14px;
    color: <?= $cor3 ?>;
    left: 15px;
    border: none;
  }

  .form-well form textarea:focus~label,
  .form-well form textarea:valid~label {
    top: -20px;
    font-size: 14px;
    color: <?= $cor3 ?>;
    left: 15px;
  }

  /* BOTTOM BARS ================================= */

  .bar {
    position: relative;
    display: block;
    width: 100%;
  }

  .bar:before,
  .bar:after {
    content: '';
    height: 2px;
    width: 0;
    bottom: 1px;
    position: absolute;
    background: <?= $cor3 ?>;
    transition: 0.2s ease all;
    -moz-transition: 0.2s ease all;
    -webkit-transition: 0.2s ease all;
  }

  .bar:before {
    left: 50%;
  }

  .bar:after {
    right: 50%;
  }

  /* active state */

  input:focus~.bar:before,
  input:focus~.bar:after {
    width: 50%;
  }

  .highlight {
    position: absolute;
    height: 60%;
    width: 100px;
    top: 25%;
    left: 0;
    pointer-events: none;
    opacity: 0.5;
  }

  input:focus~.highlight {
    -webkit-animation: inputHighlighter 0.3s ease;
    -moz-animation: inputHighlighter 0.3s ease;
    animation: inputHighlighter 0.3s ease;
  }

  .form-well form input,
  .form-well form textarea {
    color: #fff !important;
    border-bottom: solid 2px <?= $cor3 ?>;
    width: 100%;
    font-size: 10pt;
    left: 0px;
    height: 45px;
  }

  .form-well form textarea {
    height: 75px;
    border: none;
    border-bottom: solid 2px <?= $cor3 ?>;
    background: transparent;
  }

  .form-well form .group label {
    color: #484848;
  }

  .form-well input:focus,
  .form-well form textarea:focus {
    padding: 5px 0px;
  }

  .form-well form .btn {
    background: #e88f02;
    width: 150px;
    color: #000 !important;
    padding: 10px;
    position: relative;
    font-size: 18px;
    letter-spacing: 1px;
  }

  #msg-contact {
    color: red;
  }

  .editar {
    display: inline-block;
    cursor: pointer;
    color: #000;
    margin-left: 3px;
  }

  .editar:hover {
    opacity: 0.5;
  }

  .editarSimples {
    display: inline-block;
    cursor: pointer;
    color: #000;
    margin-left: 3px;
  }

  .editarSimples:hover {
    opacity: 0.5;
  }

  @-webkit-keyframes inputHighlighter {
    from {
      background: #fff;
    }

    to {
      width: 0;
      background: transparent;
    }
  }

  @-moz-keyframes inputHighlighter {
    from {
      background: #fff;
    }

    to {
      width: 0;
      background: transparent;
    }
  }

  @keyframes inputHighlighter {
    from {
      background: #fff;
    }

    to {
      width: 0;
      background: transparent;
    }
  }
</style>
<!-- End Contact Style -->

<!-- Redes sticky style -->
<style type="text/css">
  .icon-bar {
    position: fixed;
    top: 75%;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%);
    z-index: 100;
  }

  /* Style the icon bar links */
  .icon-bar a {
    display: block;
    text-align: center;
    padding: 10px 15px;
    transition: all 0.3s ease;
    color: white;
    font-size: 20px;
  }

  /* Style the social media icons with color, if you want */
  .icon-bar a:hover {
    background-color: #000;
  }

  .facebook {
    background: #3B5998;
    color: white;
  }

  .twitter {
    background: #55ACEE;
    color: white;
  }

  .google {
    background: #dd4b39;
    color: white;
  }

  .whatsapp {
    background: #12ca12;
    color: white;
  }

  .instagram {
    background: #fb3958;
    color: white;
  }

  .youtube {
    background: #bb0000;
    color: white;
  }
</style>
<!-- Redes sticky style -->

<!-- Responsive styles -->
<style type="text/css">
  @media (max-width: 1024px) {
    #pageintro {
      padding-left: 50px;
    }
  }

  @media (max-width: 768px) {
    .list-group-item-content h5 {
      font-size: 10px;
    }

    .icon-bar a {
      padding: 3px 10px;
      font-size: 20px;
    }

    #logo_menu img {
      width: 65px;
    }

    #pageintro {
      word-break: inherit;
    }

    .row {
      margin-right: 0px;
      margin-left: 0px;
    }

    #quem_somos .quem-somos-content {
      padding: 100px 40px 0px 50px;
      text-align: justify;
    }

    #quem_somos .bg {
      padding: 0 45px;
    }

    #quem_somos {
      padding-bottom: 45px;
      padding-top: 30px;
    }

    #quem_somos .quem-somos-content h1 {
      margin-bottom: 25px;
    }

    .page-section {
      padding-top: 50px;
    }

    .page-section h1 {
      font-size: 30pt;
      margin-left: 0px;
      margin-bottom: 30px;
    }

    #area_atuacao.page-section h1 {
      margin-bottom: 50px !important;
      margin-left: 10px !important;
    }

    #area_atuacao .container {
      margin-left: 25px;
    }

    .area_atuacao_descricao {
      font-size: 12pt;
    }

    #publicacoes .container {
      padding-top: 30px;
    }

    #contato.page-section {
      padding-top: 135px;
    }

    .form-well form label {
      font-size: 12px;
      left: 15px;
      top: 10px;
    }

    .form-well {
      width: 90%;
    }

    #footer {
      padding: 0px;
    }

    #footer .group {
      padding-left: 30px;
    }

    .row5 {
      padding-left: 35px;
    }

    #backtotop {
      right: 2px;
    }

  }

  @media(max-width: 767px) {
    .list-group-item-content h5 {
      font-size: 13px;
    }

    .area_atuacao_descricao {
      margin-top: 20px;
    }
  }

  @media(max-width: 426px) {
    .list-group-item-content h5 {
      font-size: 13px;
    }

    .area_atuacao_descricao {
      margin-top: 30px;
    }

    .area_atuacao_descricao h2 {
      font-size: 16pt;
    }

    .bglogo img {
      width: 80%;
      margin: 0 auto;
      display: flex;
    }

    .quem-somos-imgs {
      width: 90%;
      margin: 0 auto;
      display: contents;
    }

    .quem-somos-imgs img {
      padding-top: 15px;
    }

    #pageintro {
      padding: 20px 0 20px;
    }

    #pageintro .introtxt .heading {
      font-size: 30px;
    }

    #pageintro .introtxt p {
      font-size: 12pt;
    }

    #pageintro .intro_areas ul {
      font-size: 20px;
    }

    #pageintro .intro_areas ul li {
      padding-right: 0px;
      font-size: 15pt;
    }

  }

  @media(max-width: 425px) {

    .page-section h1 {
      font-size: 25pt;
    }

    .list-group-item-content h5 {
      font-size: 10px;
    }

    #area_atuacao.page-section h1 {
      margin-bottom: 30px !important;
    }

    #area_atuacao h1 i img {
      width: 38px;
    }

    #pageintro .introtxt .heading {
      font-size: 20px;
    }

    #pageintro .introtxt p {
      font-size: 9pt;
    }



  }

  @media(max-width: 375px) {
    .page-section h1 {
      font-size: 22pt;
    }

    #area_atuacao h1 i img {
      width: 30px;
      margin-bottom: 6px;
    }

    #pageintro .intro_areas ul li {
      font-size: 12pt;
    }

  }

  @media(max-width: 320px) {
    #pageintro .introtxt .heading {
      font-size: 19px;
    }
  }
</style>
<!-- End Responsive styles -->

<div id="header_container" class="bgded overlay" style="background-image:url('<?= $this->Url->image("backgrounds/b1.jpg") ?>');">
  <!-- ################################################################################################ -->
  <header id="header" class="hoc clear">
    <?php if (isset($usuario)) : ?>
      <div class="text-right pt-5">
        <b>Bem-vindo, </b> Admin
      </div>
    <?php endif; ?>
    <div id="logo">
      <!-- ################################################################################################ -->
      <h1>
        <!-- <i class="fa fa-skyatlas"></i>  -->
        <a href="#header">
          <img src='<?= $this->Url->image("logo.png?" . date('dmyHis')) ?>' />
        </a>
      </h1>
      <!-- <p>Advocacia e Assessoria Jurídica</p> -->
      <!-- ################################################################################################ -->

    </div>
    <?= $this->element('menu'); ?>
  </header>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div id="pageintro" class="hoc clear wow bounce" data-wow-delay="2s" data-wow-duration="5s">
    <!-- ################################################################################################ -->
    <article class="introtxt">
      <!-- <p>Serviços Especializados</p> -->
      <h2 class="heading <?= $editavel ?>" data-local="home" data-propriedade="titulo" data-conteudo="">
        <?= html_entity_decode($conteudoHome["titulo"]) ?>
      </h2>
      <p class="<?= $editavel ?>" data-local="home" data-propriedade="subtitulo" data-conteudo="">
        <?= html_entity_decode($conteudoHome["subtitulo"]) ?>
      </p>
      <footer><a class="btn medium inverse" href="#quem_somos">Saiba mais + </a></footer>
      <!-- <div class="intro_areas">
            <ul>
              <li>Criminal</li>
              <li>Cível</li>
              <li>Trabalho</li>
              <li>Administrativo</li>
              <li>Proteção dos Animais</li>
            </ul>
          </div> -->
    </article>


    <!-- ################################################################################################ -->
  </div>
  <!-- ################################################################################################ -->
</div>
<div class="loader-body">
  <div class="loader2"></div>
</div>
<script>
  $('.nav-link').click(function() {
    $('.navbar-toggler').click();
    $('.nav-link').parents('li').removeClass('active');
    $(this).parents('li').addClass('active');
  });
  window.onscroll = function() {
    menu_fixed_control()
  };

  var header = document.getElementById("topbar");
  var sticky = header.offsetTop;

  function menu_fixed_control() {
    if (window.pageYOffset > sticky) {
      show_menu_fixed();
    } else if (screen.width > 768) {
      hide_menu_fixed();
    }
  }

  function show_menu_fixed() {
    $('#topbar').addClass("sticky");
    $('#header').removeClass("hoc");
    $('#logo_menu').show();
  }

  function hide_menu_fixed() {
    $('#topbar').removeClass("sticky");
    $('#header').addClass("hoc");
    $('#logo_menu').hide();
  }

  $('.underline-from-center').on('click', function() {
    $(".underline-from-center").parents("li, ul").removeClass("active");
    $(this).parents("li").addClass("active");
  });


  $(document).ready(function() {
    $(document).on("scroll", onScroll);

    function onScroll(event) {
      var error_aceitavel = 10; // valor de pixel aceitavel fora do foco
      var scrollPos = $(document).scrollTop() + error_aceitavel;
      $('.underline-from-center').each(function() {
        var currLink = $(this);
        var refElement = $(currLink.attr("href"));
        if (refElement.position() &&
          refElement.position().top <= scrollPos &&
          refElement.position().top + refElement.height() > scrollPos) {
          $('.underline-from-center').parents('li').removeClass("active");
          $('.nav-link').parents('li').removeClass('active');
          currLink.parents('li').addClass("active");
        } else {
          currLink.parents('li').removeClass("active");
        }
      });
    }
  });

  // Scroll click stop on id target
  $('a[href^="#"]').on('click', function(event) {
    var target = $(this.getAttribute('href'));
    if (target.length) {
      event.preventDefault();
      $('html, body').stop().animate({
        scrollTop: target.offset().top
      }, 0);
    }
  });

  $(document).ready(function() {
    /*if((window.innerHeight+introHeight))*/
    var introHeight = $('#pageintro .intro_areas').height();
    var size_min = $('.introtxt footer').offset().top + (introHeight / 2)

    $('#pageintro .intro_areas').offset({
      top: $('.introtxt footer').offset().top
    });
    /*if(window.innerHeight < size_min){
      $('#header_container').css('min-height',size_min+10);
    }else{
       $('#header_container').css('min-height',window.innerHeight);
    }*/
    $('#header_container').css('min-height', window.innerHeight);

    if (screen.width <= 768) {
      show_menu_fixed();
      $('#logo img').hide();
    }
  });
</script>