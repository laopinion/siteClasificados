<link 
  href="<?php print base_path(); ?>sites/default/themes/clasificados/pagos/paquetes.css"
  rel="stylesheet" 
/>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<?php
  // $accountId = "564188";//cambiar por los de produccion
  $accountId = "806287";//cambiar por los de produccion
  $merchantId = "561677";//cambiar por los de produccion
  $currency = "COP";
  $amount = "0";
  $url = "https://gateway.payulatam.com/ppp-web-gateway";//Production        
  // $url = "https://sandbox.gateway.payulatam.com/ppp-web-gateway/";// Test
  $responUrl = "https://clasificados.laopinion.com.co/";//Ruta de respuesta
?>

<div class="container" id="clasificados">
  <div class="head">
    <h1 class="title">ORDENE SU CLASIFICADO VÍA WHATSAPP</h1>
    <i class="icon__tel"></i>
    <h2>
      <a
        href="https://api.whatsapp.com/send?phone=573153934000&text=Hola,%20quiero%20publicar%20en%20Clasificados%20La%20Opini%C3%B3n%20%C2%BFqu%C3%A9%20debo%20hacer?"
        target="_blank"
        >3153934000</a
      >
    </h2>
    <h3>Pague en línea su clasificado</h3>
    <p>
      Le facilitamos el pago de sus clasificados poniendo a su disposición diferentes canales virtuales para su pago
    </p>
  </div>
  <div id="packages">

    <header>
      <i class="icon icon__finca"></i>
      <p>
        Temporalidad: <strong>30 días</strong> - Promoción: se comparte en <i class="icon instagram"></i> y <i class="icon facebook"></i> de <i class="clasificados"></i>
      </p>
      <p>Alcance: <strong>10k </strong> por publicación</p>
      <h2 class="title">Escoja el paquete de su anuncio</h2>
    </header>
    <ul id="finca">
      <li id="package_1">
        <div class="words">
          <span>3</span>
          <span>Avisos</span>
        </div>
        <div class="days">
          <span>1</span>
          <span>Proyecto</span>
        </div>
        <div class="value">
          <span>$417.000</span>
        </div>
        <div class="btn">
          <button>Seleccionar</button>
        </div>
      </li>
      <li id="package_2">
        <div class="words">
          <span>10</span>
          <span>Avisos</span>
        </div>
        <div class="days">
          <span>3</span>
          <span>Proyectos</span>
        </div>
        <div class="value">
          <span>$1'307.000</span>
        </div>
        <div class="btn">
          <button>Seleccionar</button>
        </div>
      </li>
      <li id="package_3">
        <div class="words">
          <span>50</span>
          <span>Avisos</span>
        </div>
        <div class="days">
          <span>5</span>
          <span>Proyectos</span>
        </div>
        <div class="value">
          <span>$1'920.000</span>
        </div>
        <div class="btn">
          <button>Seleccionar</button>
        </div>
      </li>
      <li id="package_4">
        <div class="words">
          <span>100</span>
          <span>Avisos</span>
        </div>
        <div class="days">
          <span>10</span>
          <span>Proyectos</span>
        </div>
        <div class="value">
          <span>$3'450.000</span>
        </div>
        <div class="btn">
          <button>Seleccionar</button>
        </div>
      </li>
    </ul>

    <header>
      <i class="icon icon__vehiculo"></i>
      <p>
        Temporalidad: <strong>30 días</strong> - Promoción: se comparte en <i class="icon instagram"></i> y <i class="icon facebook"></i> de <i class="clasificados"></i>
      </p>
      <p>Alcance: <strong>10k </strong> por publicación</p>
      <h2 class="title">Escoja el paquete de su anuncio</h2>
    </header>

    <ul id="vehiculo">
      <li id="package_1">
        <div class="words">
          <span>1</span>
          <span>Aviso</span>
        </div>
        <!-- <div class="days">
          <span>4</span>
          <span>Días</span>
        </div> -->
        <div class="value">
          <span>$45.000</span>
        </div>
        <div class="btn">
          <button>Seleccionar</button>
        </div>
      </li>
      <li id="package_2">
        <div class="words">
          <span>3</span>
          <span>Avisos</span>
        </div>
        <!-- <div class="days">
          <span>4</span>
          <span>Días</span>
        </div> -->
        <div class="value">
          <span>$122.000</span>
        </div>
        <div class="btn">
          <button>Seleccionar</button>
        </div>
      </li>
      <li id="package_3">
        <div class="words">
          <span>5</span>
          <span>Avisos</span>
        </div>
        <!-- <div class="days">
          <span>4</span>
          <span>Días</span>
        </div> -->
        <div class="value">
          <span>$180.000</span>
        </div>
        <div class="btn">
          <button>Seleccionar</button>
        </div>
      </li>
      <li id="package_4">
        <div class="words">
          <span>10</span>
          <span>Avisos</span>
        </div>
        <!-- <div class="days">
          <span>10</span>
          <span>Avisos</span>
        </div> -->
        <div class="value">
          <span>$315.000</span>
        </div>
        <div class="btn">
          <button>Seleccionar</button>
        </div>
      </li>
    </ul>

    <header>
      <i class="icon icon__empleo"></i>
      <p>
        Temporalidad: <strong>30 días</strong> - Promoción: se comparte en <i class="icon instagram"></i> y <i class="icon facebook"></i> de <i class="clasificados"></i>
      </p>
      <p>Alcance: <strong>10k </strong> por publicación</p>
      <h2 class="title">Escoja el paquete de su anuncio</h2>
    </header>

    <ul id="empleo">
      <li id="package_1">
        <div class="words">
          <span>1</span>
          <span>Aviso</span>
        </div>
        <!-- <div class="days">
          <span>4</span>
          <span>Días</span>
        </div> -->
        <div class="value">
          <span>$70.000</span>
        </div>
        <div class="btn">
          <button>Seleccionar</button>
        </div>
      </li>
      <li id="package_2">
        <div class="words">
          <span>3</span>
          <span>Avisos</span>
        </div>
        <!-- <div class="days">
          <span>4</span>
          <span>Días</span>
        </div> -->
        <div class="value">
          <span>$89.000</span>
        </div>
        <div class="btn">
          <button>Seleccionar</button>
        </div>
      </li>
      <li id="package_3">
        <div class="words">
          <span>5</span>
          <span>Avisos</span>
        </div>
        <!-- <div class="days">
          <span>4</span>
          <span>Días</span>
        </div> -->
        <div class="value">
          <span>$315.000</span>
        </div>
        <div class="btn">
          <button>Seleccionar</button>
        </div>
      </li>
      <li id="package_4">
        <div class="words">
          <span>10</span>
          <span>Avisos</span>
        </div>
        <!-- <div class="days">
          <span>4</span>
          <span>Días</span>
        </div> -->
        <div class="value">
          <span>$630.000</span>
        </div>
        <div class="btn">
          <button>Seleccionar</button>
        </div>
      </li>
    </ul>
  </div>
  <div id="formulario" style="display: none;">
    <h2>Datos personales</h2>
    <form id="form-anuncio" method="post" action="<?=$url?>">
      <input name="merchantId" type="hidden" value="<?=$merchantId?>" />
      <input name="accountId" type="hidden" value="<?=$accountId ?>" />
      <input
        id="description"
        name="description"
        type="hidden"
        value="Description package"
      />
      <input
        id="referenceCode"
        name="referenceCode"
        type="hidden"
        value="0"
      />
      <input id="amount" name="amount" type="hidden" value="0" />
      <input name="tax" type="hidden" value="0" />
      <input name="taxReturnBase" type="hidden" value="0" />
      <input name="currency" type="hidden" value="<?=$currency?>" />
      <input id="signature" name="signature" type="hidden" value="0" />
      <input
        name="test"
        type="hidden"
        value="0"
      /><!--Dejar en 0 cuando sea produccion-->
      <input type="hidden" name="shippingCountry" value="CO" />
      <input
        id="payerFullName"
        type="hidden"
        name="payerFullName"
        value=""
      />
      <div class="formulario">
        <div class="form-item">
          <label for="nombres">Nombre</label>
          <input
            id="nombres"
            type="text"
            name="nombres"
            class="form-text"
          />
        </div>
        <div class="form-item">
          <label for="apellidos">Apellido</label>
          <input
            id="apellidos"
            type="text"
            name="apellidos"
            class="form-text"
          />
        </div>
        <div class="form-item">
          <label for="cedula">Cédula de ciudadanía</label>
          <input
            id="cedula"
            type="text"
            name="payerDocument"
            class="form-text"
          />
        </div>
        <div class="form-item">
          <label for="telefono">Teléfono (celular)</label>
          <input
            type="text"
            name="mobilePhone"
            class="form-text"
            required
          />
        </div>
        <div class="form-item">
          <label for="correo">Correo electrónico</label>
          <input
            type="email"
            name="buyerEmail"
            class="form-text"
            required
          />
        </div>
        <div class="form-item">
          <label for="package_option">Paquete</label>
          <select id="package_option">
            <option value="1">3 avisos - 1 proyecto Finca Raíz</option>
            <option value="2">10 avisos - 3 proyectos Finca Raíz</option>
            <option value="3">50 avisos - 5 proyectos Finca Raíz</option>
            <option value="4">100 avisos - 10 proyectos Finca Raíz</option>
            <option value="5">1 aviso Vehículos</option>
            <option value="6">3 avisos Vehículos</option>
            <option value="7">5 avisos Vehículos</option>
            <option value="8">10 avisos Vehículos</option>
            <option value="9">1 aviso Empleo</option>
            <option value="10">3 avisos Empleo</option>
            <option value="11">5 avisos Empleo</option>
            <option value="12">10 avisos Empleo</option>
          </select>
        </div>
        <div class="form-item terminos">
          <input
            type="radio"
            name="terminos"
            value="Acepta terminos y condiciones"
            required
          />
          <label
            class="option"
            for="edit-submitted-terminos-y-condiciones-de-uso-1"
            >Acepto los
            <a
              href="https://www.laopinion.com.co/terminos-y-condiciones"
              target="_blank"
              >términos y condiciones</a
            >
            y he leído la
            <a
              href="https://www.laopinion.com.co/politica-de-tratamiento-de-datos-personales"
              target="_blank"
            >
              política de tratamiento de los datos personales</a
            >
          </label>
        </div>
        <div id="btn__submit" class="form-actions waves">
          <input
            class="submit"
            name="Submit"
            type="submit"
            value="Comprar"
          />
        </div>
      </div>
    </form>
  </div>

  <!-- <div class="message__whatsapp">
    <a title="Click para chatear" href="https://api.whatsapp.com/send?phone=573166941938&text=Me%20gustaría%20ordenar%20un%20aviso%20clasificado." target="_blank" rel="noopener"><i class="icon"></i></a>
    
  </div> -->
</div>

<script src='<?php print base_path(); ?>sites/default/themes/clasificados/pagos/paquetes.js'></script>
