import $ from './jquery';

class Empleos {
  constructor (empleo) {
    this.empleo = empleo
  }

  activeCategoria () {
    const path = window.location.href;
    if(path == 'http://localhost/siteClasificados/empleos' || path == 'https://clasificados.laopinion.com.co/empleos' ) {
      $('#header #block3 .container .opts .empleos').addClass('active');
    }

  }

  portada () {
    // Portada vehículos seccion
    $('#empleos #portada img').attr('src', `sites/default/themes/clasificados/dist/${this.empleo}`);
  }
}

module.exports = Empleos;
