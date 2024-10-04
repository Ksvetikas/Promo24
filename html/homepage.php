<?php include 'header.php';?>
<div class="content-wrap pt-4 pb-5">

<!--    Categories scroll section.-->
    <div class="container-xxl categories-scroll-section position-relative pb-4" id="categories-scroll-section">
        <h5 class="pt-2 pb-3 mb-0 fw-bold">Recommended categories</h5>
        <nav id="categories-scroll" class="navbar categories-nav-buttons p-0">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="category-scroll-btn nav-link scroll-arrow position-absolute start-0 rounded px-4" href="#categories-start">
                        <img class="left-arrow" src="../assets/img/icons/caret-left-dark.svg" alt="left-arrow"/>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="category-scroll-btn nav-link scroll-arrow position-absolute end-0 rounded px-4" href="#categories-end">
                        <img class="right-arrow" src="../assets/img/icons/caret-left-dark.svg" alt="left-arrow"/>
                    </a>
                </li>
            </ul>
        </nav>
        <div data-bs-spy="scroll" data-bs-target="#categories-scroll" data-bs-offset="0" class="scroll-container overflow-auto d-flex py-1" tabindex="0">
            <div class="categories-wrap d-flex">
                <span class="categories-start" id="categories-start"></span>
                <a href="#" class="btn special-btn fw-bold text-uppercase text-nowrap rounded-pill btn-light">Breakfast & brunch</a>
                <a href="#" class="btn special-btn fw-bold text-uppercase text-nowrap rounded-pill btn-light">Lunch</a>
                <a href="#" class="btn special-btn fw-bold text-uppercase text-nowrap rounded-pill btn-light">Dinner</a>
                <a href="#" class="btn special-btn fw-bold text-uppercase text-nowrap rounded-pill btn-light">Salad</a>
                <a href="#" class="btn special-btn fw-bold text-uppercase text-nowrap rounded-pill btn-light">Soups</a>
                <a href="#" class="btn special-btn fw-bold text-uppercase text-nowrap rounded-pill btn-light">Pizza</a>
                <a href="#" class="btn special-btn fw-bold text-uppercase text-nowrap rounded-pill btn-light">Pasta</a>
                <a href="#" class="btn special-btn fw-bold text-uppercase text-nowrap rounded-pill btn-light">Desserts</a>
                <a href="#" class="btn special-btn fw-bold text-uppercase text-nowrap rounded-pill btn-light">Main dishes</a>
                <a href="#" class="btn special-btn fw-bold text-uppercase text-nowrap rounded-pill btn-light">Bbq & grilling</a>
                <a href="#" class="btn special-btn fw-bold text-uppercase text-nowrap rounded-pill btn-light">Seafood</a>
                <a href="#" class="btn special-btn fw-bold text-uppercase text-nowrap rounded-pill btn-light">Bread</a>
                <a href="#" class="btn special-btn fw-bold text-uppercase text-nowrap rounded-pill btn-light">Drinks</a>
                <a href="#" class="btn special-btn fw-bold text-uppercase text-nowrap rounded-pill btn-light">Drinks</a>
                <span class="categories-end" id="categories-end"></span>
            </div>
        </div>
    </div>
<!--    Categories scroll section end.-->

<!--    Stories section.-->
    <div class="container-xxl stories-section py-5" id="stories-section">
        <div class="heading-wrap text-center pb-3">
            <h2 class="text-uppercase fw-bold mb-3">Today’s top stories</h2>
            <p>What’s happening in the world of food</p>
        </div>
        <div class="story-gallery">
<!--            Gallery displayed on desktop.-->
            <div class="desktop-gallery d-none d-lg-flex row">
                <div class="col-12 col-sm-6 col-lg-3 d-flex gap-4 flex-column">
                    <div class="card mb-1">
                        <a href="#">
                            <img src="/assets/img/example.jpg" class="card-img aspect-ratio-32x17" alt="...">
                        </a>
                        <div class="card-body px-0 mt-1">
                            <a href="#" class="btn special-btn fw-bold text-uppercase text-nowrap rounded-pill btn-dark mb-2">Recipes</a>
                            <a href="#" class="text-decoration-none">
                                <h5 class="card-title lh-sm mb-2">The action you should always do before eating abanana to increase its benefits tenfold</h5>
                            </a>
                            <p class="card-text lh-sm mb-2 fw-semibold opacity-75">The action you should always do before eating abanana to increase its benefits tenfold</p>
                            <div class="recipe-rating d-flex align-items-center lh-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                                    <path d="M5 0L6.32252 3.17971L9.75528 3.45492L7.13988 5.69529L7.93893 9.04508L5 7.25L2.06107 9.04508L2.86012 5.69529L0.244718 3.45492L3.67748 3.17971L5 0Z" fill="#191919"/>
                                </svg>
                                <p class="mb-0 ms-1 fw-semibold">4.75 (12)</p>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-1">
                        <a href="#">
                            <img src="/assets/img/example.jpg" class="card-img aspect-ratio-32x17" alt="...">
                        </a>
                        <div class="card-body px-0 mt-1">
                            <a href="#" class="btn special-btn fw-bold text-uppercase text-nowrap rounded-pill btn-dark mb-2">Recipes</a>
                            <a href="#" class="text-decoration-none">
                                <h5 class="card-title lh-sm mb-2">The action you should always do before eating abanana to increase its benefits tenfold</h5>
                            </a>
                            <p class="card-text lh-sm mb-2 fw-semibold opacity-75">The action you should always do before eating abanana to increase its benefits tenfold</p>
                            <div class="recipe-rating d-flex align-items-center lh-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                                    <path d="M5 0L6.32252 3.17971L9.75528 3.45492L7.13988 5.69529L7.93893 9.04508L5 7.25L2.06107 9.04508L2.86012 5.69529L0.244718 3.45492L3.67748 3.17971L5 0Z" fill="#191919"/>
                                </svg>
                                <p class="mb-0 ms-1 fw-semibold">4.75 (12)</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="desktop-big-center col-6 d-none d-lg-block gap-4 ">
                    <div class="card mb-1">
                        <a href="#">
                            <img src="/assets/img/example.jpg" class="card-img aspect-ratio-32x31" alt="...">
                        </a>
                        <div class="card-body px-0 mt-1">
                            <a href="#" class="btn special-btn fw-bold text-uppercase text-nowrap rounded-pill btn-dark mb-2">Culture</a>
                            <a href="#" class="text-decoration-none">
                                <h5 class="card-title lh-sm mb-2">The action you should always do before eating abanana to increase its benefits tenfold</h5>
                            </a>
                            <p class="card-text lh-sm mb-2 fw-semibold opacity-75">The action you should always do before eating abanana to increase its benefits tenfold</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 d-flex gap-4 flex-column">
                    <div class="card mb-1">
                        <a href="#">
                            <img src="/assets/img/example.jpg" class="card-img aspect-ratio-32x17" alt="...">
                        </a>
                        <div class="card-body px-0 mt-1">
                            <a href="#" class="btn special-btn fw-bold text-uppercase text-nowrap rounded-pill btn-dark mb-2">Recipes</a>
                            <a href="#" class="text-decoration-none">
                                <h5 class="card-title lh-sm mb-2">The action you should always do before eating abanana to increase its benefits tenfold</h5>
                            </a>
                            <p class="card-text lh-sm mb-2 fw-semibold opacity-75">The action you should always do before eating abanana to increase its benefits tenfold</p>
                            <div class="recipe-rating d-flex align-items-center lh-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                                    <path d="M5 0L6.32252 3.17971L9.75528 3.45492L7.13988 5.69529L7.93893 9.04508L5 7.25L2.06107 9.04508L2.86012 5.69529L0.244718 3.45492L3.67748 3.17971L5 0Z" fill="#191919"/>
                                </svg>
                                <p class="mb-0 ms-1 fw-semibold">4.75 (12)</p>
                            </div>
                        </div>
                    </div>

                    <div class="card mb-1">
                        <a href="#">
                            <img src="/assets/img/example.jpg" class="card-img aspect-ratio-32x17" alt="...">
                        </a>
                        <div class="card-body px-0 mt-1">
                            <a href="#" class="btn special-btn fw-bold text-uppercase text-nowrap rounded-pill btn-dark mb-2">Recipes</a>
                            <a href="#" class="text-decoration-none">
                                <h5 class="card-title lh-sm mb-2">The action you should always do before eating abanana to increase its benefits tenfold</h5>
                            </a>
                            <p class="card-text lh-sm mb-2 fw-semibold opacity-75">The action you should always do before eating abanana to increase its benefits tenfold</p>
                            <div class="recipe-rating d-flex align-items-center lh-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                                    <path d="M5 0L6.32252 3.17971L9.75528 3.45492L7.13988 5.69529L7.93893 9.04508L5 7.25L2.06107 9.04508L2.86012 5.69529L0.244718 3.45492L3.67748 3.17971L5 0Z" fill="#191919"/>
                                </svg>
                                <p class="mb-0 ms-1 fw-semibold">4.75 (12)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<!--            Gallery displayed on mobile.-->
            <div class="mobile-gallery d-lg-none row">
                <div class="col-12 col-sm-6 mb-sm-4">
                    <div class="card mb-1">
                        <a href="#">
                            <img src="/assets/img/example.jpg" class="card-img aspect-ratio-resp-rev" alt="...">
                        </a>
                        <div class="card-body px-0 mt-1">
                            <a href="#" class="btn special-btn fw-bold text-uppercase text-nowrap rounded-pill btn-dark mb-2">Culture</a>
                            <a href="#" class="text-decoration-none">
                                <h5 class="card-title lh-sm mb-2">The action you should always do before eating abanana to increase its benefits tenfold</h5>
                            </a>
                            <p class="card-text lh-sm mb-2 fw-semibold opacity-75">The action you should always do before eating abanana to increase its benefits tenfold</p>
                            <div class="recipe-rating d-flex align-items-center lh-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                                    <path d="M5 0L6.32252 3.17971L9.75528 3.45492L7.13988 5.69529L7.93893 9.04508L5 7.25L2.06107 9.04508L2.86012 5.69529L0.244718 3.45492L3.67748 3.17971L5 0Z" fill="#191919"/>
                                </svg>
                                <p class="mb-0 ms-1 fw-semibold">4.75 (12)</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 mb-sm-4">
                    <div class="card mb-1">
                        <a href="#">
                            <img src="/assets/img/example.jpg" class="card-img aspect-ratio-32x17" alt="...">
                        </a>
                        <div class="card-body px-0 mt-1">
                            <a href="#" class="btn special-btn fw-bold text-uppercase text-nowrap rounded-pill btn-dark mb-2">Recipes</a>
                            <a href="#" class="text-decoration-none">
                                <h5 class="card-title lh-sm mb-2">The action you should always do before eating abanana to increase its benefits tenfold</h5>
                            </a>
                            <p class="card-text lh-sm mb-2 fw-semibold opacity-75">The action you should always do before eating abanana to increase its benefits tenfold</p>
                            <div class="recipe-rating d-flex align-items-center lh-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                                    <path d="M5 0L6.32252 3.17971L9.75528 3.45492L7.13988 5.69529L7.93893 9.04508L5 7.25L2.06107 9.04508L2.86012 5.69529L0.244718 3.45492L3.67748 3.17971L5 0Z" fill="#191919"/>
                                </svg>
                                <p class="mb-0 ms-1 fw-semibold">4.75 (12)</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 mb-sm-4">
                    <div class="card mb-1">
                        <a href="#">
                            <img src="/assets/img/example.jpg" class="card-img aspect-ratio-32x17" alt="...">
                        </a>
                        <div class="card-body px-0 mt-1">
                            <a href="#" class="btn special-btn fw-bold text-uppercase text-nowrap rounded-pill btn-dark mb-2">Recipes</a>
                            <a href="#" class="text-decoration-none">
                                <h5 class="card-title lh-sm mb-2">The action you should always do before eating abanana to increase its benefits tenfold</h5>
                            </a>
                            <p class="card-text lh-sm mb-2 fw-semibold opacity-75">The action you should always do before eating abanana to increase its benefits tenfold</p>
                            <div class="recipe-rating d-flex align-items-center lh-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                                    <path d="M5 0L6.32252 3.17971L9.75528 3.45492L7.13988 5.69529L7.93893 9.04508L5 7.25L2.06107 9.04508L2.86012 5.69529L0.244718 3.45492L3.67748 3.17971L5 0Z" fill="#191919"/>
                                </svg>
                                <p class="mb-0 ms-1 fw-semibold">4.75 (12)</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 mb-sm-4">
                    <div class="card mb-1">
                        <a href="#">
                            <img src="/assets/img/example.jpg" class="card-img aspect-ratio-32x17" alt="...">
                        </a>
                        <div class="card-body px-0 mt-1">
                            <a href="#" class="btn special-btn fw-bold text-uppercase text-nowrap rounded-pill btn-dark mb-2">Recipes</a>
                            <a href="#" class="text-decoration-none">
                                <h5 class="card-title lh-sm mb-2">The action you should always do before eating abanana to increase its benefits tenfold</h5>
                            </a>
                            <p class="card-text lh-sm mb-2 fw-semibold opacity-75">The action you should always do before eating abanana to increase its benefits tenfold</p>
                            <div class="recipe-rating d-flex align-items-center lh-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                                    <path d="M5 0L6.32252 3.17971L9.75528 3.45492L7.13988 5.69529L7.93893 9.04508L5 7.25L2.06107 9.04508L2.86012 5.69529L0.244718 3.45492L3.67748 3.17971L5 0Z" fill="#191919"/>
                                </svg>
                                <p class="mb-0 ms-1 fw-semibold">4.75 (12)</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 mb-sm-4">
                    <div class="card mb-1">
                        <a href="#">
                            <img src="/assets/img/example.jpg" class="card-img aspect-ratio-32x17" alt="...">
                        </a>
                        <div class="card-body px-0 mt-1">
                            <a href="#" class="btn special-btn fw-bold text-uppercase text-nowrap rounded-pill btn-dark mb-2">Recipes</a>
                            <a href="#" class="text-decoration-none">
                                <h5 class="card-title lh-sm mb-2">The action you should always do before eating abanana to increase its benefits tenfold</h5>
                            </a>
                            <p class="card-text lh-sm mb-2 fw-semibold opacity-75">The action you should always do before eating abanana to increase its benefits tenfold</p>
                            <div class="recipe-rating d-flex align-items-center lh-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                                    <path d="M5 0L6.32252 3.17971L9.75528 3.45492L7.13988 5.69529L7.93893 9.04508L5 7.25L2.06107 9.04508L2.86012 5.69529L0.244718 3.45492L3.67748 3.17971L5 0Z" fill="#191919"/>
                                </svg>
                                <p class="mb-0 ms-1 fw-semibold">4.75 (12)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--    Stories section end.-->

