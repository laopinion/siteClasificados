import $ from './jquery';

class Proyectos {
  constructor(autos, empleo) {
    this.name = 'John serrano';
    this.autos = autos;
    this.empleo = empleo;
  }

  slides () {
    $('.rslides-proyecto').responsiveSlides()
  }
}

module.exports = Proyectos;