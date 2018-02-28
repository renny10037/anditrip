$(document).ready(function(){
  $('.cali').hover(function() {
    $('.gris').css({ 'filter': 'grayscale(100%)', 'opacity':'.3' });
  },function() {
    $('.gris').css({ 'filter': 'grayscale(0%)', 'opacity':'1' });
  });
  $('.medellin').hover(function() {
    $('.red').css({ 'filter': 'grayscale(100%)', 'opacity':'.3' });
  },function() {
    $('.red').css({ 'filter': 'grayscale(0%)', 'opacity':'1' });
  });
  $('.bogota').hover(function() {
    $('.blue').css({ 'filter': 'grayscale(100%)', 'opacity':'.3' });
  },function() {
    $('.blue').css({ 'filter': 'grayscale(0%)', 'opacity':'1' });
  });
});
