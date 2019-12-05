jQuery(document).ready(function( $ ) {

  // Back to top button
  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('.back-to-top').fadeIn('slow');
    } else {
      $('.back-to-top').fadeOut('slow');
    }
  });
  $('.back-to-top').click(function(){
    $('html, body').animate({scrollTop : 0},1500, 'easeInOutExpo');
    return false;
  });

  // Header fixed on scroll
  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('#header').addClass('header-scrolled');
    } else {
      $('#header').removeClass('header-scrolled');
    }
  });

  if ($(window).scrollTop() > 100) {
    $('#header').addClass('header-scrolled');
  }

  // Real view height for mobile devices
  // if (window.matchMedia("(max-width: 767px)").matches) {
  //   $('#intro').css({ height: $(window).height() });
  // }

  // Initiate the wowjs animation library
  new WOW().init();

  // Initialize Venobox
  $('.venobox').venobox({
    bgcolor: '',
    overlayColor: 'rgba(6, 12, 34, 0.85)',
    closeBackground: '',
    closeColor: '#fff'
  });

  // Initiate superfish on nav menu
  $('.nav-menu').superfish({
    animation: {
      opacity: 'show'
    },
    speed: 400
  });

  // Mobile Navigation
  if ($('#nav-menu-container').length) {
    var $mobile_nav = $('#nav-menu-container').clone().prop({
      id: 'mobile-nav'
    });
    $mobile_nav.find('> ul').attr({
      'class': '',
      'id': ''
    });
    $('body').append($mobile_nav);
    $('body').prepend('<button type="button" id="mobile-nav-toggle"><i class="fa fa-bars"></i></button>');
    $('body').append('<div id="mobile-body-overly"></div>');
    $('#mobile-nav').find('.menu-has-children').prepend('<i class="fa fa-chevron-down"></i>');

    $(document).on('click', '.menu-has-children i', function(e) {
      $(this).next().toggleClass('menu-item-active');
      $(this).nextAll('ul').eq(0).slideToggle();
      $(this).toggleClass("fa-chevron-up fa-chevron-down");
    });

    $(document).on('click', '#mobile-nav-toggle', function(e) {
      $('body').toggleClass('mobile-nav-active');
      $('#mobile-nav-toggle i').toggleClass('fa-times fa-bars');
      $('#mobile-body-overly').toggle();
    });

    $(document).click(function(e) {
      var container = $("#mobile-nav, #mobile-nav-toggle");
      if (!container.is(e.target) && container.has(e.target).length === 0) {
        if ($('body').hasClass('mobile-nav-active')) {
          $('body').removeClass('mobile-nav-active');
          $('#mobile-nav-toggle i').toggleClass('fa-times fa-bars');
          $('#mobile-body-overly').fadeOut();
        }
      }
    });
  } else if ($("#mobile-nav, #mobile-nav-toggle").length) {
    $("#mobile-nav, #mobile-nav-toggle").hide();
  }

  // Smooth scroll for the menu and links with .scrollto classes
  $('.nav-menu a, #mobile-nav a, .scrollto').on('click', function() {
    if (location.pathname && location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      if (target.length) {
        var top_space = 0;

        if ($('#header').length) {
          top_space = $('#header').outerHeight();

          if( ! $('#header').hasClass('header-fixed') ) {
            top_space = top_space - 20;
          }
        }

        $('html, body').animate({
          scrollTop: target.offset().top - top_space
        }, 1500, 'easeInOutExpo');

        if ($(this).parents('.nav-menu').length) {
          $('.nav-menu .menu-active').removeClass('menu-active');
          $(this).closest('li').addClass('menu-active');
        }

        if ($('body').hasClass('mobile-nav-active')) {
          $('body').removeClass('mobile-nav-active');
          $('#mobile-nav-toggle i').toggleClass('fa-times fa-bars');
          $('#mobile-body-overly').fadeOut();
        }
        return false;
      }
    }
  });

  // Gallery carousel (uses the Owl Carousel library)
  $(".gallery-carousel").owlCarousel({
    autoplay: true,
    dots: true,
    loop: true,
    center:true,
    responsive: { 0: { items: 1 }, 768: { items: 3 }, 992: { items: 4 }, 1200: {items: 5}
    }
  });

  // Buy tickets select the ticket type on click
  // $('#buy-ticket-modal').on('show.bs.modal', function (event) {
  //   var button = $(event.relatedTarget);
  //   var ticketType = button.data('ticket-type');
  //   var modal = $(this);
  //   modal.find('#ticket-type').val(ticketType);
  // })

// custom code
$('.owl-carousel').owlCarousel({
  loop: true,
  margin: 10,
  nav: true,
  navText: [
    "<i class='fa fa-caret-left'></i>",
    "<i class='fa fa-caret-right'></i>"
  ],
  autoplay: true,
  autoplayHoverPause: true,
  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 3
    },
    1000: {
      items: 2
    }
  }
})
eminentspeaker=[
  {"name":"dummy","desc":"name is","img":"./assets/images/Aicte.jpg"},
  {"name":"dummy1","desc":"name is2","img":"./assets/images/Csi.png"},
  {"name":"dummy2","desc":"name is3","img":"./assets/images/Aicte.jpg"}
];
i=0;
len=eminentspeaker.length-1;

$(".spk-top-img").attr("src",eminentspeaker[i].img);
$(".spk-txt").text(eminentspeaker[i].name);
$(".spk-txt1").text(eminentspeaker[i].desc);
setInterval(function(){
  if(i>len)
    i=0;

    $(".spk-top-img").attr("src",eminentspeaker[i].img);
$(".spk-txt").text(eminentspeaker[i].name);
$(".spk-txt1").text(eminentspeaker[i].desc);
i++;
},5000
)
$("[href!='#']").click(function(){
  $('.navbar-collapse').collapse('hide');
})
$("[href!='#']").click(function(){
  $('.dropdown-menu').collapse('hide');
})
// $(".eminent-speaker").on("click",()=>{
//  $(".eminent-speaker-body").slideToggle(); 
// })
var location=window.location.href;
// var msg=$.QueryString(location);
var query=location.split("?")[1];
var msgdata=query?query.split("&"):false;
var msg=msgdata[0]?msgdata[0].split("=")[1]:false;
var memberid=msgdata[1]?msgdata[1].split("=")[1]:false;
var activemodal=0;
if(msg=="registered"){
  $(".msgonreg").text("successfully registerd member id is:"+memberid)
  $("#msgshowhomedilog").modal();
  $(".msgonregerror").hide()
  $(".msgonreg").show()
  
 activemodal=1;
}
else if(msg=="all_ready_reg"){
  $(".msgonregerror").text("this email is already registered try another")
 
  $("#msgshowhomedilog").modal();
  $(".msgonregerror").show()
  $(".msgonreg").hide()
  
  activemodal=2
}
else if(msg=="failed"){
activemodal=1
$(".msgonreg").text("invalid email or password")
$("#msgshowhomedilog").modal();
$(".msgonregerror").hide()
$(".msgonreg").show()
}
else{
  activemodal=0
   
}
$("#btnmsgmodal").click(function(){
  

  if(activemodal==1){
    $("#login").modal()
  }
  else if(activemodal==2){
    $("#registration").modal()
  }
  else{
  }
})

});
