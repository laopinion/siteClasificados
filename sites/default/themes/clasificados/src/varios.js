import $ from './jquery';

class Varios {
  constructor (varios) {
    this.varios = varios;
  }

  activeCategoria () {
    const path = window.location.href;
    if(path == 'http://localhost/siteClasificados/varios' || path == 'https://clasificados.laopinion.com.co/varios' ) {
      $('#header #block3 .container .opts .varios').addClass('active');
    }

  }

  portada () {
    // Portada vehículos seccion
    $('#varios #portada img').attr('src', `sites/default/themes/clasificados/dist/${this.varios}`);
  }
}

module.exports = Varios;