import $ from './jquery';

class FincaRaiz {
  constructor (finca) {
    this.finca = finca
  }

  activeCategoria () {
    const path = window.location.pathname;
    if(path == '/finca-raiz') {
      $('#header #block3 .container .opts .finca').addClass('active');
    }

  }

  portada () {
    // Portada vehículos seccion
    $('#fincaRaiz #portada img').attr('src', `sites/default/themes/clasificados/dist/${this.finca}`);
  }
}

module.exports = FincaRaiz;
