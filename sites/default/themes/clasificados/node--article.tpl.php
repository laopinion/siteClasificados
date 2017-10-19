<section id="noticia">
  <div id="noticiaPortada">
    <?php print render($content['field_images']); ?>
  </div>
  <h2 id="noticiaTitle" class="container">
    <?php print $title; ?>
  </h2>
  <aside id="noticiaFecha" class="container"><?php print render($content['field_fecha']); ?></aside>
  <article id="noticiaBody" class="container">
    <?php print render($content['body']); ?>
  </article>

  <div id="noticias" class="container">
    <hr>
    <h3>Noticias</h3>
    <?php $view = views_get_view('anuncios'); print $view->preview('block_1'); ?>
  </div>
</section>
