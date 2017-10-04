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

  $(".rslides-anuncio").responsiveSlides({
    auto: true,             // Boolean: Animate automatically, true or false
    speed: 500,            // Integer: Speed of the transition, in milliseconds
    timeout: 4000,          // Integer: Time between slide transitions, in milliseconds
    pager: true,           // Boolean: Show pager, true or false
    nav: false,             // Boolean: Show navigation, true or false
    random: false,          // Boolean: Randomize the order of the slides, true or false
    pause: false,           // Boolean: Pause on hover, true or false
    pauseControls: true,    // Boolean: Pause when hovering controls, true or false
    prevText: "Previous",   // String: Text for the "previous" button
    nextText: "Next",       // String: Text for the "next" button
    maxwidth: "",           // Integer: Max-width of the slideshow, in pixels
    navContainer: "",       // Selector: Where controls should be appended to, default is after the 'ul'
    manualControls: "",     // Selector: Declare custom pager navigation
    namespace: "rslides",   // String: Change the default namespace used
    before: function(){},   // Function: Before callback
    after: function(){}     // Function: After callback
  });

  const arrayGaleria = [0, 1, 2, 3];
  let i = 1;

  arrayGaleria.forEach( (element) => {
    let src = $(`#slider-anuncio .rslides-anuncio #rslides1_s${element} img`).attr('src');
    let alt = $(`#slider-anuncio .rslides-anuncio #rslides1_s${element} img`).attr('alt');
    let html = `<img src=${src} alt=${alt}/>`
    $(`#slider-anuncio .rslides_tabs .rslides1_s${i} a`).html(html);
    $(`#slider-fullScream .rslides_tabs .rslides2_s${i} a`).html(html);
    i++;
  });

  $('#slider-anuncio #fullScream').click(() => {
    $('.backgroundAnuncio').show();
    $('#slider-fullScream').show();
  });

  $('.backgroundAnuncio').click(() => {
    $('.backgroundAnuncio').hide();
    $('#slider-fullScream').hide();
  });

});
