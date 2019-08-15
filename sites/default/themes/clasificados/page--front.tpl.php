<!-- Slides imagen destacadas -->
<?php include("slides.tpl.php"); ?>
<section id="home">
  <div id="destacados">
    <hr>
    <aside class="estrellas"></aside>
    <h3>Anuncios Destacados</h3>
    <?php $view = views_get_view('home'); print $view->preview('block'); ?>
  </div>
  <div class="pauta">
    <?php include_once('dfp/728x90.php'); ?>
    <?php include_once('dfp/320x50.php'); ?>
  </div>
  <div id="empleos">
    <hr>
    <h3>Empleos</h3>
    <?php $view = views_get_view('home'); print $view->preview('block_1'); ?>
    <div class="flecha" data-activo='0'></div>
  </div>
  <div id="vehiculos">
    <hr>
    <h3>Vehículos</h3>
    <?php $view = views_get_view('home'); print $view->preview('block_2'); ?>
    <div class="flecha" data-activo='0'></div>
  </div>
  <div id="fincaRaiz">
    <hr>
    <h3>Finca Raíz</h3>
    <?php $view = views_get_view('home'); print $view->preview('block_3'); ?>
    <div class="flecha" data-activo='0'></div>
  </div>
  <div id="varios">
    <hr>
    <h3>Varios</h3>
    <?php $view = views_get_view('home'); print $view->preview('block_4'); ?>
    <div class="flecha" data-activo='0'></div>
  </div>
</section>
