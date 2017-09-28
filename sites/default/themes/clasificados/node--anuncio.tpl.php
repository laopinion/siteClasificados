<section id="anuncio" class="container">
  <div class="categorias">
  
  </div>

  <article class="anuncioNota">
    <div class="galeria">
      <div id="slider-anuncio" class="imgDestacada">
        <ul class="rslides-anuncio">
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
    </div>
    <div class="info">
      <aside class="pauta"></aside>
      <?php
        print "<div class=fecha>".render($content['field_fecha'])."</div>";
        print "<div class=ubicacion>".render($content['field_ubicacion'])."</div>";
        print "<h2 class=titulo>".$title."</h2>";
        print "<aside>Descripcion</aside>";
        print "<div class=body>". render($content['body'])."</div>";
        if($content['field_telefono']){
          print "<div class=telefono>". render($content['field_telefono'])."</div>";
        }
      ?>
      <aside class="comparte">
      </aside>
    </div>
  </article>

</section>
