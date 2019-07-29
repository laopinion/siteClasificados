<section id="Edictos" class="container">
  <?php
    require_once 'get_time_anuncio.php';
    $timeago = get_timeago(strtotime(format_date($node->created, 'tpl')));
    
    
  ?>
  <div class="logo">
    <?php print render($content['field_image_edicto']); ?>
  </div>
  <div class="edicto__title">
    <?php
      print "<div class=fecha>".$timeago."</div>";
      print "<h2 class=titulo>".$title."</h2>";
    ?>
  </div>
  <article class="edicto__body">
    <?php
      print "<aside class=descripcion>Descripción</aside>";
      print "<div class=body>". render($content['body'])."</div>";
    ?>
  </article>
</section>
