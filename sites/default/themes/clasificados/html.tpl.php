<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie6 ie" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 ie" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 ie" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <![endif]-->
<!--[if gt IE 8]> <!--> <html class="" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <!--<![endif]-->
<head>
  <?php print $head; ?>
  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
  <title><?php print $head_title; ?></title>
  <?php print $styles; ?>
  <?php print $scripts; ?>
  <!-- IE Fix for HTML5 Tags -->
  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <link rel="stylesheet" href="<?php print base_path(); ?>sites/default/themes/clasificados/dist/app.css">
</head>

<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <?php include("header.tpl.php"); ?>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
  <?php include("footer.tpl.php"); ?>

  <div class="message__whatsapp">
    <a title="Click para chatear" href="https://api.whatsapp.com/send?phone=573166941938&text=Me%20gustaría%20ordenar%20un%20aviso%20clasificado." target="_blank" rel="noopener"><i class="icon"></i></a>    
  </div>

  <script src="<?php print base_path(); ?>sites/default/themes/clasificados/dist/bundle.js"></script>
</body>

</html>
