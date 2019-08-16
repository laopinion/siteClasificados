<section id="Varios__edictos">
  <div id="portada">
    <img src="<?php print base_path(); ?>sites/default/themes/clasificados/src/img/edictos.jpg" alt="Edictos">
  </div>

  <article id="categorias" class="container">
    <div class="categorias">
      <div class="left"></div> 
      <?php $taxonomy_menu_block = block_load('taxonomy_menu_block','1'); $taxtmprender = _block_render_blocks(array($taxonomy_menu_block)); $taxtmprender2 = _block_get_renderable_array($taxtmprender); print drupal_render($taxtmprender2); ?>
      <div class="right"></div>
    </div>
  </article>

  <article id="masEdictos" class="container">
    <?php $view = views_get_view('categorias'); print $view->preview('block_17'); ?>
  </article>

  <div class="pauta">
    <?php include_once('dfp/728x90.php'); ?>
    <?php include_once('dfp/320x50.php'); ?>
  </div>

  <article id="otrosAnuncios" class="container">
    <hr>
    <aside class="estrellas"></aside>
    <h3>También le puede interesar</h3>
    <?php $view = views_get_view('categorias'); print $view->preview('block_5'); ?>
  </article>
</section>