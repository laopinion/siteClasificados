<section id="seccionGeneral">

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

  <article id="anunciosGeneral" class="container">
    <?php $view = views_get_view('categorias'); print $view->preview('block'); ?>
  </article>

  <div class="pauta"></div>

  <article id="masGeneral" class="container">
    <?php $view = views_get_view('categorias'); print $view->preview('block_10'); ?>
  </article>

  <article id="otrosAnuncios" class="container">
    <hr>
    <aside class="estrellas"></aside>
    <h3>También te puede interesar</h3>
    <?php $view = views_get_view('categorias'); print $view->preview('block_5'); ?>
  </article>

</section>