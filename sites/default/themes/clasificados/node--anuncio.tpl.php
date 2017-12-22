<section id="anuncio" class="container">
  <div class="categorias">
    <div class="left"></div> 
    <?php $taxonomy_menu_block = block_load('taxonomy_menu_block','1'); $taxtmprender = _block_render_blocks(array($taxonomy_menu_block)); $taxtmprender2 = _block_get_renderable_array($taxtmprender); print drupal_render($taxtmprender2); ?>
    <div class="right"></div>
  </div>
  <span id="anuncioTitle">
    <hr>
    <h3 class="categoria"><?php print render($content['field_categoria']) ?></h3>
  </span>
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
        <?php 
          if ($i > 1) {
            print "
              <div id=countImg></div>
              <aside id=fullScream></aside>
            ";
          }
        ?>
      </div>
    </div>
    <div class="info">
      <aside class="pauta"></aside>
      <article class="container">
        <?php
          function get_timeago( $ptime ) {
            $estimate_time = time() - $ptime;
            if( $estimate_time < 1 ){
              return 'hace menos de 1 segundo';
            }
            $condition = array( 
              12 * 30 * 24 * 60 * 60  =>  'año',
              30 * 24 * 60 * 60       =>  'mes',
              24 * 60 * 60            =>  'día',
              60 * 60                 =>  'hora',
              60                      =>  'minuto',
              1                       =>  'segundo'
            );

            $a_plural = array( 'año'   => 'años',
                       'mes'  => 'meses',
                       'día'    => 'días',
                       'hora'   => 'horas',
                       'minuto' => 'minutos',
                       'segundo' => 'segundos'
            );

            foreach( $condition as $secs => $str ){
              $d = $estimate_time / $secs;

              if( $d >= 1 ){
                  $r = round( $d );
                  return 'Publicado hace ' . $r . ' ' . ( $r > 1 ? $a_plural[$str] : $str ) . ' ';
              }
            }
          }
          $timeago = get_timeago(strtotime(format_date($node->created, 'tpl')));
          print "<div class=fecha>".$timeago."</div>";
          print "<div class=ubicacion>".render($content['field_ubicacion'])."</div>";
          print "<h2 class=titulo>".$title."</h2>";
          print "<aside class=descripcion>Descripción</aside>";
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

  <div id="destacados">
    <hr>
    <aside class="estrellas"></aside>
    <h3>También te puede interesar</h3>
    <?php $view = views_get_view('anuncios'); print $view->preview('block'); ?>
  </div>

  <div class="pauta"></div>

  <div id="noticias">
    <hr>
    <h3>Noticias</h3>
    <?php $view = views_get_view('anuncios'); print $view->preview('block_1'); ?>
  </div>

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
    <aside id="cerrarGaleria">X</aside>
  </div>

</section>
<div class="backgroundAnuncio"></div>
