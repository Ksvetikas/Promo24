import 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js';
import 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js';
import Swiper from 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.mjs'

function refreshCategoriesScrollNav() {
    const scrollWrap = document.querySelectorAll('.scroll-container')[0];
    const scrollLinks = document.querySelectorAll('.scroll-container .categories-wrap')[0];
    const scrollButtons = document.querySelectorAll('.scroll-arrow');

    if (scrollLinks.offsetWidth < scrollWrap.offsetWidth) {
        scrollButtons.forEach(function (button) {
            button.classList.add("d-none");
        });
    }else {
        scrollButtons.forEach(function (button) {
            button.classList.remove("d-none");
        });
    }
}

function getOffset(el) {
    const rect = el.getBoundingClientRect();
    return {
        left: rect.left + window.scrollX,
        top: rect.top + window.scrollY
    };
}

function elementScroll(el, position) {
    el.scroll({
        left: position,
        behavior: 'smooth'
    });
}

document.addEventListener('DOMContentLoaded', function() {

    // Categories scroll.

    if (document.querySelectorAll("#categories-scroll-section").length > 0) {
        refreshCategoriesScrollNav();
        window.addEventListener("resize", refreshCategoriesScrollNav);

        let categoriesEl = document.querySelectorAll('.categories-wrap')[0];
        var scrollElement = document.querySelectorAll('.scroll-container')[0];
        let categoriesPosition = getOffset(categoriesEl).left;

        let scrollArrowLeft = document.querySelectorAll('.category-scroll-btn')[0];
        scrollArrowLeft.addEventListener('click', function (e) {
            e.preventDefault();
            categoriesPosition -= 200;
            if (categoriesPosition < 0){
                categoriesPosition = 0;
            }

            elementScroll(scrollElement, categoriesPosition);
        });

        let scrollArrowRight = document.querySelectorAll('.category-scroll-btn')[1];
        scrollArrowRight.addEventListener('click', function (e) {
            e.preventDefault();
            categoriesPosition += 200;
            if (categoriesPosition > categoriesEl.width){
                categoriesPosition = categoriesEl.width;
            }

            elementScroll(scrollElement, categoriesPosition);
        });
    }

    if (document.querySelectorAll(".top-recipes-slider").length > 0) {
        const topRecipesSwiper = new Swiper('.top-recipes-slider', {
            loop: true,
            slidesPerView: 'auto',
            slidesPerGroup: 1,
            spaceBetween: 24,
            centeredSlides: true,
            centeredSlidesBounds: true,
            updateOnWindowResize: true,
            loopAddBlankSlides: false,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            breakpoints: {
                // when window width is >= 768px
                768: {
                    slidesPerView: 3,
                    slidesPerGroup: 3,
                    centeredSlides: false,
                    loopAddBlankSlides: true,
                },
                // when window width is >= 992px
                992: {
                    slidesPerView: 4,
                    slidesPerGroup: 4,
                    centeredSlides: false
                },
                // when window width is >= 1200px
                1200: {
                    slidesPerView: 5,
                    slidesPerGroup: 5,
                    centeredSlides: false
                }
            },
        });
    }

    if (document.querySelectorAll(".celebrity-recipes-slider").length > 0) {
        const celebrityRecipesSwiper = new Swiper('.celebrity-recipes-slider', {
            loop: true,
            slidesPerView: 'auto',
            slidesPerGroup: 1,
            spaceBetween: 24,
            centeredSlides: true,
            centeredSlidesBounds: true,
            updateOnWindowResize: true,
            loopAddBlankSlides: false,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            breakpoints: {
                // when window width is >= 768px
                768: {
                    slidesPerView: 3,
                    slidesPerGroup: 3,
                    centeredSlides: false,
                    loopAddBlankSlides: true
                },
                // when window width is >= 992px
                992: {
                    slidesPerView: 4,
                    slidesPerGroup: 4,
                    centeredSlides: false
                },
                // when window width is >= 1200px
                1200: {
                    slidesPerView: 5,
                    slidesPerGroup: 5,
                    centeredSlides: false
                }
            },
        });
    }

    if (document.querySelectorAll(".top-chefs-slider").length > 0) {
        const topChefsSwiper = new Swiper('.top-chefs-slider', {
            loop: true,
            slidesPerView: 'auto',
            slidesPerGroup: 1,
            spaceBetween: 24,
            centeredSlides: true,
            centeredSlidesBounds: true,
            updateOnWindowResize: true,
            loopAddBlankSlides: false,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            scrollbar: {
                el: '.swiper-scrollbar',
                draggable: true,
            },
            breakpoints: {
                // when window width is >= 576px
                576: {
                    slidesPerView: 2,
                    slidesPerGroup: 2,
                    centeredSlides: false,
                    loopAddBlankSlides: true
                },
                // when window width is >= 992px
                992: {
                    slidesPerView: 3,
                    slidesPerGroup: 3,
                    centeredSlides: false
                },
                // when window width is >= 1200px
                1200: {
                    slidesPerView: 3,
                    slidesPerGroup: 3,
                    centeredSlides: false
                }
            },
        });
    }

    if (document.querySelectorAll(".thematic-inspiration-slider").length > 0) {
        const thematicInspirationSwiper = new Swiper('.thematic-inspiration-slider', {
            loop: true,
            slidesPerView: 2,
            slidesPerGroup: 2,
            spaceBetween: 24,
            updateOnWindowResize: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            scrollbar: {
                el: '.swiper-scrollbar',
                draggable: true,
            },
            breakpoints: {
                // when window width is >= 576px
                576: {
                    slidesPerView: 3,
                    slidesPerGroup: 3,
                    centeredSlides: false
                },
                // when window width is >= 768px
                768: {
                    slidesPerView: 4,
                    slidesPerGroup: 4,
                    centeredSlides: false
                },
                // when window width is >= 992px
                992: {
                    slidesPerView: 5,
                    slidesPerGroup: 5,
                    centeredSlides: false
                },
                // when window width is >= 1200px
                1200: {
                    slidesPerView: 6,
                    slidesPerGroup: 6,
                    centeredSlides: false
                }
            },
        });
    }

    if (document.querySelectorAll(".ingredients-slider").length > 0) {
        const ingredientsSwiper = new Swiper('.ingredients-slider', {
            loop: true,
            slidesPerView: 4,
            slidesPerGroup: 4,
            spaceBetween: 24,
            updateOnWindowResize: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            scrollbar: {
                el: '.swiper-scrollbar',
                draggable: true,
            },
            breakpoints: {
                // when window width is >= 576px
                576: {
                    slidesPerView: 6,
                    slidesPerGroup: 6,
                    centeredSlides: false
                },
                // when window width is >= 768px
                768: {
                    slidesPerView: 8,
                    slidesPerGroup: 8,
                    centeredSlides: false
                },
                // when window width is >= 992px
                992: {
                    slidesPerView: 10,
                    slidesPerGroup: 10,
                    centeredSlides: false
                },
                // when window width is >= 1200px
                1200: {
                    slidesPerView: 12,
                    slidesPerGroup: 12,
                    centeredSlides: false
                }
            },
        });
    }

    if (document.querySelectorAll(".menu-recipes-slider").length > 0) {
        const menuRecipesSwiper = new Swiper('.menu-recipes-slider', {
            loop: true,
            slidesPerView: 'auto',
            slidesPerGroup: 1,
            spaceBetween: 24,
            centeredSlides: true,
            centeredSlidesBounds: true,
            updateOnWindowResize: true,
            loopAddBlankSlides: false,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            breakpoints: {
                // when window width is >= 768px
                768: {
                    slidesPerView: 3,
                    slidesPerGroup: 3,
                    centeredSlides: false,
                    loopAddBlankSlides: true,
                }
            },
        });
    }

    if (document.querySelectorAll(".similar-recipes-slider").length > 0) {
        const similarRecipesSwiper = new Swiper('.similar-recipes-slider', {
            loop: true,
            slidesPerView: 'auto',
            slidesPerGroup: 1,
            spaceBetween: 24,
            centeredSlides: true,
            centeredSlidesBounds: true,
            updateOnWindowResize: true,
            loopAddBlankSlides: false,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            breakpoints: {
                // when window width is >= 768px
                768: {
                    slidesPerView: 3,
                    slidesPerGroup: 3,
                    centeredSlides: false,
                    loopAddBlankSlides: true,
                },
                // when window width is >= 992px
                992: {
                    slidesPerView: 4,
                    slidesPerGroup: 4,
                    centeredSlides: false
                }
            },
        });
    }
});