import $ from './jquery';

class Edictos {
  constructor (amount) {
    // this.edicto = edicto
    this.amount = amount;
  }

  submit() {
    $('#form-edicto').submit(function() {
      const nombres = $('#Ordenar__edicto #nombres').val();
      const apellidos = $('#Ordenar__edicto #apellidos').val();
      $('#payerFullName').val(nombres + " " + apellidos);
    });

    $('#edit-webform-ajax-submit-34').click(function () {
      $('#formulario').show('slow');
      $('#webform__edicto').css({ marginBottom: '50px' });
    });
    // Form production
    $('#edit-webform-ajax-submit-87').click(function () {
      $('#formulario').show('slow');
      $('#webform__edicto').css({ marginBottom: '50px' });
    });
    
    $('#edit-submitted-documento').change(function () {     
      const cedula = $(this).val();
      $('#form-edicto #cedula').val(cedula);
    });

    this.signature();
    this.waves();
  }

  signature() {
    let nuevoAmount = this.amount;
    const domain = window.location.origin

    $("#Ordenar__edicto #amount").val(nuevoAmount);
    $("#Ordenar__edicto #description").val('Pago edicto');
  
    $.ajax({
      type: "POST",
      url: `${domain}/sites/default/themes/clasificados/signature.php`,
      data: { amount: nuevoAmount },
      success: function(data) {
        const separador = " "; // un espacio en blanco
        const limite = 2;
        const arreglo = data.split(separador, limite);

        $("#Ordenar__edicto #signature").val(arreglo[0]);
        $("#Ordenar__edicto #referenceCode").val(arreglo[1]);
        
        $('#Ordenar__edicto #edit-submitted-referencia-de-pago').val(arreglo[1]);
      },
      error: function() {
        console.log("Error en crear la signature...");
      }
    });
  }

  waves() {
    const $waves = document.getElementById("btn__submit");

    function wavesRipple(e) {
      // e.preventDefault();
      let _this = this;

      let $child = document.querySelector(".waves-ripple");
      if ($child != null) {
        // console.log($child)
        _this.removeChild($child);
      }

      let posX = _this.offsetLeft,
        posY = _this.offsetTop,
        buttonWidth = _this.offsetWidth,
        buttonHeight = _this.offsetHeight;

      const el = document.createElement("span");
      el.setAttribute("class", "waves-ripple");
      _this.appendChild(el);

      if (buttonWidth >= buttonHeight) {
        buttonHeight = buttonWidth;
      } else {
        buttonWidth = buttonHeight;
      }

      let x = e.pageX - posX - buttonWidth / 2;
      let y = e.pageY - posY - buttonHeight / 2;

      const $ripple = document.querySelector(".waves-ripple");

      // $ripple.setAttribute('style', `width: ${buttonWidth}px; height: ${buttonHeight}px; top: ${y}px; left: ${x}px; `);
      $ripple.style.width = buttonWidth + "px";
      $ripple.style.height = buttonHeight + "px";
      $ripple.style.top = y + "px";
      $ripple.style.left = x + "px";
      $ripple.classList.add("waves-animate");
      // console.log($ripple);
    }

    $waves.addEventListener("click", wavesRipple);
  }

}

module.exports = Edictos;
