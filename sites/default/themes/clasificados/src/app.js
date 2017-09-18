import $ from './jquery';
require('./responsiveslides');

import autos from './img/autos.jpg';
import empleo from './img/empleo.jpg';
import compartir from './img/images/compartir.jpg';
import sedePrincipal from './img/images/fachada-laopinion.jpg';
import sedeAtalaya from './img/images/fachada-atalaya.jpg';

import Home from './home';


$(function() {
  // Cargamos las images del slider
  $('#autos').attr('src', `sites/default/themes/clasificados/dist/${autos}`);
  $('#empleos').attr('src', `sites/default/themes/clasificados/dist/${empleo}`);
  $('#pregunFrecuen .pregunta-1 .respuesta img').attr('src', `sites/default/themes/clasificados/dist/${compartir}`);
  $('#oficinas #sedePrincipal img').attr('src', `sites/default/themes/clasificados/dist/${sedePrincipal}`);
  $('#oficinas #sedeAtalaya img').attr('src', `sites/default/themes/clasificados/dist/${sedeAtalaya}`);

  $('.rslides').responsiveSlides();
  // console.log('Hola mundo :)');
  const home = new Home();
  home.verMas();
  // home.hola;
});
