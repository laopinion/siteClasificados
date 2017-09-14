import $ from './jquery';
require('./responsiveslides');

import autos from './img/autos.jpg'
import empleo from './img/empleo.jpg'


$(function() {
  // Cargamos las images del slider
  $('#autos').attr('src', `sites/default/themes/clasificados/dist/${autos}`);
  $('#empleos').attr('src', `sites/default/themes/clasificados/dist/${empleo}`);

  $(".rslides").responsiveSlides();
  console.log('Hola mundo :)')
});
