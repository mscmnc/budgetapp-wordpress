
var loaderPage = function() {
    jQuery(".loader").fadeOut("slow"); // Removes the loader div
    jQuery('html, body').removeAttr("style") // Remove style attribute from html, body divs
};

// Video section settings
var video = document.getElementById("video");
var blueBackground = document.getElementsByClassName('video__bluebackground');

function playPause() {
    if (video.paused) {
        video.play();
        blueBackground[0].style.display = "none";
    }

    else {
        video.pause();
        blueBackground[0].style.display = "block";
    }

};

jQuery(document).ready(function(){
     //Meniu resizing on scroll
    jQuery(document).on("scroll", function() {
        if (jQuery(document).scrollTop() > 50) {
            jQuery(".stickybar").addClass("min-header");
            jQuery(".stickybar__div--logo-box img").addClass("min-logo");
        } else {
            jQuery(".stickybar").removeClass("min-header");
            jQuery(".stickybar__div--logo-box img").removeClass("min-logo");
        }
    });

    //Meniu scroll down to section effect.
    jQuery("nav").find("a").click(function(e) {
        e.preventDefault();
        var section = jQuery(this).attr("href");
        jQuery(".mobilenavi__checkbox").prop('checked', false);
        jQuery("html, body").animate({
            scrollTop: jQuery(section).offset().top-20}, 'slow');
    });

});

// Gallery for scrennshots
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
     slides[i].classList.remove("active");
    }
  slides[slideIndex-1].className += " active";
}

//Fade affect to section
var animateHTML = function() {
    var elems;
    var windowHeight;
    function init() {
        elems = document.querySelectorAll('.findSection'); // Finds witch section are need to do moveInUp effect
        windowHeight = window.innerHeight;
        addEventHandlers();
        checkPosition();
    }
    function addEventHandlers() {
        window.addEventListener('scroll', checkPosition);
        window.addEventListener('resize', init);
    }
    function checkPosition() {
        for (var i = 0; i < elems.length; i++) {
        var positionFromTop = elems[i].getBoundingClientRect().top;
        if (positionFromTop - windowHeight <= 0) {
            elems[i].className = elems[i].className.replace(
                'findSection',
                'moveInUp'
              );
            }
        }
    }
    return {
        init: init
    };
};
animateHTML().init();

// Gallery for scrennshots
var slideIndex2 = 1;
showSlides2(slideIndex2);

function plusSlides2(m) {
  showSlides2(slideIndex2 += m);
}

function currentSlide2(m) {
  showSlides2(slideIndex2 = m);
}

function showSlides2(m) {
  var k;
  var slides2 = document.getElementsByClassName("mySlides2");
  if (m > slides2.length) {slideIndex2 = 1}
  if (m < 1) {slideIndex2 = slides2.length}
  for (k = 0; k < slides2.length; k++) {

      slides2[k].classList.remove("active2");

  }
//   for (i = 0; i < dots.length; i++) {
//       dots[i].className = dots[i].className.replace(" active", "");
//   }
  slides2[slideIndex2-1].className += " active2";
//   dots[slideIndex-1].className += " active";
}
