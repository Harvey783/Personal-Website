(function($) {
  'use strict';

  /* =============== Page pre-loader =============== */
  $(window).load(function() {
    $('#page-loader').fadeOut(400);

    $('#intro').addClass('animated fadeInDown');
    $('#intro-div').addClass('animated fadeInUp');
    $('#profile').addClass('animated zoomIn');

    /* =============== Portfolio Filterizr Initialize =============== */
    $(function() {
      //Initialize filterizr with default options
      $('.filtr-container').filterizr();

      $('.simple-filter li').on('click', function() {
        $('.simple-filter li').removeClass('active-cat');
        $(this).addClass('active-cat');
      });
    });
  });

  $(document).ready(function() {
    /* =============== AOS Initialize =============== */
    AOS.init({
      offset: 50,
      duration: 500,
      delay: 300,
      easing: 'ease-in-sine',
      once: true
    });
    AOS.refresh();

    /* =============== Side Nav =============== */
    var $menuBtn = $('#nav-btn');
    var $sideNav = $('#side-nav');
    var $sideNavMask = $('#side-nav-mask');
    var $link = $('.nav-link');

    $menuBtn.on('click', function() {
      $sideNav.animate({ left: 0 }, 'fast');
      $sideNavMask.addClass('visible');
    });

    $link.on('click', function() {
      $sideNav.animate({ left: -240 }, 'fast');
      $sideNavMask.removeClass('visible');
    });

    $sideNavMask.on('click', function() {
      $sideNav.animate({ left: -240 }, 'fast');
      $sideNavMask.removeClass('visible');
    });

    /* =============== Page Scrolling Smoothly to Link Target =============== */
    $('a[href*=\\#]:not([href=\\#])').on('click', function() {
      if (
        location.pathname.replace(/^\//, '') ==
          this.pathname.replace(/^\//, '') ||
        location.hostname == this.hostname
      ) {
        var target = $(this.hash);
        target = target.length
          ? target
          : $('[name=' + this.hash.slice(1) + ']');
        if (target.length) {
          $('html,body').animate(
            {
              scrollTop: target.offset().top - 32
            },
            1000
          );
          return false;
        }
      }
    });

    /* =============== Skill Bar value =============== */
    $('.skill-progress').each(function() {
      $(this)
        .find('.skill-determinate')
        .css(
          {
            width: jQuery(this).attr('data-percent')
          },
          7000
        );
    });

    /* =============== Back To Top =============== */
    var offset = 300,
      scroll_top_duration = 700,
      $back_to_top = $('.back-to-top');
    $(window).scroll(function() {
      $(this).scrollTop() > offset
        ? $back_to_top.addClass('back-to-top-is-visible')
        : $back_to_top.removeClass('back-to-top-is-visible');
    });

    //smooth scroll to top --->>> Optional
    $back_to_top.on('click', function(event) {
      event.preventDefault();
      $('body,html').animate(
        {
          scrollTop: 0
        },
        scroll_top_duration
      );
    });

    /* =============== Email Handling =============== */
    $(document).ready(function() {
      $('#submit').click(function(event) {
        event.preventDefault();
        $.ajax({
          dataType: 'JSON',
          url: '../sendmail.php',
          type: 'POST',
          data: $('#contact-form').serialize(),
          beforeSend: function(xhr) {
            $('#submit').html('SENDING...');
          },
          success: function(response) {
            if (response) {
              console.log(response);
              if (response['signal'] == 'ok') {
                $('#msg').html(
                  '<div class="alert alert-success">' +
                    response['msg'] +
                    '</div>'
                );
                $('input, textarea').val(function() {
                  return this.defaultValue;
                });
              } else {
                $('#msg').html(
                  '<div class="alert alert-danger">' +
                    response['msg'] +
                    '</div>'
                );
              }
            }
          },
          error: function() {
            $('#msg').html(
              '<div class="alert alert-danger">Errors occur. Please try again later.</div>'
            );
          },
          complete: function() {
            $('#submit').html('SEND MESSAGE');
          }
        });
      });
    });
  });
})(jQuery);
