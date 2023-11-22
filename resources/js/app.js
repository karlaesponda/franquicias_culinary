import './bootstrap';

// En tu archivo JavaScript principal
window.$ = window.jQuery = require('jquery');
require('owl.carousel');

$(document).ready(function(){
    $('.owl-carousel').owlCarousel({
        // Configuración de Owl Carousel
        items: 3,
        loop: true,
        // ... otras opciones ...
    });
});