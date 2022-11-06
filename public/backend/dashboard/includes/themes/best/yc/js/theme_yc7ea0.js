// function smoothScrollingTo(target){
//  $('html,body').animate({scrollTop:$(target).offset().​top}, 500);
//}
//$('a[href*=\\#]').on('click', function(event){     
//    event.preventDefault();
//    smoothScrollingTo(this.hash);
//});
//$(document).ready(function(){
//  smoothScrollingTo(location.hash);
//});


$().ready(function(){
    
    $('#close_bannaer').click(function(){
        $('.banner_area').hide('slow');
    });
    
    $('#a_search').click(function(){
        $('.search_area').toggle('slow');
    });
    
     $('.search_close').click(function(){
        $('.search_area').hide('slow');
    });
    
     
    $('a').click(function(){
    $('html, body').animate({
        scrollTop: $( $(this).attr('href') ).offset().top
    }, 500);
    return false;
});
    
    
}); 
   // Sticky navbar
    // =========================
    // Custom function which toggles between sticky class (is-sticky)
    var stickyToggle = function (sticky, stickyWrapper, scrollElement) {
        var stickyHeight = sticky.outerHeight();
        var stickyTop = stickyWrapper.offset().top;
        if (scrollElement.scrollTop() >= stickyTop) {
            stickyWrapper.height(stickyHeight);
            sticky.addClass("is-sticky");
        } else {
            sticky.removeClass("is-sticky");
            stickyWrapper.height('auto');
        }
    };
    // Find all data-toggle="sticky-onscroll" elements
    $('[data-toggle="sticky-onscroll"]').each(function () {
        var sticky = $(this);
        var stickyWrapper = $('<div>').addClass('sticky-wrapper'); // insert hidden element to maintain actual top offset on page
        sticky.before(stickyWrapper);
        sticky.addClass('sticky');

        // Scroll & resize events
        $(window).on('scroll.sticky-onscroll resize.sticky-onscroll', function () {
            stickyToggle(sticky, stickyWrapper, $(this));
        });

        // On page load
        stickyToggle(sticky, stickyWrapper, $(window));
    });

    //<!-- Initialize Swiper -->
    var swiper = new Swiper('.swiper_parallax', {
      speed: 600,
      parallax: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
    
     var swiper = new Swiper('.swiper_fullscreen', {
      spaceBetween: 30,
      centeredSlides: true,
      autoplay: {
        delay: 9500,
        disableOnInteraction: false,
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
    
    
     //onclick arrow scroll top
        (function () {
            var backTop = document.getElementsByClassName('js-cd-top')[0], offset = 300, offsetOpacity = 1200, scrollDuration = 700
            scrolling = false;
            if (backTop) {
                window.addEventListener("scroll", function (event) {
                    if (!scrolling) {
                        scrolling = true;
                        (!window.requestAnimationFrame) ? setTimeout(checkBackToTop, 250) : window.requestAnimationFrame(checkBackToTop);
                    }
                });
                backTop.addEventListener('click', function (event) {
                    event.preventDefault();
                    (!window.requestAnimationFrame) ? window.scrollTo(0, 0) : scrollTop(scrollDuration);
                });
            }
            function checkBackToTop() {
                var windowTop = window.scrollY || document.documentElement.scrollTop;
                (windowTop > offset) ? addClass(backTop, 'cd-top--show') : removeClass(backTop, 'cd-top--show', 'cd-top--fade-out');
                (windowTop > offsetOpacity) && addClass(backTop, 'cd-top--fade-out');
                scrolling = false;
            }
            function scrollTop(duration) {
                var start = window.scrollY || document.documentElement.scrollTop, currentTime = null;
                var animateScroll = function (timestamp) {
                    if (!currentTime)
                        currentTime = timestamp;
                    var progress = timestamp - currentTime;
                    var val = Math.max(Math.easeInOutQuad(progress, start, -start, duration), 0);
                    window.scrollTo(0, val);
                    if (progress < duration) {
                        window.requestAnimationFrame(animateScroll);
                    }
                };
                window.requestAnimationFrame(animateScroll);
            }
            Math.easeInOutQuad = function (t, b, c, d) {
                t /= d / 2;
                if (t < 1)
                    return c / 2 * t * t + b;
                t--;
                return-c / 2 * (t * (t - 2) - 1) + b;
            };
            function hasClass(el, className) {
                if (el.classList)
                    return el.classList.contains(className);
                else
                    return!!el.className.match(new RegExp('(\\s|^)' + className + '(\\s|$)'));
            }
            function addClass(el, className) {
                var classList = className.split(' ');
                if (el.classList)
                    el.classList.add(classList[0]);
                else if (!hasClass(el, classList[0]))
                    el.className += " " + classList[0];
                if (classList.length > 1)
                    addClass(el, classList.slice(1).join(' '));
            }
            function removeClass(el, className) {
                var classList = className.split(' ');
                if (el.classList)
                    el.classList.remove(classList[0]);
                else if (hasClass(el, classList[0])) {
                    var reg = new RegExp('(\\s|^)' + classList[0] + '(\\s|$)');
                    el.className = el.className.replace(reg, ' ');
                }
                if (classList.length > 1)
                    removeClass(el, classList.slice(1).join(' '));
            }}
        )();


// content animation
    jQuery(function ($) {
        // Function which adds the 'animated' class to any '.animatable' in view
        var doAnimations = function () {
            // Calc current offset and get all animatables
            var offset = $(window).scrollTop() + $(window).height(),
                    $animatables = $('.animatable');
            // Unbind scroll handler if we have no animatables
            if ($animatables.length == 0) {
                $(window).off('scroll', doAnimations);
            }
            // Check all animatables and animate them if necessary
            $animatables.each(function (i) {
                var $animatable = $(this);
                if (($animatable.offset().top + $animatable.height() - 20) < offset) {
                    $animatable.removeClass('animatable').addClass('animated');
                }
            });
        };
        // Hook doAnimations on scroll, and trigger a scroll
        $(window).on('scroll', doAnimations);
        $(window).trigger('scroll');
    });
    //page load
    $(window).on('load', function () {
        jQuery('.loader').fadeOut();
    });