import $ from './jquery';

class Proyectos {
  constructor() {

  }

  getInfo() {
    
  }

  slides () {
    $('.rslides-proyecto').responsiveSlides();
    const ruta = $('#proyecto #formularioProyecto .info .sitio .field-item').text();
    $('#proyecto #formularioProyecto .info .sitio a').attr('href', ruta);
  }
}

module.exports = Proyectos;