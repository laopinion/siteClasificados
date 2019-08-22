import $ from './jquery';

class Home {
  constructor(autos, empleo, finca, varios) {
    this.name = 'John serrano';
    this.autos = autos;
    this.empleo = empleo;
    this.finca = finca;
    this.varios = varios;
    $('#header #block3 .container .buscador form .container-inline input').attr('placeholder', 'Escriba lo que quiere buscar.');
  }
  
  verMas () {
    $('#home #empleos .flecha').click(function() {
      const activo = $(this).data('activo');
      if(activo == 0){
        $('#home #empleos .views-row-6, #home #empleos .views-row-7, #home #empleos .views-row-8, #home #empleos .views-row-9, #home #empleos .views-row-10').slideDown("slow");
        $(this).data('activo', 1);
        $(this).removeClass('down');// En la clase down esta la imagen al igual que la clase up
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
    // $('#autosPortada').attr('src', `sites/default/themes/clasificados/dist/${this.autos}`);
    $('#empleosPortada').attr('src', `sites/default/themes/clasificados/dist/${this.empleo}`);
    $('#fincaRaizPortada').attr('src', `sites/default/themes/clasificados/dist/${this.finca}`);
    $('#variosPortada').attr('src', `sites/default/themes/clasificados/dist/${this.varios}`);
    // console.log(this.name);
  }

  hamburgerMenu () {
    $('#header #block3 .hamburger').click(function () {
      if ($(this).hasClass('is-active')) {
        $('#header #block3 .opts').css({ 'top': '-100px', 'flex-wrap': 'initial' })
        $(this).removeClass('is-active')
      } else {
        $('#header #block3 .opts').css({ 'top': '0', 'flex-wrap': 'wrap' })
        $(this).addClass('is-active')

        if ($('#header .searchMovil').hasClass('active')) {
          $('#header #block3 .buscador').css({ 'top': '-100px'})
          $('#header .searchMovil').removeClass('active')
        }
      }
    })
  }

  handleSearch() {
    $('#header .searchMovil').click(function () {
      if ($(this).hasClass('active'))  {
        $('#header #block3 .buscador').css({ 'top': '-100px'})
        $(this).removeClass('active')
      } else {
        $('#header #block3 .buscador').css({ 'top': '0'})
        $(this).addClass('active')

        if ($('#header #block3 .hamburger').hasClass('is-active')) {
          $('#header #block3 .hamburger').removeClass('is-active')
          $('#header #block3 .opts').css({ 'top': '-100px' })
        }
      }
    })
  }
}

// module.exports = Home; 
export default Home; // Esto es otra forma de exportar modules
