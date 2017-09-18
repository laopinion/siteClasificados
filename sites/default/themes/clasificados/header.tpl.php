<header id="header">
  <section id="block1">
    <div class="container">
      <div class="user">
        <span><i class="iconUser"></i> Ingresar</span>
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
    </div>
  </section>
  <section id="block3">
    <div class="container">
      <ul class="opts">
        <li class="empleos opt"><a href="#empleos">Empleo</a></li>
        <li class="autos opt"> <a href="#autos">Autos</a> </li>
        <li class="finca opt"> <a href="#finca-raiz">Finca raiz</a> </li>
        <li class="varios opt"> <a href="#varios">Varios</a> </li>
      </ul>
      <div class="buscador">
        <aside class="lupa"></aside>
        <form action="">
          <input type="text" placeholder="Escriba aqui su busqueda">
        </form>
      </div>
    </div>
  </section>
</header>
  