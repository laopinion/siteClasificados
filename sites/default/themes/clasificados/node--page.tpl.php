<section id="pagina">
  <?php if (!empty($tabs['#primary'])): ?><div id="tabs"><?php print render($tabs); ?></div><?php endif; ?>
  <div class="content">  
    <!-- Titulo --><h2><?php print $node->title ?></h2>
    <!-- Body --><div class="texto"><?php print render($content['body']); ?></div>
  </div>
</section> <!-- /#Pagina -->