<!--    Top recipes section.-->
    <div class="top-recipes-section py-5 mb-5" id="top-recipes-section">
        <div class="container-xxl heading-wrap text-center pb-3">
            <h2 class="text-uppercase fw-bold mb-4 pb-2">Top recipes</h2>
            <div class="sorting-buttons d-flex justify-content-center gap-2 mb-3">
                <a href="#" class="btn special-btn fw-bold text-uppercase text-nowrap rounded-pill btn-light active">All time</a>
                <a href="#" class="btn special-btn fw-bold text-uppercase text-nowrap rounded-pill btn-light">Today</a>
                <a href="#" class="btn special-btn fw-bold text-uppercase text-nowrap rounded-pill btn-light">Week</a>
                <a href="#" class="btn special-btn fw-bold text-uppercase text-nowrap rounded-pill btn-light">Month</a>
            </div>
        </div>
        <div class="container-xxl slider-wrap-sm-padding slider-wrap d-flex justify-content-center">
            <div class="top-recipes-slider swiper">
                <div class="swiper-wrapper pb-3 mb-3">
                    <div class="swiper-slide">
                        <div class="card mb-1">
                            <div class="card-img-wrap position-relative">
                                <div class="card-tags-and-buttons gap-2 position-absolute start-0 d-flex flex-column px-3 py-4">
                                    <a href="#" class="btn special-btn fw-semibold text-uppercase text-nowrap rounded-pill special-accent-btn">Vegan</a>
                                </div>
                                <div class="card-tags-and-buttons gap-2 position-absolute end-0 px-3 py-4">
                                    <a href="#" class="btn special-btn rounded-circle btn-light shadow-sm px-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                            <path d="M10.9297 2.49219C9.69922 2.49219 8.6293 3.04707 8 3.97695C7.3707 3.04707 6.30078 2.49219 5.07031 2.49219C4.13824 2.49327 3.24466 2.86402 2.58559 3.52309C1.92652 4.18216 1.55577 5.07574 1.55469 6.00781C1.55469 7.71875 2.62109 9.49941 4.72461 11.2994C5.68851 12.1208 6.7297 12.8468 7.83359 13.4674C7.88475 13.4949 7.94192 13.5093 8 13.5093C8.05808 13.5093 8.11525 13.4949 8.16641 13.4674C9.2703 12.8468 10.3115 12.1208 11.2754 11.2994C13.3789 9.49941 14.4453 7.71875 14.4453 6.00781C14.4442 5.07574 14.0735 4.18216 13.4144 3.52309C12.7553 2.86402 11.8618 2.49327 10.9297 2.49219ZM8 12.7525C7.03848 12.1977 2.25781 9.27266 2.25781 6.00781C2.25859 5.26213 2.55515 4.54721 3.08243 4.01993C3.60971 3.49265 4.32463 3.19609 5.07031 3.19531C6.25859 3.19531 7.25644 3.82988 7.6748 4.85176C7.70129 4.91624 7.74635 4.97139 7.80425 5.0102C7.86216 5.04902 7.93029 5.06974 8 5.06974C8.06971 5.06974 8.13784 5.04902 8.19575 5.0102C8.25365 4.97139 8.29871 4.91624 8.3252 4.85176C8.74356 3.82988 9.74141 3.19531 10.9297 3.19531C11.6754 3.19609 12.3903 3.49265 12.9176 4.01993C13.4448 4.54721 13.7414 5.26213 13.7422 6.00781C13.7422 9.27266 8.96152 12.1977 8 12.7525Z" fill="#191919"></path>
                                        </svg>
                                    </a>
                                </div>
                                <a href="#">
                                    <img src="/assets/img/example.jpg" class="card-img aspect-ratio-25x31" alt="...">
                                </a>
                            </div>
                            <div class="card-body px-0 mt-1">
                                <a href="#" class="text-decoration-none">
                                    <h5 class="card-title lh-sm mb-2">The action you should always do before eating abanana to increase its benefits tenfold</h5>
                                </a>
                                <div class="recipe-rating d-flex align-items-center lh-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                                        <path d="M5 0L6.32252 3.17971L9.75528 3.45492L7.13988 5.69529L7.93893 9.04508L5 7.25L2.06107 9.04508L2.86012 5.69529L0.244718 3.45492L3.67748 3.17971L5 0Z" fill="#191919"/>
                                    </svg>
                                    <p class="mb-0 ms-1 fw-semibold">4.75 (12)</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card mb-1">
                            <div class="card-img-wrap position-relative">
                                <div class="card-tags-and-buttons gap-2 position-absolute start-0 d-flex flex-column px-3 py-4">
                                    <a href="#" class="btn special-btn fw-semibold text-uppercase text-nowrap rounded-pill special-accent-btn">Vegan</a>
                                </div>
                                <div class="card-tags-and-buttons gap-2 position-absolute end-0 px-3 py-4">
                                    <a href="#" class="btn special-btn rounded-circle btn-light shadow-sm px-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                            <path d="M10.9297 2.49219C9.69922 2.49219 8.6293 3.04707 8 3.97695C7.3707 3.04707 6.30078 2.49219 5.07031 2.49219C4.13824 2.49327 3.24466 2.86402 2.58559 3.52309C1.92652 4.18216 1.55577 5.07574 1.55469 6.00781C1.55469 7.71875 2.62109 9.49941 4.72461 11.2994C5.68851 12.1208 6.7297 12.8468 7.83359 13.4674C7.88475 13.4949 7.94192 13.5093 8 13.5093C8.05808 13.5093 8.11525 13.4949 8.16641 13.4674C9.2703 12.8468 10.3115 12.1208 11.2754 11.2994C13.3789 9.49941 14.4453 7.71875 14.4453 6.00781C14.4442 5.07574 14.0735 4.18216 13.4144 3.52309C12.7553 2.86402 11.8618 2.49327 10.9297 2.49219ZM8 12.7525C7.03848 12.1977 2.25781 9.27266 2.25781 6.00781C2.25859 5.26213 2.55515 4.54721 3.08243 4.01993C3.60971 3.49265 4.32463 3.19609 5.07031 3.19531C6.25859 3.19531 7.25644 3.82988 7.6748 4.85176C7.70129 4.91624 7.74635 4.97139 7.80425 5.0102C7.86216 5.04902 7.93029 5.06974 8 5.06974C8.06971 5.06974 8.13784 5.04902 8.19575 5.0102C8.25365 4.97139 8.29871 4.91624 8.3252 4.85176C8.74356 3.82988 9.74141 3.19531 10.9297 3.19531C11.6754 3.19609 12.3903 3.49265 12.9176 4.01993C13.4448 4.54721 13.7414 5.26213 13.7422 6.00781C13.7422 9.27266 8.96152 12.1977 8 12.7525Z" fill="#191919"></path>
                                        </svg>
                                    </a>
                                </div>
                                <a href="#">
                                    <img src="/assets/img/example.jpg" class="card-img aspect-ratio-25x31" alt="...">
                                </a>
                            </div>
                            <div class="card-body px-0 mt-1">
                                <a href="#" class="text-decoration-none">
                                    <h5 class="card-title lh-sm mb-2">The action you should always do before eating abanana to increase its benefits tenfold</h5>
                                </a>
                                <div class="recipe-rating d-flex align-items-center lh-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                                        <path d="M5 0L6.32252 3.17971L9.75528 3.45492L7.13988 5.69529L7.93893 9.04508L5 7.25L2.06107 9.04508L2.86012 5.69529L0.244718 3.45492L3.67748 3.17971L5 0Z" fill="#191919"/>
                                    </svg>
                                    <p class="mb-0 ms-1 fw-semibold">4.75 (12)</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card mb-1">
                            <div class="card-img-wrap position-relative">
                                <div class="card-tags-and-buttons gap-2 position-absolute start-0 d-flex flex-column px-3 py-4">
                                    <a href="#" class="btn special-btn fw-semibold text-uppercase text-nowrap rounded-pill special-accent-btn">Quick</a>
                                </div>
                                <div class="card-tags-and-buttons gap-2 position-absolute end-0 px-3 py-4">
                                    <a href="#" class="btn special-btn rounded-circle btn-light shadow-sm px-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                            <path d="M10.9297 2.49219C9.69922 2.49219 8.6293 3.04707 8 3.97695C7.3707 3.04707 6.30078 2.49219 5.07031 2.49219C4.13824 2.49327 3.24466 2.86402 2.58559 3.52309C1.92652 4.18216 1.55577 5.07574 1.55469 6.00781C1.55469 7.71875 2.62109 9.49941 4.72461 11.2994C5.68851 12.1208 6.7297 12.8468 7.83359 13.4674C7.88475 13.4949 7.94192 13.5093 8 13.5093C8.05808 13.5093 8.11525 13.4949 8.16641 13.4674C9.2703 12.8468 10.3115 12.1208 11.2754 11.2994C13.3789 9.49941 14.4453 7.71875 14.4453 6.00781C14.4442 5.07574 14.0735 4.18216 13.4144 3.52309C12.7553 2.86402 11.8618 2.49327 10.9297 2.49219ZM8 12.7525C7.03848 12.1977 2.25781 9.27266 2.25781 6.00781C2.25859 5.26213 2.55515 4.54721 3.08243 4.01993C3.60971 3.49265 4.32463 3.19609 5.07031 3.19531C6.25859 3.19531 7.25644 3.82988 7.6748 4.85176C7.70129 4.91624 7.74635 4.97139 7.80425 5.0102C7.86216 5.04902 7.93029 5.06974 8 5.06974C8.06971 5.06974 8.13784 5.04902 8.19575 5.0102C8.25365 4.97139 8.29871 4.91624 8.3252 4.85176C8.74356 3.82988 9.74141 3.19531 10.9297 3.19531C11.6754 3.19609 12.3903 3.49265 12.9176 4.01993C13.4448 4.54721 13.7414 5.26213 13.7422 6.00781C13.7422 9.27266 8.96152 12.1977 8 12.7525Z" fill="#191919"></path>
                                        </svg>
                                    </a>
                                </div>
                                <a href="#">
                                    <img src="/assets/img/example2.jpg" class="card-img aspect-ratio-25x31" alt="...">
                                </a>
                            </div>
                            <div class="card-body px-0 mt-1">
                                <a href="#" class="text-decoration-none">
                                    <h5 class="card-title lh-sm mb-2">The action you should always do before eating abanana to increase its benefits tenfold</h5>
                                </a>
                                <div class="recipe-rating d-flex align-items-center lh-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                                        <path d="M5 0L6.32252 3.17971L9.75528 3.45492L7.13988 5.69529L7.93893 9.04508L5 7.25L2.06107 9.04508L2.86012 5.69529L0.244718 3.45492L3.67748 3.17971L5 0Z" fill="#191919"/>
                                    </svg>
                                    <p class="mb-0 ms-1 fw-semibold">4.75 (12)</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card mb-1">
                            <div class="card-img-wrap position-relative">
                                <div class="card-tags-and-buttons gap-2 position-absolute start-0 d-flex flex-column px-3 py-4">
                                    <a href="#" class="btn special-btn fw-semibold text-uppercase text-nowrap rounded-pill special-accent-btn">Vegan</a>
                                </div>
                                <div class="card-tags-and-buttons gap-2 position-absolute end-0 px-3 py-4">
                                    <a href="#" class="btn special-btn rounded-circle btn-light shadow-sm px-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                            <path d="M10.9297 2.49219C9.69922 2.49219 8.6293 3.04707 8 3.97695C7.3707 3.04707 6.30078 2.49219 5.07031 2.49219C4.13824 2.49327 3.24466 2.86402 2.58559 3.52309C1.92652 4.18216 1.55577 5.07574 1.55469 6.00781C1.55469 7.71875 2.62109 9.49941 4.72461 11.2994C5.68851 12.1208 6.7297 12.8468 7.83359 13.4674C7.88475 13.4949 7.94192 13.5093 8 13.5093C8.05808 13.5093 8.11525 13.4949 8.16641 13.4674C9.2703 12.8468 10.3115 12.1208 11.2754 11.2994C13.3789 9.49941 14.4453 7.71875 14.4453 6.00781C14.4442 5.07574 14.0735 4.18216 13.4144 3.52309C12.7553 2.86402 11.8618 2.49327 10.9297 2.49219ZM8 12.7525C7.03848 12.1977 2.25781 9.27266 2.25781 6.00781C2.25859 5.26213 2.55515 4.54721 3.08243 4.01993C3.60971 3.49265 4.32463 3.19609 5.07031 3.19531C6.25859 3.19531 7.25644 3.82988 7.6748 4.85176C7.70129 4.91624 7.74635 4.97139 7.80425 5.0102C7.86216 5.04902 7.93029 5.06974 8 5.06974C8.06971 5.06974 8.13784 5.04902 8.19575 5.0102C8.25365 4.97139 8.29871 4.91624 8.3252 4.85176C8.74356 3.82988 9.74141 3.19531 10.9297 3.19531C11.6754 3.19609 12.3903 3.49265 12.9176 4.01993C13.4448 4.54721 13.7414 5.26213 13.7422 6.00781C13.7422 9.27266 8.96152 12.1977 8 12.7525Z" fill="#191919"></path>
                                        </svg>
                                    </a>
                                </div>
                                <a href="#">
                                    <img src="/assets/img/example.jpg" class="card-img aspect-ratio-25x31" alt="...">
                                </a>
                            </div>
                            <div class="card-body px-0 mt-1">
                                <a href="#" class="text-decoration-none">
                                    <h5 class="card-title lh-sm mb-2">The action you should always do before eating abanana to increase its benefits tenfold</h5>
                                </a>
                                <div class="recipe-rating d-flex align-items-center lh-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                                        <path d="M5 0L6.32252 3.17971L9.75528 3.45492L7.13988 5.69529L7.93893 9.04508L5 7.25L2.06107 9.04508L2.86012 5.69529L0.244718 3.45492L3.67748 3.17971L5 0Z" fill="#191919"/>
                                    </svg>
                                    <p class="mb-0 ms-1 fw-semibold">4.75 (12)</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card mb-1">
                            <div class="card-img-wrap position-relative">
                                <div class="card-tags-and-buttons gap-2 position-absolute start-0 d-flex flex-column px-3 py-4">
                                    <a href="#" class="btn special-btn fw-semibold text-uppercase text-nowrap rounded-pill special-accent-btn">Quick</a>
                                </div>
                                <div class="card-tags-and-buttons gap-2 position-absolute end-0 px-3 py-4">
                                    <a href="#" class="btn special-btn rounded-circle btn-light shadow-sm px-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                            <path d="M10.9297 2.49219C9.69922 2.49219 8.6293 3.04707 8 3.97695C7.3707 3.04707 6.30078 2.49219 5.07031 2.49219C4.13824 2.49327 3.24466 2.86402 2.58559 3.52309C1.92652 4.18216 1.55577 5.07574 1.55469 6.00781C1.55469 7.71875 2.62109 9.49941 4.72461 11.2994C5.68851 12.1208 6.7297 12.8468 7.83359 13.4674C7.88475 13.4949 7.94192 13.5093 8 13.5093C8.05808 13.5093 8.11525 13.4949 8.16641 13.4674C9.2703 12.8468 10.3115 12.1208 11.2754 11.2994C13.3789 9.49941 14.4453 7.71875 14.4453 6.00781C14.4442 5.07574 14.0735 4.18216 13.4144 3.52309C12.7553 2.86402 11.8618 2.49327 10.9297 2.49219ZM8 12.7525C7.03848 12.1977 2.25781 9.27266 2.25781 6.00781C2.25859 5.26213 2.55515 4.54721 3.08243 4.01993C3.60971 3.49265 4.32463 3.19609 5.07031 3.19531C6.25859 3.19531 7.25644 3.82988 7.6748 4.85176C7.70129 4.91624 7.74635 4.97139 7.80425 5.0102C7.86216 5.04902 7.93029 5.06974 8 5.06974C8.06971 5.06974 8.13784 5.04902 8.19575 5.0102C8.25365 4.97139 8.29871 4.91624 8.3252 4.85176C8.74356 3.82988 9.74141 3.19531 10.9297 3.19531C11.6754 3.19609 12.3903 3.49265 12.9176 4.01993C13.4448 4.54721 13.7414 5.26213 13.7422 6.00781C13.7422 9.27266 8.96152 12.1977 8 12.7525Z" fill="#191919"></path>
                                        </svg>
                                    </a>
                                </div>
                                <a href="#">
                                    <img src="/assets/img/example.jpg" class="card-img aspect-ratio-25x31" alt="...">
                                </a>
                            </div>
                            <div class="card-body px-0 mt-1">
                                <a href="#" class="text-decoration-none">
                                    <h5 class="card-title lh-sm mb-2">The action you should always do before eating abanana to increase its benefits tenfold</h5>
                                </a>
                                <div class="recipe-rating d-flex align-items-center lh-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                                        <path d="M5 0L6.32252 3.17971L9.75528 3.45492L7.13988 5.69529L7.93893 9.04508L5 7.25L2.06107 9.04508L2.86012 5.69529L0.244718 3.45492L3.67748 3.17971L5 0Z" fill="#191919"/>
                                    </svg>
                                    <p class="mb-0 ms-1 fw-semibold">4.75 (12)</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card mb-1">
                            <div class="card-img-wrap position-relative">
                                <div class="card-tags-and-buttons gap-2 position-absolute start-0 d-flex flex-column px-3 py-4">
                                    <a href="#" class="btn special-btn fw-semibold text-uppercase text-nowrap rounded-pill special-accent-btn">Vegan</a>
                                </div>
                                <div class="card-tags-and-buttons gap-2 position-absolute end-0 px-3 py-4">
                                    <a href="#" class="btn special-btn rounded-circle btn-light shadow-sm px-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                            <path d="M10.9297 2.49219C9.69922 2.49219 8.6293 3.04707 8 3.97695C7.3707 3.04707 6.30078 2.49219 5.07031 2.49219C4.13824 2.49327 3.24466 2.86402 2.58559 3.52309C1.92652 4.18216 1.55577 5.07574 1.55469 6.00781C1.55469 7.71875 2.62109 9.49941 4.72461 11.2994C5.68851 12.1208 6.7297 12.8468 7.83359 13.4674C7.88475 13.4949 7.94192 13.5093 8 13.5093C8.05808 13.5093 8.11525 13.4949 8.16641 13.4674C9.2703 12.8468 10.3115 12.1208 11.2754 11.2994C13.3789 9.49941 14.4453 7.71875 14.4453 6.00781C14.4442 5.07574 14.0735 4.18216 13.4144 3.52309C12.7553 2.86402 11.8618 2.49327 10.9297 2.49219ZM8 12.7525C7.03848 12.1977 2.25781 9.27266 2.25781 6.00781C2.25859 5.26213 2.55515 4.54721 3.08243 4.01993C3.60971 3.49265 4.32463 3.19609 5.07031 3.19531C6.25859 3.19531 7.25644 3.82988 7.6748 4.85176C7.70129 4.91624 7.74635 4.97139 7.80425 5.0102C7.86216 5.04902 7.93029 5.06974 8 5.06974C8.06971 5.06974 8.13784 5.04902 8.19575 5.0102C8.25365 4.97139 8.29871 4.91624 8.3252 4.85176C8.74356 3.82988 9.74141 3.19531 10.9297 3.19531C11.6754 3.19609 12.3903 3.49265 12.9176 4.01993C13.4448 4.54721 13.7414 5.26213 13.7422 6.00781C13.7422 9.27266 8.96152 12.1977 8 12.7525Z" fill="#191919"></path>
                                        </svg>
                                    </a>
                                </div>
                                <a href="#">
                                    <img src="/assets/img/example.jpg" class="card-img aspect-ratio-25x31" alt="...">
                                </a>
                            </div>
                            <div class="card-body px-0 mt-1">
                                <a href="#" class="text-decoration-none">
                                    <h5 class="card-title lh-sm mb-2">The action you should always do before eating abanana to increase its benefits tenfold</h5>
                                </a>
                                <div class="recipe-rating d-flex align-items-center lh-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                                        <path d="M5 0L6.32252 3.17971L9.75528 3.45492L7.13988 5.69529L7.93893 9.04508L5 7.25L2.06107 9.04508L2.86012 5.69529L0.244718 3.45492L3.67748 3.17971L5 0Z" fill="#191919"/>
                                    </svg>
                                    <p class="mb-0 ms-1 fw-semibold">4.75 (12)</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card mb-1">
                            <div class="card-img-wrap position-relative">
                                <div class="card-tags-and-buttons gap-2 position-absolute start-0 d-flex flex-column px-3 py-4">
                                    <a href="#" class="btn special-btn fw-semibold text-uppercase text-nowrap rounded-pill special-accent-btn">Quick</a>
                                </div>
                                <div class="card-tags-and-buttons gap-2 position-absolute end-0 px-3 py-4">
                                    <a href="#" class="btn special-btn rounded-circle btn-light shadow-sm px-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                            <path d="M10.9297 2.49219C9.69922 2.49219 8.6293 3.04707 8 3.97695C7.3707 3.04707 6.30078 2.49219 5.07031 2.49219C4.13824 2.49327 3.24466 2.86402 2.58559 3.52309C1.92652 4.18216 1.55577 5.07574 1.55469 6.00781C1.55469 7.71875 2.62109 9.49941 4.72461 11.2994C5.68851 12.1208 6.7297 12.8468 7.83359 13.4674C7.88475 13.4949 7.94192 13.5093 8 13.5093C8.05808 13.5093 8.11525 13.4949 8.16641 13.4674C9.2703 12.8468 10.3115 12.1208 11.2754 11.2994C13.3789 9.49941 14.4453 7.71875 14.4453 6.00781C14.4442 5.07574 14.0735 4.18216 13.4144 3.52309C12.7553 2.86402 11.8618 2.49327 10.9297 2.49219ZM8 12.7525C7.03848 12.1977 2.25781 9.27266 2.25781 6.00781C2.25859 5.26213 2.55515 4.54721 3.08243 4.01993C3.60971 3.49265 4.32463 3.19609 5.07031 3.19531C6.25859 3.19531 7.25644 3.82988 7.6748 4.85176C7.70129 4.91624 7.74635 4.97139 7.80425 5.0102C7.86216 5.04902 7.93029 5.06974 8 5.06974C8.06971 5.06974 8.13784 5.04902 8.19575 5.0102C8.25365 4.97139 8.29871 4.91624 8.3252 4.85176C8.74356 3.82988 9.74141 3.19531 10.9297 3.19531C11.6754 3.19609 12.3903 3.49265 12.9176 4.01993C13.4448 4.54721 13.7414 5.26213 13.7422 6.00781C13.7422 9.27266 8.96152 12.1977 8 12.7525Z" fill="#191919"></path>
                                        </svg>
                                    </a>
                                </div>
                                <a href="#">
                                    <img src="/assets/img/example.jpg" class="card-img aspect-ratio-25x31" alt="...">
                                </a>
                            </div>
                            <div class="card-body px-0 mt-1">
                                <a href="#" class="text-decoration-none">
                                    <h5 class="card-title lh-sm mb-2">The action you should always do before eating abanana to increase its benefits tenfold</h5>
                                </a>
                                <div class="recipe-rating d-flex align-items-center lh-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                                        <path d="M5 0L6.32252 3.17971L9.75528 3.45492L7.13988 5.69529L7.93893 9.04508L5 7.25L2.06107 9.04508L2.86012 5.69529L0.244718 3.45492L3.67748 3.17971L5 0Z" fill="#191919"/>
                                    </svg>
                                    <p class="mb-0 ms-1 fw-semibold">4.75 (12)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
<!--    Top recipes section end.-->

