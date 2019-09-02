var menu = document.querySelector('.nav__list');
var burger = document.querySelector('.burger');
var doc = $(document);
var l = $('.scrolly');
var panel = $('.panel');
var vh = $(window).height();
var openMenu = function() {
  burger.classList.toggle('burger--active');
  menu.classList.toggle('nav__list--active');
};
$('.card').click(function(){
  $(this).toggleClass('flipped');
});

// reveal content of first panel by default
panel.eq(0).find('.panel__content').addClass('panel__content--active');

var scrollFx = function() {
  var ds = doc.scrollTop();
  var of = vh / 4;

  // if the panel is in the viewport, reveal the content, if not, hide it.
  for (var i = 0; i < panel.length; i++) {
    if (panel.eq(i).offset().top < ds+of) {
     panel
       .eq(i)
       .find('.panel__content')
       .addClass('panel__content--active');
    } else {
      panel
        .eq(i)
        .find('.panel__content')
        .removeClass('panel__content--active')
    }
  }
};
//Scroll function
var scrolly = function(e) {
  e.preventDefault();
  var target = this.hash;
  var $target = $(target);

  $('html, body').stop().animate({
      'scrollTop': $target.offset().top
  }, 300, 'swing', function () {
      window.location.hash = target;
  });
}
var init = function() {
  burger.addEventListener('click', openMenu, false);
  window.addEventListener('scroll', scrollFx, false);
  window.addEventListener('load', scrollFx, false);
  $('a[href^="#"]').on('click',scrolly);
};
doc.on('ready', init);


var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}

// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else {
    x.className = x.className.replace(" w3-show", "");
  }
}

// Delay for the video on page load
window.onload = function() {
  window.setTimeout(fadeout, 5000); //8 seconds
}

function fadeout() {
  document.getElementById('fadeout').style.display = "none";
  //document.getElementById('lef-nav').style.display = "block";
}

function one() {
    document.getElementById('nav-opacity-about').style.opacity = '1';
    document.getElementById('nav-opacity-service').style.opacity = '0.3';
    document.getElementById('nav-opacity-works').style.opacity = '0.3';
    document.getElementById('nav-opacity-company').style.opacity = '0.3';
}

function two() {
    document.getElementById('nav-opacity-service').style.opacity = '1';
    document.getElementById('nav-opacity-about').style.opacity = '0.3';
    document.getElementById('nav-opacity-works').style.opacity = '0.3';
    document.getElementById('nav-opacity-company').style.opacity = '0.3';
}
function three() {
    document.getElementById('nav-opacity-about').style.opacity = '0.3';
    document.getElementById('nav-opacity-service').style.opacity = '0.3';
    document.getElementById('nav-opacity-works').style.opacity = '1';
    document.getElementById('nav-opacity-company').style.opacity = '0.3';
}

function four() {
    document.getElementById('nav-opacity-service').style.opacity = '0.3';
    document.getElementById('nav-opacity-about').style.opacity = '0.3';
    document.getElementById('nav-opacity-works').style.opacity = '0.3';
    document.getElementById('nav-opacity-company').style.opacity = '1';
}
