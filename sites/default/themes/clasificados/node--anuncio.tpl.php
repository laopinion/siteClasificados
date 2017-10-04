<section id="anuncio" class="container">
  <div class="categorias">
  
  </div>
  <hr>
  <!-- Nota imprimir el name de la taxonomia -->
  <h3 class="vehiculos">Vehículos</h3>
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
        <aside id="fullScream"></aside>
      </div>
    </div>
    <div class="info">
      <aside class="pauta"></aside>
      <article class="container">
        <?php
          print "<div class=fecha>".render($content['field_fecha'])."</div>";
          print "<div class=ubicacion>".render($content['field_ubicacion'])."</div>";
          print "<h2 class=titulo>".$title."</h2>";
          print "<aside class=descripcion>Descripcion</aside>";
          print "<div class=body>". render($content['body'])."</div>";
          if($content['field_telefono']){
            print "<div class=telefono>". render($content['field_telefono'])."</div>";
          }
        ?>
        <aside class="comparte">
          <p>Comparte</p>
          <script>
            !function(d,s,id){
              var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';
              if(!d.getElementById(id)){
                js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";
                fjs.parentNode.insertBefore(js,fjs);
              }
            }(document,"script","twitter-wjs");
          </script>
          <ul class="redes_sociales">
            <li class="compartir cmp"></li>
            <li class="fb cmp"><a class="st_facebook_large" href="#" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=https://clasificados.laopinion.com.co<?php print $node_url ?>&amp;title=<?php print $title ?>', 'facebook-share-dialog', 'width=626,height=436'); return false;"></a></li>
            <li class="tw cmp"><a class="st_twitter_large" href="https://twitter.com/intent/tweet?original_referer=https://clasificados.laopinion.com.co<?php print $node_url ?>&amp;text=<?php print $title ?>&amp;tw_p=tweetbutton&amp;url=https://clasificados.laopinion.com.co<?php print $node_url ?>"></a></li>
            <li class="go cmp"><a class="st_googleplus_large" href="#" onclick="window.open('https://plus.google.com/share?url=https://clasificados.laopinion.com.co<?php print $node_url ?>', 'Google +','width=626,height=436'); return false;"></a></li>
            <li class="wp cmp"><a class="st_whatsapp_large" <a href="whatsapp://send?text=<?php print "https://clasificados.laopinion.com.co/".drupal_lookup_path('alias',"node/".$node->nid); ?>" data-action="share/whatsapp/share" rel="nofollow" ></a></li>
          </ul>
        </aside>
      </article>
    </div>
  </article>

  <div id="slider-fullScream">
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

</section>
<div class="backgroundAnuncio"></div>
