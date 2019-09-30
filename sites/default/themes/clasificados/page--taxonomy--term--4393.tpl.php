<section id="empleos">
  <div id="portada">
    <img src="<?php print base_path(); ?>sites/default/themes/clasificados/dist/images/src/img/empleo.jpg" alt="Empleos">
  </div>

  <article id="categorias" class="container">
    <div class="categorias">
      <div class="left"></div> 
      <?php $taxonomy_menu_block = block_load('taxonomy_menu_block','1'); $taxtmprender = _block_render_blocks(array($taxonomy_menu_block)); $taxtmprender2 = _block_get_renderable_array($taxtmprender); print drupal_render($taxtmprender2); ?>
      <div class="right"></div>
    </div>
  </article>

  <article id="noticias" class="container">
    <hr>
    <h3>Noticias</h3>
    <?php $view = views_get_view('categorias'); print $view->preview('block_3'); ?>
  </article>

  <article id="empresas" class="container">
    <div class="left"></div>
    <hr>
    <h3>Empresas</h3>
    <?php $view = views_get_view('usuarios'); print $view->preview('block_1'); ?>
    <div class="right"></div>
  </article>

  <article id="destacados" class="container">
    <hr>
    <aside class="estrellas"></aside>
    <h3>Anuncios Destacados</h3>
    <?php $view = views_get_view('categorias'); print $view->preview('block_7'); ?>
  </article>

  <article id="anunciosEmpleos" class="container">
    <hr>
    <h3>Empleos</h3>
    <?php $view = views_get_view('categorias'); print $view->preview('block_8'); ?>
  </article>

  <div class="pauta">
    <?php include_once('dfp/728x90.php'); ?>
    <?php include_once('dfp/320x50.php'); ?>
  </div>

  <article id="masEmpleos" class="container">
    <?php $view = views_get_view('categorias'); print $view->preview('block_9'); ?>
  </article>

  <article id="otrosAnuncios" class="container">
    <hr>
    <aside class="estrellas"></aside>
    <h3>También le puede interesar</h3>
    <?php $view = views_get_view('categorias'); print $view->preview('block_5'); ?>
  </article>

</section>