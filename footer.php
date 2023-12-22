
<footer>
    <div class="footer-class">
        <div class="footer-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d80042.3479006113!2d6.636584423974655!3d51.17626256327552!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47b8b500311aea4d%3A0xc505b39827f99893!2sNeuss%2C%20Germany!5e0!3m2!1sen!2sin!4v1624651355028!5m2!1sen!2sin" width="600" style="border:0;" allowfullscreen="true" loading="lazy"></iframe>
        </div>

        <div class="container footer-ul-container">
            <ul class="footer-ul">
                <h3 class="sub-heading-2">Contact Info</h3>
                <li> <a href=""> <i class="fa fa-map-marker"></i><label>Engelshof 36, 48557 Neuss</label> </a></li>
                <li> <a href=""> <i class="fa fa-phone"></i><label>1-800-1234567</label> </a> </li>
                <li><a href=""><i class="fa fa-envelope mb-4"></i> <label>info@autoverschrottung-a-und-l.de</label> </a></li>

                <h3 class="sub-heading-2">Öffnungszeiten</h3>
                <p>Mon-Fri: 7:00 AM - 6:00 PM</p>
                <p>Saturday: 9:00 AM - 5:00 PM</p>
                <p>Sunday: Closed</p>
            </ul>
            
        </div>
    </div>
 </footer>
<script src="assets/js/jquery-min.js" type="text/javascript"></script>

<script src="assets/js/popper.js"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<script type="text/javascript" src="assets/js/owl.carousel.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>
<script src="assets/js/aos.js"></script>
<script type="text/javascript">

    
$(document).ready(function () {

$('.first-button').on('click', function () {

  $('.animated-icon1').toggleClass('open');
});
$('.second-button').on('click', function () {

  $('.animated-icon2').toggleClass('open');
});
$('.third-button').on('click', function () {

  $('.animated-icon3').toggleClass('open');
});
});


//------------active navbar
$(document).ready(function () {
       var str = location.href.toLowerCase();
       $(".navbar-nav a").each(function () {
           if (str.indexOf(this.href.toLowerCase()) > -1) {
               $("li.active").removeClass("active");
               $(this).parent().addClass("active");
           }
       });
       $("li.active").parents().each(function () {
           if ($(this).is("li")) {
               $(this).addClass("active");
           }
       });
   });
//owl carousel
$(".testimonial").owlCarousel({
 
 navigation : true, // Show next and prev buttons
 slideSpeed : 300,
 paginationSpeed : 400,
 singleItem:true,
 items:1,
dots:true,
loop:true,

});
$(".contact-5").owlCarousel({
 
 navigation : true, // Show next and prev buttons
 slideSpeed : 300,
 paginationSpeed : 400,
 autoplay:true,
 autoplaySpeed:800,
 margin:0,
 items:4,
dots:true,
loop:true,
responsive : {
    // breakpoint from 0 up
    0 : {
        items:2
    },
    // breakpoint from 480 up
    480 : {
       
        items:3
    },
    // breakpoint from 768 up
    768 : {
        items:4
    }
}

});

//menu fix on scroll
/*
        $(window).scroll(function() {    
    var scroll = $(window).scrollTop();

    if (scroll >= 30) {
        $(".header-section").css('position', 'fixed');
        $(".navbar-nav").css('padding', '5px 0px');
    } else {
        $(".header-section").css('position', 'relative');
        $(".header-section").css('padding', '0px');
    }
});
      */
 

 
$(document).ready(function() {
  if ( $(window).width() < 992 ) {
    startCarousel();
  } else {
    $('.section-5-ul .owl-carousel').addClass('off');
  }
});

$(window).resize(function() {
    if ( $(window).width() < 992 ) {
      startCarousel();
    } else {
      stopCarousel();
    }
});

function startCarousel(){
  $(".section-5-ul").owlCarousel({
     navigation : true, // Show next and prev buttons
     slideSpeed : 500,
     margin:30,
     paginationSpeed : 400,
     autoplay:true,
     items : 1,
     itemsDesktop : false,
     itemsDesktopSmall : false,
     itemsTablet: false,
     itemsMobile : false,
     loop:true,
     nav:true,
     dots:true,
     navText: ["<i class='fa fa-angle-left' aria-hidden='true'></i>","<i class='fa fa-angle-right' aria-hidden='true'></i>"]
  });
}
function stopCarousel() {
  var owl = $('.section-5-ul .owl-carousel');
  owl.trigger('destroy.owl.carousel');
  owl.addClass('off');
}

</script>

</body>
</html>