<!--    Today's recipes section.-->
    <div class="container-xxl todays-recipes-section py-5 mb-5" id="todays-recipes-section">
        <div class="heading-wrap text-center pb-3">
            <h2 class="text-uppercase fw-bold mb-sm-4 pb-2">Today's recipes</h2>
        </div>
        <div class="todays-recipes-wrap row gap-3 gap-sm-0">
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card mb-2">
                    <div class="card-img-wrap position-relative">
                        <div class="card-tags-and-buttons gap-2 position-absolute start-0 d-flex flex-column px-4 py-4">
                            <a href="#" class="btn special-btn fw-semibold text-uppercase text-nowrap rounded-pill special-accent-btn">Quick</a>
                        </div>
                        <a href="#">
                            <img src="/assets/img/example.jpg" class="card-img aspect-ratio-resp" alt="...">
                        </a>
                    </div>
                    <div class="card-body px-0 mt-1">
                        <a href="#" class="text-decoration-none">
                            <h5 class="card-title lh-sm mb-2">The action you should always do before eating abanana to increase its benefits tenfold</h5>
                        </a>
                        <div class="recipe-rating d-flex align-items-center lh-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                                <path d="M5 0L6.32252 3.17971L9.75528 3.45492L7.13988 5.69529L7.93893 9.04508L5 7.25L2.06107 9.04508L2.86012 5.69529L0.244718 3.45492L3.67748 3.17971L5 0Z" fill="#191919"/>
                            </svg>
                            <p class="mb-0 ms-1 fw-semibold">4.75 (12)</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card mb-1">
                    <div class="card-img-wrap position-relative">
                        <div class="card-tags-and-buttons gap-2 position-absolute start-0 d-flex flex-column px-4 py-4">
                            <a href="#" class="btn special-btn fw-semibold text-uppercase text-nowrap rounded-pill special-accent-btn">Quick</a>
                        </div>
                        <a href="#">
                            <img src="/assets/img/example.jpg" class="card-img aspect-ratio-resp" alt="...">
                        </a>
                    </div>
                    <div class="card-body px-0 mt-1">
                        <a href="#" class="text-decoration-none">
                            <h5 class="card-title lh-sm mb-2">The action you should always do before eating abanana to increase its benefits tenfold</h5>
                        </a>
                        <div class="recipe-rating d-flex align-items-center lh-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                                <path d="M5 0L6.32252 3.17971L9.75528 3.45492L7.13988 5.69529L7.93893 9.04508L5 7.25L2.06107 9.04508L2.86012 5.69529L0.244718 3.45492L3.67748 3.17971L5 0Z" fill="#191919"/>
                            </svg>
                            <p class="mb-0 ms-1 fw-semibold">4.75 (12)</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card mb-1">
                    <div class="card-img-wrap position-relative">
                        <div class="card-tags-and-buttons gap-2 position-absolute start-0 d-flex flex-column px-4 py-4">
                            <a href="#" class="btn special-btn fw-semibold text-uppercase text-nowrap rounded-pill special-accent-btn">Quick</a>
                        </div>
                        <a href="#">
                            <img src="/assets/img/example.jpg" class="card-img aspect-ratio-resp" alt="...">
                        </a>
                    </div>
                    <div class="card-body px-0 mt-1">
                        <a href="#" class="text-decoration-none">
                            <h5 class="card-title lh-sm mb-2">The action you should always do before eating abanana to increase its benefits tenfold</h5>
                        </a>
                        <div class="recipe-rating d-flex align-items-center lh-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                                <path d="M5 0L6.32252 3.17971L9.75528 3.45492L7.13988 5.69529L7.93893 9.04508L5 7.25L2.06107 9.04508L2.86012 5.69529L0.244718 3.45492L3.67748 3.17971L5 0Z" fill="#191919"/>
                            </svg>
                            <p class="mb-0 ms-1 fw-semibold">4.75 (12)</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card mb-1">
                    <div class="card-img-wrap position-relative">
                        <div class="card-tags-and-buttons gap-2 position-absolute start-0 d-flex flex-column px-4 py-4">
                            <a href="#" class="btn special-btn fw-semibold text-uppercase text-nowrap rounded-pill special-accent-btn">Quick</a>
                        </div>
                        <a href="#">
                            <img src="/assets/img/example.jpg" class="card-img aspect-ratio-resp" alt="...">
                        </a>
                    </div>
                    <div class="card-body px-0 mt-1">
                        <a href="#" class="text-decoration-none">
                            <h5 class="card-title lh-sm mb-2">The action you should always do before eating abanana to increase its benefits tenfold</h5>
                        </a>
                        <div class="recipe-rating d-flex align-items-center lh-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                                <path d="M5 0L6.32252 3.17971L9.75528 3.45492L7.13988 5.69529L7.93893 9.04508L5 7.25L2.06107 9.04508L2.86012 5.69529L0.244718 3.45492L3.67748 3.17971L5 0Z" fill="#191919"/>
                            </svg>
                            <p class="mb-0 ms-1 fw-semibold">4.75 (12)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="btn-wrap d-flex justify-content-center pt-4">
            <a href="#" class="more-btn btn fw-semibold text-uppercase text-nowrap rounded btn-dark">View more recipes</a>
        </div>
    </div>
<!--    Today's recipes section end.-->

<!--    Celebrity recipes section.-->
    <div class="celebrities-recipes-section py-5 mb-5 bg-section" id="celebrities-recipes-section">
        <div class="container-xxl heading-wrap text-center pt-3 pt-sm-5 pb-3">
            <h2 class="text-uppercase fw-bold mb-3">Celebrity recipes</h2>
            <p>Unlimited access to recipes from celebrities and chefs</p>
        </div>
        <div class="container-xxl slider-wrap-sm-padding slider-wrap d-flex justify-content-center">
            <div class="celebrity-recipes-slider swiper">
                <div class="swiper-wrapper pb-3 mb-3">
                    <div class="swiper-slide">
                        <div class="card mb-1 text-center">
                            <div class="card-img-wrap position-relative d-flex flex-column align-items-center pb-4">
                                <div class="card-tags-and-buttons gap-2 position-absolute start-0 d-flex flex-column px-3 py-4">
                                    <a href="#" class="btn special-btn fw-semibold text-uppercase text-nowrap rounded-pill special-accent-btn">Easy</a>
                                </div>
                                <div class="card-tags-and-buttons gap-2 position-absolute end-0 px-3 py-4">
                                    <a href="#" class="btn special-btn rounded-circle btn-light shadow-sm px-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                            <path d="M10.9297 2.49219C9.69922 2.49219 8.6293 3.04707 8 3.97695C7.3707 3.04707 6.30078 2.49219 5.07031 2.49219C4.13824 2.49327 3.24466 2.86402 2.58559 3.52309C1.92652 4.18216 1.55577 5.07574 1.55469 6.00781C1.55469 7.71875 2.62109 9.49941 4.72461 11.2994C5.68851 12.1208 6.7297 12.8468 7.83359 13.4674C7.88475 13.4949 7.94192 13.5093 8 13.5093C8.05808 13.5093 8.11525 13.4949 8.16641 13.4674C9.2703 12.8468 10.3115 12.1208 11.2754 11.2994C13.3789 9.49941 14.4453 7.71875 14.4453 6.00781C14.4442 5.07574 14.0735 4.18216 13.4144 3.52309C12.7553 2.86402 11.8618 2.49327 10.9297 2.49219ZM8 12.7525C7.03848 12.1977 2.25781 9.27266 2.25781 6.00781C2.25859 5.26213 2.55515 4.54721 3.08243 4.01993C3.60971 3.49265 4.32463 3.19609 5.07031 3.19531C6.25859 3.19531 7.25644 3.82988 7.6748 4.85176C7.70129 4.91624 7.74635 4.97139 7.80425 5.0102C7.86216 5.04902 7.93029 5.06974 8 5.06974C8.06971 5.06974 8.13784 5.04902 8.19575 5.0102C8.25365 4.97139 8.29871 4.91624 8.3252 4.85176C8.74356 3.82988 9.74141 3.19531 10.9297 3.19531C11.6754 3.19609 12.3903 3.49265 12.9176 4.01993C13.4448 4.54721 13.7414 5.26213 13.7422 6.00781C13.7422 9.27266 8.96152 12.1977 8 12.7525Z" fill="#191919"></path>
                                        </svg>
                                    </a>
                                </div>
                                <a href="#">
                                    <img src="/assets/img/example.jpg" class="card-img aspect-ratio-25x31" alt="...">
                                </a>
                                <img src="/assets/img/example.jpg" class="celebrity-img card-img h-auto aspect-ratio-1x1 position-absolute rounded-circle" alt="...">
                            </div>
                            <div class="card-body px-0 mt-1">
                                <p>Cody Fisher</p>
                                <a href="#" class="text-decoration-none">
                                    <h5 class="card-title lh-sm mb-2">The action you should always do before eating abanana to increase its benefits tenfold</h5>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card mb-1 text-center">
                            <div class="card-img-wrap position-relative d-flex flex-column align-items-center pb-4">
                                <div class="card-tags-and-buttons gap-2 position-absolute start-0 d-flex flex-column px-3 py-4">
                                    <a href="#" class="btn special-btn fw-semibold text-uppercase text-nowrap rounded-pill special-accent-btn">Easy</a>
                                </div>
                                <div class="card-tags-and-buttons gap-2 position-absolute end-0 px-3 py-4">
                                    <a href="#" class="btn special-btn rounded-circle btn-light shadow-sm px-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                            <path d="M10.9297 2.49219C9.69922 2.49219 8.6293 3.04707 8 3.97695C7.3707 3.04707 6.30078 2.49219 5.07031 2.49219C4.13824 2.49327 3.24466 2.86402 2.58559 3.52309C1.92652 4.18216 1.55577 5.07574 1.55469 6.00781C1.55469 7.71875 2.62109 9.49941 4.72461 11.2994C5.68851 12.1208 6.7297 12.8468 7.83359 13.4674C7.88475 13.4949 7.94192 13.5093 8 13.5093C8.05808 13.5093 8.11525 13.4949 8.16641 13.4674C9.2703 12.8468 10.3115 12.1208 11.2754 11.2994C13.3789 9.49941 14.4453 7.71875 14.4453 6.00781C14.4442 5.07574 14.0735 4.18216 13.4144 3.52309C12.7553 2.86402 11.8618 2.49327 10.9297 2.49219ZM8 12.7525C7.03848 12.1977 2.25781 9.27266 2.25781 6.00781C2.25859 5.26213 2.55515 4.54721 3.08243 4.01993C3.60971 3.49265 4.32463 3.19609 5.07031 3.19531C6.25859 3.19531 7.25644 3.82988 7.6748 4.85176C7.70129 4.91624 7.74635 4.97139 7.80425 5.0102C7.86216 5.04902 7.93029 5.06974 8 5.06974C8.06971 5.06974 8.13784 5.04902 8.19575 5.0102C8.25365 4.97139 8.29871 4.91624 8.3252 4.85176C8.74356 3.82988 9.74141 3.19531 10.9297 3.19531C11.6754 3.19609 12.3903 3.49265 12.9176 4.01993C13.4448 4.54721 13.7414 5.26213 13.7422 6.00781C13.7422 9.27266 8.96152 12.1977 8 12.7525Z" fill="#191919"></path>
                                        </svg>
                                    </a>
                                </div>
                                <a href="#">
                                    <img src="/assets/img/example.jpg" class="card-img aspect-ratio-25x31" alt="...">
                                </a>
                                <img src="/assets/img/example.jpg" class="celebrity-img card-img h-auto aspect-ratio-1x1 position-absolute rounded-circle" alt="...">
                            </div>
                            <div class="card-body px-0 mt-1">
                                <p>Cody Fisher</p>
                                <a href="#" class="text-decoration-none">
                                    <h5 class="card-title lh-sm mb-2">The action you should always do before eating abanana to increase its benefits tenfold</h5>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card mb-1 text-center">
                            <div class="card-img-wrap position-relative d-flex flex-column align-items-center pb-4">
                                <div class="card-tags-and-buttons gap-2 position-absolute start-0 d-flex flex-column px-3 py-4">
                                    <a href="#" class="btn special-btn fw-semibold text-uppercase text-nowrap rounded-pill special-accent-btn">Easy</a>
                                </div>
                                <div class="card-tags-and-buttons gap-2 position-absolute end-0 px-3 py-4">
                                    <a href="#" class="btn special-btn rounded-circle btn-light shadow-sm px-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                            <path d="M10.9297 2.49219C9.69922 2.49219 8.6293 3.04707 8 3.97695C7.3707 3.04707 6.30078 2.49219 5.07031 2.49219C4.13824 2.49327 3.24466 2.86402 2.58559 3.52309C1.92652 4.18216 1.55577 5.07574 1.55469 6.00781C1.55469 7.71875 2.62109 9.49941 4.72461 11.2994C5.68851 12.1208 6.7297 12.8468 7.83359 13.4674C7.88475 13.4949 7.94192 13.5093 8 13.5093C8.05808 13.5093 8.11525 13.4949 8.16641 13.4674C9.2703 12.8468 10.3115 12.1208 11.2754 11.2994C13.3789 9.49941 14.4453 7.71875 14.4453 6.00781C14.4442 5.07574 14.0735 4.18216 13.4144 3.52309C12.7553 2.86402 11.8618 2.49327 10.9297 2.49219ZM8 12.7525C7.03848 12.1977 2.25781 9.27266 2.25781 6.00781C2.25859 5.26213 2.55515 4.54721 3.08243 4.01993C3.60971 3.49265 4.32463 3.19609 5.07031 3.19531C6.25859 3.19531 7.25644 3.82988 7.6748 4.85176C7.70129 4.91624 7.74635 4.97139 7.80425 5.0102C7.86216 5.04902 7.93029 5.06974 8 5.06974C8.06971 5.06974 8.13784 5.04902 8.19575 5.0102C8.25365 4.97139 8.29871 4.91624 8.3252 4.85176C8.74356 3.82988 9.74141 3.19531 10.9297 3.19531C11.6754 3.19609 12.3903 3.49265 12.9176 4.01993C13.4448 4.54721 13.7414 5.26213 13.7422 6.00781C13.7422 9.27266 8.96152 12.1977 8 12.7525Z" fill="#191919"></path>
                                        </svg>
                                    </a>
                                </div>
                                <a href="#">
                                    <img src="/assets/img/example.jpg" class="card-img aspect-ratio-25x31" alt="...">
                                </a>
                                <img src="/assets/img/example.jpg" class="celebrity-img card-img h-auto aspect-ratio-1x1 position-absolute rounded-circle" alt="...">
                            </div>
                            <div class="card-body px-0 mt-1">
                                <p>Cody Fisher</p>
                                <a href="#" class="text-decoration-none">
                                    <h5 class="card-title lh-sm mb-2">The action you should always do before eating abanana to increase its benefits tenfold</h5>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card mb-1 text-center">
                            <div class="card-img-wrap position-relative d-flex flex-column align-items-center pb-4">
                                <div class="card-tags-and-buttons gap-2 position-absolute start-0 d-flex flex-column px-3 py-4">
                                    <a href="#" class="btn special-btn fw-semibold text-uppercase text-nowrap rounded-pill special-accent-btn">Easy</a>
                                </div>
                                <div class="card-tags-and-buttons gap-2 position-absolute end-0 px-3 py-4">
                                    <a href="#" class="btn special-btn rounded-circle btn-light shadow-sm px-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                            <path d="M10.9297 2.49219C9.69922 2.49219 8.6293 3.04707 8 3.97695C7.3707 3.04707 6.30078 2.49219 5.07031 2.49219C4.13824 2.49327 3.24466 2.86402 2.58559 3.52309C1.92652 4.18216 1.55577 5.07574 1.55469 6.00781C1.55469 7.71875 2.62109 9.49941 4.72461 11.2994C5.68851 12.1208 6.7297 12.8468 7.83359 13.4674C7.88475 13.4949 7.94192 13.5093 8 13.5093C8.05808 13.5093 8.11525 13.4949 8.16641 13.4674C9.2703 12.8468 10.3115 12.1208 11.2754 11.2994C13.3789 9.49941 14.4453 7.71875 14.4453 6.00781C14.4442 5.07574 14.0735 4.18216 13.4144 3.52309C12.7553 2.86402 11.8618 2.49327 10.9297 2.49219ZM8 12.7525C7.03848 12.1977 2.25781 9.27266 2.25781 6.00781C2.25859 5.26213 2.55515 4.54721 3.08243 4.01993C3.60971 3.49265 4.32463 3.19609 5.07031 3.19531C6.25859 3.19531 7.25644 3.82988 7.6748 4.85176C7.70129 4.91624 7.74635 4.97139 7.80425 5.0102C7.86216 5.04902 7.93029 5.06974 8 5.06974C8.06971 5.06974 8.13784 5.04902 8.19575 5.0102C8.25365 4.97139 8.29871 4.91624 8.3252 4.85176C8.74356 3.82988 9.74141 3.19531 10.9297 3.19531C11.6754 3.19609 12.3903 3.49265 12.9176 4.01993C13.4448 4.54721 13.7414 5.26213 13.7422 6.00781C13.7422 9.27266 8.96152 12.1977 8 12.7525Z" fill="#191919"></path>
                                        </svg>
                                    </a>
                                </div>
                                <a href="#">
                                    <img src="/assets/img/example.jpg" class="card-img aspect-ratio-25x31" alt="...">
                                </a>
                                <img src="/assets/img/example.jpg" class="celebrity-img card-img h-auto aspect-ratio-1x1 position-absolute rounded-circle" alt="...">
                            </div>
                            <div class="card-body px-0 mt-1">
                                <p>Cody Fisher</p>
                                <a href="#" class="text-decoration-none">
                                    <h5 class="card-title lh-sm mb-2">The action you should always do before eating abanana to increase its benefits tenfold</h5>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card mb-1 text-center">
                            <div class="card-img-wrap position-relative d-flex flex-column align-items-center pb-4">
                                <div class="card-tags-and-buttons gap-2 position-absolute start-0 d-flex flex-column px-3 py-4">
                                    <a href="#" class="btn special-btn fw-semibold text-uppercase text-nowrap rounded-pill special-accent-btn">Easy</a>
                                </div>
                                <div class="card-tags-and-buttons gap-2 position-absolute end-0 px-3 py-4">
                                    <a href="#" class="btn special-btn rounded-circle btn-light shadow-sm px-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                            <path d="M10.9297 2.49219C9.69922 2.49219 8.6293 3.04707 8 3.97695C7.3707 3.04707 6.30078 2.49219 5.07031 2.49219C4.13824 2.49327 3.24466 2.86402 2.58559 3.52309C1.92652 4.18216 1.55577 5.07574 1.55469 6.00781C1.55469 7.71875 2.62109 9.49941 4.72461 11.2994C5.68851 12.1208 6.7297 12.8468 7.83359 13.4674C7.88475 13.4949 7.94192 13.5093 8 13.5093C8.05808 13.5093 8.11525 13.4949 8.16641 13.4674C9.2703 12.8468 10.3115 12.1208 11.2754 11.2994C13.3789 9.49941 14.4453 7.71875 14.4453 6.00781C14.4442 5.07574 14.0735 4.18216 13.4144 3.52309C12.7553 2.86402 11.8618 2.49327 10.9297 2.49219ZM8 12.7525C7.03848 12.1977 2.25781 9.27266 2.25781 6.00781C2.25859 5.26213 2.55515 4.54721 3.08243 4.01993C3.60971 3.49265 4.32463 3.19609 5.07031 3.19531C6.25859 3.19531 7.25644 3.82988 7.6748 4.85176C7.70129 4.91624 7.74635 4.97139 7.80425 5.0102C7.86216 5.04902 7.93029 5.06974 8 5.06974C8.06971 5.06974 8.13784 5.04902 8.19575 5.0102C8.25365 4.97139 8.29871 4.91624 8.3252 4.85176C8.74356 3.82988 9.74141 3.19531 10.9297 3.19531C11.6754 3.19609 12.3903 3.49265 12.9176 4.01993C13.4448 4.54721 13.7414 5.26213 13.7422 6.00781C13.7422 9.27266 8.96152 12.1977 8 12.7525Z" fill="#191919"></path>
                                        </svg>
                                    </a>
                                </div>
                                <a href="#">
                                    <img src="/assets/img/example.jpg" class="card-img aspect-ratio-25x31" alt="...">
                                </a>
                                <img src="/assets/img/example.jpg" class="celebrity-img card-img h-auto aspect-ratio-1x1 position-absolute rounded-circle" alt="...">
                            </div>
                            <div class="card-body px-0 mt-1">
                                <p>Cody Fisher</p>
                                <a href="#" class="text-decoration-none">
                                    <h5 class="card-title lh-sm mb-2">The action you should always do before eating abanana to increase its benefits tenfold</h5>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card mb-1 text-center">
                            <div class="card-img-wrap position-relative d-flex flex-column align-items-center pb-4">
                                <div class="card-tags-and-buttons gap-2 position-absolute start-0 d-flex flex-column px-3 py-4">
                                    <a href="#" class="btn special-btn fw-semibold text-uppercase text-nowrap rounded-pill special-accent-btn">Easy</a>
                                </div>
                                <div class="card-tags-and-buttons gap-2 position-absolute end-0 px-3 py-4">
                                    <a href="#" class="btn special-btn rounded-circle btn-light shadow-sm px-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                            <path d="M10.9297 2.49219C9.69922 2.49219 8.6293 3.04707 8 3.97695C7.3707 3.04707 6.30078 2.49219 5.07031 2.49219C4.13824 2.49327 3.24466 2.86402 2.58559 3.52309C1.92652 4.18216 1.55577 5.07574 1.55469 6.00781C1.55469 7.71875 2.62109 9.49941 4.72461 11.2994C5.68851 12.1208 6.7297 12.8468 7.83359 13.4674C7.88475 13.4949 7.94192 13.5093 8 13.5093C8.05808 13.5093 8.11525 13.4949 8.16641 13.4674C9.2703 12.8468 10.3115 12.1208 11.2754 11.2994C13.3789 9.49941 14.4453 7.71875 14.4453 6.00781C14.4442 5.07574 14.0735 4.18216 13.4144 3.52309C12.7553 2.86402 11.8618 2.49327 10.9297 2.49219ZM8 12.7525C7.03848 12.1977 2.25781 9.27266 2.25781 6.00781C2.25859 5.26213 2.55515 4.54721 3.08243 4.01993C3.60971 3.49265 4.32463 3.19609 5.07031 3.19531C6.25859 3.19531 7.25644 3.82988 7.6748 4.85176C7.70129 4.91624 7.74635 4.97139 7.80425 5.0102C7.86216 5.04902 7.93029 5.06974 8 5.06974C8.06971 5.06974 8.13784 5.04902 8.19575 5.0102C8.25365 4.97139 8.29871 4.91624 8.3252 4.85176C8.74356 3.82988 9.74141 3.19531 10.9297 3.19531C11.6754 3.19609 12.3903 3.49265 12.9176 4.01993C13.4448 4.54721 13.7414 5.26213 13.7422 6.00781C13.7422 9.27266 8.96152 12.1977 8 12.7525Z" fill="#191919"></path>
                                        </svg>
                                    </a>
                                </div>
                                <a href="#">
                                    <img src="/assets/img/example.jpg" class="card-img aspect-ratio-25x31" alt="...">
                                </a>
                                <img src="/assets/img/example.jpg" class="celebrity-img card-img h-auto aspect-ratio-1x1 position-absolute rounded-circle" alt="...">
                            </div>
                            <div class="card-body px-0 mt-1">
                                <p>Cody Fisher</p>
                                <a href="#" class="text-decoration-none">
                                    <h5 class="card-title lh-sm mb-2">The action you should always do before eating abanana to increase its benefits tenfold</h5>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card mb-1 text-center">
                            <div class="card-img-wrap position-relative d-flex flex-column align-items-center pb-4">
                                <div class="card-tags-and-buttons gap-2 position-absolute start-0 d-flex flex-column px-3 py-4">
                                    <a href="#" class="btn special-btn fw-semibold text-uppercase text-nowrap rounded-pill special-accent-btn">Easy</a>
                                </div>
                                <div class="card-tags-and-buttons gap-2 position-absolute end-0 px-3 py-4">
                                    <a href="#" class="btn special-btn rounded-circle btn-light shadow-sm px-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                            <path d="M10.9297 2.49219C9.69922 2.49219 8.6293 3.04707 8 3.97695C7.3707 3.04707 6.30078 2.49219 5.07031 2.49219C4.13824 2.49327 3.24466 2.86402 2.58559 3.52309C1.92652 4.18216 1.55577 5.07574 1.55469 6.00781C1.55469 7.71875 2.62109 9.49941 4.72461 11.2994C5.68851 12.1208 6.7297 12.8468 7.83359 13.4674C7.88475 13.4949 7.94192 13.5093 8 13.5093C8.05808 13.5093 8.11525 13.4949 8.16641 13.4674C9.2703 12.8468 10.3115 12.1208 11.2754 11.2994C13.3789 9.49941 14.4453 7.71875 14.4453 6.00781C14.4442 5.07574 14.0735 4.18216 13.4144 3.52309C12.7553 2.86402 11.8618 2.49327 10.9297 2.49219ZM8 12.7525C7.03848 12.1977 2.25781 9.27266 2.25781 6.00781C2.25859 5.26213 2.55515 4.54721 3.08243 4.01993C3.60971 3.49265 4.32463 3.19609 5.07031 3.19531C6.25859 3.19531 7.25644 3.82988 7.6748 4.85176C7.70129 4.91624 7.74635 4.97139 7.80425 5.0102C7.86216 5.04902 7.93029 5.06974 8 5.06974C8.06971 5.06974 8.13784 5.04902 8.19575 5.0102C8.25365 4.97139 8.29871 4.91624 8.3252 4.85176C8.74356 3.82988 9.74141 3.19531 10.9297 3.19531C11.6754 3.19609 12.3903 3.49265 12.9176 4.01993C13.4448 4.54721 13.7414 5.26213 13.7422 6.00781C13.7422 9.27266 8.96152 12.1977 8 12.7525Z" fill="#191919"></path>
                                        </svg>
                                    </a>
                                </div>
                                <a href="#">
                                    <img src="/assets/img/example.jpg" class="card-img aspect-ratio-25x31" alt="...">
                                </a>
                                <img src="/assets/img/example.jpg" class="celebrity-img card-img h-auto aspect-ratio-1x1 position-absolute rounded-circle" alt="...">
                            </div>
                            <div class="card-body px-0 mt-1">
                                <p>Cody Fisher</p>
                                <a href="#" class="text-decoration-none">
                                    <h5 class="card-title lh-sm mb-2">The action you should always do before eating abanana to increase its benefits tenfold</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
