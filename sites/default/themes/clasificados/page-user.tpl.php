<section id="login">
  <div class="container">
    <?php if (!empty($tabs['#primary'])): ?><div id="tabs"><?php print render($tabs); ?></div><?php endif; ?>
    <div id="title">
      <hr>
      <h3>Inicio de Sesión</h3>
    </div>

    <div id="inicio_sesion">
      <?php
      print(drupal_render(drupal_get_form('user_login_block')));
      ?>
    </div>
    <!--Fin Contenido-->
  </div><!-- Fin content--> 
</section>
