import $ from './jquery';

class Home {
  constructor(autos, empleo) {
    this.name = 'John serrano';
    this.autos = autos;
    this.empleo = empleo;
  }
  
  verMas () {
    $('#home #empleos .flecha').click(function() {
      const activo = $(this).data('activo');
      if(activo == 0){
        $('#home #empleos .views-row-6, #home #empleos .views-row-7, #home #empleos .views-row-8, #home #empleos .views-row-9, #home #empleos .views-row-10').slideDown("slow");
        $(this).data('activo', 1);
        $(this).removeClass('down');
        $(this).addClass('up');
      }else{
        $('#home #empleos .views-row-6, #home #empleos .views-row-7, #home #empleos .views-row-8, #home #empleos .views-row-9, #home #empleos .views-row-10').slideUp("slow");
        $(this).data('activo', 0);
        $(this).removeClass('up');
        $(this).addClass('down');
      }
    });
    
    $('#home #vehiculos .flecha').click(function() {
      const activo = $(this).data('activo');
      if(activo == 0){
        $('#home #vehiculos .views-row-6, #home #vehiculos .views-row-7, #home #vehiculos .views-row-8, #home #vehiculos .views-row-9, #home #vehiculos .views-row-10').slideDown("slow");
        $(this).data('activo', 1);
        $(this).removeClass('down');
        $(this).addClass('up');
      }else{
        $('#home #vehiculos .views-row-6, #home #vehiculos .views-row-7, #home #vehiculos .views-row-8, #home #vehiculos .views-row-9, #home #vehiculos .views-row-10').slideUp("slow");
        $(this).data('activo', 0);
        $(this).removeClass('up');
        $(this).addClass('down');
      }
    });
    
    $('#home #fincaRaiz .flecha').click(function() {
      const activo = $(this).data('activo');
      if(activo == 0){
        $('#home #fincaRaiz .views-row-6, #home #fincaRaiz .views-row-7, #home #fincaRaiz .views-row-8, #home #fincaRaiz .views-row-9, #home #fincaRaiz .views-row-10').slideDown("slow");
        $(this).data('activo', 1);
        $(this).removeClass('down');
        $(this).addClass('up');
      }else{
        $('#home #fincaRaiz .views-row-6, #home #fincaRaiz .views-row-7, #home #fincaRaiz .views-row-8, #home #fincaRaiz .views-row-9, #home #fincaRaiz .views-row-10').slideUp("slow");
        $(this).data('activo', 0);
        $(this).removeClass('up');
        $(this).addClass('down');
      }
    });
    
    $('#home #varios .flecha').click(function() {
      const activo = $(this).data('activo');
      if(activo == 0){
        $('#home #varios .views-row-6, #home #varios .views-row-7, #home #varios .views-row-8, #home #varios .views-row-9, #home #varios .views-row-10').slideDown("slow");
        $(this).data('activo', 1);
        $(this).removeClass('down');
        $(this).addClass('up');
      }else{
        $('#home #varios .views-row-6, #home #varios .views-row-7, #home #varios .views-row-8, #home #varios .views-row-9, #home #varios .views-row-10').slideUp("slow");
        $(this).data('activo', 0);
        $(this).removeClass('up');
        $(this).addClass('down');
      }
    });
  }

  slides () {
    // Cargamos las images del slider
    $('#autos').attr('src', `sites/default/themes/clasificados/dist/${this.autos}`);
    $('#empleosPortada').attr('src', `sites/default/themes/clasificados/dist/${this.empleo}`);
    // console.log(this.name);
  }
}

module.exports = Home;