<!--    Celebrity recipes section end.-->

<!--    Top chefs.-->
    <div class="top-chefs-section py-5 mb-5" id="top-chefs-section">
        <div class="container-xxl heading-wrap text-center pt-3 pt-sm-5 pb-3">
            <h2 class="text-uppercase fw-bold mb-3">Top chefs</h2>
        </div>
        <div class="container-xxl slider-wrap-sm-padding overflow-hidden slider-wrap d-flex justify-content-center">
            <div class="top-chefs-slider swiper">
                <div class="swiper-wrapper pb-3 mb-3">
                    <div class="swiper-slide pt-4">
                        <div class="card mb-1 text-center">
                            <div class="card-img-wrap position-relative">
                                <div class="card-tags-and-buttons gap-2 position-absolute start-0 end-0 d-flex flex-wrap justify-content-between">
                                    <a href="#" class="btn special-btn special-accent-btn fw-semibold text-uppercase text-nowrap rounded-circle p-1 p-sm-2 btn-light special-corner-btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M22.7364 7.28442C22.5954 7.16141 22.421 7.08308 22.2354 7.05938C22.0498 7.03567 21.8613 7.06767 21.6939 7.15129L16.8311 9.57567L12.8121 2.89598C12.7278 2.75603 12.6087 2.64024 12.4664 2.55987C12.3242 2.47949 12.1636 2.43726 12.0002 2.43726C11.8368 2.43726 11.6762 2.47949 11.5339 2.55987C11.3917 2.64024 11.2726 2.75603 11.1883 2.89598L7.16925 9.57567L2.30831 7.15223C2.14095 7.06867 1.9526 7.03656 1.76701 7.05994C1.58142 7.08332 1.40691 7.16114 1.2655 7.28359C1.1241 7.40605 1.02213 7.56764 0.972463 7.74798C0.922797 7.92832 0.927659 8.11934 0.986436 8.29692L4.45519 18.9244C4.48131 19.0046 4.52514 19.0779 4.58343 19.1389C4.64172 19.1999 4.71298 19.247 4.79193 19.2767C4.87089 19.3064 4.95551 19.318 5.03954 19.3105C5.12357 19.3031 5.20485 19.2769 5.27737 19.2338C5.28394 19.2338 5.89237 18.8738 7.02112 18.5232C8.06269 18.1988 9.76987 17.8125 12.0002 17.8125C14.2305 17.8125 15.9377 18.1988 16.9802 18.5232C18.1052 18.8738 18.7174 19.23 18.7221 19.2329C18.7946 19.2761 18.8759 19.3026 18.9599 19.3101C19.044 19.3177 19.1288 19.3063 19.2078 19.2766C19.2869 19.247 19.3583 19.2 19.4167 19.139C19.4751 19.078 19.519 19.0047 19.5452 18.9244L23.0139 8.29879C23.0744 8.12135 23.0803 7.92985 23.0308 7.74903C22.9813 7.56821 22.8788 7.40637 22.7364 7.28442ZM18.678 17.956C17.6467 17.4947 15.3593 16.6875 12.0002 16.6875C8.64112 16.6875 6.35362 17.4947 5.32237 17.956L2.18644 8.34848L6.813 10.6547C7.0266 10.76 7.27185 10.7815 7.50051 10.7151C7.72918 10.6486 7.92471 10.499 8.04862 10.2957L12.0002 3.73317L15.9517 10.3004C16.0756 10.5035 16.271 10.6529 16.4995 10.7193C16.7279 10.7858 16.9729 10.7644 17.1864 10.6594L21.8139 8.35223L18.678 17.956Z" fill="#191919"/>
                                        </svg>
                                    </a>
                                </div>
                                <a href="#">
                                    <img src="/assets/img/example.jpg" class="card-img aspect-ratio-1x1" alt="...">
                                </a>
                            </div>
                            <div class="card-body px-0 mt-1">
                                <a href="#" class="text-decoration-none">
                                    <h5 class="card-title text-center lh-sm mb-2">Annette Black</h5>
                                </a>
                            </div>
                        </div>

                        <div class="card mb-1 text-center">
                            <div class="card-img-wrap position-relative">
                                <div class="card-tags-and-buttons gap-2 position-absolute start-0 end-0 d-flex flex-wrap justify-content-between">
                                    <a href="#" class="btn special-btn special-accent-btn fw-semibold text-uppercase text-nowrap rounded-circle p-1 p-sm-2 btn-light special-corner-btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M22.7364 7.28442C22.5954 7.16141 22.421 7.08308 22.2354 7.05938C22.0498 7.03567 21.8613 7.06767 21.6939 7.15129L16.8311 9.57567L12.8121 2.89598C12.7278 2.75603 12.6087 2.64024 12.4664 2.55987C12.3242 2.47949 12.1636 2.43726 12.0002 2.43726C11.8368 2.43726 11.6762 2.47949 11.5339 2.55987C11.3917 2.64024 11.2726 2.75603 11.1883 2.89598L7.16925 9.57567L2.30831 7.15223C2.14095 7.06867 1.9526 7.03656 1.76701 7.05994C1.58142 7.08332 1.40691 7.16114 1.2655 7.28359C1.1241 7.40605 1.02213 7.56764 0.972463 7.74798C0.922797 7.92832 0.927659 8.11934 0.986436 8.29692L4.45519 18.9244C4.48131 19.0046 4.52514 19.0779 4.58343 19.1389C4.64172 19.1999 4.71298 19.247 4.79193 19.2767C4.87089 19.3064 4.95551 19.318 5.03954 19.3105C5.12357 19.3031 5.20485 19.2769 5.27737 19.2338C5.28394 19.2338 5.89237 18.8738 7.02112 18.5232C8.06269 18.1988 9.76987 17.8125 12.0002 17.8125C14.2305 17.8125 15.9377 18.1988 16.9802 18.5232C18.1052 18.8738 18.7174 19.23 18.7221 19.2329C18.7946 19.2761 18.8759 19.3026 18.9599 19.3101C19.044 19.3177 19.1288 19.3063 19.2078 19.2766C19.2869 19.247 19.3583 19.2 19.4167 19.139C19.4751 19.078 19.519 19.0047 19.5452 18.9244L23.0139 8.29879C23.0744 8.12135 23.0803 7.92985 23.0308 7.74903C22.9813 7.56821 22.8788 7.40637 22.7364 7.28442ZM18.678 17.956C17.6467 17.4947 15.3593 16.6875 12.0002 16.6875C8.64112 16.6875 6.35362 17.4947 5.32237 17.956L2.18644 8.34848L6.813 10.6547C7.0266 10.76 7.27185 10.7815 7.50051 10.7151C7.72918 10.6486 7.92471 10.499 8.04862 10.2957L12.0002 3.73317L15.9517 10.3004C16.0756 10.5035 16.271 10.6529 16.4995 10.7193C16.7279 10.7858 16.9729 10.7644 17.1864 10.6594L21.8139 8.35223L18.678 17.956Z" fill="#191919"/>
                                        </svg>
                                    </a>
                                </div>
                                <a href="#">
                                    <img src="/assets/img/example.jpg" class="card-img aspect-ratio-1x1" alt="...">
                                </a>
                            </div>
                            <div class="card-body px-0 mt-1">
                                <a href="#" class="text-decoration-none">
                                    <h5 class="card-title text-center lh-sm mb-2">Guy Hawkins</h5>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide pt-4">
                        <div class="card mb-1 text-center">
                            <div class="card-img-wrap position-relative">
                                <div class="card-tags-and-buttons gap-2 position-absolute start-0 end-0 d-flex flex-wrap justify-content-between">
                                    <a href="#" class="btn special-btn special-accent-btn fw-semibold text-uppercase text-nowrap rounded-circle p-1 p-sm-2 btn-light special-corner-btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M22.7364 7.28442C22.5954 7.16141 22.421 7.08308 22.2354 7.05938C22.0498 7.03567 21.8613 7.06767 21.6939 7.15129L16.8311 9.57567L12.8121 2.89598C12.7278 2.75603 12.6087 2.64024 12.4664 2.55987C12.3242 2.47949 12.1636 2.43726 12.0002 2.43726C11.8368 2.43726 11.6762 2.47949 11.5339 2.55987C11.3917 2.64024 11.2726 2.75603 11.1883 2.89598L7.16925 9.57567L2.30831 7.15223C2.14095 7.06867 1.9526 7.03656 1.76701 7.05994C1.58142 7.08332 1.40691 7.16114 1.2655 7.28359C1.1241 7.40605 1.02213 7.56764 0.972463 7.74798C0.922797 7.92832 0.927659 8.11934 0.986436 8.29692L4.45519 18.9244C4.48131 19.0046 4.52514 19.0779 4.58343 19.1389C4.64172 19.1999 4.71298 19.247 4.79193 19.2767C4.87089 19.3064 4.95551 19.318 5.03954 19.3105C5.12357 19.3031 5.20485 19.2769 5.27737 19.2338C5.28394 19.2338 5.89237 18.8738 7.02112 18.5232C8.06269 18.1988 9.76987 17.8125 12.0002 17.8125C14.2305 17.8125 15.9377 18.1988 16.9802 18.5232C18.1052 18.8738 18.7174 19.23 18.7221 19.2329C18.7946 19.2761 18.8759 19.3026 18.9599 19.3101C19.044 19.3177 19.1288 19.3063 19.2078 19.2766C19.2869 19.247 19.3583 19.2 19.4167 19.139C19.4751 19.078 19.519 19.0047 19.5452 18.9244L23.0139 8.29879C23.0744 8.12135 23.0803 7.92985 23.0308 7.74903C22.9813 7.56821 22.8788 7.40637 22.7364 7.28442ZM18.678 17.956C17.6467 17.4947 15.3593 16.6875 12.0002 16.6875C8.64112 16.6875 6.35362 17.4947 5.32237 17.956L2.18644 8.34848L6.813 10.6547C7.0266 10.76 7.27185 10.7815 7.50051 10.7151C7.72918 10.6486 7.92471 10.499 8.04862 10.2957L12.0002 3.73317L15.9517 10.3004C16.0756 10.5035 16.271 10.6529 16.4995 10.7193C16.7279 10.7858 16.9729 10.7644 17.1864 10.6594L21.8139 8.35223L18.678 17.956Z" fill="#191919"/>
                                        </svg>
                                    </a>
                                </div>
                                <a href="#">
                                    <img src="/assets/img/example.jpg" class="card-img aspect-ratio-1x1" alt="...">
                                </a>
                            </div>
                            <div class="card-body px-0 mt-1">
                                <a href="#" class="text-decoration-none">
                                    <h5 class="card-title text-center lh-sm mb-2">Guy Hawkins</h5>
                                </a>
                            </div>
                        </div>

                        <div class="card mb-1 text-center">
                            <div class="card-img-wrap position-relative">
                                <div class="card-tags-and-buttons gap-2 position-absolute start-0 end-0 d-flex flex-wrap justify-content-between">
                                    <a href="#" class="btn special-btn special-accent-btn fw-semibold text-uppercase text-nowrap rounded-circle p-1 p-sm-2 btn-light special-corner-btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M22.7364 7.28442C22.5954 7.16141 22.421 7.08308 22.2354 7.05938C22.0498 7.03567 21.8613 7.06767 21.6939 7.15129L16.8311 9.57567L12.8121 2.89598C12.7278 2.75603 12.6087 2.64024 12.4664 2.55987C12.3242 2.47949 12.1636 2.43726 12.0002 2.43726C11.8368 2.43726 11.6762 2.47949 11.5339 2.55987C11.3917 2.64024 11.2726 2.75603 11.1883 2.89598L7.16925 9.57567L2.30831 7.15223C2.14095 7.06867 1.9526 7.03656 1.76701 7.05994C1.58142 7.08332 1.40691 7.16114 1.2655 7.28359C1.1241 7.40605 1.02213 7.56764 0.972463 7.74798C0.922797 7.92832 0.927659 8.11934 0.986436 8.29692L4.45519 18.9244C4.48131 19.0046 4.52514 19.0779 4.58343 19.1389C4.64172 19.1999 4.71298 19.247 4.79193 19.2767C4.87089 19.3064 4.95551 19.318 5.03954 19.3105C5.12357 19.3031 5.20485 19.2769 5.27737 19.2338C5.28394 19.2338 5.89237 18.8738 7.02112 18.5232C8.06269 18.1988 9.76987 17.8125 12.0002 17.8125C14.2305 17.8125 15.9377 18.1988 16.9802 18.5232C18.1052 18.8738 18.7174 19.23 18.7221 19.2329C18.7946 19.2761 18.8759 19.3026 18.9599 19.3101C19.044 19.3177 19.1288 19.3063 19.2078 19.2766C19.2869 19.247 19.3583 19.2 19.4167 19.139C19.4751 19.078 19.519 19.0047 19.5452 18.9244L23.0139 8.29879C23.0744 8.12135 23.0803 7.92985 23.0308 7.74903C22.9813 7.56821 22.8788 7.40637 22.7364 7.28442ZM18.678 17.956C17.6467 17.4947 15.3593 16.6875 12.0002 16.6875C8.64112 16.6875 6.35362 17.4947 5.32237 17.956L2.18644 8.34848L6.813 10.6547C7.0266 10.76 7.27185 10.7815 7.50051 10.7151C7.72918 10.6486 7.92471 10.499 8.04862 10.2957L12.0002 3.73317L15.9517 10.3004C16.0756 10.5035 16.271 10.6529 16.4995 10.7193C16.7279 10.7858 16.9729 10.7644 17.1864 10.6594L21.8139 8.35223L18.678 17.956Z" fill="#191919"/>
                                        </svg>
                                    </a>
                                </div>
                                <a href="#">
                                    <img src="/assets/img/example.jpg" class="card-img aspect-ratio-1x1" alt="...">
                                </a>
                            </div>
                            <div class="card-body px-0 mt-1">
                                <a href="#" class="text-decoration-none">
                                    <h5 class="card-title text-center lh-sm mb-2">Guy Hawkins</h5>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide pt-4">
                        <div class="card mb-1 text-center">
                            <div class="card-img-wrap position-relative">
                                <div class="card-tags-and-buttons gap-2 position-absolute start-0 end-0 d-flex flex-wrap justify-content-between">
                                    <a href="#" class="btn special-btn special-accent-btn fw-semibold text-uppercase text-nowrap rounded-circle p-1 p-sm-2 btn-light special-corner-btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M22.7364 7.28442C22.5954 7.16141 22.421 7.08308 22.2354 7.05938C22.0498 7.03567 21.8613 7.06767 21.6939 7.15129L16.8311 9.57567L12.8121 2.89598C12.7278 2.75603 12.6087 2.64024 12.4664 2.55987C12.3242 2.47949 12.1636 2.43726 12.0002 2.43726C11.8368 2.43726 11.6762 2.47949 11.5339 2.55987C11.3917 2.64024 11.2726 2.75603 11.1883 2.89598L7.16925 9.57567L2.30831 7.15223C2.14095 7.06867 1.9526 7.03656 1.76701 7.05994C1.58142 7.08332 1.40691 7.16114 1.2655 7.28359C1.1241 7.40605 1.02213 7.56764 0.972463 7.74798C0.922797 7.92832 0.927659 8.11934 0.986436 8.29692L4.45519 18.9244C4.48131 19.0046 4.52514 19.0779 4.58343 19.1389C4.64172 19.1999 4.71298 19.247 4.79193 19.2767C4.87089 19.3064 4.95551 19.318 5.03954 19.3105C5.12357 19.3031 5.20485 19.2769 5.27737 19.2338C5.28394 19.2338 5.89237 18.8738 7.02112 18.5232C8.06269 18.1988 9.76987 17.8125 12.0002 17.8125C14.2305 17.8125 15.9377 18.1988 16.9802 18.5232C18.1052 18.8738 18.7174 19.23 18.7221 19.2329C18.7946 19.2761 18.8759 19.3026 18.9599 19.3101C19.044 19.3177 19.1288 19.3063 19.2078 19.2766C19.2869 19.247 19.3583 19.2 19.4167 19.139C19.4751 19.078 19.519 19.0047 19.5452 18.9244L23.0139 8.29879C23.0744 8.12135 23.0803 7.92985 23.0308 7.74903C22.9813 7.56821 22.8788 7.40637 22.7364 7.28442ZM18.678 17.956C17.6467 17.4947 15.3593 16.6875 12.0002 16.6875C8.64112 16.6875 6.35362 17.4947 5.32237 17.956L2.18644 8.34848L6.813 10.6547C7.0266 10.76 7.27185 10.7815 7.50051 10.7151C7.72918 10.6486 7.92471 10.499 8.04862 10.2957L12.0002 3.73317L15.9517 10.3004C16.0756 10.5035 16.271 10.6529 16.4995 10.7193C16.7279 10.7858 16.9729 10.7644 17.1864 10.6594L21.8139 8.35223L18.678 17.956Z" fill="#191919"/>
                                        </svg>
                                    </a>
                                </div>
                                <a href="#">
                                    <img src="/assets/img/example.jpg" class="card-img aspect-ratio-1x1" alt="...">
                                </a>
                            </div>
                            <div class="card-body px-0 mt-1">
                                <a href="#" class="text-decoration-none">
                                    <h5 class="card-title text-center lh-sm mb-2">Robert Fox</h5>
                                </a>
                            </div>
                        </div>

                        <div class="card mb-1 text-center">
                            <div class="card-img-wrap position-relative">
                                <div class="card-tags-and-buttons gap-2 position-absolute start-0 end-0 d-flex flex-wrap justify-content-between">
                                    <a href="#" class="btn special-btn special-accent-btn fw-semibold text-uppercase text-nowrap rounded-circle p-1 p-sm-2 btn-light special-corner-btn">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                            <path d="M22.7364 7.28442C22.5954 7.16141 22.421 7.08308 22.2354 7.05938C22.0498 7.03567 21.8613 7.06767 21.6939 7.15129L16.8311 9.57567L12.8121 2.89598C12.7278 2.75603 12.6087 2.64024 12.4664 2.55987C12.3242 2.47949 12.1636 2.43726 12.0002 2.43726C11.8368 2.43726 11.6762 2.47949 11.5339 2.55987C11.3917 2.64024 11.2726 2.75603 11.1883 2.89598L7.16925 9.57567L2.30831 7.15223C2.14095 7.06867 1.9526 7.03656 1.76701 7.05994C1.58142 7.08332 1.40691 7.16114 1.2655 7.28359C1.1241 7.40605 1.02213 7.56764 0.972463 7.74798C0.922797 7.92832 0.927659 8.11934 0.986436 8.29692L4.45519 18.9244C4.48131 19.0046 4.52514 19.0779 4.58343 19.1389C4.64172 19.1999 4.71298 19.247 4.79193 19.2767C4.87089 19.3064 4.95551 19.318 5.03954 19.3105C5.12357 19.3031 5.20485 19.2769 5.27737 19.2338C5.28394 19.2338 5.89237 18.8738 7.02112 18.5232C8.06269 18.1988 9.76987 17.8125 12.0002 17.8125C14.2305 17.8125 15.9377 18.1988 16.9802 18.5232C18.1052 18.8738 18.7174 19.23 18.7221 19.2329C18.7946 19.2761 18.8759 19.3026 18.9599 19.3101C19.044 19.3177 19.1288 19.3063 19.2078 19.2766C19.2869 19.247 19.3583 19.2 19.4167 19.139C19.4751 19.078 19.519 19.0047 19.5452 18.9244L23.0139 8.29879C23.0744 8.12135 23.0803 7.92985 23.0308 7.74903C22.9813 7.56821 22.8788 7.40637 22.7364 7.28442ZM18.678 17.956C17.6467 17.4947 15.3593 16.6875 12.0002 16.6875C8.64112 16.6875 6.35362 17.4947 5.32237 17.956L2.18644 8.34848L6.813 10.6547C7.0266 10.76 7.27185 10.7815 7.50051 10.7151C7.72918 10.6486 7.92471 10.499 8.04862 10.2957L12.0002 3.73317L15.9517 10.3004C16.0756 10.5035 16.271 10.6529 16.4995 10.7193C16.7279 10.7858 16.9729 10.7644 17.1864 10.6594L21.8139 8.35223L18.678 17.956Z" fill="#191919"/>
                                        </svg>
                                    </a>
                                </div>
                                <a href="#">
                                    <img src="/assets/img/example.jpg" class="card-img aspect-ratio-1x1" alt="...">
                                </a>
                            </div>
                            <div class="card-body px-0 mt-1">
                                <a href="#" class="text-decoration-none">
                                    <h5 class="card-title text-center lh-sm mb-2">Guy Hawkins</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination d-none d-sm-block"></div>
                <div class="swiper-scrollbar d-sm-none mx-2"></div>
            </div>
        </div>

        <div class="container-xxl btn-wrap d-flex justify-content-center pt-4">
            <a href="#" class="more-btn btn fw-semibold text-uppercase text-nowrap rounded btn-dark">View all users</a>
        </div>
    </div>
