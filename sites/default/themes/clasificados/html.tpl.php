<!DOCTYPE html>
<!--[if lt IE 7]> <html class="ie6 ie" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 ie" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 ie" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <![endif]-->
<!--[if gt IE 8]> <!--> <html class="" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <!--<![endif]-->
<head>
  <?php print $head; ?>
  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
  <meta name="robots" content="index, follow">
  <meta itemprop="genre" content="Food" />
  <meta itemprop="inLanguage" content="es-ES" />
  <meta property="og:locale:alternate" content="es_CO" />
  <meta property="og:locale" content="es_CO" />
  <meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE" />

  <meta charset="UTF-8" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php print $head_title; ?></title>

  <!--Icono precomposed-->
  <link rel="apple-touch-icon-precomposed" href="<?php print base_path(); ?>sites/default/themes/clasificados/images/icon/touch-icon-iphone.png">
  <link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?php print base_path(); ?>sites/default/themes/clasificados/images/icon/touch-icon-ipad.png">
  <link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php print base_path(); ?>sites/default/themes/clasificados/images/icon/touch-icon-iphone-retina.png">
  <link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php print base_path(); ?>sites/default/themes/clasificados/images/icon/touch-icon-ipad-retina.png">
  <link rel="apple-touch-icon-precomposed" sizes="180x180" href="<?php print base_path(); ?>sites/default/themes/clasificados/images/icon/touch-icon-iphone-6-plus.png">
  <!--FIN Icono precomposed-->
  <?php print $styles; ?>
  <?php print $scripts; ?>
  <!-- IE Fix for HTML5 Tags -->
  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <link rel="stylesheet" href="<?php print base_path(); ?>sites/default/themes/clasificados/dist/app.css">

  <meta name="description" content="El portal de anuncios clasificados más grande de Norte de Santander, clasificados de compra, venta y arriendo de finca raíz; compra, venta de vehículos; ofertas de empleo y demás en Norte de Santander.">
  <meta name="keywords" content="vehículos, empleo, arriendos, venta, ofertas, servicios, avisos, clasificados, cúcuta, los patios, villa del rosario, el zulia, pamplona, chinácota, norte de santander, colombia, clasificados la opinión"/>
  <link rel="canonical" href="https://clasificados.laopinion.com.co">
  <link rel="image_src" href="https://clasificados.laopinion.com.co/sites/default/themes/clasificados/images/compartir.jpg" />

  <meta name="twitter:widgets:csp" content="on">
  <meta name="twitter:image" content="https://clasificados.laopinion.com.co/sites/default/themes/clasificados/images/compartir.jpg" />
  
  <meta property="og:type" content="website" />
  <meta property="og:url" content="https://clasificados.laopinion.com.co/" />
  <meta property="og:description" content="Clasificados La Opinión cuenta con el mayor catálogo de anuncios clasificados en las categorias de empleo, venta y arriendo de vivienda, venta de carros, motos usadas, servicios y mucho más." />
  <meta name="author" content="La Opinión - Cúcuta"/>
  <meta name="google" content="notranslate" />
  <meta name="geo.region" content="CO" />
  <meta name="geo.placename" content="Colombia" />
  <meta name="language" content="spanish" />
  <!-- Schema.org markup for Google+ -->
  <meta itemprop="name" content="Clasificados La Opinión cuenta con el mayor catálogo de anuncios clasificados en las categorias de empleo, venta y arriendo de vivienda, venta de carros, motos usadas, servicios y mucho más." />
  <meta itemprop="description" name="description" content="Clasificados La Opinión cuenta con el mayor catálogo de anuncios clasificados en las categorias de empleo, venta y arriendo de vivienda, venta de carros, motos usadas, servicios y mucho más."/>
  <meta itemprop="image" content="https://clasificados.laopinion.com.co/sites/default/themes/clasificados/images/compartir.jpg" />
  <!-- twit card-->
  <meta name="twitter:card" content="summary" />
  <meta name="twitter:description" content="Clasificados La Opinión cuenta con el mayor catálogo de anuncios clasificados en las categorias de empleo, venta y arriendo de vivienda, venta de carros, motos usadas, servicios y mucho más.">
  <meta name="twitter:url" content="https://clasificados.laopinion.com.co"> 
  <meta name="twitter:site" content="@laopinioncucuta" />
  <meta name="twitter:title" content="Anuncios clasificados empleos, finca raíz, vehículos, serivicios y más | Clasificados La Opinión - Cúcuta">
  <meta name="twitter:creator" content="@laopinioncucuta">

  <meta property="fb:admins" content="396392827606512" />
  <meta property="og:locale:alternate" content="es_CO" />
  <meta property="og:locale" content="es_CO" />
  <meta itemprop="genre" content="Website" />
  <meta itemprop="inLanguage" content="es-ES" />
  <meta name="fechaprint" content="<?php print date('m/d/Y h:i:s a', time()); ?>" />
  <?php include_once('script_pautas.php'); ?>
  <!-- ANALYTICS CODE -->
  <?php include_once("analyticstracking.php") ?>
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
