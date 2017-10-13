<div class="menu_seccion"<?php print $attributes; ?>>
  <div class="<?php echo trim(strtolower($block->subject)); ?>">
    <?php print render($title_prefix); ?>
    <?php if ($block->subject): ?>
      <div id="titleCategoria">
        <h3 class="nameCategorias">Categorías </h3>
        <h3 id="nameCategoria"<?php print $title_attributes; ?>><?php print $block->subject; ?></h3>
      </div>
    <?php endif; ?>
    <?php print render($title_suffix); ?>
      <div class="submenu">
        <?php print $content ?>
        <div class="banda"></div>
      </div>
  </div>
</div>