<!--    Top chefs end.-->

<!--    Latest news section.-->
    <div class="container-fluid latest-news-section py-5 mb-5" id="latest-news-section">
        <div class="heading-wrap text-center pb-3">
            <h2 class="text-uppercase fw-bold mb-sm-4 pb-2">Check out our latest news</h2>
        </div>
        <div class="latest-news-wrap row gap-3 gap-sm-0">
            <div class="col-12 col-sm-6">
                <div class="card mb-2">
                    <div class="card-img-wrap position-relative">
                        <a href="#">
                            <img src="/assets/img/example.jpg" class="card-img aspect-ratio-resp" alt="...">
                        </a>
                    </div>
                    <div class="card-body px-0 mt-1">
                        <a href="#" class="btn special-btn fw-bold text-uppercase text-nowrap rounded-pill btn-dark mb-2">Culture</a>
                        <a href="#" class="text-decoration-none">
                            <h5 class="card-title lh-sm mb-2">The action you should always do before eating abanana to increase its benefits tenfold</h5>
                        </a>
                        <p class="card-text lh-sm mb-2 fw-semibold opacity-75">The action you should always do before eating abanana to increase its benefits tenfold</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6">
                <div class="card mb-1">
                    <div class="card-img-wrap position-relative">
                        <a href="#">
                            <img src="/assets/img/example.jpg" class="card-img aspect-ratio-resp" alt="...">
                        </a>
                    </div>
                    <div class="card-body px-0 mt-1">
                        <a href="#" class="btn special-btn fw-bold text-uppercase text-nowrap rounded-pill btn-dark mb-2">Restaurants</a>
                        <a href="#" class="text-decoration-none">
                            <h5 class="card-title lh-sm mb-2">The action you should always do before eating abanana to increase its benefits tenfold</h5>
                        </a>
                        <p class="card-text lh-sm mb-2 fw-semibold opacity-75">The action you should always do before eating abanana to increase its benefits tenfold</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6">
                <div class="card mb-1">
                    <div class="card-img-wrap position-relative">
                        <a href="#">
                            <img src="/assets/img/example.jpg" class="card-img aspect-ratio-resp" alt="...">
                        </a>
                    </div>
                    <div class="card-body px-0 mt-1">
                        <a href="#" class="btn special-btn fw-bold text-uppercase text-nowrap rounded-pill btn-dark mb-2">Culture</a>
                        <a href="#" class="text-decoration-none">
                            <h5 class="card-title lh-sm mb-2">The action you should always do before eating abanana to increase its benefits tenfold</h5>
                        </a>
                        <p class="card-text lh-sm mb-2 fw-semibold opacity-75">The action you should always do before eating abanana to increase its benefits tenfold</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6">
                <div class="card mb-1">
                    <div class="card-img-wrap position-relative">
                        <a href="#">
                            <img src="/assets/img/example.jpg" class="card-img aspect-ratio-resp" alt="...">
                        </a>
                    </div>
                    <div class="card-body px-0 mt-1">
                        <a href="#" class="btn special-btn fw-bold text-uppercase text-nowrap rounded-pill btn-dark mb-2">Shopping</a>
                        <a href="#" class="text-decoration-none">
                            <h5 class="card-title lh-sm mb-2">The action you should always do before eating abanana to increase its benefits tenfold</h5>
                        </a>
                        <p class="card-text lh-sm mb-2 fw-semibold opacity-75">The action you should always do before eating abanana to increase its benefits tenfold</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--    Latest news section end.-->

<!--    Thematic inspiration.-->
    <div class="thematic-inspiration-section py-5 mb-5" id="thematic-inspiration-section">
        <div class="container-xxl heading-wrap text-center pt-3 pt-sm-5 pb-3">
            <h2 class="text-uppercase fw-bold mb-3">Thematic inspiration</h2>
        </div>
        <div class="container-xxl slider-wrap-sm-padding overflow-hidden slider-wrap d-flex justify-content-center">
            <div class="thematic-inspiration-slider swiper">
                <div class="swiper-wrapper pb-3 mb-3">
                    <div class="swiper-slide pt-4">
                        <div class="card mb-1 text-center position-relative rounded card-fade">
                            <div class="card-img-wrap">
                                <a href="#">
                                    <img src="/assets/img/example.jpg" class="card-img aspect-ratio-20x31" alt="...">
                                </a>
                            </div>
                            <div class="card-body px-0 mt-1 position-absolute start-0 end-0 bottom-0">
                                <a href="#" class="text-decoration-none">
                                    <h5 class="card-title text-light text-center lh-sm mb-2 py-2">Annette Black</h5>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide pt-4">
                        <div class="card mb-1 text-center position-relative rounded card-fade">
                            <div class="card-img-wrap">
                                <a href="#">
                                    <img src="/assets/img/example.jpg" class="card-img aspect-ratio-20x31" alt="...">
                                </a>
                            </div>
                            <div class="card-body px-0 mt-1 position-absolute start-0 end-0 bottom-0">
                                <a href="#" class="text-decoration-none">
                                    <h5 class="card-title text-light text-center lh-sm mb-2 py-2">Annette Black</h5>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide pt-4">
                        <div class="card mb-1 text-center position-relative rounded card-fade">
                            <div class="card-img-wrap">
                                <a href="#">
                                    <img src="/assets/img/example.jpg" class="card-img aspect-ratio-20x31" alt="...">
                                </a>
                            </div>
                            <div class="card-body px-0 mt-1 position-absolute start-0 end-0 bottom-0">
                                <a href="#" class="text-decoration-none">
                                    <h5 class="card-title text-light text-center lh-sm mb-2 py-2">Annette Black</h5>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide pt-4">
                        <div class="card mb-1 text-center position-relative rounded card-fade">
                            <div class="card-img-wrap">
                                <a href="#">
                                    <img src="/assets/img/example.jpg" class="card-img aspect-ratio-20x31" alt="...">
                                </a>
                            </div>
                            <div class="card-body px-0 mt-1 position-absolute start-0 end-0 bottom-0">
                                <a href="#" class="text-decoration-none">
                                    <h5 class="card-title text-light text-center lh-sm mb-2 py-2">Annette Black</h5>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide pt-4">
                        <div class="card mb-1 text-center position-relative rounded card-fade">
                            <div class="card-img-wrap">
                                <a href="#">
                                    <img src="/assets/img/example.jpg" class="card-img aspect-ratio-20x31" alt="...">
                                </a>
                            </div>
                            <div class="card-body px-0 mt-1 position-absolute start-0 end-0 bottom-0">
                                <a href="#" class="text-decoration-none">
                                    <h5 class="card-title text-light text-center lh-sm mb-2 py-2">Annette Black</h5>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide pt-4">
                        <div class="card mb-1 text-center position-relative rounded card-fade">
                            <div class="card-img-wrap">
                                <a href="#">
                                    <img src="/assets/img/example.jpg" class="card-img aspect-ratio-20x31" alt="...">
                                </a>
                            </div>
                            <div class="card-body px-0 mt-1 position-absolute start-0 end-0 bottom-0">
                                <a href="#" class="text-decoration-none">
                                    <h5 class="card-title text-light text-center lh-sm mb-2 py-2">Annette Black</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination d-none d-sm-block"></div>
                <div class="swiper-scrollbar d-sm-none mx-2"></div>
            </div>
        </div>
    </div>
<!--    Thematic inspiration end.-->

<!--    Cook with it.-->
    <div class="cook-section py-5 mb-5 bg-section" id="cook-section">
        <div class="container-xxl content-wrap  py-md-5">
            <div class="heading-wrap text-center pb-3">
                <h2 class="text-uppercase fw-bold mb-sm-4 pb-2 d-flex align-items-center justify-content-center flex-column flex-sm-row gap-2">Cook with it<img class="heading-logo" src="/assets/img/logos/nestle-logo.png" alt="..."></h2>
            </div>
            <div class="cook-wrap row gap-3 gap-sm-0">
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="card mb-2">
                        <div class="card-img-wrap position-relative">
                            <div class="card-tags-and-buttons gap-2 position-absolute start-0 d-flex flex-column px-4 py-4">
                                <a href="#" class="btn special-btn fw-semibold text-uppercase text-nowrap rounded-pill btn-light text-pink">Sponsored</a>
                            </div>
                            <div class="card-tags-and-buttons gap-2 position-absolute end-0 px-4 py-4">
                                <a href="#" class="btn special-btn rounded-circle btn-light shadow-sm px-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path d="M10.9297 2.49219C9.69922 2.49219 8.6293 3.04707 8 3.97695C7.3707 3.04707 6.30078 2.49219 5.07031 2.49219C4.13824 2.49327 3.24466 2.86402 2.58559 3.52309C1.92652 4.18216 1.55577 5.07574 1.55469 6.00781C1.55469 7.71875 2.62109 9.49941 4.72461 11.2994C5.68851 12.1208 6.7297 12.8468 7.83359 13.4674C7.88475 13.4949 7.94192 13.5093 8 13.5093C8.05808 13.5093 8.11525 13.4949 8.16641 13.4674C9.2703 12.8468 10.3115 12.1208 11.2754 11.2994C13.3789 9.49941 14.4453 7.71875 14.4453 6.00781C14.4442 5.07574 14.0735 4.18216 13.4144 3.52309C12.7553 2.86402 11.8618 2.49327 10.9297 2.49219ZM8 12.7525C7.03848 12.1977 2.25781 9.27266 2.25781 6.00781C2.25859 5.26213 2.55515 4.54721 3.08243 4.01993C3.60971 3.49265 4.32463 3.19609 5.07031 3.19531C6.25859 3.19531 7.25644 3.82988 7.6748 4.85176C7.70129 4.91624 7.74635 4.97139 7.80425 5.0102C7.86216 5.04902 7.93029 5.06974 8 5.06974C8.06971 5.06974 8.13784 5.04902 8.19575 5.0102C8.25365 4.97139 8.29871 4.91624 8.3252 4.85176C8.74356 3.82988 9.74141 3.19531 10.9297 3.19531C11.6754 3.19609 12.3903 3.49265 12.9176 4.01993C13.4448 4.54721 13.7414 5.26213 13.7422 6.00781C13.7422 9.27266 8.96152 12.1977 8 12.7525Z" fill="#191919"></path>
                                    </svg>
                                </a>
                            </div>
                            <a href="#">
                                <img src="/assets/img/example.jpg" class="card-img aspect-ratio-resp" alt="...">
                            </a>
                        </div>
                        <div class="card-body px-0 mt-1">
                            <a href="#" class="text-decoration-none">
                                <h5 class="card-title lh-sm mb-2">The action you should always do before eating abanana to increase its benefits tenfold</h5>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="card mb-2">
                        <div class="card-img-wrap position-relative">
                            <div class="card-tags-and-buttons gap-2 position-absolute start-0 d-flex flex-column px-4 py-4">
                                <a href="#" class="btn special-btn fw-semibold text-uppercase text-nowrap rounded-pill btn-light text-pink">Sponsored</a>
                            </div>
                            <div class="card-tags-and-buttons gap-2 position-absolute end-0 px-4 py-4">
                                <a href="#" class="btn special-btn rounded-circle btn-light shadow-sm px-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path d="M10.9297 2.49219C9.69922 2.49219 8.6293 3.04707 8 3.97695C7.3707 3.04707 6.30078 2.49219 5.07031 2.49219C4.13824 2.49327 3.24466 2.86402 2.58559 3.52309C1.92652 4.18216 1.55577 5.07574 1.55469 6.00781C1.55469 7.71875 2.62109 9.49941 4.72461 11.2994C5.68851 12.1208 6.7297 12.8468 7.83359 13.4674C7.88475 13.4949 7.94192 13.5093 8 13.5093C8.05808 13.5093 8.11525 13.4949 8.16641 13.4674C9.2703 12.8468 10.3115 12.1208 11.2754 11.2994C13.3789 9.49941 14.4453 7.71875 14.4453 6.00781C14.4442 5.07574 14.0735 4.18216 13.4144 3.52309C12.7553 2.86402 11.8618 2.49327 10.9297 2.49219ZM8 12.7525C7.03848 12.1977 2.25781 9.27266 2.25781 6.00781C2.25859 5.26213 2.55515 4.54721 3.08243 4.01993C3.60971 3.49265 4.32463 3.19609 5.07031 3.19531C6.25859 3.19531 7.25644 3.82988 7.6748 4.85176C7.70129 4.91624 7.74635 4.97139 7.80425 5.0102C7.86216 5.04902 7.93029 5.06974 8 5.06974C8.06971 5.06974 8.13784 5.04902 8.19575 5.0102C8.25365 4.97139 8.29871 4.91624 8.3252 4.85176C8.74356 3.82988 9.74141 3.19531 10.9297 3.19531C11.6754 3.19609 12.3903 3.49265 12.9176 4.01993C13.4448 4.54721 13.7414 5.26213 13.7422 6.00781C13.7422 9.27266 8.96152 12.1977 8 12.7525Z" fill="#191919"></path>
                                    </svg>
                                </a>
                            </div>
                            <a href="#">
                                <img src="/assets/img/example.jpg" class="card-img aspect-ratio-resp" alt="...">
                            </a>
                        </div>
                        <div class="card-body px-0 mt-1">
                            <a href="#" class="text-decoration-none">
                                <h5 class="card-title lh-sm mb-2">The action you should always do before eating abanana to increase its benefits tenfold</h5>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="card mb-2">
                        <div class="card-img-wrap position-relative">
                            <div class="card-tags-and-buttons gap-2 position-absolute start-0 d-flex flex-column px-4 py-4">
                                <a href="#" class="btn special-btn fw-semibold text-uppercase text-nowrap rounded-pill btn-light text-pink">Sponsored</a>
                            </div>
                            <div class="card-tags-and-buttons gap-2 position-absolute end-0 px-4 py-4">
                                <a href="#" class="btn special-btn rounded-circle btn-light shadow-sm px-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path d="M10.9297 2.49219C9.69922 2.49219 8.6293 3.04707 8 3.97695C7.3707 3.04707 6.30078 2.49219 5.07031 2.49219C4.13824 2.49327 3.24466 2.86402 2.58559 3.52309C1.92652 4.18216 1.55577 5.07574 1.55469 6.00781C1.55469 7.71875 2.62109 9.49941 4.72461 11.2994C5.68851 12.1208 6.7297 12.8468 7.83359 13.4674C7.88475 13.4949 7.94192 13.5093 8 13.5093C8.05808 13.5093 8.11525 13.4949 8.16641 13.4674C9.2703 12.8468 10.3115 12.1208 11.2754 11.2994C13.3789 9.49941 14.4453 7.71875 14.4453 6.00781C14.4442 5.07574 14.0735 4.18216 13.4144 3.52309C12.7553 2.86402 11.8618 2.49327 10.9297 2.49219ZM8 12.7525C7.03848 12.1977 2.25781 9.27266 2.25781 6.00781C2.25859 5.26213 2.55515 4.54721 3.08243 4.01993C3.60971 3.49265 4.32463 3.19609 5.07031 3.19531C6.25859 3.19531 7.25644 3.82988 7.6748 4.85176C7.70129 4.91624 7.74635 4.97139 7.80425 5.0102C7.86216 5.04902 7.93029 5.06974 8 5.06974C8.06971 5.06974 8.13784 5.04902 8.19575 5.0102C8.25365 4.97139 8.29871 4.91624 8.3252 4.85176C8.74356 3.82988 9.74141 3.19531 10.9297 3.19531C11.6754 3.19609 12.3903 3.49265 12.9176 4.01993C13.4448 4.54721 13.7414 5.26213 13.7422 6.00781C13.7422 9.27266 8.96152 12.1977 8 12.7525Z" fill="#191919"></path>
                                    </svg>
                                </a>
                            </div>
                            <a href="#">
                                <img src="/assets/img/example.jpg" class="card-img aspect-ratio-resp" alt="...">
                            </a>
                        </div>
                        <div class="card-body px-0 mt-1">
                            <a href="#" class="text-decoration-none">
                                <h5 class="card-title lh-sm mb-2">The action you should always do before eating abanana to increase its benefits tenfold</h5>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="card mb-2">
                        <div class="card-img-wrap position-relative">
                            <div class="card-tags-and-buttons gap-2 position-absolute start-0 d-flex flex-column px-4 py-4">
                                <a href="#" class="btn special-btn fw-semibold text-uppercase text-nowrap rounded-pill btn-light text-pink">Sponsored</a>
                            </div>
                            <div class="card-tags-and-buttons gap-2 position-absolute end-0 px-4 py-4">
                                <a href="#" class="btn special-btn rounded-circle btn-light shadow-sm px-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path d="M10.9297 2.49219C9.69922 2.49219 8.6293 3.04707 8 3.97695C7.3707 3.04707 6.30078 2.49219 5.07031 2.49219C4.13824 2.49327 3.24466 2.86402 2.58559 3.52309C1.92652 4.18216 1.55577 5.07574 1.55469 6.00781C1.55469 7.71875 2.62109 9.49941 4.72461 11.2994C5.68851 12.1208 6.7297 12.8468 7.83359 13.4674C7.88475 13.4949 7.94192 13.5093 8 13.5093C8.05808 13.5093 8.11525 13.4949 8.16641 13.4674C9.2703 12.8468 10.3115 12.1208 11.2754 11.2994C13.3789 9.49941 14.4453 7.71875 14.4453 6.00781C14.4442 5.07574 14.0735 4.18216 13.4144 3.52309C12.7553 2.86402 11.8618 2.49327 10.9297 2.49219ZM8 12.7525C7.03848 12.1977 2.25781 9.27266 2.25781 6.00781C2.25859 5.26213 2.55515 4.54721 3.08243 4.01993C3.60971 3.49265 4.32463 3.19609 5.07031 3.19531C6.25859 3.19531 7.25644 3.82988 7.6748 4.85176C7.70129 4.91624 7.74635 4.97139 7.80425 5.0102C7.86216 5.04902 7.93029 5.06974 8 5.06974C8.06971 5.06974 8.13784 5.04902 8.19575 5.0102C8.25365 4.97139 8.29871 4.91624 8.3252 4.85176C8.74356 3.82988 9.74141 3.19531 10.9297 3.19531C11.6754 3.19609 12.3903 3.49265 12.9176 4.01993C13.4448 4.54721 13.7414 5.26213 13.7422 6.00781C13.7422 9.27266 8.96152 12.1977 8 12.7525Z" fill="#191919"></path>
                                    </svg>
                                </a>
                            </div>
                            <a href="#">
                                <img src="/assets/img/example.jpg" class="card-img aspect-ratio-resp" alt="...">
                            </a>
                        </div>
                        <div class="card-body px-0 mt-1">
                            <a href="#" class="text-decoration-none">
                                <h5 class="card-title lh-sm mb-2">The action you should always do before eating abanana to increase its benefits tenfold</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn-wrap d-flex justify-content-center pt-4">
                <a href="#" class="more-btn btn fw-semibold text-uppercase text-nowrap rounded btn-dark">View more recipes</a>
            </div>
        </div>
    </div>
