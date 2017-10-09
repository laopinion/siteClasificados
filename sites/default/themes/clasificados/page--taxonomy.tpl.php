<section id="seccionGeneral">

  <article id="categorias" class="container">
    <h4>Cateogiras</h4>
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