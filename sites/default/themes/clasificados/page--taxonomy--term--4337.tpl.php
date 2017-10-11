<section id="fincaRaiz">
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

  <article id="inmobiliarias" class="container">
    <div class="left"></div>
    <hr>
    <h3>Inmobiliarias</h3>
    <?php $view = views_get_view('usuarios'); print $view->preview('block_2'); ?>
    <div class="right"></div>
  </article>

  <article id="destacados" class="container">
    <hr>
    <aside class="estrellas"></aside>
    <h3>Anuncios Destacados</h3>
    <?php $view = views_get_view('categorias'); print $view->preview('block_11'); ?>
  </article>

  <article id="anunciosFincaRaiz" class="container">
    <hr>
    <h3>Finca Raíz</h3>
    <?php $view = views_get_view('categorias'); print $view->preview('block_12'); ?>
  </article>

  <div class="pauta"></div>

  <article id="masFincaRaiz" class="container">
    <?php $view = views_get_view('categorias'); print $view->preview('block_13'); ?>
  </article>

  <article id="otrosAnuncios" class="container">
    <hr>
    <aside class="estrellas"></aside>
    <h3>También te puede interesar</h3>
    <?php $view = views_get_view('categorias'); print $view->preview('block_5'); ?>
  </article>

</section>