<!--    Cook with it end.-->

<!--    Ingredients section.-->
    <div class="ingredients-section py-5 mb-5" id="ingredients-section">
        <div class="container-xxl heading-wrap text-center pt-3 pt-sm-5 pb-3">
            <h2 class="text-uppercase fw-bold mb-3">Discover our seasonal ingredients</h2>
        </div>
        <div class="container-xxl slider-wrap-sm-padding overflow-hidden slider-wrap d-flex justify-content-center">
            <div class="ingredients-slider swiper">
                <div class="swiper-wrapper pb-3 mb-3">
                    <div class="swiper-slide pt-4">
                        <div class="card mb-1 text-center rounded">
                            <div class="card-img-wrap">
                                <a href="#">
                                    <img src="/assets/img/example2.jpg" class="card-img aspect-ratio-3x4" alt="...">
                                </a>
                            </div>
                            <div class="card-body px-0 mt-1">
                                <a href="#" class="text-decoration-none">
                                    <h5 class="card-title text-center lh-sm mb-2 py-2">Carrot</h5>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide pt-4">
                        <div class="card mb-1 text-center rounded">
                            <div class="card-img-wrap">
                                <a href="#">
                                    <img src="/assets/img/example.jpg" class="card-img aspect-ratio-3x4" alt="...">
                                </a>
                            </div>
                            <div class="card-body px-0 mt-1">
                                <a href="#" class="text-decoration-none">
                                    <h5 class="card-title text-center lh-sm mb-2 py-2">Carrot</h5>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide pt-4">
                        <div class="card mb-1 text-center rounded">
                            <div class="card-img-wrap">
                                <a href="#">
                                    <img src="/assets/img/example.jpg" class="card-img aspect-ratio-3x4" alt="...">
                                </a>
                            </div>
                            <div class="card-body px-0 mt-1">
                                <a href="#" class="text-decoration-none">
                                    <h5 class="card-title text-center lh-sm mb-2 py-2">Carrot</h5>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide pt-4">
                        <div class="card mb-1 text-center rounded">
                            <div class="card-img-wrap">
                                <a href="#">
                                    <img src="/assets/img/example.jpg" class="card-img aspect-ratio-3x4" alt="...">
                                </a>
                            </div>
                            <div class="card-body px-0 mt-1">
                                <a href="#" class="text-decoration-none">
                                    <h5 class="card-title text-center lh-sm mb-2 py-2">Carrot</h5>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide pt-4">
                        <div class="card mb-1 text-center rounded">
                            <div class="card-img-wrap">
                                <a href="#">
                                    <img src="/assets/img/example.jpg" class="card-img aspect-ratio-3x4" alt="...">
                                </a>
                            </div>
                            <div class="card-body px-0 mt-1">
                                <a href="#" class="text-decoration-none">
                                    <h5 class="card-title text-center lh-sm mb-2 py-2">Carrot</h5>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide pt-4">
                        <div class="card mb-1 text-center rounded">
                            <div class="card-img-wrap">
                                <a href="#">
                                    <img src="/assets/img/example.jpg" class="card-img aspect-ratio-3x4" alt="...">
                                </a>
                            </div>
                            <div class="card-body px-0 mt-1">
                                <a href="#" class="text-decoration-none">
                                    <h5 class="card-title text-center lh-sm mb-2 py-2">Carrot</h5>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide pt-4">
                        <div class="card mb-1 text-center rounded">
                            <div class="card-img-wrap">
                                <a href="#">
                                    <img src="/assets/img/example.jpg" class="card-img aspect-ratio-3x4" alt="...">
                                </a>
                            </div>
                            <div class="card-body px-0 mt-1">
                                <a href="#" class="text-decoration-none">
                                    <h5 class="card-title text-center lh-sm mb-2 py-2">Carrot</h5>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide pt-4">
                        <div class="card mb-1 text-center rounded">
                            <div class="card-img-wrap">
                                <a href="#">
                                    <img src="/assets/img/example.jpg" class="card-img aspect-ratio-3x4" alt="...">
                                </a>
                            </div>
                            <div class="card-body px-0 mt-1">
                                <a href="#" class="text-decoration-none">
                                    <h5 class="card-title text-center lh-sm mb-2 py-2">Carrot</h5>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide pt-4">
                        <div class="card mb-1 text-center rounded">
                            <div class="card-img-wrap">
                                <a href="#">
                                    <img src="/assets/img/example.jpg" class="card-img aspect-ratio-3x4" alt="...">
                                </a>
                            </div>
                            <div class="card-body px-0 mt-1">
                                <a href="#" class="text-decoration-none">
                                    <h5 class="card-title text-center lh-sm mb-2 py-2">Carrot</h5>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide pt-4">
                        <div class="card mb-1 text-center rounded">
                            <div class="card-img-wrap">
                                <a href="#">
                                    <img src="/assets/img/example.jpg" class="card-img aspect-ratio-3x4" alt="...">
                                </a>
                            </div>
                            <div class="card-body px-0 mt-1">
                                <a href="#" class="text-decoration-none">
                                    <h5 class="card-title text-center lh-sm mb-2 py-2">Carrot</h5>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide pt-4">
                        <div class="card mb-1 text-center rounded">
                            <div class="card-img-wrap">
                                <a href="#">
                                    <img src="/assets/img/example.jpg" class="card-img aspect-ratio-3x4" alt="...">
                                </a>
                            </div>
                            <div class="card-body px-0 mt-1">
                                <a href="#" class="text-decoration-none">
                                    <h5 class="card-title text-center lh-sm mb-2 py-2">Carrot</h5>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide pt-4">
                        <div class="card mb-1 text-center rounded">
                            <div class="card-img-wrap">
                                <a href="#">
                                    <img src="/assets/img/example.jpg" class="card-img aspect-ratio-3x4" alt="...">
                                </a>
                            </div>
                            <div class="card-body px-0 mt-1">
                                <a href="#" class="text-decoration-none">
                                    <h5 class="card-title text-center lh-sm mb-2 py-2">Carrot</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination d-none d-sm-block"></div>
                <div class="swiper-scrollbar d-sm-none mx-2"></div>
            </div>
        </div>
    </div>
<!--    Ingredients section end.-->

<!--    Seasonal recipes.-->
    <div class="seasonal-recipes-section py-5 mb-5" id="seasonal-recipes-section">
        <div class="container-xxl content-wrap  py-md-5">
            <div class="heading-wrap text-center pb-3">
                <h2 class="text-uppercase fw-bold mb-sm-4 pb-2 d-flex align-items-center justify-content-center flex-column flex-sm-row gap-2">Seasonal recipes</h2>
            </div>
            <div class="seasonal-recipes-wrap row">
                <div class="col-12">
                    <div class="card mb-3">
                        <div class="card-img-wrap position-relative">
                            <div class="card-tags-and-buttons gap-2 position-absolute start-0 d-flex flex-column p-3 p-md-4">
                                <a href="#" class="btn special-btn fw-semibold text-uppercase text-nowrap rounded-pill btn-light text-pink">Sponsored</a>
                            </div>
                            <div class="card-tags-and-buttons gap-2 position-absolute end-0 p-3 p-md-4">
                                <a href="#" class="btn special-btn rounded-circle btn-light shadow-sm px-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path d="M10.9297 2.49219C9.69922 2.49219 8.6293 3.04707 8 3.97695C7.3707 3.04707 6.30078 2.49219 5.07031 2.49219C4.13824 2.49327 3.24466 2.86402 2.58559 3.52309C1.92652 4.18216 1.55577 5.07574 1.55469 6.00781C1.55469 7.71875 2.62109 9.49941 4.72461 11.2994C5.68851 12.1208 6.7297 12.8468 7.83359 13.4674C7.88475 13.4949 7.94192 13.5093 8 13.5093C8.05808 13.5093 8.11525 13.4949 8.16641 13.4674C9.2703 12.8468 10.3115 12.1208 11.2754 11.2994C13.3789 9.49941 14.4453 7.71875 14.4453 6.00781C14.4442 5.07574 14.0735 4.18216 13.4144 3.52309C12.7553 2.86402 11.8618 2.49327 10.9297 2.49219ZM8 12.7525C7.03848 12.1977 2.25781 9.27266 2.25781 6.00781C2.25859 5.26213 2.55515 4.54721 3.08243 4.01993C3.60971 3.49265 4.32463 3.19609 5.07031 3.19531C6.25859 3.19531 7.25644 3.82988 7.6748 4.85176C7.70129 4.91624 7.74635 4.97139 7.80425 5.0102C7.86216 5.04902 7.93029 5.06974 8 5.06974C8.06971 5.06974 8.13784 5.04902 8.19575 5.0102C8.25365 4.97139 8.29871 4.91624 8.3252 4.85176C8.74356 3.82988 9.74141 3.19531 10.9297 3.19531C11.6754 3.19609 12.3903 3.49265 12.9176 4.01993C13.4448 4.54721 13.7414 5.26213 13.7422 6.00781C13.7422 9.27266 8.96152 12.1977 8 12.7525Z" fill="#191919"></path>
                                    </svg>
                                </a>
                            </div>
                            <div class="card-tags-and-buttons gap-2 position-absolute start-0 bottom-0 p-3 p-md-4 d-none d-md-inline-block">
                                <a href="#" class="btn special-btn fw-semibold text-uppercase text-nowrap rounded-pill btn-light shadow-sm px-2">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 2.03125C8.42393 2.03125 6.88326 2.49861 5.5728 3.37423C4.26235 4.24984 3.24097 5.49439 2.63784 6.95049C2.0347 8.40659 1.87689 10.0088 2.18437 11.5546C2.49185 13.1004 3.2508 14.5203 4.36525 15.6348C5.4797 16.7492 6.89959 17.5082 8.44538 17.8156C9.99116 18.1231 11.5934 17.9653 13.0495 17.3622C14.5056 16.759 15.7502 15.7377 16.6258 14.4272C17.5014 13.1167 17.9688 11.5761 17.9688 10C17.9663 7.88732 17.1259 5.86188 15.632 4.36798C14.1381 2.87409 12.1127 2.03373 10 2.03125ZM10 17.0312C8.60935 17.0312 7.24993 16.6189 6.09365 15.8463C4.93737 15.0737 4.03615 13.9755 3.50398 12.6907C2.9718 11.406 2.83255 9.9922 3.10386 8.62827C3.37516 7.26434 4.04482 6.01149 5.02816 5.02816C6.0115 4.04482 7.26435 3.37516 8.62827 3.10385C9.9922 2.83255 11.406 2.97179 12.6907 3.50397C13.9755 4.03615 15.0737 4.93736 15.8463 6.09365C16.6189 7.24993 17.0313 8.60935 17.0313 10C17.0292 11.8642 16.2877 13.6514 14.9696 14.9696C13.6514 16.2877 11.8642 17.0292 10 17.0312ZM12.7602 9.60938L9.01016 7.10938C8.93952 7.06225 8.85741 7.03519 8.77259 7.0311C8.68777 7.02701 8.60343 7.04603 8.52859 7.08614C8.45374 7.12625 8.3912 7.18594 8.34763 7.25884C8.30407 7.33173 8.28113 7.41508 8.28125 7.5V12.5C8.28113 12.5849 8.30407 12.6683 8.34763 12.7412C8.3912 12.8141 8.45374 12.8737 8.52859 12.9139C8.60343 12.954 8.68777 12.973 8.77259 12.9689C8.85741 12.9648 8.93952 12.9378 9.01016 12.8906L12.7602 10.3906C12.8246 10.3479 12.8775 10.2898 12.9141 10.2217C12.9507 10.1535 12.9698 10.0774 12.9698 10C12.9698 9.92265 12.9507 9.8465 12.9141 9.77834C12.8775 9.71018 12.8246 9.65213 12.7602 9.60938ZM9.21875 11.6242V8.37578L11.6547 10L9.21875 11.6242Z" fill="#191919"/>
                                    </svg>
                                    <span class="ps-2">Video</span>
                                </a>
                            </div>
                            <a href="#">
                                <img src="/assets/img/example.jpg" class="card-img aspect-ratio-32x17" alt="...">
                            </a>
                        </div>
                        <div class="card-body px-0 mt-1">
                            <a href="#" class="text-decoration-none">
                                <h5 class="card-title lh-sm mb-2">The action you should always do before eating abanana to increase its benefits tenfold</h5>
                            </a>
                            <div class="recipe-rating d-flex align-items-center lh-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                                    <path d="M5 0L6.32252 3.17971L9.75528 3.45492L7.13988 5.69529L7.93893 9.04508L5 7.25L2.06107 9.04508L2.86012 5.69529L0.244718 3.45492L3.67748 3.17971L5 0Z" fill="#191919"/>
                                </svg>
                                <p class="mb-0 ms-1 fw-semibold">4.75 (12)</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-lg-3">
                    <div class="card mb-3">
                        <div class="card-img-wrap position-relative">
                            <div class="card-tags-and-buttons gap-2 position-absolute start-0 d-flex flex-column p-3 p-md-4">
                                <a href="#" class="btn special-btn special-accent-btn fw-semibold text-uppercase text-nowrap rounded-pill d-none d-md-block">Hard</a>
                            </div>
                            <div class="card-tags-and-buttons gap-2 position-absolute end-0 p-3 p-md-4">
                                <a href="#" class="btn special-btn rounded-circle btn-light shadow-sm px-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path d="M10.9297 2.49219C9.69922 2.49219 8.6293 3.04707 8 3.97695C7.3707 3.04707 6.30078 2.49219 5.07031 2.49219C4.13824 2.49327 3.24466 2.86402 2.58559 3.52309C1.92652 4.18216 1.55577 5.07574 1.55469 6.00781C1.55469 7.71875 2.62109 9.49941 4.72461 11.2994C5.68851 12.1208 6.7297 12.8468 7.83359 13.4674C7.88475 13.4949 7.94192 13.5093 8 13.5093C8.05808 13.5093 8.11525 13.4949 8.16641 13.4674C9.2703 12.8468 10.3115 12.1208 11.2754 11.2994C13.3789 9.49941 14.4453 7.71875 14.4453 6.00781C14.4442 5.07574 14.0735 4.18216 13.4144 3.52309C12.7553 2.86402 11.8618 2.49327 10.9297 2.49219ZM8 12.7525C7.03848 12.1977 2.25781 9.27266 2.25781 6.00781C2.25859 5.26213 2.55515 4.54721 3.08243 4.01993C3.60971 3.49265 4.32463 3.19609 5.07031 3.19531C6.25859 3.19531 7.25644 3.82988 7.6748 4.85176C7.70129 4.91624 7.74635 4.97139 7.80425 5.0102C7.86216 5.04902 7.93029 5.06974 8 5.06974C8.06971 5.06974 8.13784 5.04902 8.19575 5.0102C8.25365 4.97139 8.29871 4.91624 8.3252 4.85176C8.74356 3.82988 9.74141 3.19531 10.9297 3.19531C11.6754 3.19609 12.3903 3.49265 12.9176 4.01993C13.4448 4.54721 13.7414 5.26213 13.7422 6.00781C13.7422 9.27266 8.96152 12.1977 8 12.7525Z" fill="#191919"></path>
                                    </svg>
                                </a>
                            </div>
                            <a href="#">
                                <img src="/assets/img/example.jpg" class="card-img aspect-ratio-1x1" alt="...">
                            </a>
                        </div>
                        <div class="card-body px-0 mt-1">
                            <a href="#" class="text-decoration-none">
                                <h5 class="card-title lh-sm mb-2">The action you should always do before eating abanana to increase its benefits tenfold</h5>
                            </a>
                            <div class="recipe-rating d-flex align-items-center lh-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                                    <path d="M5 0L6.32252 3.17971L9.75528 3.45492L7.13988 5.69529L7.93893 9.04508L5 7.25L2.06107 9.04508L2.86012 5.69529L0.244718 3.45492L3.67748 3.17971L5 0Z" fill="#191919"/>
                                </svg>
                                <p class="mb-0 ms-1 fw-semibold">4.75 (12)</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-lg-3">
                    <div class="card mb-3">
                        <div class="card-img-wrap position-relative">
                            <div class="card-tags-and-buttons gap-2 position-absolute start-0 d-flex flex-column p-3 p-md-4">
                                <a href="#" class="btn special-btn fw-semibold text-uppercase text-nowrap rounded-pill btn-light text-pink d-none d-md-block">Sponsored</a>
                            </div>
                            <div class="card-tags-and-buttons gap-2 position-absolute end-0 p-3 p-md-4">
                                <a href="#" class="btn special-btn rounded-circle btn-light shadow-sm px-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path d="M10.9297 2.49219C9.69922 2.49219 8.6293 3.04707 8 3.97695C7.3707 3.04707 6.30078 2.49219 5.07031 2.49219C4.13824 2.49327 3.24466 2.86402 2.58559 3.52309C1.92652 4.18216 1.55577 5.07574 1.55469 6.00781C1.55469 7.71875 2.62109 9.49941 4.72461 11.2994C5.68851 12.1208 6.7297 12.8468 7.83359 13.4674C7.88475 13.4949 7.94192 13.5093 8 13.5093C8.05808 13.5093 8.11525 13.4949 8.16641 13.4674C9.2703 12.8468 10.3115 12.1208 11.2754 11.2994C13.3789 9.49941 14.4453 7.71875 14.4453 6.00781C14.4442 5.07574 14.0735 4.18216 13.4144 3.52309C12.7553 2.86402 11.8618 2.49327 10.9297 2.49219ZM8 12.7525C7.03848 12.1977 2.25781 9.27266 2.25781 6.00781C2.25859 5.26213 2.55515 4.54721 3.08243 4.01993C3.60971 3.49265 4.32463 3.19609 5.07031 3.19531C6.25859 3.19531 7.25644 3.82988 7.6748 4.85176C7.70129 4.91624 7.74635 4.97139 7.80425 5.0102C7.86216 5.04902 7.93029 5.06974 8 5.06974C8.06971 5.06974 8.13784 5.04902 8.19575 5.0102C8.25365 4.97139 8.29871 4.91624 8.3252 4.85176C8.74356 3.82988 9.74141 3.19531 10.9297 3.19531C11.6754 3.19609 12.3903 3.49265 12.9176 4.01993C13.4448 4.54721 13.7414 5.26213 13.7422 6.00781C13.7422 9.27266 8.96152 12.1977 8 12.7525Z" fill="#191919"></path>
                                    </svg>
                                </a>
                            </div>
                            <a href="#">
                                <img src="/assets/img/example.jpg" class="card-img aspect-ratio-1x1" alt="...">
                            </a>
                        </div>
                        <div class="card-body px-0 mt-1">
                            <a href="#" class="text-decoration-none">
                                <h5 class="card-title lh-sm mb-2">The action you should always do before eating abanana to increase its benefits tenfold</h5>
                            </a>
                            <div class="recipe-rating d-flex align-items-center lh-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                                    <path d="M5 0L6.32252 3.17971L9.75528 3.45492L7.13988 5.69529L7.93893 9.04508L5 7.25L2.06107 9.04508L2.86012 5.69529L0.244718 3.45492L3.67748 3.17971L5 0Z" fill="#191919"/>
                                </svg>
                                <p class="mb-0 ms-1 fw-semibold">4.75 (12)</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-lg-3">
                    <div class="card mb-3">
                        <div class="card-img-wrap position-relative">
                            <div class="card-tags-and-buttons gap-2 position-absolute start-0 d-flex flex-column p-3 p-md-4">
                                <a href="#" class="btn special-btn fw-semibold text-uppercase text-nowrap rounded-pill btn-light text-pink d-none d-md-block">Sponsored</a>
                            </div>
                            <div class="card-tags-and-buttons gap-2 position-absolute end-0 p-3 p-md-4">
                                <a href="#" class="btn special-btn rounded-circle btn-light shadow-sm px-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path d="M10.9297 2.49219C9.69922 2.49219 8.6293 3.04707 8 3.97695C7.3707 3.04707 6.30078 2.49219 5.07031 2.49219C4.13824 2.49327 3.24466 2.86402 2.58559 3.52309C1.92652 4.18216 1.55577 5.07574 1.55469 6.00781C1.55469 7.71875 2.62109 9.49941 4.72461 11.2994C5.68851 12.1208 6.7297 12.8468 7.83359 13.4674C7.88475 13.4949 7.94192 13.5093 8 13.5093C8.05808 13.5093 8.11525 13.4949 8.16641 13.4674C9.2703 12.8468 10.3115 12.1208 11.2754 11.2994C13.3789 9.49941 14.4453 7.71875 14.4453 6.00781C14.4442 5.07574 14.0735 4.18216 13.4144 3.52309C12.7553 2.86402 11.8618 2.49327 10.9297 2.49219ZM8 12.7525C7.03848 12.1977 2.25781 9.27266 2.25781 6.00781C2.25859 5.26213 2.55515 4.54721 3.08243 4.01993C3.60971 3.49265 4.32463 3.19609 5.07031 3.19531C6.25859 3.19531 7.25644 3.82988 7.6748 4.85176C7.70129 4.91624 7.74635 4.97139 7.80425 5.0102C7.86216 5.04902 7.93029 5.06974 8 5.06974C8.06971 5.06974 8.13784 5.04902 8.19575 5.0102C8.25365 4.97139 8.29871 4.91624 8.3252 4.85176C8.74356 3.82988 9.74141 3.19531 10.9297 3.19531C11.6754 3.19609 12.3903 3.49265 12.9176 4.01993C13.4448 4.54721 13.7414 5.26213 13.7422 6.00781C13.7422 9.27266 8.96152 12.1977 8 12.7525Z" fill="#191919"></path>
                                    </svg>
                                </a>
                            </div>
                            <a href="#">
                                <img src="/assets/img/example.jpg" class="card-img aspect-ratio-1x1" alt="...">
                            </a>
                        </div>
                        <div class="card-body px-0 mt-1">
                            <a href="#" class="text-decoration-none">
                                <h5 class="card-title lh-sm mb-2">The action you should always do before eating abanana to increase its benefits tenfold</h5>
                            </a>
                            <div class="recipe-rating d-flex align-items-center lh-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                                    <path d="M5 0L6.32252 3.17971L9.75528 3.45492L7.13988 5.69529L7.93893 9.04508L5 7.25L2.06107 9.04508L2.86012 5.69529L0.244718 3.45492L3.67748 3.17971L5 0Z" fill="#191919"/>
                                </svg>
                                <p class="mb-0 ms-1 fw-semibold">4.75 (12)</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6 col-lg-3">
                    <div class="card mb-3">
                        <div class="card-img-wrap position-relative">
                            <div class="card-tags-and-buttons gap-2 position-absolute start-0 d-flex flex-column p-3 p-md-4">
                                <a href="#" class="btn special-btn fw-semibold text-uppercase text-nowrap rounded-pill btn-light text-pink d-none d-md-block">Sponsored</a>
                            </div>
                            <div class="card-tags-and-buttons gap-2 position-absolute end-0 p-3 p-md-4">
                                <a href="#" class="btn special-btn rounded-circle btn-light shadow-sm px-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path d="M10.9297 2.49219C9.69922 2.49219 8.6293 3.04707 8 3.97695C7.3707 3.04707 6.30078 2.49219 5.07031 2.49219C4.13824 2.49327 3.24466 2.86402 2.58559 3.52309C1.92652 4.18216 1.55577 5.07574 1.55469 6.00781C1.55469 7.71875 2.62109 9.49941 4.72461 11.2994C5.68851 12.1208 6.7297 12.8468 7.83359 13.4674C7.88475 13.4949 7.94192 13.5093 8 13.5093C8.05808 13.5093 8.11525 13.4949 8.16641 13.4674C9.2703 12.8468 10.3115 12.1208 11.2754 11.2994C13.3789 9.49941 14.4453 7.71875 14.4453 6.00781C14.4442 5.07574 14.0735 4.18216 13.4144 3.52309C12.7553 2.86402 11.8618 2.49327 10.9297 2.49219ZM8 12.7525C7.03848 12.1977 2.25781 9.27266 2.25781 6.00781C2.25859 5.26213 2.55515 4.54721 3.08243 4.01993C3.60971 3.49265 4.32463 3.19609 5.07031 3.19531C6.25859 3.19531 7.25644 3.82988 7.6748 4.85176C7.70129 4.91624 7.74635 4.97139 7.80425 5.0102C7.86216 5.04902 7.93029 5.06974 8 5.06974C8.06971 5.06974 8.13784 5.04902 8.19575 5.0102C8.25365 4.97139 8.29871 4.91624 8.3252 4.85176C8.74356 3.82988 9.74141 3.19531 10.9297 3.19531C11.6754 3.19609 12.3903 3.49265 12.9176 4.01993C13.4448 4.54721 13.7414 5.26213 13.7422 6.00781C13.7422 9.27266 8.96152 12.1977 8 12.7525Z" fill="#191919"></path>
                                    </svg>
                                </a>
                            </div>
                            <a href="#">
                                <img src="/assets/img/example.jpg" class="card-img aspect-ratio-1x1" alt="...">
                            </a>
                        </div>
                        <div class="card-body px-0 mt-1">
                            <a href="#" class="text-decoration-none">
                                <h5 class="card-title lh-sm mb-2">The action you should always do before eating abanana to increase its benefits tenfold</h5>
                            </a>
                            <div class="recipe-rating d-flex align-items-center lh-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                                    <path d="M5 0L6.32252 3.17971L9.75528 3.45492L7.13988 5.69529L7.93893 9.04508L5 7.25L2.06107 9.04508L2.86012 5.69529L0.244718 3.45492L3.67748 3.17971L5 0Z" fill="#191919"/>
                                </svg>
                                <p class="mb-0 ms-1 fw-semibold">4.75 (12)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!--    Seasonal recipes end.-->

