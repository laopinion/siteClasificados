<section id="proyecto">
  <article id="inmobiliarias" class="container">
    <hr>
    <h3>Inmobiliarias</h3>
    <div class="logo">
      <?php print render($content['field_logo']) ?>
    </div>
  </article>

  <article id="galeriaProyecto">
    <div id="slider-proyecto">
        <ul class="rslides-proyecto">
          <?php
            if (!empty($node->field_image)) {
              $i=0;
              foreach($node->field_image['und'] as $imagen) {
                $foto = substr($content['field_image'][$i]['#item']['uri'],8);
                print "
                <li>
                <img u=image src='".base_path()."sites/default/files".$foto."' alt='".render($content['field_image'][$i]['#item']['alt'])."'/>
                </li>
                ";
                $i++;
              }
            }
          ?>
        </ul>
    </div>
  </article>

  <article id="textProyecto" class="container">
    <?php print render($content['body']) ?>
  </article>

  <article id="formularioProyecto" class="container">
    <div class="info">
      <aside class="title">
        <?php print render($content['field_autor']); ?>
      </aside>
      <aside class="sitio">
        <a href="" target="_blank"><?php print render($content['field_sitio_web']); ?></a>
      </aside>
      <div class="formulario">
        <?php $block = module_invoke('webform', 'block_view', 'client-block-14');print render($block['content']); ?>
      </div>
    </div>
  </article>

  <div id="noticias" class="container">
    <hr>
    <h3>Noticias</h3>
    <?php $view = views_get_view('anuncios'); print $view->preview('block_1'); ?>
  </div>

</section>
