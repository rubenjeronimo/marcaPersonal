(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();


    // Initiate the wowjs
    new WOW().init();

    // Obtener la ruta actual de la página
        var currentPath = window.location.pathname;
        // Verificar si la página se encuentra en una subcarpeta
        var isInSubfolder = currentPath.includes('/blog/');
        // Ruta base para los archivos
        var basePath = isInSubfolder ? '../' : '';

    // Sticky Navbar
        $(window).scroll(function () {
            var scrollTop = $(this).scrollTop();
            var logo = $('#logo');

            if (scrollTop > 45) {
                $('.navbar').addClass('sticky-top shadow-sm');
                logo.attr('src', basePath + 'img/logoM.png');
            } else {
                $('.navbar').removeClass('sticky-top shadow-sm');
                logo.attr('src', basePath + 'img/logoMBlanco.png');
            }
        });
 








    // Dropdown on mouse hover
    const $dropdown = $(".dropdown");
    const $dropdownToggle = $(".dropdown-toggle");
    const $dropdownMenu = $(".dropdown-menu");
    const showClass = "show";

    $(window).on("load resize", function () {
        if (this.matchMedia("(min-width: 992px)").matches) {
            $dropdown.hover(
                function () {
                    const $this = $(this);
                    $this.addClass(showClass);
                    $this.find($dropdownToggle).attr("aria-expanded", "true");
                    $this.find($dropdownMenu).addClass(showClass);
                },
                function () {
                    const $this = $(this);
                    $this.removeClass(showClass);
                    $this.find($dropdownToggle).attr("aria-expanded", "false");
                    $this.find($dropdownMenu).removeClass(showClass);
                }
            );
        } else {
            $dropdown.off("mouseenter mouseleave");
        }
    });


    // Facts counter
    $('[data-toggle="counter-up"]').counterUp({
        delay: 10,
        time: 2000
    });


    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({ scrollTop: 0 }, 1500, 'easeInOutExpo');
        return false;
    });


    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1500,
        dots: true,
        loop: true,
        center: true,
        responsive: {
            0: {
                items: 1
            },
            576: {
                items: 1
            },
            768: {
                items: 2
            },
            992: {
                items: 3
            }
        }
    });


    // Vendor carousel
    $('.vendor-carousel').owlCarousel({
        loop: true,
        margin: 45,
        dots: false,
        loop: true,
        autoplay: true,
        smartSpeed: 1000,
        responsive: {
            0: {
                items: 2
            },
            576: {
                items: 4
            },
            768: {
                items: 6
            },
            992: {
                items: 8
            }
        }
    });

})(jQuery);


// para el CHATBOT

/*var chatbotToggle = document.getElementById('chatbot-toggle');
var chatbotIframe = document.getElementById('dialogflow-webdemo');

chatbotToggle.addEventListener('click', function() {
  chatbotIframe.src = 'https://console.dialogflow.com/api-client/demo/embedded/556be304-8c0e-46c2-8fd4-f636796319ae';
  chatbotToggle.style.display = 'none';
});*/

function toggleChatbot() {
  var chatbotToggle = document.getElementById('chatbot-toggle');
  var chatbotIframe = document.getElementById('dialogflow-webdemo');
  
  if (chatbotIframe.style.display === 'none') {
    chatbotIframe.src = 'https://console.dialogflow.com/api-client/demo/embedded/556be304-8c0e-46c2-8fd4-f636796319ae';
    chatbotIframe.style.display = 'block';
    chatbotToggle.style.display = 'none';
  } else {
    chatbotIframe.style.display = 'none';
    chatbotToggle.style.display = 'block';
  }
}