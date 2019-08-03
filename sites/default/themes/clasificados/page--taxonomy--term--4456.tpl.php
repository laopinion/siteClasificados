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

<section id="Ordenar__edicto">
  <div class="slide">
    <img src="<?php print base_path(); ?>sites/default/themes/clasificados/src/img/edictos.jpg" alt="Edictos">
  </div>
  <div class="container">
    <header class="header__edicto">
      <h3>Ahora podrás publicar aquí sus EDICTOS, remates y otros avisos judiciales por solo: $65.000</h3>
      <ul>
        <li>Cumplimos con las disposiciones del CGP. (Ley 1564 del 2012)</li>
        <li>Permanencia del mensaje por 15 días calendario en el sitio web y 1 dia en medio impreso</li>
        <li>Certificado al finalizar el tiempo de publicación</li>
        <li>Facilidad en la búsqueda y en la consulta</li>
      </ul>
      <h2>ORDENE SU EDICTO</h2>
    </header>

    <section id="webform__edicto">
      <?php //$block = module_invoke('webform', 'block_view', 'client-block-34');print render($block['content']); ?>
      <?php $block = module_invoke('webform', 'block_view', 'client-block-87');print render($block['content']); ?>
    </section>

    <section id="formulario" style="display: none;">
      <h2>Datos personales</h2>
      <form id="form-edicto" method="post" action="<?=$url?>">
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
              required
            />
          </div>
          <div class="form-item">
            <label for="telefono">Teléfono (celular)</label>
            <input
              id="tel"
              type="text"
              name="mobilePhone"
              class="form-text"
              required
            />
          </div>
          <div class="form-item">
            <label for="correo">Correo electrónico</label>
            <input
              id="email"
              type="email"
              name="buyerEmail"
              class="form-text"
              required
            />
          </div>
          <div class="form-item terminos">
            <input
              type="radio"
              id="terminos-condiciones"
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
            <button 
              class="submit"
              name="Submit"
              type="submit"
            >Comprar</button>
            <!-- <input
              class="submit"
              name="Submit"
              type="submit"
              value="Comprar"
            /> -->
          </div>
        </div>
      </form>
    </section>
  </div>
</section>