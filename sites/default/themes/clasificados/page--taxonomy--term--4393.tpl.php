<section id="empleos">
  <div id="portada">
    <img src="" alt="autos">
  </div>

  <article id="categorias" class="container">
    <h4>Cateogiras</h4>
  </article>

  <article id="noticias" class="container">
    <hr>
    <h3>Noticias</h3>
    <?php $view = views_get_view('categorias'); print $view->preview('block_3'); ?>
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

  <div class="pauta"></div>

  <article id="masEmpleos" class="container">
    <?php $view = views_get_view('categorias'); print $view->preview('block_9'); ?>
  </article>

  <article id="otrosAnuncios" class="container">
    <hr>
    <aside class="estrellas"></aside>
    <h3>También te puede interesar</h3>
    <?php $view = views_get_view('categorias'); print $view->preview('block_5'); ?>
  </article>

</section>