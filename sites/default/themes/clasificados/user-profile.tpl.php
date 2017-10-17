<section id="profile" class="container">
  <article id="profileInfo">
    <hr>
    <h3><?php print render($user_profile['field_tipo']) ?></h3>
    <article class="descripcion">
      <div class="top"></div>
      <div class="left"></div>
      <div class="logo"><?php print render($user_profile['user_picture']) ?></div>
      <p><?php print render($user_profile['field_descripcion']) ?></p>
      <div class="right"></div>
    </article>
  </article>
  
  <article id="proyectos">
    <aside class="triangulo"></aside>
    <aside class="estrellas"></aside>
    <h3>Proyectos</h3>
    <?php $view = views_get_view('profiles'); print $view->preview('block_3'); ?>
  </article>

  <article id="anuncios-1">
    <hr>
    <?php $view = views_get_view('profiles'); print $view->preview('block'); ?>
  </article>

  <div class="pauta"></div>

  <article id="anuncios-2">
    <hr>
    <?php $view = views_get_view('profiles'); print $view->preview('block_1'); ?>
  </article>

  <article id="otrosAnuncios">
    <hr>
    <aside class="estrellas"></aside>
    <h3>También te puede interesar</h3>
    <?php $view = views_get_view('profiles'); print $view->preview('block_2'); ?>
  </article>

</section>
