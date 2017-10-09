import $ from './jquery';

class Vehiculos {
  constructor (autos) {
    this.autos = autos;
  }

  activeCategoria () {
    const path = window.location.href;
    if(path == 'http://localhost/siteClasificados/vehiculos' || path == 'https://clasificados.laopinion.com.co/vehiculos' ) {
      $('#header #block3 .container .opts .autos').addClass('active');
    }

  }

  portada () {
    // Portada vehículos seccion
    $('#vehiculos #portada img').attr('src', `sites/default/themes/clasificados/dist/${this.autos}`);
  }
}

module.exports = Vehiculos;
