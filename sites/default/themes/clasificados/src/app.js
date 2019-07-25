import $ from './jquery';
require('./responsiveslides');

import autosImg from './img/autos.jpg';
import empleoImg from './img/empleo.jpg';
import fincaImg from './img/finca-raiz.jpg';
import variosImg from './img/varios.jpg';
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
  const home = new Home(autosImg, empleoImg, fincaImg, variosImg);
  const anuncios = new Anuncios();
  const vehiculos = new Vehiculos(autosImg);
  const empleos = new Empleos(empleoImg);
  const finca = new FincaRaiz(fincaImg);
  const varios = new Varios(variosImg);
  const profile = new Profile();
  const proyectos = new Proyectos();
  
  $('#pregunFrecuen .pregunta-1 .respuesta img').attr('src', `sites/default/themes/clasificados/dist/${compartir}`);
  $('#oficinas #sedePrincipal img').attr('src', `sites/default/themes/clasificados/dist/${sedePrincipal}`);
  $('#oficinas #sedeAtalaya img').attr('src', `sites/default/themes/clasificados/dist/${sedeAtalaya}`);
    
  $('.rslides').responsiveSlides();
  
  home.slides();
  home.verMas();
  home.hamburgerMenu();
  home.handleSearch();
  // home.hola;

  anuncios.galeriaAnuncios();

  vehiculos.activeCategoria();
  // vehiculos.portada();

  // empleos.portada();
  empleos.activeCategoria();

  // finca.portada();
  finca.activeCategoria();

  // varios.portada();
  varios.activeCategoria();

  profile.proyectos();

  proyectos.slides();

});
