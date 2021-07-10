(function ($) {
    "use strict";

    // Initiate the wowjs
    new WOW().init();


    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 200) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Sticky Navbar
    //$(window).scroll(function () {
        //if ($(this).scrollTop() > 90) {
            //$('.nav-bar').addClass('nav-sticky');
            //$('.carousel, .page-header').css("margin-top", "73px");
        //} else {
           // $('.nav-bar').removeClass('nav-sticky');
           // $('.carousel, .page-header').css("margin-top", "0");
       // }
   // });


    // Dropdown on mouse hover
   // $(document).ready(function () {
       // function toggleNavbarMethod() {
          //  if ($(window).width() > 992) {
            //    $('.navbar .dropdown').on('mouseover', function () {
             //       $('.dropdown-toggle', this).trigger('click');
             //   }).on('mouseout', function () {
             //       $('.dropdown-toggle', this).trigger('click').blur();
            //    });
           // } else {
           //     $('.navbar .dropdown').off('mouseover').off('mouseout');
          //  }
       // }
       // toggleNavbarMethod();
       // $(window).resize(toggleNavbarMethod);
   // });


    // jQuery counterUp
    $('[data-toggle="counter-up"]').counterUp({
        delay: 10,
        time: 2000
    });


    // Modal Video
    $(document).ready(function () {
        var $videoSrc;
        $('.btn-play').click(function () {
            $videoSrc = $(this).data("src");
        });
        console.log($videoSrc);

        $('#videoModal').on('shown.bs.modal', function (e) {
            $("#video").attr('src', $videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0");
        })

        $('#videoModal').on('hide.bs.modal', function (e) {
            $("#video").attr('src', $videoSrc);
        })
    });


    // Testimonial Slider
    $('.testimonial-slider').slick({
        infinite: true,
        autoplay: true,
        arrows: false,
        dots: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        asNavFor: '.testimonial-slider-nav'
    });
    $('.testimonial-slider-nav').slick({
        arrows: false,
        dots: false,
        focusOnSelect: true,
        centerMode: true,
        centerPadding: '22px',
        slidesToShow: 3,
        asNavFor: '.testimonial-slider'
    });
    $('.testimonial .slider-nav').css({"position": "relative", "height": "160px"});


    // Blogs carousel
    $(".related-slider").owlCarousel({
        autoplay: true,
        dots: false,
        loop: true,
        nav : true,
        navText : [
            '<i class="fa fa-angle-left" aria-hidden="true"></i>',
            '<i class="fa fa-angle-right" aria-hidden="true"></i>'
        ],
        responsive: {
            0:{
                items:1
            },
            576:{
                items:1
            },
            768:{
                items:2
            }
        }
    });


    // Portfolio isotope and filter
    var portfolioIsotope = $('.portfolio-container').isotope({
        itemSelector: '.portfolio-item',
        layoutMode: 'fitRows'
    });

    $('#portfolio-flters li').on('click', function () {
        $("#portfolio-flters li").removeClass('filter-active');
        $(this).addClass('filter-active');

        portfolioIsotope.isotope({filter: $(this).data('filter')});
    });

})(jQuery);

/*Arnob's js*/
//$('.counter').counterUp({
   // delay: 10,
   // time: 2000
//});
//var coverflow = $("#coverflow").flipster({
 //   loop: true
//});

//Navbar start here
$(document).ready(function () {

    $('.navbar .dropdown-item').on('click', function (e) {
        var $el = $(this).children('.dropdown-toggle');
        var $parent = $el.offsetParent(".dropdown-menu");
        $(this).parent("li").toggleClass('open');

        if (!$parent.parent().hasClass('navbar-nav')) {
            if ($parent.hasClass('show')) {
                $parent.removeClass('show');
                $el.next().removeClass('show');
                $el.next().css({"top": -999, "left": -999});
            } else {
                $parent.parent().find('.show').removeClass('show');
                $parent.addClass('show');
                $el.next().addClass('show');
                $el.next().css({"top": $el[0].offsetTop, "left": $parent.outerWidth() - 4});
            }
            e.preventDefault();
            e.stopPropagation();
        }
    });

    $('.navbar .dropdown').on('hidden.bs.dropdown', function () {
        $(this).find('li.dropdown').removeClass('show open');
        $(this).find('ul.dropdown-menu').removeClass('show open');
    });

});

//Speciality
document.getElementById('btn_1').addEventListener('click',function(){
				var firstButton=document.getElementById('sp_1');
				firstButton.style.display='block';
				var secondButton=document.getElementById('sp_2');
				secondButton.style.display='none';

				var firstBorderSelect=document.getElementById('first-border-bottom');
				var secondBorderSelect=document.getElementById('second-border-bottom');

				firstBorderSelect.style.color="red";
				secondBorderSelect.style.color = 'black';
				firstBorderSelect.style.borderBottom = '5px solid red';
				secondBorderSelect.style.borderBottom = 'none';
				})

				document.getElementById('btn_2').addEventListener('click',function(){
				var firstButton=document.getElementById('sp_1');
				firstButton.style.display='none';
				var secondButton=document.getElementById('sp_2');
				secondButton.style.display='block';

				var firstBorderSelect=document.getElementById('first-border-bottom');
				var secondBorderSelect=document.getElementById('second-border-bottom');

				firstBorderSelect.style.color="black";
				firstBorderSelect.style.borderBottom = 'none';
				secondBorderSelect.style.borderBottom = '5px solid red';
				secondBorderSelect.style.color = 'red';
				})


/****success page js*******/
$(document).ready(function(){
    $(".read").click(function(){
        $(this).prev().toggle();
        $(this).siblings('.dots').toggle();

        if($(this).text()==='read more'){
            $(this).text('read less');
        }
        else{
            $(this).text('read more');
        }
    });
});

















