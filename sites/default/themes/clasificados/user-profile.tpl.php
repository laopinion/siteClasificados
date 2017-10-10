<section id="profile" class="container">
  <article id="profileInfo">
    <hr>
    <h3><?php print render($user_profile['field_tipo']) ?></h3>
    <article class="descripcion"> 
      <div class="logo"><?php print render($user_profile['user_picture']) ?></div>
      <p class="texto"><?php print render($user_profile['field_descripcion']) ?></p>
    </article>
  </article>
</section>
