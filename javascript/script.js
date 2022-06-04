// Handle navbar opening
const app = (() => {
    let nav;
    let menu;
    let menuItems;

    const init = () => {
        nav = document.querySelector('nav');
        menu = document.querySelector('.navbar-toggler');
        menuItems = document.querySelectorAll('nav ul li a');

        applyListeners();
    }

    const applyListeners = () => {
        menu.addEventListener('click', () => toggleClass(nav, 'active'));
        menuItems.forEach(item => {
            item.addEventListener('click', () => {
                if ($('nav').hasClass('active')) {
                    $('nav').removeClass('active');
                    $('.navbar-toggler').removeClass('active');
                }
            })
        })
    }

    const toggleClass = (element, stringClass) => {
        if (element.classList.contains(stringClass))
            element.classList.remove(stringClass);
        else
            element.classList.add(stringClass);
    }

    init();
})();

let listenerAdded = false;
function enableClickDropdown() {
    if (window.matchMedia("(max-width: 996px)").matches && !listenerAdded) {
        listenerAdded = true;
        document.querySelector(".dropdown").addEventListener("click", () => {
            document.querySelector(".dropdown .dropdown-container").classList.toggle("active");
        });
    }
}

jQuery(function ($) {

    if (document.querySelector(".testmionals-slider")) {
        $(".testmionals-slider").slick({
            dots: true,
            arrows: true,
            autoplay: true,
            appendDots: $('.testimonials .dots'),
            prevArrow: $(".testimonials .arrow-left"),
            nextArrow: $(".testimonials .arrow-right"),
        });
    }
    if (document.querySelector("section.partners .logos-container")) {
        $("section.partners .logos-container").slick({
            autoplay: true,
            slidesToShow: 5,
            arrows: false,
            responsive: [{
                breakpoint: 1300,
                settings: {
                    slidesToShow: 4
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 450,
                settings: {
                    slidesToShow: 2
                }
            },
            ]
        });
    }

    if (document.querySelector(".products-slider")) {
        $(".products-slider").slick({
            slidesToShow: 3,
            arrows: true,
            autoplay: true,
            nextArrow: $(".products-slider-section .arrows .next"),
            prevArrow: $(".products-slider-section .arrows .prev"),
            responsive: [{
                breakpoint: 1200,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 768,
                settings: {
                    autoplay: true,
                    slidesToShow: 1
                }
            },
            ]
        })
    }

    enableClickDropdown();
    window.addEventListener("resize", enableClickDropdown);

    const testimonialsImages = document.querySelectorAll(".testmionals-slider .img-src");
    const sliderBg = document.querySelector(".testimonials .to-change");
    const time = 200;

    $(".testmionals-slider").on('beforeChange', function (event, slick, currentSlide) {
        $(".testimonials .to-change").fadeOut(200);
        setTimeout(() => {
            sliderBg.setAttribute('src', testimonialsImages[currentSlide].getAttribute('src'));
        }, time)
        $(".testimonials .to-change").fadeIn(200);
    });
    jQuery('.footer-nav li').each(function (){
       jQuery(this).addClass('link');
    });
});




/* panels.forEach(panel => panel.addEventListener('click', toggleOpen));
panels.forEach(panel => panel.addEventListener('transitionend', toggleActive));
 */