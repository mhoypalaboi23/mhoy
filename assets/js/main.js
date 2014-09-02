$('#myCarousel').carousel({
  interval: 4000
});

// handles the carousel thumbnails
$('[id^=carousel-selector-]').click( function(){
  var id_selector = $(this).attr("id");
  var id = id_selector.substr(id_selector.length -1);
  id = parseInt(id);
  $('#myCarousel').carousel(id);
  $('[id^=carousel-selector-]').removeClass('selected');
  $(this).addClass('selected');
});

// when the carousel slides, auto update
$('#myCarousel').on('slid', function (e) {
  var id = $('.item.active').data('slide-number');
  id = parseInt(id);
  $('[id^=carousel-selector-]').removeClass('selected');
  $('[id^=carousel-selector-'+id+']').addClass('selected');
});

$(document).ready(function() {
  $('#media').carousel({
    pause: true,
    interval: false,
  });
});

$ ('.multi-products img').wrap('<div class="flip-3d"><figure></figur');


// single product js

// main navigation js 
$("#index-body a:contains('HOME')").parent().addClass('active');
$("#about-body a:contains('ABOUT')").parent().addClass('active');
$("#contact-body  a:contains('CONTACT')").parent().addClass('active');
$("#water-body  a:contains('WATER')").parent().addClass('active');
$("#kitchen-body  a:contains('KITCHEN')").parent().addClass('active');
$("#air-body  a:contains('AIR')").parent().addClass('active');
$("#home-body a:contains('HOME ESSENTIALS')").parent().addClass('active');
$("#health-body  a:contains('HEALTH ESSENTIAL')").parent().addClass('active');

