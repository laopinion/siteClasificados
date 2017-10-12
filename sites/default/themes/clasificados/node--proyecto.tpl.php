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

  <article id="formularioProyecto">
    <div class="formulario"></div>
    <div class="info">
      <?php print render($content['field_autor']) ?>
    </div>
  </article>

</section>
