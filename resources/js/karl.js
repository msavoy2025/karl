jQuery(document).ready(function($){
  //console.log("this is a working file.")

  //mobile navigation open/close
  $('.mobile-open').on('click', function() {
    $('.navWrap').css('left', '0');
  });

  $('.mobile-close').on('click', function() {
    $('.navWrap').css('left', '100%');
  });

  //left this in incase they dont want a full screen nav on tablet/large tablet size
  /*if ($(window).width() > 767) {
    $('.mobile-open').on('click', function() {
      $('.navWrap').css('left', '50%');
    });

    $('.mobile-close').on('click', function() {
      $('.navWrap').css('left', '125%');
    });
  } else {
    $('.mobile-open').on('click', function() {
      $('.navWrap').css('left', '0');
    });

    $('.mobile-close').on('click', function() {
      $('.navWrap').css('left', '100%');
    });
  }*/

  //footer logo swap
  if ($(window).width() < 1023) {
    $("#footer_logo").attr('src',"/wp-content/themes/karl/resources/images/logo_icon.svg");
  }

  //meet karl button animation

  $('.textFlow_meet_content').hover(function () {
      $('.textFlow_meet_content_absolute').css('width', '305px');

  }, function () {
      $('.textFlow_meet_content_absolute').css('width', '0');
  });

  //number counter on scroll

  if(location.href == 'https://karlschoemer.com/') {
    var a = 0;
    $(window).scroll(function() {

      var oTop = $('.counters').offset().top - window.innerHeight;
      if (a == 0 && $(window).scrollTop() > oTop) {
        $('.number').each(function() {
          var $this = $(this),
            countTo = $this.attr('data-count');
          $({
            countNum: $this.text()
          }).animate({
              countNum: countTo
            },

            {
              duration: 2000,
              easing: 'swing',
              step: function() {
                $this.text(Math.floor(this.countNum));
              },
              complete: function() {
                $this.text(this.countNum);
                //alert('finished');
              }
            });
        });
        a = 1;
      }

    });
  }



  //video iframe add ID
  $('.video iframe').attr('id', 'frontPage_video');

  //video play on btn click
  $('.play').on( "click", function() {
    $('.videoWrap').css('opacity', '1');
    $('.videoWrap').css('z-index', '99999');
    $('.video').css('z-index', '999999');
    $('body').css('overflow', 'hidden');

  });

  $('.video_close').on( "click", function() {
    $('.videoWrap').css('opacity', '0');
    $('.videoWrap').css('z-index', '-1');
    $('.video').css('z-index', '-1');
    $('body').css('overflow', 'auto');
    $('iframe').each(function(index) {
        $(this).attr('src', $(this).attr('src'));
        return false;
      });
  });


  //video_topic iframe add ID
  $('.video_topic iframe').attr('id', 'topic_video');




  $('.topic').each(function(){
      $(this, '.play_topic').click(function(){
        $('.videoWrap_topic', this).css('opacity', '1');
        $('.videoWrap_topic', this).css('z-index', '99999');
        $('.video_topic', this).css('z-index', '999999');
        $('body').css('overflow', 'hidden');
        return false;
      });
  });

  $('.video_close_topic').each(function(){
      $(this).click(function(){
        $('.videoWrap_topic').css('opacity', '0');
        $('.videoWrap_topic').css('z-index', '-1');
        $('.video_topic').css('z-index', '-1');
        $('body').css('overflow', 'auto');
        $.each($("iframe"), function() {
            $(this).attr({
                src: $(this).attr("src")
            });
        });

        return false;
      });
  });

  //manifesto slider

  //next button
  $( ".manifesto_next" ).click(function() {
    //console.log("next clicking");
    clearInterval(interval);
    timer();
    var currentSlide = $(".manifesto.activeSlide");
    var nextSlide = currentSlide.next();


    currentSlide.removeClass('activeSlide');
    nextSlide.addClass("activeSlide");

    if(nextSlide.length == 0) {
      $(".manifesto").first().addClass("activeSlide");
    }
  });

  //prev button
  $( ".manifesto_prev" ).click(function() {
    //console.log("prev clicking");
    clearInterval(interval);
    timer();
    var currentSlide = $(".manifesto.activeSlide");
    var nextSlide = currentSlide.prev();

    currentSlide.removeClass('activeSlide');
    nextSlide.addClass("activeSlide");

    if(nextSlide.length == 0) {
      $(".manifesto").last().addClass("activeSlide");
    }
  });

  //slide

  $('.manifesto:nth-child(1)').addClass('activeSlide');


  if ($(".manifesto").length > 0)
  {
    var interval;
    //changeSlide(true);
     var timer = function(){
     interval = setInterval(function(){
       var active = $('.activeSlide');
       var next = ($('.activeSlide').next().length > 0) ? $('.activeSlide').next() : $('.manifesto:first');
       active.removeClass('activeSlide');
       next.addClass('activeSlide');
       //changeSlide(true);
    },5000);
    };

    timer();

  }
  else {

  }

  //marquee Flow
  $('.textFlow_slider').marquee({
    //speed in milliseconds of the marquee
    duration: 8000,
    //gap in pixels between the tickers
    gap: 10,
    //time in milliseconds before the marquee will start animating
    delayBeforeStart: 0,
    //'left' or 'right'
    direction: 'left',
    //true or false - should the marquee be duplicated to show an effect of continuous flow
    duplicated: true
  });

  //left-right scroll
  /*$(function() {
     $(".scroller").mousewheel(function(event, delta) {
        this.scrollLeft -= (delta * 30);
        event.preventDefault();
     });
  });*/

  //blog slider on click
  $(function () {

      var gallery = $('.blog_slider'),
          items = gallery.find('.blog_slide'),
          len = items.length,
          current = 1,  /* the current item we're looking */

          first = items.filter(':first-child'),
          second = items.filter((index) => index == 1),
          last = items.filter(':last-child'),
          secondlast = items.filter((index) => index == items.length - 2),

          triggers = $('button');



      /* 1. Cloning first and last items */
      first.before(secondlast.clone(true));
      first.before(last.clone(true));
      last.after(second.clone(true));
      last.after(first.clone(true));

      /* 2. Set button handlers */
      triggers.on('click', function () {

          if (gallery.is(':not(:animated)')) {

              var cycle = false,
                  delta = (this.id === "prev") ? -1 : 1;
              /* in the example buttons have id "prev" or "next" */

              gallery.animate({ left: "+=" + (-395 * delta) }, function () {

                  current += delta;

                  /**
                   * we're cycling the slider when the the value of "current"
                   * variable (after increment/decrement) is 0 or when it exceeds
                   * the initial gallery length
                   */
                  cycle = !!(current === 0 || current > len);

                  if (cycle) {
                      /* we switched from image 1 to 4-cloned or
                      from image 4 to 1-cloned */
                      current = (current === 0) ? len : 1;
                      gallery.css({ left: -395 * (current + 1) });
                  }
              });
          }
      });
  });



  //drag scroll
  if ($(".scroller").length > 0) {
    let isDown = false;
    let startX;
    let scrollLeft;
    const slider = document.querySelector('.scroller');

    const end = () => {
      isDown = false;
      slider.classList.remove('active');
    }

    const start = (e) => {
      isDown = true;
      slider.classList.add('active');
      startX = e.pageX || e.touches[0].pageX - slider.offsetLeft;
      scrollLeft = slider.scrollLeft;
    }

    const move = (e) => {
      if(!isDown) return;

      e.preventDefault();
      const x = e.pageX || e.touches[0].pageX - slider.offsetLeft;
      const dist = (x - startX);
      slider.scrollLeft = scrollLeft - dist;
    }

    (() => {
      slider.addEventListener('mousedown', start);
      slider.addEventListener('touchstart', start);

      slider.addEventListener('mousemove', move);
      slider.addEventListener('touchmove', move);

      slider.addEventListener('mouseleave', end);
      slider.addEventListener('mouseup', end);
      slider.addEventListener('touchend', end);
    })();
  }else if ($(".scroller").length < 0){}


//woocommerce add class
$('.woocommerce-loop-product__title').addClass('boldestDinger');

//cart button
if ($(window).width() > 1166) {
  $('.cartIcon a').empty();
} else {

}


}); //document ready function close
