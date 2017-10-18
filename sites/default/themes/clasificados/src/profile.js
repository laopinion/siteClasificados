import $ from './jquery';

class Profile {
  constructor () {

  }

  proyectos () {
    const type = $('#profile #profileInfo h3 .field-item').text();
    if (type == ' Inmobiliarias' || type == 'Inmobiliarias') {
      $('#profile #proyectos').show();
    }
  }
}

module.exports = Profile;
