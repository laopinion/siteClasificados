<link 
  href="<?php print base_path(); ?>sites/default/themes/clasificados/pagos/pago-online.css"
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
    <h2 class="title">Escoja el paquete de su anuncio</h2>
    <p>
      Pensando en sus necesidades, le ofrecemos diferentes paquetes que se ajustan a la publicación de sus avisos clasificados. Elija la opción más conveniente para usted
    </p>

    <h3>Redes sociales / impreso</h3>
    <!-- Paquetes #1 -->
    <ul class="packages__one">
      <li id="package_9">
        <div class="words">
          <span>Avisos</span>
          <span>Facebook e Instagram</span>
        </div>
        <div class="days">
          <span class="day__four">1 publicación</span>
          <span class="day__one">Feed + Historia</span>
        </div>
        <div class="value">
          <span>$20.000</span>
        </div>
        <div class="btn">
          <button>Seleccionar</button>
        </div>
      </li>
      <li id="package_10">
        <div class="words">
          <span>Aviso + Redes</span>
          <span>Impreso (La Opinión y Q'hubo) + Facebook e Instagram</span>
        </div>
        <div class="days">
          <span class="day__one">4 días</span>          
          <span class="day__two">6 - 10</span>
          <span class="day__three">palabras</span>
        </div>
        <div class="value">
          <span>$29.000</span>
        </div>
        <div class="btn">
          <button>Seleccionar</button>
        </div>
      </li>
      <li id="package_11">
        <div class="words">
          <span>Busco empleo</span>
          <span>Profesión + Telefóno + Correo electrónico</span>
        </div>
        <div class="days">
          <span class="day__one">25 días</span>          
          <span class="day__two">6 - 10</span>
          <span class="day__three">palabras</span>
        </div>
        <div class="value">
          <span>$9.500</span>
        </div>
        <div class="btn">
          <button>Seleccionar</button>
        </div>
      </li>
      <li id="package_12">
        <div class="words">
          <span>Aviso + Redes</span>
          <span>Impreso (La Opinión o Q'hubo) + Facebook e Instagram</span>
        </div>
        <div class="days">
          <span class="day__one">4 días</span>          
          <span class="day__two">6 - 10</span>
          <span class="day__three">palabras</span>
        </div>
        <div class="value">
          <span>$25.000</span>
        </div>
        <div class="btn">
          <button>Seleccionar</button>
        </div>
      </li>
      <li id="package_13">
        <div class="words">
          <span>Aviso + Redes</span>
          <span>Impreso (La Opinión o Q'hubo) + Facebook e Instagram</span>
        </div>
        <div class="days">
          <span class="day__one">8 días</span>          
          <span class="day__two">6 - 10</span>
          <span class="day__three">palabras</span>
        </div>
        <div class="value">
          <span>$43.000</span>
        </div>
        <div class="btn">
          <button>Seleccionar</button>
        </div>
      </li>
    </ul>

    <h3>4 y 8 días en impreso (La Opinión + Q'hubo)</h3>    
    <!-- Paquetes #2 -->
    <ul class="packages__two">
      <li id="package_1_1">
        <div class="days">
          <span class="day__one">4 días</span>     
          <span class="day__two">0 - 5</span>
          <span class="day__three">palabras</span>
        </div>
        <div class="value">
          <span>$14.000</span>
        </div>
        <div class="btn">
          <button>Seleccionar</button>
        </div>
      </li>
      <li id="package_2_1">
        <div class="days">
          <span class="day__one">4 días</span>          
          <span class="day__two">6 - 10</span>
          <span class="day__three">palabras</span>
        </div>
        <div class="value">
          <span>$20.000</span>
        </div>
        <div class="btn">
          <button>Seleccionar</button>
        </div>
      </li>
      <li id="package_6_1">
        <div class="days">
          <span class="day__one">8 días</span>          
          <span class="day__two">0 - 5</span>
          <span class="day__three">palabras</span>
        </div>
        <div class="value">
          <span>$26.000</span>
        </div>
        <div class="btn">
          <button>Seleccionar</button>
        </div>
      </li>
      <li id="package_7_1">
        <div class="days">
          <span class="day__one">8 días</span>          
          <span class="day__two">6 - 10</span>
          <span class="day__three">palabras</span>
        </div>
        <div class="value">
          <span>$38.000</span>
        </div>
        <div class="btn">
          <button>Seleccionar</button>
        </div>
      </li>
    </ul>

    <h3>4 días en impreso (La Opinión ó Q'hubo)</h3> 
    <!-- Paquetes #3 -->
    <ul class="packages__three">
      <li id="package_1">
        <div class="days">
          <span class="day__one">4 días</span>          
          <span class="day__two">0 - 5</span>
          <span class="day__three">palabras</span>
        </div>
        <div class="value">
          <span>$12.000</span>
        </div>
        <div class="btn">
          <button>Seleccionar</button>
        </div>
      </li>
      <li id="package_2">
        <div class="days">
          <span class="day__one">4 días</span>          
          <span class="day__two">6 - 10</span>
          <span class="day__three">palabras</span>
        </div>
        <div class="value">
          <span>$18.000</span>
        </div>
        <div class="btn">
          <button>Seleccionar</button>
        </div>
      </li>
      <li id="package_3">
        <div class="days">
         <span class="day__one">4 días</span>          
          <span class="day__two">11 - 20</span>
          <span class="day__three">palabras</span>
        </div>
        <div class="value">
          <span>$41.000</span>
        </div>
        <div class="btn">
          <button>Seleccionar</button>
        </div>
      </li>
      <li id="package_4">
        <div class="days">
          <span class="day__one">4 días</span>          
          <span class="day__two">21 - 30</span>
          <span class="day__three">palabras</span>
        </div>
        <div class="value">
          <span>$65.000</span>
        </div>
        <div class="btn">
          <button>Seleccionar</button>
        </div>
      </li>
    </ul>

    <h3>8 y 15 días en impreso (La Opinión ó Q'hubo)</h3> 
    <!-- Paquetes #3 -->
    <ul class="packages__four">
      <li id="package_6">
        <div class="days">
          <span class="day__one">8 días</span>          
          <span class="day__two">0 - 5</span>
          <span class="day__three">palabras</span>
        </div>
        <div class="value">
          <span>$24.000</span>
        </div>
        <div class="btn">
          <button>Seleccionar</button>
        </div>
      </li>
      <li id="package_7">
        <div class="days">
          <span class="day__one">8 días</span>          
          <span class="day__two">6 - 10</span>
          <span class="day__three">palabras</span>
        </div>
        <div class="value">
          <span>$36.000</span>
        </div>
        <div class="btn">
          <button>Seleccionar</button>
        </div>
      </li>
      <li id="package_8">
        <div class="days">
          <span class="day__one">15 días</span>          
          <span class="day__two">0 - 5</span>
          <span class="day__three">palabras</span>
        </div>
        <div class="value">
          <span>$48.000</span>
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
            <option value="1">0 - 5 Palabras 4 días</option>
            <option value="2">6 - 10 Palabras 4 días</option>
            <option value="3">11 - 20 Palarbas 4 días</option>
            <option value="4">21 - 30 Palabras 4 días</option>
            <option value="6">0 - 5 Palabras 8 días</option>
            <option value="7">6 - 10 Palabras 8 días</option>
            <option value="8">0 - 5 Palabras 15 días</option>
            <!-- <option value="5">Facebook mascotas</option> -->
            <option value="9">Avisos Facebook e Instagram</option>
            <option value="10">Aviso + Redes Impreso (La Opinión y Q'hubo) + Facebook e Instagram</option>
            <option value="11">0 - 5 Palabras 4 días - impreso (La Opinión + Q'hubo)</option>
            <option value="12">6 - 10 Palabras 4 días - impreso (La Opinión + Q'hubo)</option>
            <!-- <option value="13">11 - 20 Palabras 4 días Qhubo - La opinión</option>
            <option value="14">21 - 30 Palabras 4 días Qhubo - La opinión</option> -->
            <option value="15">0 - 5 Palabras 8 días - impreso (La Opinión + Q'hubo)</option>
            <option value="16">6 - 10 Palabras 8 días - impreso (La Opinión + Q'hubo)</option>
            <!-- <option value="17">0 - 5 Palabras 15 días Qhubo - La opinión</option> -->
            <option value="18">Busco empleo 25 días Profesión + Telefóno + Correo electrónico</option>
            <option value="19">Aviso + Redes Impreso (La Opinión o Q'hubo) + Facebook e Instagram - 4 días</option>
            <option value="20">Aviso + Redes Impreso (La Opinión o Q'hubo) + Facebook e Instagram - 8 días</option>
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

<script src='<?php print base_path(); ?>sites/default/themes/clasificados/pagos/pago-online.js'></script>
