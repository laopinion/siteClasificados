<header id="header">
  <section id="block1">
    <div class="container">
      <div class="user">
        <span><i class="iconUser"></i> <a href="<?php print base_path(); ?>user">Ingresar</a></span>
      </div>
    </div>
  </section>
  <section id="block2">
    <div class="container">
      <div class="fecha">
        <?php
          $dia = date("l");
          if ($dia=="Monday") $dia="Lunes";
          if ($dia=="Tuesday") $dia="Martes";
          if ($dia=="Wednesday") $dia="Miércoles";
          if ($dia=="Thursday") $dia="Jueves";
          if ($dia=="Friday") $dia="Viernes";
          if ($dia=="Saturday") $dia="Sábado";
          if ($dia=="Sunday") $dia="Domingo";
        ?>
        <span><?php print $dia; ?></span>
        <p><?php print date("d").'/'.date("m").'/'.date("Y");?></p>
        <p>Cúcuta - Colombia</p>
      </div>
      <div class="logo">
        <a href="<?php print base_path(); ?>"></a>
      </div>
      <div class="searchMovil"></div>
    </div>
  </section>
  <section id="block3">
    <div class="container">
      <ul class="opts">
        <li class="empleos opt"><a href="<?php print base_path(); ?>empleos">Empleo</a></li>
        <li class="autos opt"> <a href="<?php print base_path(); ?>vehiculos">Autos</a> </li>
        <li class="finca opt"> <a href="<?php print base_path(); ?>finca-raiz">Finca raiz</a> </li>
        <li class="varios opt"> <a href="<?php print base_path(); ?>varios">Varios</a> </li>
      </ul>
      <button class="hamburger hamburger--arrow" type="button">
        <span class="hamburger-box">
          <span class="hamburger-inner"></span>
        </span>
      </button>  
      <div class="buscador">
        <aside class="lupa"></aside>
        <?php $bloque_busqueda = module_invoke('search', 'block_view', 'search'); print render($bloque_busqueda);?>
        <!-- <form action="">
          <input type="text" placeholder="Escriba aqui su busqueda">
        </form> -->
      </div>
    </div>
  </section>
</header>
  