<!--    Gourmet newsletter.-->
    <div class="newsletter-section py-5 mb-5 bg-section" id="newsletter-section">
        <div class="container-xxl content-wrap  py-md-5">
            <div class="heading-wrap text-center pb-3">
                <h2 class="text-uppercase fw-bold mb-sm-4 pb-2 d-flex align-items-center justify-content-center flex-column flex-sm-row gap-2">Gourmet newsletter</h2>
            </div>
            <div class="newsletter-wrap row gap-3 gap-sm-0">
                <div class="col-12 col-sm-6 col-lg-3 mb-sm-3 pt-5 pb-3">
                    <div class="card h-100 bg-accent align-items-center position-relative py-4 px-2 px-md-3 px-xl-4">
                        <div class="card-img-wrap position-absolute top-n70">
                            <a class="rounded-circle bg-section d-block" href="#">
                                <img src="/assets/img/icons/light-bulb-icon.svg" class="card-img p-4 border-0" alt="...">
                            </a>
                        </div>
                        <div class="card-body px-0 mt-1 text-center">
                            <a href="#" class="text-decoration-none">
                                <h5 class="card-title lh-sm mb-2 font-primary">Don’t run out of inspiration anymore</h5>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-3 mb-sm-3 pt-5 pb-3">
                    <div class="card h-100 bg-accent align-items-center position-relative py-4 px-2 px-md-3 px-xl-4">
                        <div class="card-img-wrap position-absolute top-n70">
                            <a class="rounded-circle bg-section d-block" href="#">
                                <img src="/assets/img/icons/food-tray-icon.svg" class="card-img p-4 border-0" alt="...">
                            </a>
                        </div>
                        <div class="card-body px-0 mt-1 text-center">
                            <a href="#" class="text-decoration-none">
                                <h5 class="card-title lh-sm mb-2 font-primary">Know what to eat tonight</h5>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-3 mb-sm-3 pt-5 pb-3">
                    <div class="card h-100 bg-accent align-items-center position-relative py-4 px-2 px-md-3 px-xl-4">
                        <div class="card-img-wrap position-absolute top-n70">
                            <a class="rounded-circle bg-section d-block" href="#">
                                <img src="/assets/img/icons/new-icon.svg" class="card-img p-4 border-0" alt="...">
                            </a>
                        </div>
                        <div class="card-body px-0 mt-1 text-center">
                            <a href="#" class="text-decoration-none">
                                <h5 class="card-title lh-sm mb-2 font-primary">Discover all our new products</h5>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-3 mb-0 mb-sm-3 pt-5 pb-3">
                    <div class="card h-100 bg-accent align-items-center position-relative py-4 px-2 px-md-3 px-xl-4">
                        <div class="card-img-wrap position-absolute top-n70">
                            <a class="rounded-circle bg-section d-block" href="#">
                                <img src="/assets/img/icons/cook-book-icon.svg" class="card-img p-4 border-0" alt="...">
                            </a>
                        </div>
                        <div class="card-body px-0 mt-1 text-center">
                            <a href="#" class="text-decoration-none">
                                <h5 class="card-title lh-sm mb-2 font-primary">Have a ready-made menu for the week</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn-wrap d-flex justify-content-center pt-4">
                <a href="#" class="more-btn btn fw-semibold text-uppercase text-nowrap rounded btn-dark">Subscribe</a>
            </div>
        </div>
    </div>
<!--    Gourmet newsletter end.-->

<!--    Menu of the week section.-->
    <div class="menu-recipes-section py-5 mb-5 mx-auto" id="menu-recipes-section">
        <div class="container-xxl heading-wrap text-center pb-3">
            <h2 class="text-uppercase fw-bold mb-4 pb-2">Menu of the week</h2>
            <div class="sorting-buttons d-flex justify-content-center gap-1 gap-sm-2 gap-md-3 mb-3">
                <a href="#" class="btn special-btn fw-bold text-uppercase text-nowrap rounded btn-light calendar-btn">
                    <p>Mon.</p>
                    <h5 class="mb-1">13</h5>
                </a>
                <a href="#" class="btn special-btn fw-bold text-uppercase text-nowrap rounded btn-light calendar-btn">
                    <p>Tue.</p>
                    <h5 class="mb-1">14</h5>
                </a>
                <a href="#" class="btn special-btn fw-bold text-uppercase text-nowrap rounded btn-light calendar-btn">
                    <p>Wed.</p>
                    <h5 class="mb-1">15</h5>
                </a>
                <a href="#" class="btn special-btn fw-bold text-uppercase text-nowrap rounded btn-light special-accent-btn calendar-btn">
                    <p>Thu.</p>
                    <h5 class="mb-1">16</h5>
                </a>
                <a href="#" class="btn special-btn fw-bold text-uppercase text-nowrap rounded btn-light calendar-btn">
                    <p>Fri</p>
                    <h5 class="mb-1">17</h5>
                </a>
                <a href="#" class="btn special-btn fw-bold text-uppercase text-nowrap rounded btn-light calendar-btn">
                    <p>Sat.</p>
                    <h5 class="mb-1">18</h5>
                </a>
                <a href="#" class="btn special-btn fw-bold text-uppercase text-nowrap rounded btn-light calendar-btn">
                    <p>Sun.</p>
                    <h5 class="mb-1">19</h5>
                </a>
            </div>
        </div>
        <div class="slider-wrap-sm-padding slider-wrap d-flex justify-content-center">
            <div class="menu-recipes-slider swiper">
                <div class="swiper-wrapper pb-3 mb-3">
                    <div class="swiper-slide">
                        <div class="card mb-1">
                            <div class="card-img-wrap position-relative">
                                <div class="card-tags-and-buttons gap-2 position-absolute start-0 d-flex flex-column px-4 py-4">
                                    <a href="#" class="btn special-btn fw-semibold text-uppercase text-nowrap rounded-pill special-accent-btn">Easy</a>
                                </div>
                                <div class="card-tags-and-buttons gap-2 position-absolute end-0 px-4 py-4">
                                    <a href="#" class="btn special-btn rounded-circle btn-light shadow-sm px-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                            <path d="M10.9297 2.49219C9.69922 2.49219 8.6293 3.04707 8 3.97695C7.3707 3.04707 6.30078 2.49219 5.07031 2.49219C4.13824 2.49327 3.24466 2.86402 2.58559 3.52309C1.92652 4.18216 1.55577 5.07574 1.55469 6.00781C1.55469 7.71875 2.62109 9.49941 4.72461 11.2994C5.68851 12.1208 6.7297 12.8468 7.83359 13.4674C7.88475 13.4949 7.94192 13.5093 8 13.5093C8.05808 13.5093 8.11525 13.4949 8.16641 13.4674C9.2703 12.8468 10.3115 12.1208 11.2754 11.2994C13.3789 9.49941 14.4453 7.71875 14.4453 6.00781C14.4442 5.07574 14.0735 4.18216 13.4144 3.52309C12.7553 2.86402 11.8618 2.49327 10.9297 2.49219ZM8 12.7525C7.03848 12.1977 2.25781 9.27266 2.25781 6.00781C2.25859 5.26213 2.55515 4.54721 3.08243 4.01993C3.60971 3.49265 4.32463 3.19609 5.07031 3.19531C6.25859 3.19531 7.25644 3.82988 7.6748 4.85176C7.70129 4.91624 7.74635 4.97139 7.80425 5.0102C7.86216 5.04902 7.93029 5.06974 8 5.06974C8.06971 5.06974 8.13784 5.04902 8.19575 5.0102C8.25365 4.97139 8.29871 4.91624 8.3252 4.85176C8.74356 3.82988 9.74141 3.19531 10.9297 3.19531C11.6754 3.19609 12.3903 3.49265 12.9176 4.01993C13.4448 4.54721 13.7414 5.26213 13.7422 6.00781C13.7422 9.27266 8.96152 12.1977 8 12.7525Z" fill="#191919"></path>
                                        </svg>
                                    </a>
                                </div>
                                <a href="#">
                                    <img src="/assets/img/example.jpg" class="card-img aspect-ratio-25x31" alt="...">
                                </a>
                            </div>
                            <div class="card-body px-0 mt-1">
                                <a href="#" class="text-decoration-none">
                                    <h5 class="card-title lh-sm mb-2">The action you should always do before eating abanana to increase its benefits tenfold</h5>
                                </a>
                                <div class="recipe-rating d-flex align-items-center lh-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                                        <path d="M5 0L6.32252 3.17971L9.75528 3.45492L7.13988 5.69529L7.93893 9.04508L5 7.25L2.06107 9.04508L2.86012 5.69529L0.244718 3.45492L3.67748 3.17971L5 0Z" fill="#191919"/>
                                    </svg>
                                    <p class="mb-0 ms-1 fw-semibold">4.75 (12)</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card mb-1">
                            <div class="card-img-wrap position-relative">
                                <div class="card-tags-and-buttons gap-2 position-absolute start-0 d-flex flex-column px-3 py-4">
                                    <a href="#" class="btn special-btn special-accent-btn fw-semibold text-uppercase text-nowrap rounded-pill btn-light">Vegan</a>
                                </div>
                                <a href="#">
                                    <img src="/assets/img/example.jpg" class="card-img aspect-ratio-25x31" alt="...">
                                </a>
                            </div>
                            <div class="card-body px-0 mt-1">
                                <a href="#" class="text-decoration-none">
                                    <h5 class="card-title lh-sm mb-2">The action you should always do before eating abanana to increase its benefits tenfold</h5>
                                </a>
                                <div class="recipe-rating d-flex align-items-center lh-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                                        <path d="M5 0L6.32252 3.17971L9.75528 3.45492L7.13988 5.69529L7.93893 9.04508L5 7.25L2.06107 9.04508L2.86012 5.69529L0.244718 3.45492L3.67748 3.17971L5 0Z" fill="#191919"/>
                                    </svg>
                                    <p class="mb-0 ms-1 fw-semibold">4.75 (12)</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card mb-1">
                            <div class="card-img-wrap position-relative">
                                <div class="card-tags-and-buttons gap-2 position-absolute start-0 d-flex flex-column px-3 py-4">
                                    <a href="#" class="btn special-btn special-accent-btn fw-semibold text-uppercase text-nowrap rounded-pill btn-light">Quick</a>
                                </div>
                                <a href="#">
                                    <img src="/assets/img/example.jpg" class="card-img aspect-ratio-25x31" alt="...">
                                </a>
                            </div>
                            <div class="card-body px-0 mt-1">
                                <a href="#" class="text-decoration-none">
                                    <h5 class="card-title lh-sm mb-2">The action you should always do before eating abanana to increase its benefits tenfold</h5>
                                </a>
                                <div class="recipe-rating d-flex align-items-center lh-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                                        <path d="M5 0L6.32252 3.17971L9.75528 3.45492L7.13988 5.69529L7.93893 9.04508L5 7.25L2.06107 9.04508L2.86012 5.69529L0.244718 3.45492L3.67748 3.17971L5 0Z" fill="#191919"/>
                                    </svg>
                                    <p class="mb-0 ms-1 fw-semibold">4.75 (12)</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card mb-1">
                            <div class="card-img-wrap position-relative">
                                <div class="card-tags-and-buttons gap-2 position-absolute start-0 d-flex flex-column px-3 py-4">
                                    <a href="#" class="btn special-btn special-accent-btn fw-semibold text-uppercase text-nowrap rounded-pill btn-light">Vegan</a>
                                </div>
                                <a href="#">
                                    <img src="/assets/img/example.jpg" class="card-img aspect-ratio-25x31" alt="...">
                                </a>
                            </div>
                            <div class="card-body px-0 mt-1">
                                <a href="#" class="text-decoration-none">
                                    <h5 class="card-title lh-sm mb-2">The action you should always do before eating abanana to increase its benefits tenfold</h5>
                                </a>
                                <div class="recipe-rating d-flex align-items-center lh-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                                        <path d="M5 0L6.32252 3.17971L9.75528 3.45492L7.13988 5.69529L7.93893 9.04508L5 7.25L2.06107 9.04508L2.86012 5.69529L0.244718 3.45492L3.67748 3.17971L5 0Z" fill="#191919"/>
                                    </svg>
                                    <p class="mb-0 ms-1 fw-semibold">4.75 (12)</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card mb-1">
                            <div class="card-img-wrap position-relative">
                                <div class="card-tags-and-buttons gap-2 position-absolute start-0 d-flex flex-column px-3 py-4">
                                    <a href="#" class="btn special-btn special-accent-btn fw-semibold text-uppercase text-nowrap rounded-pill btn-light">Quick</a>
                                </div>
                                <a href="#">
                                    <img src="/assets/img/example.jpg" class="card-img aspect-ratio-25x31" alt="...">
                                </a>
                            </div>
                            <div class="card-body px-0 mt-1">
                                <a href="#" class="text-decoration-none">
                                    <h5 class="card-title lh-sm mb-2">The action you should always do before eating abanana to increase its benefits tenfold</h5>
                                </a>
                                <div class="recipe-rating d-flex align-items-center lh-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                                        <path d="M5 0L6.32252 3.17971L9.75528 3.45492L7.13988 5.69529L7.93893 9.04508L5 7.25L2.06107 9.04508L2.86012 5.69529L0.244718 3.45492L3.67748 3.17971L5 0Z" fill="#191919"/>
                                    </svg>
                                    <p class="mb-0 ms-1 fw-semibold">4.75 (12)</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card mb-1">
                            <div class="card-img-wrap position-relative">
                                <div class="card-tags-and-buttons gap-2 position-absolute start-0 d-flex flex-column px-3 py-4">
                                    <a href="#" class="btn special-btn special-accent-btn fw-semibold text-uppercase text-nowrap rounded-pill btn-light">Vegan</a>
                                </div>
                                <a href="#">
                                    <img src="/assets/img/example.jpg" class="card-img aspect-ratio-25x31" alt="...">
                                </a>
                            </div>
                            <div class="card-body px-0 mt-1">
                                <a href="#" class="text-decoration-none">
                                    <h5 class="card-title lh-sm mb-2">The action you should always do before eating abanana to increase its benefits tenfold</h5>
                                </a>
                                <div class="recipe-rating d-flex align-items-center lh-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                                        <path d="M5 0L6.32252 3.17971L9.75528 3.45492L7.13988 5.69529L7.93893 9.04508L5 7.25L2.06107 9.04508L2.86012 5.69529L0.244718 3.45492L3.67748 3.17971L5 0Z" fill="#191919"/>
                                    </svg>
                                    <p class="mb-0 ms-1 fw-semibold">4.75 (12)</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="card mb-1">
                            <div class="card-img-wrap position-relative">
                                <div class="card-tags-and-buttons gap-2 position-absolute start-0 d-flex flex-column px-3 py-4">
                                    <a href="#" class="btn special-btn special-accent-btn fw-semibold text-uppercase text-nowrap rounded-pill btn-light">Quick</a>
                                </div>
                                <a href="#">
                                    <img src="/assets/img/example.jpg" class="card-img aspect-ratio-25x31" alt="...">
                                </a>
                            </div>
                            <div class="card-body px-0 mt-1">
                                <a href="#" class="text-decoration-none">
                                    <h5 class="card-title lh-sm mb-2">The action you should always do before eating abanana to increase its benefits tenfold</h5>
                                </a>
                                <div class="recipe-rating d-flex align-items-center lh-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                                        <path d="M5 0L6.32252 3.17971L9.75528 3.45492L7.13988 5.69529L7.93893 9.04508L5 7.25L2.06107 9.04508L2.86012 5.69529L0.244718 3.45492L3.67748 3.17971L5 0Z" fill="#191919"/>
                                    </svg>
                                    <p class="mb-0 ms-1 fw-semibold">4.75 (12)</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>
