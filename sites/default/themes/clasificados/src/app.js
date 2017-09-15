import $ from './jquery';
require('./responsiveslides');

import autos from './img/autos.jpg';
import empleo from './img/empleo.jpg';
import Home from './home';


$(function() {
  // Cargamos las images del slider
  $('#autos').attr('src', `sites/default/themes/clasificados/dist/${autos}`);
  $('#empleos').attr('src', `sites/default/themes/clasificados/dist/${empleo}`);

  $('.rslides').responsiveSlides();
  // console.log('Hola mundo :)');
  const home = new Home()
  home.verMas();
  // home.hola;
});
