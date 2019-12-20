(function($) {

  $(document).ready(function(){

    $(window).scroll(function() {
      var scroll = $(window).scrollTop();
      if (scroll >= 1) {
        $("header").addClass("shrink");
      } else {
        $("header").removeClass("shrink");
      }
    });


    $('.hamburger').click(function(){
      $(this).toggleClass('is-active');
      $('header nav').toggleClass('open');
      $('body').toggleClass('appleFix');
    });

    // Replace all SVG images with inline SVG
    $('img.svg').each(function(){
      var $img = $(this);
      var imgID = $img.attr('id');
      var imgClass = $img.attr('class');
      var imgURL = $img.attr('src');

      $.get(imgURL, function(data) {
        var $svg = $(data).find('svg');
        if(typeof imgID !== 'undefined') {
          $svg = $svg.attr('id', imgID);
        }
        if(typeof imgClass !== 'undefined') {
          $svg = $svg.attr('class', imgClass+' replaced-svg');
        }
        $svg = $svg.removeAttr('xmlns:a');

        if(!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
          $svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'));
        }
        $img.replaceWith($svg);
      }, 'xml');
    });

    // Smooth scrolling
    $(function() {
      $('a[href*="#"]:not([href="#"])').click(function() {
        if (location.pathname.replace(/^\//,'') === this.pathname.replace(/^\//,'') && location.hostname === this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            $('html, body').animate({
              scrollTop: target.offset().top
            }, 750);
            return false;
          }
        }
      });
    });

    const myTags = [
      'JavaScript', 'CSS3', 'HTML',
      'SCSS', 'RWD', 'Bootstrap',
      'WordPress', 'Gulp.js', 'Git',
      'Adobe Package', 'Figma', 'UX',
    ];

    var tagCloud = TagCloud('.cloud-tag', myTags,{

      // radius in px
      radius: 300,
  
      // animation speed
      // slow, normal, fast
      maxSpeed: 'fast',
      initSpeed: 'normal',
  
      // 0 = top
      // 90 = left
      // 135 = right-bottom
      direction: 135,
      
      // interact with cursor move on mouse out
      keep: true
      
  });

    //input animation
    jQuery(document).ready(function($){
      // on focus
      $(".wpcf7-form input, textarea").focus(function() {
          $(this).parent().siblings('.label_anim').addClass('has-value');
          $(this).parent().siblings('.label_anim_fix').addClass('has-value-fix');
      })
      // blur input fields on unfocus + if has no value
      .blur(function() {
        var text_val = $(this).val();
        if(text_val === "") {
          $(this).parent().siblings('.label_anim').removeClass('has-value');
          $(this).parent().siblings('.label_anim_fix').removeClass('has-value-fix');
        }
      });
    });

  //   $(window).on('scroll', function() {
  //     var line3top = $("#line_3").offset().top;
  //     console.log(line3top);
  
      // $("#line_0").css('top', "+=" + 10);
      // $("#line_1").css('top', "+=" + 5);
      // $("#line_2").css('top', "-=" + 3 + "px");
      // $("#line_3").css('top', "+=" + 3 + "px");
      // $("#line_4").css('top', "-=" + 10 + "px");
      // $("#line_5").css('top', "+=" + 4 + "px");
      // $("#line_6").css('top', "+=" + 15 + "px");
  // })

  var position = $(window).scrollTop(); 
  $(window).scroll(function() {
    var scroll = $(window).scrollTop();
    if(scroll > position) { // w dół
      $("#line_0").css('top', "-=" + 6 + "px");
      $("#line_1").css('top', "+=" + 8 + "px");
      $("#line_2").css('top', "+=" + 3 + "px");
      $("#line_3").css('top', "-=" + 3 + "px");
      $("#line_4").css('top', "+=" + 7 + "px");
      $("#line_5").css('top', "+=" + 4 + "px");
      $("#line_6").css('top', "-=" + 8 + "px");
    } else { //w górę
      $("#line_0").css('top', "+=" + 6 + "px");
      $("#line_1").css('top', "-=" + 8 + "px");
      $("#line_2").css('top', "-=" + 3 + "px");
      $("#line_3").css('top', "+=" + 3 + "px");
      $("#line_4").css('top', "-=" + 7 + "px");
      $("#line_5").css('top', "-=" + 4 + "px");
      $("#line_6").css('top', "+=" + 8 + "px");
    }
    position = scroll;
    setTimeout(scroll, 1000);
});


    function getButton(className) {
        return document.querySelector(className);
    }

    //Button animations with circle
    const btn_big = document.querySelectorAll('.btn_big');
    btn_big.forEach(btn_big => {
      btn_big.onmousemove = e => {
        /* 15 = background-size/2 */
        btn_big.style.setProperty(
            "background-position",
            e.clientX - 33 + "px " + (e.clientY - 33) + "px"
        );
      }
    });
    
    const btn_slider = document.querySelectorAll('.btn_slider');
    btn_slider.forEach(btn_slider => {
      btn_slider.onmousemove = e => {
        /* 15 = background-size/2 */
        btn_slider.style.setProperty(
            "background-position",
            e.clientX - 21 + "px " + (e.clientY - 21) + "px"
        );
      }
    });


    //
    $('.wpcf7 br').remove();

    // cookies
    function setCookie(cname, cvalue, exdays) {
      var d = new Date();
      d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
      var koniec = "expires=" + d.toGMTString();
      document.cookie = cname + "=" + cvalue + ";" + koniec + ";path=/";
    }

    function getCookie(cname) {
      var name = cname + "=";
      var ca = document.cookie.split(';');
      for (var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
          c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
          return c.substring(name.length, c.length);
        }
      }
      return "";
    }

    function checkCookie() {
      var akcja = getCookie("ciasteczko");
      if (akcja != "") {
       $("#mainBelt").css("bottom", "-60px");
      } else {
        $("#mainBelt").css("bottom", "0");
        $("#cookieBtn").click(function() {
          akcja = "1";
          setCookie("ciasteczko", akcja, 30);
          $( "#mainBelt" ).animate({ bottom: "-60px" }, 500 );
        });
      }
    }

    checkCookie();
    $("#cookieBtn").click(function() {
      checkCookie();
    });

  });

})(jQuery);