<!--    Menu of the week section end.-->

<!--    Our cook book.-->
    <div class="cook-book-section py-5" id="cook-book-section">
        <div class="container-xxl content-wrap  py-md-5">
            <div class="heading-wrap text-center pb-3">
                <h2 class="text-uppercase fw-bold mb-sm-4 pb-2 d-flex align-items-center justify-content-center flex-column flex-sm-row gap-2">Our cookbook</h2>
                <p>Our collection to find the ideal recipe, the unfailing chef's tip or the beautiful cookbook to offer</p>
                <p class="pt-2 mb-2">In partnership with</p>
                <img class="heading-logo" src="/assets/img/logos/michel-lafon-logo.png" alt="...">
            </div>
            <div class="cook-wrap row gap-3 gap-sm-0">
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="card mb-2">
                        <div class="card-img-wrap position-relative">
                            <div class="card-tags-and-buttons gap-2 position-absolute start-0 d-flex flex-column px-4 py-4">
                                <a href="#" class="btn special-btn fw-semibold text-uppercase text-nowrap rounded-pill btn-light text-pink">Sponsored</a>
                            </div>
                            <div class="card-tags-and-buttons gap-2 position-absolute end-0 px-4 py-4">
                                <a href="#" class="btn special-btn rounded-circle btn-light shadow-sm px-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path d="M10.9297 2.49219C9.69922 2.49219 8.6293 3.04707 8 3.97695C7.3707 3.04707 6.30078 2.49219 5.07031 2.49219C4.13824 2.49327 3.24466 2.86402 2.58559 3.52309C1.92652 4.18216 1.55577 5.07574 1.55469 6.00781C1.55469 7.71875 2.62109 9.49941 4.72461 11.2994C5.68851 12.1208 6.7297 12.8468 7.83359 13.4674C7.88475 13.4949 7.94192 13.5093 8 13.5093C8.05808 13.5093 8.11525 13.4949 8.16641 13.4674C9.2703 12.8468 10.3115 12.1208 11.2754 11.2994C13.3789 9.49941 14.4453 7.71875 14.4453 6.00781C14.4442 5.07574 14.0735 4.18216 13.4144 3.52309C12.7553 2.86402 11.8618 2.49327 10.9297 2.49219ZM8 12.7525C7.03848 12.1977 2.25781 9.27266 2.25781 6.00781C2.25859 5.26213 2.55515 4.54721 3.08243 4.01993C3.60971 3.49265 4.32463 3.19609 5.07031 3.19531C6.25859 3.19531 7.25644 3.82988 7.6748 4.85176C7.70129 4.91624 7.74635 4.97139 7.80425 5.0102C7.86216 5.04902 7.93029 5.06974 8 5.06974C8.06971 5.06974 8.13784 5.04902 8.19575 5.0102C8.25365 4.97139 8.29871 4.91624 8.3252 4.85176C8.74356 3.82988 9.74141 3.19531 10.9297 3.19531C11.6754 3.19609 12.3903 3.49265 12.9176 4.01993C13.4448 4.54721 13.7414 5.26213 13.7422 6.00781C13.7422 9.27266 8.96152 12.1977 8 12.7525Z" fill="#191919"></path>
                                    </svg>
                                </a>
                            </div>
                            <a href="#">
                                <img src="/assets/img/example.jpg" class="card-img aspect-ratio-resp" alt="...">
                            </a>
                        </div>
                        <div class="card-body px-0 mt-1">
                            <a href="#" class="text-decoration-none">
                                <h5 class="card-title lh-sm mb-2">The action you should always do before eating abanana to increase its benefits tenfold</h5>
                            </a>
                            <div class="recipe-rating d-flex align-items-center lh-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                                    <path d="M5 0L6.32252 3.17971L9.75528 3.45492L7.13988 5.69529L7.93893 9.04508L5 7.25L2.06107 9.04508L2.86012 5.69529L0.244718 3.45492L3.67748 3.17971L5 0Z" fill="#191919"/>
                                </svg>
                                <p class="mb-0 ms-1 fw-semibold">4.75 (12)</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="card mb-2">
                        <div class="card-img-wrap position-relative">
                            <div class="card-tags-and-buttons gap-2 position-absolute start-0 d-flex flex-column px-4 py-4">
                                <a href="#" class="btn special-btn fw-semibold text-uppercase text-nowrap rounded-pill btn-light text-pink">Sponsored</a>
                                <a href="#" class="btn special-btn fw-semibold text-uppercase text-nowrap rounded-pill special-accent-btn">Sponsored</a>
                            </div>
                            <div class="card-tags-and-buttons gap-2 position-absolute end-0 px-4 py-4">
                                <a href="#" class="btn special-btn rounded-circle btn-light shadow-sm px-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path d="M10.9297 2.49219C9.69922 2.49219 8.6293 3.04707 8 3.97695C7.3707 3.04707 6.30078 2.49219 5.07031 2.49219C4.13824 2.49327 3.24466 2.86402 2.58559 3.52309C1.92652 4.18216 1.55577 5.07574 1.55469 6.00781C1.55469 7.71875 2.62109 9.49941 4.72461 11.2994C5.68851 12.1208 6.7297 12.8468 7.83359 13.4674C7.88475 13.4949 7.94192 13.5093 8 13.5093C8.05808 13.5093 8.11525 13.4949 8.16641 13.4674C9.2703 12.8468 10.3115 12.1208 11.2754 11.2994C13.3789 9.49941 14.4453 7.71875 14.4453 6.00781C14.4442 5.07574 14.0735 4.18216 13.4144 3.52309C12.7553 2.86402 11.8618 2.49327 10.9297 2.49219ZM8 12.7525C7.03848 12.1977 2.25781 9.27266 2.25781 6.00781C2.25859 5.26213 2.55515 4.54721 3.08243 4.01993C3.60971 3.49265 4.32463 3.19609 5.07031 3.19531C6.25859 3.19531 7.25644 3.82988 7.6748 4.85176C7.70129 4.91624 7.74635 4.97139 7.80425 5.0102C7.86216 5.04902 7.93029 5.06974 8 5.06974C8.06971 5.06974 8.13784 5.04902 8.19575 5.0102C8.25365 4.97139 8.29871 4.91624 8.3252 4.85176C8.74356 3.82988 9.74141 3.19531 10.9297 3.19531C11.6754 3.19609 12.3903 3.49265 12.9176 4.01993C13.4448 4.54721 13.7414 5.26213 13.7422 6.00781C13.7422 9.27266 8.96152 12.1977 8 12.7525Z" fill="#191919"></path>
                                    </svg>
                                </a>
                            </div>
                            <div class="card-tags-and-buttons gap-2 position-absolute start-0 bottom-0 p-3 p-md-4 d-none d-md-inline-block">
                                <a href="#" class="btn special-btn fw-semibold text-uppercase text-nowrap rounded-pill btn-light shadow-sm ms-auto px-2">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 2.03125C8.42393 2.03125 6.88326 2.49861 5.5728 3.37423C4.26235 4.24984 3.24097 5.49439 2.63784 6.95049C2.0347 8.40659 1.87689 10.0088 2.18437 11.5546C2.49185 13.1004 3.2508 14.5203 4.36525 15.6348C5.4797 16.7492 6.89959 17.5082 8.44538 17.8156C9.99116 18.1231 11.5934 17.9653 13.0495 17.3622C14.5056 16.759 15.7502 15.7377 16.6258 14.4272C17.5014 13.1167 17.9688 11.5761 17.9688 10C17.9663 7.88732 17.1259 5.86188 15.632 4.36798C14.1381 2.87409 12.1127 2.03373 10 2.03125ZM10 17.0312C8.60935 17.0312 7.24993 16.6189 6.09365 15.8463C4.93737 15.0737 4.03615 13.9755 3.50398 12.6907C2.9718 11.406 2.83255 9.9922 3.10386 8.62827C3.37516 7.26434 4.04482 6.01149 5.02816 5.02816C6.0115 4.04482 7.26435 3.37516 8.62827 3.10385C9.9922 2.83255 11.406 2.97179 12.6907 3.50397C13.9755 4.03615 15.0737 4.93736 15.8463 6.09365C16.6189 7.24993 17.0313 8.60935 17.0313 10C17.0292 11.8642 16.2877 13.6514 14.9696 14.9696C13.6514 16.2877 11.8642 17.0292 10 17.0312ZM12.7602 9.60938L9.01016 7.10938C8.93952 7.06225 8.85741 7.03519 8.77259 7.0311C8.68777 7.02701 8.60343 7.04603 8.52859 7.08614C8.45374 7.12625 8.3912 7.18594 8.34763 7.25884C8.30407 7.33173 8.28113 7.41508 8.28125 7.5V12.5C8.28113 12.5849 8.30407 12.6683 8.34763 12.7412C8.3912 12.8141 8.45374 12.8737 8.52859 12.9139C8.60343 12.954 8.68777 12.973 8.77259 12.9689C8.85741 12.9648 8.93952 12.9378 9.01016 12.8906L12.7602 10.3906C12.8246 10.3479 12.8775 10.2898 12.9141 10.2217C12.9507 10.1535 12.9698 10.0774 12.9698 10C12.9698 9.92265 12.9507 9.8465 12.9141 9.77834C12.8775 9.71018 12.8246 9.65213 12.7602 9.60938ZM9.21875 11.6242V8.37578L11.6547 10L9.21875 11.6242Z" fill="#191919"/>
                                    </svg>
                                    <span class="ps-2">Video</span>
                                </a>
                            </div>
                            <a href="#">
                                <img src="/assets/img/example.jpg" class="card-img aspect-ratio-resp" alt="...">
                            </a>
                        </div>
                        <div class="card-body px-0 mt-1">
                            <a href="#" class="text-decoration-none">
                                <h5 class="card-title lh-sm mb-2">The action you should always do before eating abanana to increase its benefits tenfold</h5>
                            </a>
                            <div class="recipe-rating d-flex align-items-center lh-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                                    <path d="M5 0L6.32252 3.17971L9.75528 3.45492L7.13988 5.69529L7.93893 9.04508L5 7.25L2.06107 9.04508L2.86012 5.69529L0.244718 3.45492L3.67748 3.17971L5 0Z" fill="#191919"/>
                                </svg>
                                <p class="mb-0 ms-1 fw-semibold">4.75 (12)</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="card mb-2">
                        <div class="card-img-wrap position-relative">
                            <div class="card-tags-and-buttons gap-2 position-absolute start-0 d-flex flex-column px-4 py-4">
                                <a href="#" class="btn special-btn fw-semibold text-uppercase text-nowrap rounded-pill special-accent-btn">Sponsored</a>
                            </div>
                            <div class="card-tags-and-buttons gap-2 position-absolute end-0 px-4 py-4">
                                <a href="#" class="btn special-btn rounded-circle btn-light shadow-sm px-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path d="M10.9297 2.49219C9.69922 2.49219 8.6293 3.04707 8 3.97695C7.3707 3.04707 6.30078 2.49219 5.07031 2.49219C4.13824 2.49327 3.24466 2.86402 2.58559 3.52309C1.92652 4.18216 1.55577 5.07574 1.55469 6.00781C1.55469 7.71875 2.62109 9.49941 4.72461 11.2994C5.68851 12.1208 6.7297 12.8468 7.83359 13.4674C7.88475 13.4949 7.94192 13.5093 8 13.5093C8.05808 13.5093 8.11525 13.4949 8.16641 13.4674C9.2703 12.8468 10.3115 12.1208 11.2754 11.2994C13.3789 9.49941 14.4453 7.71875 14.4453 6.00781C14.4442 5.07574 14.0735 4.18216 13.4144 3.52309C12.7553 2.86402 11.8618 2.49327 10.9297 2.49219ZM8 12.7525C7.03848 12.1977 2.25781 9.27266 2.25781 6.00781C2.25859 5.26213 2.55515 4.54721 3.08243 4.01993C3.60971 3.49265 4.32463 3.19609 5.07031 3.19531C6.25859 3.19531 7.25644 3.82988 7.6748 4.85176C7.70129 4.91624 7.74635 4.97139 7.80425 5.0102C7.86216 5.04902 7.93029 5.06974 8 5.06974C8.06971 5.06974 8.13784 5.04902 8.19575 5.0102C8.25365 4.97139 8.29871 4.91624 8.3252 4.85176C8.74356 3.82988 9.74141 3.19531 10.9297 3.19531C11.6754 3.19609 12.3903 3.49265 12.9176 4.01993C13.4448 4.54721 13.7414 5.26213 13.7422 6.00781C13.7422 9.27266 8.96152 12.1977 8 12.7525Z" fill="#191919"></path>
                                    </svg>
                                </a>
                            </div>
                            <a href="#">
                                <img src="/assets/img/example.jpg" class="card-img aspect-ratio-resp" alt="...">
                            </a>
                        </div>
                        <div class="card-body px-0 mt-1">
                            <a href="#" class="text-decoration-none">
                                <h5 class="card-title lh-sm mb-2">The action you should always do before eating abanana to increase its benefits tenfold</h5>
                            </a>
                            <div class="recipe-rating d-flex align-items-center lh-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                                    <path d="M5 0L6.32252 3.17971L9.75528 3.45492L7.13988 5.69529L7.93893 9.04508L5 7.25L2.06107 9.04508L2.86012 5.69529L0.244718 3.45492L3.67748 3.17971L5 0Z" fill="#191919"/>
                                </svg>
                                <p class="mb-0 ms-1 fw-semibold">4.75 (12)</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="card mb-2">
                        <div class="card-img-wrap position-relative">
                            <div class="card-tags-and-buttons gap-2 position-absolute start-0 d-flex flex-column px-4 py-4">
                                <a href="#" class="btn special-btn fw-semibold text-uppercase text-nowrap rounded-pill special-accent-btn">Sponsored</a>
                            </div>
                            <div class="card-tags-and-buttons gap-2 position-absolute end-0 px-4 py-4">
                                <a href="#" class="btn special-btn rounded-circle btn-light shadow-sm px-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path d="M10.9297 2.49219C9.69922 2.49219 8.6293 3.04707 8 3.97695C7.3707 3.04707 6.30078 2.49219 5.07031 2.49219C4.13824 2.49327 3.24466 2.86402 2.58559 3.52309C1.92652 4.18216 1.55577 5.07574 1.55469 6.00781C1.55469 7.71875 2.62109 9.49941 4.72461 11.2994C5.68851 12.1208 6.7297 12.8468 7.83359 13.4674C7.88475 13.4949 7.94192 13.5093 8 13.5093C8.05808 13.5093 8.11525 13.4949 8.16641 13.4674C9.2703 12.8468 10.3115 12.1208 11.2754 11.2994C13.3789 9.49941 14.4453 7.71875 14.4453 6.00781C14.4442 5.07574 14.0735 4.18216 13.4144 3.52309C12.7553 2.86402 11.8618 2.49327 10.9297 2.49219ZM8 12.7525C7.03848 12.1977 2.25781 9.27266 2.25781 6.00781C2.25859 5.26213 2.55515 4.54721 3.08243 4.01993C3.60971 3.49265 4.32463 3.19609 5.07031 3.19531C6.25859 3.19531 7.25644 3.82988 7.6748 4.85176C7.70129 4.91624 7.74635 4.97139 7.80425 5.0102C7.86216 5.04902 7.93029 5.06974 8 5.06974C8.06971 5.06974 8.13784 5.04902 8.19575 5.0102C8.25365 4.97139 8.29871 4.91624 8.3252 4.85176C8.74356 3.82988 9.74141 3.19531 10.9297 3.19531C11.6754 3.19609 12.3903 3.49265 12.9176 4.01993C13.4448 4.54721 13.7414 5.26213 13.7422 6.00781C13.7422 9.27266 8.96152 12.1977 8 12.7525Z" fill="#191919"></path>
                                    </svg>
                                </a>
                            </div>
                            <a href="#">
                                <img src="/assets/img/example.jpg" class="card-img aspect-ratio-resp" alt="...">
                            </a>
                        </div>
                        <div class="card-body px-0 mt-1">
                            <a href="#" class="text-decoration-none">
                                <h5 class="card-title lh-sm mb-2">The action you should always do before eating abanana to increase its benefits tenfold</h5>
                            </a>
                            <div class="recipe-rating d-flex align-items-center lh-sm">
                                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 10 10" fill="none">
                                    <path d="M5 0L6.32252 3.17971L9.75528 3.45492L7.13988 5.69529L7.93893 9.04508L5 7.25L2.06107 9.04508L2.86012 5.69529L0.244718 3.45492L3.67748 3.17971L5 0Z" fill="#191919"/>
                                </svg>
                                <p class="mb-0 ms-1 fw-semibold">4.75 (12)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn-wrap d-flex justify-content-center pt-4">
                <a href="#" class="more-btn btn fw-semibold text-uppercase text-nowrap rounded btn-dark">Discover the entire collection</a>
            </div>
        </div>
    </div>
<!--    Our cook book end.-->
</div>
<?php include 'footer.php';
