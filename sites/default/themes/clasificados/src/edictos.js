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
      $('#form-edicto').show('slow');
    });

    $('#edit-submitted-documento').change(function () {     
      const cedula = $(this).val();
      $('#form-edicto #cedula').val(cedula);
    });

    this.signature();
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

}

module.exports = Edictos;
