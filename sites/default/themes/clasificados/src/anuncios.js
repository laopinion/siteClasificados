import $ from './jquery';

class Anuncios {
  constructor () {
    let array = [];
    this.cantidad = $('#slider-anuncio li').each(function(index) {
      array.push(index);
      return index + 1;
    });

    this.arrayGaleria = array;

    const clase = $('#anuncio .categorias .menu_seccion #titleCategoria #nameCategoria').text();
    $('#anuncio .categoria').addClass(clase);
  }

  configGaleria () {
    $(".rslides-anuncio").responsiveSlides({
      auto: false,             // Boolean: Animate automatically, true or false
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
  }

  galeriaAnuncios () {
    const cantidad = this.cantidad.length;

    this.configGaleria();

    this.arrayGaleria.map( (num, index) => {
      index++;
      let src = $(`#slider-anuncio .rslides-anuncio #rslides1_s${num} img`).attr('src');
      let alt = $(`#slider-anuncio .rslides-anuncio #rslides1_s${num} img`).attr('alt');
      let html = `<img src=${src} alt=${alt}/>`
      $(`#slider-anuncio .rslides_tabs .rslides1_s${index} a`).html(html);
      $(`#slider-anuncio .rslides_tabs .rslides1_s${index}`).attr('data-count', index);
      $(`#slider-anuncio #countImg`).html(`1/${cantidad}`);
      $(`#slider-fullScream .rslides_tabs .rslides2_s${index} a`).html(html);
    });
  
    $(`#slider-anuncio .rslides_tabs .rslides1_s1, #slider-anuncio .rslides_tabs .rslides1_s2, #slider-anuncio .rslides_tabs .rslides1_s3, #slider-anuncio .rslides_tabs .rslides1_s4`).click(function() {
      const count = $(this).data('count');
      $(`#slider-anuncio #countImg`).html(`${count}/${cantidad}`);
    })
  
    $('#slider-anuncio #fullScream').click(() => {
      $('.backgroundAnuncio').show();
      $('#slider-fullScream').show();
      $('body').css('overflow-y', 'hidden')
    });
    
    $('.backgroundAnuncio, #slider-fullScream #cerrarGaleria').click(() => {
      $('.backgroundAnuncio').hide();
      $('#slider-fullScream').hide();
      $('body').css('overflow-y', 'initial')
    });
  }

}

module.exports = Anuncios;
