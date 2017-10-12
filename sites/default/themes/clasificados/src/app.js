import $ from './jquery';
require('./responsiveslides');

import autos from './img/autos.jpg';
import empleo from './img/empleo.jpg';
import compartir from './img/images/compartir.jpg';
import sedePrincipal from './img/images/fachada-laopinion.jpg';
import sedeAtalaya from './img/images/fachada-atalaya.jpg';

import Home from './home';
import Anuncios from './anuncios';
import Vehiculos from './vehiculos';
import Empleos from './empleos';
import FincaRaiz from './fincaRaiz';
import Varios from './varios';
import Profile from './profile';
import Proyectos from './proyectos';

$(function() {
  const home = new Home(autos, empleo);
  const anuncios = new Anuncios();
  const vehiculos = new Vehiculos(autos);
  const empleos = new Empleos(empleo);
  const finca = new FincaRaiz(autos);
  const varios = new Varios(autos);
  const profile = new Profile();
  const proyectos = new Proyectos();
  
  $('#pregunFrecuen .pregunta-1 .respuesta img').attr('src', `sites/default/themes/clasificados/dist/${compartir}`);
  $('#oficinas #sedePrincipal img').attr('src', `sites/default/themes/clasificados/dist/${sedePrincipal}`);
  $('#oficinas #sedeAtalaya img').attr('src', `sites/default/themes/clasificados/dist/${sedeAtalaya}`);
    
  $('.rslides').responsiveSlides();
  
  home.slides();
  home.verMas();
  // home.hola;

  anuncios.galeriaAnuncios();

  vehiculos.activeCategoria();
  vehiculos.portada();

  empleos.portada();
  empleos.activeCategoria();

  finca.portada();
  finca.activeCategoria();

  varios.portada();
  varios.activeCategoria();

  profile.proyectos();

  proyectos.slides();

});
