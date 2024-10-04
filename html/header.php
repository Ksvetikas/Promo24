<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Promo24</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./../assets/style/style.css">
</head>
<body>
    <header class="text-bg-dark">
        <div class="header-wrap mx-auto d-none d-md-block" id="desktop-header">
            <div class="header-top position-relative container-fluid d-flex align-items-center justify-content-between py-4">
                <div class="header-logo-col d-flex align-items-center">
                    <div class="header-menu my-1">
                        <button class="navbar-toggler collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#header-menu-content" aria-controls="header-menu-content" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon closed" style="background-image:url('../assets/img/icons/menu-icon.svg');"></span>
                            <span class="navbar-toggler-icon open" style="background-image:url('../assets/img/icons/close-icon.svg');"></span>
                        </button>
                        <div class="header-menu-dropdown collapse navbar-collapse position-absolute start-0 top-100 text-bg-dark p-3 shadow-lg rounded-bottom" id="header-menu-content">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Dropdown
                                    </a>
                                    <ul class="dropdown-menu shadow bg-dark">
                                        <li><a class="dropdown-item text-light" href="#">Action</a></li>
                                        <li><a class="dropdown-item text-light" href="#">Another action</a></li>
                                        <li><hr class="text-light"></li>
                                        <li><a class="dropdown-item text-light" href="#">Something else here</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled">Disabled</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="vr mx-3 mx-3 position-relative t-0 b-0"></div>
                    <a class="my-1" href="/">
                        <img class="header-logo" src="/assets/img/logos/Promo24-logo.png" alt="Promo24"/>
                    </a>
                </div>
                <div class="search-bar-col search-bar w-100 mx-5" id="desktop-header-search">
                    <form class="header-search d-flex rounded-3 border border-light px-2" role="search">
                        <img class="me-2" src="/assets/img/icons/search-icon-light.svg" alt="search"/>
                        <input class="form-control me-2 px-0 py-2 border-0 text-bg-dark" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-light rounded-pill py-0 my-1" type="submit">
                            <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14.8817 14.7586L11.1065 10.9834C12.1831 9.74541 12.7369 8.13775 12.6512 6.49936C12.5655 4.86097 11.847 3.31984 10.6473 2.20084C9.44746 1.08184 7.86006 0.472391 6.21968 0.500961C4.5793 0.529531 3.01409 1.19389 1.85399 2.35399C0.693888 3.51409 0.0295306 5.0793 0.000960934 6.71968C-0.0276088 8.36006 0.581841 9.94746 1.70084 11.1473C2.81984 12.347 4.36097 13.0655 5.99936 13.1512C7.63775 13.2369 9.24541 12.6831 10.4834 11.6065L14.2586 15.3817C14.3422 15.4596 14.4527 15.5019 14.5669 15.4999C14.6811 15.4979 14.7901 15.4516 14.8709 15.3709C14.9516 15.2901 14.9979 15.1811 14.9999 15.0669C15.0019 14.9527 14.9596 14.8422 14.8817 14.7586ZM0.903713 6.8409C0.903713 5.76552 1.2226 4.7143 1.82004 3.82016C2.41749 2.92602 3.26666 2.22912 4.26018 1.81759C5.25369 1.40607 6.34693 1.29839 7.40164 1.50819C8.45635 1.71798 9.42516 2.23582 10.1856 2.99623C10.946 3.75663 11.4638 4.72544 11.6736 5.78015C11.8834 6.83486 11.7757 7.9281 11.3642 8.92161C10.9527 9.91513 10.2558 10.7643 9.36163 11.3617C8.46749 11.9592 7.41627 12.2781 6.3409 12.2781C4.8994 12.2763 3.51745 11.7029 2.49816 10.6836C1.47887 9.66434 0.905463 8.28239 0.903713 6.8409Z" fill="#191919"/>
                            </svg>
                        </button>
                    </form>
                </div>
                <div class="header-buttons-col d-flex align-items-center">
                    <button type="button" class="btn btn-light rounded-circle my-1">€</button>
                    <div class="vr mx-3 vr mx-3 position-relative t-0 b-0"></div>
                    <button type="button" class="btn btn-light my-1 text-uppercase px-4 py-2">Login</button>
                </div>
            </div>
            <hr class="m-0 position-relative">
            <div class="header-bottom container-fluid py-2">
                <ul class="nav justify-content-center gap-1 text-uppercase">
                    <li class="nav-item">
                        <a class="nav-link link-light px-2 active" aria-current="page" href="#">Recipes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link-light px-2" href="#">Ingredients</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link-light px-2" href="#">Cooking</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link-light px-2" href="#">Culture</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link-light px-2" href="#">Video</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link-light px-2" href="#">Podcasts</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="mobile-header-wrap d-md-none" id="mobile-header">
            <div class="container-fluid position-relative py-4">
                <div class="row d-flex align-items-center justify-content-between ">
                    <div class="header-menu col-3 my-1">
                        <button class="navbar-toggler collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#mobile-header-menu-content" aria-controls="mobile-header-menu-content" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon closed" style="background-image:url('../assets/img/icons/mobile-menu-icon.svg');"></span>
                            <span class="navbar-toggler-icon open" style="background-image:url('../assets/img/icons/close-icon.svg');"></span>
                        </button>
                        <div class="header-menu-dropdown collapse navbar-collapse position-absolute text-bg-dark p-3 start-0 top-100 shadow-lg w-100" id="mobile-header-menu-content">
                            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Dropdown
                                    </a>
                                    <ul class="dropdown-menu shadow bg-dark">
                                        <li><a class="dropdown-item text-light" href="#">Action</a></li>
                                        <li><a class="dropdown-item text-light" href="#">Another action</a></li>
                                        <li><hr class="text-light"></li>
                                        <li><a class="dropdown-item text-light" href="#">Something else here</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled">Disabled</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-6 d-flex align-items-center justify-content-center">
                        <a class="my-1" href="/">
                            <img class="mobile-header-logo" src="/assets/img/logos/Promo24-logo.png" alt="Promo24"/>
                        </a>
                    </div>
                    <div class="col-3 d-flex align-items-center justify-content-end">
                        <div class="search-bar">
                            <button class="search-toggler navbar-toggler collapsed ms-3" type="button" data-bs-toggle="collapse" data-bs-target="#mobile-header-search" aria-controls="mobile-header-search" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon closed" style="background-image:url('../assets/img/icons/search-icon-light.svg'); background-size: 19px 19px;"></span>
                                <span class="navbar-toggler-icon open" style="background-image:url('../assets/img/icons/close-icon.svg');"></span>
                            </button>
                            <div class="collapse navbar-collapse position-absolute top-100 bg-dark z-1 start-0 end-0 p-3" id="mobile-header-search">
                                <form class="header-search d-flex rounded-3 border border-light px-2" role="search">
                                    <img class="me-2" src="/assets/img/icons/search-icon-light.svg" alt="search"/>
                                    <input class="form-control me-2 px-0 py-2 border-0 text-bg-dark" type="search" placeholder="Search" aria-label="Search">
                                    <button class="btn btn-light rounded-pill py-0 my-1" type="submit">
                                        <svg width="15" height="16" viewBox="0 0 15 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14.8817 14.7586L11.1065 10.9834C12.1831 9.74541 12.7369 8.13775 12.6512 6.49936C12.5655 4.86097 11.847 3.31984 10.6473 2.20084C9.44746 1.08184 7.86006 0.472391 6.21968 0.500961C4.5793 0.529531 3.01409 1.19389 1.85399 2.35399C0.693888 3.51409 0.0295306 5.0793 0.000960934 6.71968C-0.0276088 8.36006 0.581841 9.94746 1.70084 11.1473C2.81984 12.347 4.36097 13.0655 5.99936 13.1512C7.63775 13.2369 9.24541 12.6831 10.4834 11.6065L14.2586 15.3817C14.3422 15.4596 14.4527 15.5019 14.5669 15.4999C14.6811 15.4979 14.7901 15.4516 14.8709 15.3709C14.9516 15.2901 14.9979 15.1811 14.9999 15.0669C15.0019 14.9527 14.9596 14.8422 14.8817 14.7586ZM0.903713 6.8409C0.903713 5.76552 1.2226 4.7143 1.82004 3.82016C2.41749 2.92602 3.26666 2.22912 4.26018 1.81759C5.25369 1.40607 6.34693 1.29839 7.40164 1.50819C8.45635 1.71798 9.42516 2.23582 10.1856 2.99623C10.946 3.75663 11.4638 4.72544 11.6736 5.78015C11.8834 6.83486 11.7757 7.9281 11.3642 8.92161C10.9527 9.91513 10.2558 10.7643 9.36163 11.3617C8.46749 11.9592 7.41627 12.2781 6.3409 12.2781C4.8994 12.2763 3.51745 11.7029 2.49816 10.6836C1.47887 9.66434 0.905463 8.28239 0.903713 6.8409Z" fill="#191919"/>
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="m-0 position-relative">
        </div>
    </header>

