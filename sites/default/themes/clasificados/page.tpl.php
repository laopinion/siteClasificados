
<?php if (!empty($tabs['#primary'])): ?>

<div id="tabs"><?php print render($tabs); ?></div><?php endif; ?>

<?php 
  
  print render($page['content']); 

?>
