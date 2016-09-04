<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>

    <title> @yield('title')</title>
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" media="all"/>
    <link rel="stylesheet" href="css/animate.min.css" type="text/css" media="all"/>
    <link rel="stylesheet" href="css/settings.css" type="text/css" media="all"/>
    <link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="all"/>
    <link rel="stylesheet" href="css/jquery.selectBox.css" type="text/css" media="all"/>
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="all"/>
    <link rel="stylesheet" href="css/elegant-icon.css" type="text/css" media="all"/>
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all"/>
    <link rel="stylesheet" href="css/custom.css" type="text/css" media="all"/>
    <link rel="stylesheet" href="css/preloader.css" type="text/css" media="all"/>


    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic,900,900italic" type="text/css" media="all"/>
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic" type="text/css" media="all"/>
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Abril+Fatface" type="text/css" media="all"/>
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800" type="text/css" media="all"/>
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900" type="text/css" media="all"/>
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Droid+Serif:400,700" type="text/css" media="all"/>
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Poppins:400,700,600,500,300&amp;subset=latin,latin-ext" type="text/css" media="all"/>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div id="preloader">
    <img class="preloader__logo" src="images/Blue_Bottom_Logo02.png" alt="" width="250" height="114"/>
    <div class="preloader__progress">
        <svg width="60px" height="60px" viewBox="0 0 80 80" xmlns="http://www.w3.org/2000/svg">
            <path class="preloader__progress-circlebg" fill="none" stroke="#dddddd" stroke-width="4" stroke-linecap="round" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"/>
            <path id='preloader__progress-circle' fill="none" stroke="yellow" stroke-width="4" stroke-linecap="round" stroke-dashoffset="192.61" stroke-dasharray="192.61 192.61" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"/>
        </svg>
    </div>
</div>

<div class="header-offcanvas navbar-offcanvas offcanvas open">
    <div class="offcanvas-wrap">
        <div class="offcanvas-user clearfix">
            <a class="offcanvas-user-wishlist-link" href="wishlist.html">
                <i class="fa fa-heart-o"></i> My Wishlist
            </a>
            <a class="offcanvas-user-account-link" href="my-account.html">
                <i class="fa fa-user"></i> Login
            </a>
        </div>
        <nav class="offcanvas-navbar mobile-offcanvas-navbar">
            <ul class="offcanvas-nav">
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-hover">
                        <span class="underline">Home</span> <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-submenu">
                            <a href="#">Home <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li class="menu-item"><a href="./">Home Creative 1</a></li>
                                <li class="menu-item"><a href="index-creative-2.html">Home Creative 2</a></li>
                                <li class="menu-item"><a href="index-creative-3.html">Home Creative 3</a></li>
                                <li class="menu-item current-menu-item"><a href="home-shop-1.html">Home Shop 1</a></li>
                                <li class="menu-item"><a href="home-shop-2.html">Home Shop 2</a></li>
                                <li class="menu-item"><a href="home-shop-3.html">Home Shop 3</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a href="#">Home <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li class="menu-item"><a href="home-shop-categories.html">Home Shop Categories</a></li>
                                <li class="menu-item"><a href="home-shop-categories-2.html">Home Shop Categories 2</a></li>
                                <li class="menu-item"><a href="home-shop-categories-3.html">Home Shop Categories 3</a></li>
                                <li class="menu-item"><a href="home-shop-categories-4.html">Home Shop Categories 4</a></li>
                                <li class="menu-item"><a href="lookbook-slider.html">Home Lookbook Slider</a></li>
                                <li class="menu-item"><a href="lookbook-slider-grid.html">Home Lookbook Grid</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a href="#">Demos <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li class="menu-item"><a href="demo-blog-minimal-index.html">Demo Blog Minimal</a></li>
                                <li class="menu-item"><a href="demo-construction-index.html">Demo Construction</a></li>
                                <li class="menu-item"><a href="demo-fashion-index.html">Demo Fashion</a></li>
                                <li class="menu-item"><a href="demo-minimal-index.html">Demo Minimal</a></li>
                                <li class="menu-item"><a href="demo-modern-index.html">Demo Modern</a></li>
                                <li class="menu-item"><a href="demo-onepage-index.html">Demo Onepage</a></li>
                                <li class="menu-item"><a href="demo-portfolio-index.html">Demo Portfolio</a></li>
                                <li class="menu-item"><a href="demo-retailer-index.html">Demo Retailer</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-hover">
                        <span class="underline">Headers</span> <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="menu-item"><a href="header-classic.html">Header Classic</a></li>
                        <li class="menu-item"><a href="header-classic-2.html">Header Classic 2</a></li>
                        <li class="menu-item"><a href="header-classic-right.html">Header Classic Right</a></li>
                        <li class="menu-item"><a href="header-transparent.html">Header Transparent</a></li>
                        <li class="menu-item"><a href="header-center.html">Header Center</a></li>
                        <li class="menu-item"><a href="header-center-logo.html">Header Center Logo</a></li>
                        <li class="menu-item"><a href="header-market.html">Header Market</a></li>
                        <li class="menu-item"><a href="header-off-canvas.html">Header Off Canvas</a></li>
                        <li class="menu-item"><a href="header-overlay.html">Header Overlay</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-hover">
                        <span class="underline">Blog</span> <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="menu-item"><a href="blog-default.html">Blog Default</a></li>
                        <li class="menu-item"><a href="blog-zigzag.html">Blog Zigzag</a></li>
                        <li class="menu-item"><a href="blog-grid.html">Post Grid</a></li>
                        <li class="menu-item"><a href="blog-masonry.html">Blog Masonry</a></li>
                        <li class="menu-item"><a href="blog-center.html">Blog Center</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-hover">
                        <span class="underline">Elements</span> <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-submenu">
                            <a href="#">Elements <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li class="menu-item"><a href="tabs.html">Tabs</a></li>
                                <li class="menu-item"><a href="tour.html">Tour</a></li>
                                <li class="menu-item"><a href="typography.html">Typography</a></li>
                                <li class="menu-item"><a href="text-block.html">Text Block</a></li>
                                <li class="menu-item"><a href="text-boxes.html">Text Boxes</a></li>
                                <li class="menu-item"><a href="pricing-tables.html">Pricing Tables</a></li>
                                <li class="menu-item"><a href="icon-boxes.html">Icon Boxes</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a href="#">Elements <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li class="menu-item"><a href="slider-carousel.html">Slider Carousel</a></li>
                                <li class="menu-item"><a href="gallery.html">Gallery</a></li>
                                <li class="menu-item"><a href="divider.html">Divider</a></li>
                                <li class="menu-item"><a href="countdown-clock.html">Countdown Clock</a></li>
                                <li class="menu-item"><a href="counter.html">Counter</a></li>
                                <li class="menu-item"><a href="columns.html">Columns</a></li>
                                <li class="menu-item"><a href="animated-typing.html">Animated Typing</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a href="#">Elements <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li class="menu-item"><a href="call-to-action.html">Call to Action</a></li>
                                <li class="menu-item"><a href="buttons.html">Buttons</a></li>
                                <li class="menu-item"><a href="alert.html">Alert</a></li>
                                <li class="menu-item"><a href="accordion.html">Accordion</a></li>
                                <li class="menu-item"><a href="chart.html">Chart</a></li>
                                <li class="menu-item"><a href="testimonials-quotes.html">Testimonial &#038; Quote</a></li>
                                <li class="menu-item"><a href="team-member.html">Team member</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-hover">
                        <span class="underline">Portfolio</span> <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-submenu">
                            <a href="#">Full Width <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li class="menu-item"><a href="fullwidth-4-columns.html">Fullwidth 4 Columns</a></li>
                                <li class="menu-item"><a href="fullwidth-4-columns-no-spaces.html">Fullwidth 4 Columns (No spaces)</a></li>
                                <li class="menu-item"><a href="fullwidth-3-columns.html">Fullwidth 3 Columns</a></li>
                                <li class="menu-item"><a href="fullwidth-3-columns-no-spaces.html">Fullwidth 3 Columns (No spaces)</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a href="#">Standard <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li class="menu-item"><a href="standard-2-columns.html">Standard 2 Columns</a></li>
                                <li class="menu-item"><a href="standard-2-columns-no-spaces.html">Standard 2 Columns (No spaces)</a></li>
                                <li class="menu-item"><a href="standard-3-columns.html">Standard 3 Columns</a></li>
                                <li class="menu-item"><a href="standard-3-columns-no-spaces.html">Standard 3 Columns (No spaces)</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a href="#">Masonry <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li class="menu-item"><a href="masonry-3-columns.html">Masonry 3 Columns</a></li>
                                <li class="menu-item"><a href="masonry-3-columns-no-spaces.html">Masonry 3 Columns (No spaces)</a></li>
                                <li class="menu-item"><a href="masonry-4-columns.html">Masonry 4 Columns</a></li>
                                <li class="menu-item"><a href="masonry-4-columns-no-spaces.html">Masonry 4 Columns (No spaces)</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-hover">
                        <span class="underline">Shop</span> <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="menu-item"><a href="shop.html">Shop Grid</a></li>
                        <li class="menu-item"><a href="shop-list.html">Shop List</a></li>
                        <li class="menu-item"><a href="shop-masonry.html">Shop Masonry</a></li>
                        <li class="menu-item"><a href="cart.html">Cart</a></li>
                        <li class="menu-item"><a href="cart-empty.html">Empty Cart</a></li>
                        <li class="menu-item"><a href="my-account.html">My Account</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-hover">
                        <span class="underline">Pages</span> <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="menu-item"><a href="services.html">Services</a></li>
                        <li class="menu-item"><a href="about-us.html">About us</a></li>
                        <li class="menu-item"><a href="contact-us.html">Contact Us</a></li>
                        <li class="menu-item"><a href="404.html">404</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <div class="navbar-toggle-fixed">
            <button type="button" class="navbar-toggle x">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar bar-top"></span>
                <span class="icon-bar bar-middle"></span>
                <span class="icon-bar bar-bottom"></span>
            </button>
        </div>
        <div class="offcanvas-sidebar-wrap">
            <nav class="offcanvas-navbar offcanvas-sidebar-navbar">
                <ul class="offcanvas-nav">
                    <li><a href="wishlist.html"><span class="underline">Wishlist</span></a></li>
                    <li><a href="my-account.html"><span class="underline">My Account</span></a></li>
                    <li><a href="cart.html"><span class="underline">Cart</span></a></li>
                    <li class="menu-item-has-children dropdown">
                        <a href="shop.html" class="dropdown-hover">
                            <span class="underline">Shop</span> <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="shop-masonry.html">Shop Masonry</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="offcanvas-widget hide-iphone">
            <div class="widget widget_search">
                <h4 class="widget-title"><span>Search</span></h4>
                <form>
                    <label for="s" class="sr-only">Search</label>
                    <input type="search" id="s" name="s" class="form-control" value="" placeholder="Search something&hellip;"/>
                    <input type="submit" id="searchsubmit" class="hidden" name="submit" value="Search"/>
                </form>
            </div>
            <div class="widget social-widget">
                <h4 class="widget-title"><span>Social</span></h4>
                <div class="social-widget-wrap social-widget-square">
                    <a href="#" title="Facebook" target="_blank">
                        <i class="fa fa-facebook facebook-bg "></i>
                    </a>
                    <a href="#" title="Twitter" target="_blank">
                        <i class="fa fa-twitter twitter-bg "></i>
                    </a>
                    <a href="#" title="Google+" target="_blank">
                        <i class="fa fa-google-plus google-plus-bg"></i>
                    </a>
                    <a href="#" title="Pinterest" target="_blank">
                        <i class="fa fa-pinterest  pinterest-bg "></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="language-switcher">
            <label>Languages</label>
            <div class="form-flat-select">
                <select>
                    <option selected="selected" value="">English</option>
                    <option value="">French</option>
                    <option value="">German</option>
                </select>
                <i class="fa fa-caret-down"></i>
            </div>
        </div>
        <div class="currencies-switcher">
            <label>Currency</label>
            <div class="form-flat-select">
                <select>
                    <option selected="selected" value="">US Dollars (&#036;)</option>
                    <option value="">Euros (&euro;)</option>
                </select>
                <i class="fa fa-caret-down"></i>
            </div>
        </div>
    </div>
</div>







    <div id="wrapper" class="wide-wrap">
        <div class="offcanvas-overlay"></div>
        <header id="header" class="header-container header-type-classic header-absolute header-transparent header-scroll-resize">


        <!--  <div class="navbar-container">
                <div class="navbar navbar-default navbar-scroll-fixed">
                    <div class="navbar-default-container">
                        <div class="navbar-default-wrap">
                            <div class="container">
                                <div class="row">
                                    <div class="navbar-default-col">
                                        <div class="navbar-wrap">
                                            <div class="navbar-header">
                                                <button type="button" class="navbar-toggle">
                                                    <span class="sr-only">Toggle navigation</span>
                                                    <span class="icon-bar bar-top"></span>
                                                    <span class="icon-bar bar-middle"></span>
                                                    <span class="icon-bar bar-bottom"></span>
                                                </button>
                                                <a class="navbar-search-button search-icon-mobile" href="#">
                                                    <svg xml:space="preserve" viewBox="0 0 612 792" y="0px" x="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" version="1.1">
															<g>
                                                                <g>
                                                                    <g>
                                                                        <path d="M231,104c125.912,0,228,102.759,228,229.5c0,53.034-18.029,101.707-48.051,140.568l191.689,192.953
																		c5.566,5.604,8.361,12.928,8.361,20.291c0,7.344-2.795,14.688-8.361,20.291C597.091,713.208,589.798,716,582.5,716
																		s-14.593-2.792-20.139-8.396L370.649,514.632C332.043,544.851,283.687,563,231,563C105.088,563,3,460.241,3,333.5
																		S105.088,104,231,104z M231,505.625c94.295,0,171-77.208,171-172.125s-76.705-172.125-171-172.125
																		c-94.295,0-171,77.208-171,172.125S136.705,505.625,231,505.625z"/>
                                                                    </g>
                                                                </g>
                                                            </g>
														</svg>
                                                </a>
                                                <a class="cart-icon-mobile" href="#">
                                                    <i class="elegant_icon_bag"></i><span>0</span>
                                                </a>
                                                <a class="navbar-brand" href="./">
                                                    <img class="logo" alt="Luxury" src="images/logo-transparent.png">
                                                    <img class="logo-fixed" alt="Luxury" src="images/logo-fixed.png">
                                                    <img class="logo-mobile" alt="Luxury" src="images/logo-mobile.png">
                                                </a>
                                            </div>
                                            <nav class="collapse navbar-collapse primary-navbar-collapse">
                                                <ul class="nav navbar-nav primary-nav">
                                                    <li class="menu-item-has-children megamenu dropdown current-menu-item">
                                                        <a href="./" class="dropdown-hover">
                                                            <span class="underline">Home</span> <span class="caret"></span>
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li class="dropdown-submenu">
                                                                <h3 class="megamenu-title">
                                                                    Home <span class="caret"></span>
                                                                </h3>
                                                                <ul class="dropdown-menu">
                                                                    <li class="menu-item"><a href="./">Home Creative 1</a></li>
                                                                    <li class="menu-item"><a href="index-creative-2.html">Home Creative 2</a></li>
                                                                    <li class="menu-item"><a href="index-creative-3.html">Home Creative 3</a></li>
                                                                    <li class="menu-item current-menu-item"><a href="home-shop-1.html">Home Shop 1</a></li>
                                                                    <li class="menu-item"><a href="home-shop-2.html">Home Shop 2</a></li>
                                                                    <li class="menu-item"><a href="home-shop-3.html">Home Shop 3</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="dropdown-submenu">
                                                                <h3 class="megamenu-title">
                                                                    Home <span class="caret"></span>
                                                                </h3>
                                                                <ul class="dropdown-menu">
                                                                    <li class="menu-item"><a href="home-shop-categories.html">Home Shop Categories</a></li>
                                                                    <li class="menu-item"><a href="home-shop-categories-2.html">Home Shop Categories 2</a></li>
                                                                    <li class="menu-item"><a href="home-shop-categories-3.html">Home Shop Categories 3</a></li>
                                                                    <li class="menu-item"><a href="home-shop-categories-4.html">Home Shop Categories 4</a></li>
                                                                    <li class="menu-item"><a href="lookbook-slider.html">Home Lookbook Slider</a></li>
                                                                    <li class="menu-item"><a href="lookbook-slider-grid.html">Home Lookbook Grid</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="dropdown-submenu">
                                                                <h3 class="megamenu-title">
                                                                    Demos <span class="caret"></span>
                                                                </h3>
                                                                <ul class="dropdown-menu">
                                                                    <li class="menu-item"><a href="demo-blog-minimal-index.html">Demo Blog Minimal</a></li>
                                                                    <li class="menu-item"><a href="demo-construction-index.html">Demo Construction</a></li>
                                                                    <li class="menu-item"><a href="demo-fashion-index.html">Demo Fashion</a></li>
                                                                    <li class="menu-item"><a href="demo-minimal-index.html">Demo Minimal</a></li>
                                                                    <li class="menu-item"><a href="demo-modern-index.html">Demo Modern</a></li>
                                                                    <li class="menu-item"><a href="demo-onepage-index.html">Demo Onepage</a></li>
                                                                    <li class="menu-item"><a href="demo-portfolio-index.html">Demo Portfolio</a></li>
                                                                    <li class="menu-item"><a href="demo-retailer-index.html">Demo Retailer</a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item-has-children dropdown">
                                                        <a href="#" class="dropdown-hover">
                                                            <span class="underline">Headers</span> <span class="caret"></span>
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li class="menu-item"><a href="header-classic.html">Header Classic</a></li>
                                                            <li class="menu-item"><a href="header-classic-2.html">Header Classic 2</a></li>
                                                            <li class="menu-item"><a href="header-classic-right.html">Header Classic Right</a></li>
                                                            <li class="menu-item"><a href="header-transparent.html">Header Transparent</a></li>
                                                            <li class="menu-item"><a href="header-center.html">Header Center</a></li>
                                                            <li class="menu-item"><a href="header-center-logo.html">Header Center Logo</a></li>
                                                            <li class="menu-item"><a href="header-market.html">Header Market</a></li>
                                                            <li class="menu-item"><a href="header-off-canvas.html">Header Off Canvas</a></li>
                                                            <li class="menu-item"><a href="header-overlay.html">Header Overlay</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item-has-children dropdown">
                                                        <a href="#" class="dropdown-hover">
                                                            <span class="underline">Blog</span> <span class="caret"></span>
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li class="menu-item"><a href="blog-default.html">Blog Default</a></li>
                                                            <li class="menu-item"><a href="blog-zigzag.html">Blog Zigzag</a></li>
                                                            <li class="menu-item"><a href="blog-grid.html">Post Grid</a></li>
                                                            <li class="menu-item"><a href="blog-masonry.html">Blog Masonry</a></li>
                                                            <li class="menu-item"><a href="blog-center.html">Blog Center</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item-has-children megamenu megamenu-fullwidth dropdown">
                                                        <a href="#" class="dropdown-hover">
                                                            <span class="underline">Elements</span> <span class="caret"></span>
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li>
                                                                <h3 class="megamenu-title">
                                                                    Elements <span class="caret"></span>
                                                                </h3>
                                                                <ul class="dropdown-menu">
                                                                    <li class="menu-item"><a href="tabs.html"><i class="fa fa-bars navicon"></i>Tabs</a></li>
                                                                    <li class="menu-item"><a href="tour.html"><i class="fa fa-outdent navicon"></i>Tour</a></li>
                                                                    <li class="menu-item"><a href="typography.html"><i class="fa fa-font navicon"></i>Typography</a></li>
                                                                    <li class="menu-item"><a href="text-block.html"><i class="fa fa-text-width navicon"></i>Text Block</a></li>
                                                                    <li class="menu-item"><a href="text-boxes.html"><i class="fa fa-text-height navicon"></i>Text Boxes</a></li>
                                                                    <li class="menu-item"><a href="pricing-tables.html"><i class="fa fa-table navicon"></i>Pricing Tables</a></li>
                                                                    <li class="menu-item"><a href="icon-boxes.html"><i class="fa fa-sliders navicon"></i>Icon Boxes</a></li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <h3 class="megamenu-title">
                                                                    Elements <span class="caret"></span>
                                                                </h3>
                                                                <ul class="dropdown-menu">
                                                                    <li class="menu-item"><a href="slider-carousel.html"><i class="fa fa-sliders navicon"></i>Slider Carousel</a></li>
                                                                    <li class="menu-item"><a href="gallery.html"><i class="fa fa-file-image-o navicon"></i>Gallery</a></li>
                                                                    <li class="menu-item"><a href="divider.html"><i class="fa fa-ellipsis-h navicon"></i>Divider</a></li>
                                                                    <li class="menu-item"><a href="countdown-clock.html"><i class="fa fa-clock-o navicon"></i>Countdown Clock</a></li>
                                                                    <li class="menu-item"><a href="counter.html"><i class="fa fa-history navicon"></i>Counter</a></li>
                                                                    <li class="menu-item"><a href="columns.html"><i class="fa fa-columns navicon"></i>Columns</a></li>
                                                                    <li class="menu-item"><a href="animated-typing.html"><i class="fa fa-file-word-o navicon"></i>Animated Typing</a></li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <h3 class="megamenu-title">
                                                                    Elements <span class="caret"></span>
                                                                </h3>
                                                                <ul class="dropdown-menu">
                                                                    <li class="menu-item"><a href="call-to-action.html"><i class="fa fa-reply-all navicon"></i>Call to Action</a></li>
                                                                    <li class="menu-item"><a href="buttons.html"><i class="fa fa-youtube-play navicon"></i>Buttons</a></li>
                                                                    <li class="menu-item"><a href="alert.html"><i class="fa fa-bell-o navicon"></i>Alert</a></li>
                                                                    <li class="menu-item"><a href="accordion.html"><i class="fa fa-th-list navicon"></i>Accordion</a></li>
                                                                    <li class="menu-item"><a href="chart.html"><i class="fa fa-bar-chart navicon"></i>Chart</a></li>
                                                                    <li class="menu-item"><a href="testimonials-quotes.html"><i class="fa fa-quote-left navicon"></i>Testimonial &#038; Quote</a></li>
                                                                    <li class="menu-item"><a href="team-member.html"><i class="fa fa-user-plus navicon"></i>Team member</a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item-has-children megamenu megamenu-fullwidth dropdown">
                                                        <a href="#" class="dropdown-hover">
                                                            <span class="underline">Portfolio</span> <span class="caret"></span>
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li>
                                                                <h3 class="megamenu-title">
                                                                    Full Width <span class="caret"></span>
                                                                </h3>
                                                                <ul class="dropdown-menu">
                                                                    <li class="menu-item"><a href="fullwidth-4-columns.html">Fullwidth 4 Columns</a></li>
                                                                    <li class="menu-item"><a href="fullwidth-4-columns-no-spaces.html">Fullwidth 4 Columns (No spaces)</a></li>
                                                                    <li class="menu-item"><a href="fullwidth-3-columns.html">Fullwidth 3 Columns</a></li>
                                                                    <li class="menu-item"><a href="fullwidth-3-columns-no-spaces.html">Fullwidth 3 Columns (No spaces)</a></li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <h3 class="megamenu-title">
                                                                    Standard <span class="caret"></span>
                                                                </h3>
                                                                <ul class="dropdown-menu">
                                                                    <li class="menu-item"><a href="standard-2-columns.html">Standard 2 Columns</a></li>
                                                                    <li class="menu-item"><a href="standard-2-columns-no-spaces.html">Standard 2 Columns (No spaces)</a></li>
                                                                    <li class="menu-item"><a href="standard-3-columns.html">Standard 3 Columns</a></li>
                                                                    <li class="menu-item"><a href="standard-3-columns-no-spaces.html">Standard 3 Columns (No spaces)</a></li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <h3 class="megamenu-title">
                                                                    Masonry <span class="caret"></span>
                                                                </h3>
                                                                <ul class="dropdown-menu">
                                                                    <li class="menu-item"><a href="masonry-3-columns.html">Masonry 3 Columns</a></li>
                                                                    <li class="menu-item"><a href="masonry-3-columns-no-spaces.html">Masonry 3 Columns (No spaces)</a></li>
                                                                    <li class="menu-item"><a href="masonry-4-columns.html">Masonry 4 Columns</a></li>
                                                                    <li class="menu-item"><a href="masonry-4-columns-no-spaces.html">Masonry 4 Columns (No spaces)</a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item-has-children megamenu megamenu-fullwidth dropdown">
                                                        <a href="#" class="dropdown-hover">
                                                            <span class="underline">Shop</span> <span class="caret"></span>
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li class="mega-col-3">
                                                                <h3 class="megamenu-title">
                                                                    Products Lists Styles <span class="caret"></span>
                                                                </h3>
                                                                <ul class="dropdown-menu">
                                                                    <li class="menu-item"><a href="products-list-1.html">Products List 1</a></li>
                                                                    <li class="menu-item"><a href="products-list-2.html">Products List 2</a></li>
                                                                    <li class="menu-item"><a href="products-list-3.html">Products List 3</a></li>
                                                                    <li class="menu-item"><a href="shop.html">Shop</a></li>
                                                                    <li class="menu-item"><a href="shop-list.html">Shop List</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="mega-col-3">
                                                                <h3 class="megamenu-title">
                                                                    Single Product Styles <span class="caret"></span>
                                                                </h3>
                                                                <ul class="dropdown-menu">
                                                                    <li class="menu-item"><a href="single-product-1.html">Single Product 1</a></li>
                                                                    <li class="menu-item"><a href="single-product-2.html">Single Product 2</a></li>
                                                                    <li class="menu-item"><a href="single-product-3.html">Single Product 3</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="mega-col-3">
                                                                <h3 class="megamenu-title">
                                                                    Pages <span class="caret"></span>
                                                                </h3>
                                                                <ul class="dropdown-menu">
                                                                    <li class="menu-item"><a href="shop-masonry.html">Shop Masonry</a></li>
                                                                    <li class="menu-item"><a href="cart.html">Cart</a></li>
                                                                    <li class="menu-item"><a href="cart-empty.html">Empty Cart</a></li>
                                                                    <li class="menu-item"><a href="my-account.html">My Account</a></li>
                                                                    <li class="menu-item"><a href="wishlist.html">Wishlist</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="mega-col-3">
                                                                <h3 class="megamenu-title">Widgets</h3>
                                                                <div class="megamenu-sidebar">
                                                                    <div class="widget commerce widget_products">
                                                                        <ul class="product_list_widget">
                                                                            <li>
                                                                                <a href="shop-detail.html">
                                                                                    <img width="100" height="100" src="images/product/product_60x60.jpg" alt="" />
                                                                                    <span class="product-title">Owl Clutch</span>
                                                                                </a>
                                                                                <ins>
                                                                                    <span class="amount">&#36;50.00</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">&#36;80.00</span>
                                                                                </del>
                                                                            </li>
                                                                            <li>
                                                                                <a href="shop-detail.html">
                                                                                    <img width="100" height="100" src="images/product/product_60x60.jpg" alt="" />
                                                                                    <span class="product-title">Card Holder</span>
                                                                                </a>
                                                                                <span class="amount">&#36;30.00</span>
                                                                            </li>
                                                                            <li>
                                                                                <a href="shop-detail.html">
                                                                                    <img width="100" height="100" src="images/product/product_60x60.jpg" alt="" />
                                                                                    <span class="product-title">Two-tone Handbag</span>
                                                                                </a>
                                                                                <ins>
                                                                                    <span class="amount">&#36;150.00</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">&#36;200.00</span>
                                                                                </del>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="menu-item-has-children dropdown">
                                                        <a href="#" class="dropdown-hover">
                                                            <span class="underline">Pages</span> <span class="caret"></span>
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li class="menu-item"><a href="services.html">Services</a></li>
                                                            <li class="menu-item"><a href="about-us.html">About us</a></li>
                                                            <li class="menu-item"><a href="contact-us.html">Contact Us</a></li>
                                                            <li class="menu-item"><a href="404.html">404</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </nav>
                                            <div class="header-right">
                                                <div class="navbar-search">
                                                    <a class="navbar-search-button" href="#">
                                                        <svg xml:space="preserve" viewBox="0 0 612 792" y="0px" x="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" version="1.1">
																<g>
                                                                    <g>
                                                                        <g>
                                                                            <path d="M231,104c125.912,0,228,102.759,228,229.5c0,53.034-18.029,101.707-48.051,140.568l191.689,192.953
																					 c5.566,5.604,8.361,12.928,8.361,20.291c0,7.344-2.795,14.688-8.361,20.291C597.091,713.208,589.798,716,582.5,716
																					 s-14.593-2.792-20.139-8.396L370.649,514.632C332.043,544.851,283.687,563,231,563C105.088,563,3,460.241,3,333.5
																					 S105.088,104,231,104z M231,505.625c94.295,0,171-77.208,171-172.125s-76.705-172.125-171-172.125
																					 c-94.295,0-171,77.208-171,172.125S136.705,505.625,231,505.625z"/>
                                                                        </g>
                                                                    </g>
                                                                </g>
															</svg>
                                                    </a>
                                                </div>
                                                <div class="navbar-minicart navbar-minicart-topbar">
                                                    <div class="navbar-minicart">
                                                        <a class="minicart-link" href="cart.html">
																<span class="minicart-icon">
																	<svg xml:space="preserve" viewBox="0 0 459.529 459.529" y="0px" x="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" version="1.1">
																		<g>
                                                                            <g>
                                                                                <path d="M17,55.231h48.733l69.417,251.033c1.983,7.367,8.783,12.467,16.433,12.467h213.35c6.8,0,12.75-3.967,15.583-10.2
																						 l77.633-178.5c2.267-5.383,1.7-11.333-1.417-16.15c-3.117-4.817-8.5-7.65-14.167-7.65H206.833c-9.35,0-17,7.65-17,17
																						 s7.65,17,17,17H416.5l-62.9,144.5H164.333L94.917,33.698c-1.983-7.367-8.783-12.467-16.433-12.467H17c-9.35,0-17,7.65-17,17
																						 S7.65,55.231,17,55.231z"/>
                                                                                <path d="M135.433,438.298c21.25,0,38.533-17.283,38.533-38.533s-17.283-38.533-38.533-38.533S96.9,378.514,96.9,399.764
																						 S114.183,438.298,135.433,438.298z"/>
                                                                                <path d="M376.267,438.298c0.85,0,1.983,0,2.833,0c10.2-0.85,19.55-5.383,26.35-13.317c6.8-7.65,9.917-17.567,9.35-28.05
																						 c-1.417-20.967-19.833-37.117-41.083-35.7c-21.25,1.417-37.117,20.117-35.7,41.083
																						 C339.433,422.431,356.15,438.298,376.267,438.298z"/>
                                                                            </g>
                                                                        </g>
																	</svg>
																	<span>0</span>
																</span>
                                                        </a>
                                                        <div class="minicart">
                                                            <div class="minicart-header no-items show">Your shopping bag is empty.</div>
                                                            <div class="minicart-footer">
                                                                <div class="minicart-actions clearfix">
                                                                    <a class="button" href="shop.html">
                                                                        <span class="text">Go to the shop</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="navbar-offcanvas">
                                                    <a href="#" class="navbar-offcanvas-btn">
                                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 317.825 317.825" xml:space="preserve">
																<g>
                                                                    <g>
                                                                        <g>
                                                                            <g>
                                                                                <path d="M301.934,143.021H15.891C7.119,143.021,0,150.14,0,158.912c0,8.772,7.119,15.891,15.891,15.891
																						 h286.042c8.74,0,15.891-7.119,15.891-15.891C317.825,150.14,310.674,143.021,301.934,143.021z"/>
                                                                                <path d="M15.891,79.456h286.042c8.74,0,15.891-7.119,15.891-15.891s-7.151-15.891-15.891-15.891H15.891
																						 C7.119,47.674,0,54.793,0,63.565S7.119,79.456,15.891,79.456z"/>
                                                                                <path d="M301.934,238.369H15.891C7.119,238.369,0,245.52,0,254.26c0,8.74,7.119,15.891,15.891,15.891
																						 h286.042c8.74,0,15.891-7.151,15.891-15.891C317.825,245.52,310.674,238.369,301.934,238.369z"/>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
															</svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header-search-overlay hide">
                        <div class="container">
                            <div class="header-search-overlay-wrap">
                                <form class="searchform">
                                    <input type="search" class="searchinput" name="s" autocomplete="off" value="" placeholder="Search..."/>
                                    <input type="submit" class="searchsubmit hidden" name="submit" value="Search"/>
                                </form>
                                <button type="button" class="close">
                                    <span aria-hidden="true" class="fa fa-times"></span>
                                    <span class="sr-only">Close</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

            <!-- -->

            <div class="navbar-container">
                <div class="navbar navbar-default navbar-scroll-fixed">
                    <div class="navbar-default-container">
                        <div class="navbar-default-wrap">
                            <div class="container">
                                <div class="row">
                                    <div class="navbar-default-col">
                                        <div class="navbar-wrap">
                                            <div class="navbar-header">
                                                <button type="button" class="navbar-toggle">
                                                    <span class="sr-only">Toggle navigation</span>
                                                    <span class="icon-bar bar-top"></span>
                                                    <span class="icon-bar bar-middle"></span>
                                                    <span class="icon-bar bar-bottom"></span>
                                                </button>
                                                <a class="navbar-search-button search-icon-mobile" href="#">
                                                    <svg xml:space="preserve" viewBox="0 0 612 792" y="0px" x="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" version="1.1">
															<g>
                                                                <g>
                                                                    <g>
                                                                        <path d="M231,104c125.912,0,228,102.759,228,229.5c0,53.034-18.029,101.707-48.051,140.568l191.689,192.953
																		c5.566,5.604,8.361,12.928,8.361,20.291c0,7.344-2.795,14.688-8.361,20.291C597.091,713.208,589.798,716,582.5,716
																		s-14.593-2.792-20.139-8.396L370.649,514.632C332.043,544.851,283.687,563,231,563C105.088,563,3,460.241,3,333.5
																		S105.088,104,231,104z M231,505.625c94.295,0,171-77.208,171-172.125s-76.705-172.125-171-172.125
																		c-94.295,0-171,77.208-171,172.125S136.705,505.625,231,505.625z"/>
                                                                    </g>
                                                                </g>
                                                            </g>
														</svg>
                                                </a>
                                                <a class="cart-icon-mobile" href="#">
                                                    <i class="elegant_icon_bag"></i><span>0</span>
                                                </a>
                                               <!-- <a class="navbar-brand" href="./">
                                                    <img class="logo" alt="Luxury" src="images/Blue_Bottom_Logo02.png">
                                                    <img class="logo-fixed" alt="Luxury" src="images/Blue_Bottom_Logo02.png">
                                                    <img class="logo-mobile" alt="Luxury" src="images/Blue_Bottom_Logo02.png">
                                                </a> -->
                                            </div>
                                            <nav class="collapse navbar-collapse primary-navbar-collapse">
                                                <ul class="nav navbar-nav primary-nav">


<!--
========================================

                                                    <li class="menu-item-has-children dropdown">
                                                        <a href="#" class="dropdown-hover">
                                                            <span class="underline">Headers</span> <span class="caret"></span>
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li class="menu-item"><a href="header-classic.html">Header Classic</a></li>
                                                            <li class="menu-item"><a href="header-classic-2.html">Header Classic 2</a></li>
                                                            <li class="menu-item"><a href="header-classic-right.html">Header Classic Right</a></li>
                                                            <li class="menu-item"><a href="header-transparent.html">Header Transparent</a></li>
                                                            <li class="menu-item"><a href="header-center.html">Header Center</a></li>
                                                            <li class="menu-item"><a href="header-center-logo.html">Header Center Logo</a></li>
                                                            <li class="menu-item"><a href="header-market.html">Header Market</a></li>
                                                            <li class="menu-item"><a href="header-off-canvas.html">Header Off Canvas</a></li>
                                                            <li class="menu-item"><a href="header-overlay.html">Header Overlay</a></li>
                                                        </ul>
                                                    </li>


                                                                           <li class="menu-item-has-children megamenu megamenu-fullwidth dropdown">
                                                        <a href="#" class="dropdown-hover">
                                                            <span class="underline">Shop</span> <span class="caret"></span>
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li class="mega-col-3">
                                                                <h3 class="megamenu-title">
                                                                    Products Lists Styles <span class="caret"></span>
                                                                </h3>
                                                                <ul class="dropdown-menu">
                                                                    <li class="menu-item"><a href="products-list-1.html">Products List 1</a></li>
                                                                    <li class="menu-item"><a href="products-list-2.html">Products List 2</a></li>
                                                                    <li class="menu-item"><a href="products-list-3.html">Products List 3</a></li>
                                                                    <li class="menu-item"><a href="shop.html">Shop</a></li>
                                                                    <li class="menu-item"><a href="shop-list.html">Shop List</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="mega-col-3">
                                                                <h3 class="megamenu-title">
                                                                    Single Product Styles <span class="caret"></span>
                                                                </h3>
                                                                <ul class="dropdown-menu">
                                                                    <li class="menu-item"><a href="single-product-1.html">Single Product 1</a></li>
                                                                    <li class="menu-item"><a href="single-product-2.html">Single Product 2</a></li>
                                                                    <li class="menu-item"><a href="single-product-3.html">Single Product 3</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="mega-col-3">
                                                                <h3 class="megamenu-title">
                                                                    Pages <span class="caret"></span>
                                                                </h3>
                                                                <ul class="dropdown-menu">
                                                                    <li class="menu-item"><a href="shop-masonry.html">Shop Masonry</a></li>
                                                                    <li class="menu-item"><a href="cart.html">Cart</a></li>
                                                                    <li class="menu-item"><a href="cart-empty.html">Empty Cart</a></li>
                                                                    <li class="menu-item"><a href="my-account.html">My Account</a></li>
                                                                    <li class="menu-item"><a href="wishlist.html">Wishlist</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="mega-col-3">
                                                                <h3 class="megamenu-title">Widgets</h3>
                                                                <div class="megamenu-sidebar">
                                                                    <div class="widget commerce widget_products">
                                                                        <ul class="product_list_widget">
                                                                            <li>
                                                                                <a href="shop-detail.html">
                                                                                    <img width="100" height="100" src="images/product/product_60x60.jpg" alt="" />
                                                                                    <span class="product-title">Owl Clutch</span>
                                                                                </a>
                                                                                <ins>
                                                                                    <span class="amount">&#36;50.00</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">&#36;80.00</span>
                                                                                </del>
                                                                            </li>
                                                                            <li>
                                                                                <a href="shop-detail.html">
                                                                                    <img width="100" height="100" src="images/product/product_60x60.jpg" alt="" />
                                                                                    <span class="product-title">Card Holder</span>
                                                                                </a>
                                                                                <span class="amount">&#36;30.00</span>
                                                                            </li>
                                                                            <li>
                                                                                <a href="shop-detail.html">
                                                                                    <img width="100" height="100" src="images/product/product_60x60.jpg" alt="" />
                                                                                    <span class="product-title">Two-tone Handbag</span>
                                                                                </a>
                                                                                <ins>
                                                                                    <span class="amount">&#36;150.00</span>
                                                                                </ins>
                                                                                <del>
                                                                                    <span class="amount">&#36;200.00</span>
                                                                                </del>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </li>

=============================================================
-->
                                                    @foreach($filtered as $s)

                                                    @if($s->menu_type == 0)
                                                            <li>
                                                                <a href="{{ $s->id }}" class="dropdown-hover">
                                                                    <span class="underline">{{ $s->menu_name }}</span>
                                                                </a>
                                                            </li>

                                                        @elseif($s->menu_type == 4)
                                                            <li class="menu-item-has-children megamenu megamenu-fullwidth dropdown">
                                                                <a href="{{ $s->id }}" class="dropdown-hover">
                                                                    <span class="underline">{{ $s->menu_name }}</span> <span class="caret"></span>
                                                                </a>
                                                                <ul class="dropdown-menu">
                                                                    @foreach($s->subMenu as $subMenu)
                                                                        @if($subMenu->deleted != 1)
                                                                    <li class="mega-col-3">
                                                                        <h3 class="megamenu-title">{{ $subMenu->sub_menu_name }}</h3>
                                                                        <div class="megamenu-sidebar">
                                                                            <div class="widget commerce widget_products">
                                                                                <ul class="product_list_widget">

                                                                                    @foreach($subMenu->product as $product)
                                                                                    <li>

                                                                                        <a href="shop-detail.html">
                                                                                            <img width="100" height="100" src="images/product/product_60x60.jpg" alt="" />
                                                                                            <span class="product-title">{{ $product->product_name }}</span>
                                                                                        </a>

                                                                                    </li>
                                                                                    @endforeach
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                        @endif
                                                                    @endforeach
                                                                </ul>
                                                            </li>






@else

                                                            <!--  <li class="menu-item-has-children dropdown">-->
                                                        <li class="menu-item-has-children">
                                                            <a href="{{ $s->id }}" class="dropdown-hover">
                                                                <span class="underline">{{ $s->menu_name }}</span> <span class="caret"></span>
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                @foreach($s->subMenu as $subMenu)
                                                                    @if($subMenu->deleted != 1)
                                                                    <li class="menu-item"><a href="{{ $subMenu->id }}" >
                                                                            {{ $subMenu->sub_menu_name }} -  {{ $subMenu->sort_order }}</a></li>
                                                                @endif
                                                                        @endforeach
                                                            </ul>
                                                        </li>

                                                        @endif
                                                    @endforeach





                                                </ul>
                                            </nav>
                                            <div class="header-right">
                                                <div class="navbar-search">
                                                    <a class="navbar-search-button" href="#">
                                                        <svg xml:space="preserve" viewBox="0 0 612 792" y="0px" x="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" version="1.1">
																<g>
                                                                    <g>
                                                                        <g>
                                                                            <path d="M231,104c125.912,0,228,102.759,228,229.5c0,53.034-18.029,101.707-48.051,140.568l191.689,192.953
																					 c5.566,5.604,8.361,12.928,8.361,20.291c0,7.344-2.795,14.688-8.361,20.291C597.091,713.208,589.798,716,582.5,716
																					 s-14.593-2.792-20.139-8.396L370.649,514.632C332.043,544.851,283.687,563,231,563C105.088,563,3,460.241,3,333.5
																					 S105.088,104,231,104z M231,505.625c94.295,0,171-77.208,171-172.125s-76.705-172.125-171-172.125
																					 c-94.295,0-171,77.208-171,172.125S136.705,505.625,231,505.625z"/>
                                                                        </g>
                                                                    </g>
                                                                </g>
															</svg>
                                                    </a>
                                                </div>
                                                <div class="navbar-minicart navbar-minicart-topbar">
                                                    <div class="navbar-minicart">
                                                        <a class="minicart-link" href="cart.html">
																<span class="minicart-icon">
																	<svg xml:space="preserve" viewBox="0 0 459.529 459.529" y="0px" x="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" version="1.1">
																		<g>
                                                                            <g>
                                                                                <path d="M17,55.231h48.733l69.417,251.033c1.983,7.367,8.783,12.467,16.433,12.467h213.35c6.8,0,12.75-3.967,15.583-10.2
																						 l77.633-178.5c2.267-5.383,1.7-11.333-1.417-16.15c-3.117-4.817-8.5-7.65-14.167-7.65H206.833c-9.35,0-17,7.65-17,17
																						 s7.65,17,17,17H416.5l-62.9,144.5H164.333L94.917,33.698c-1.983-7.367-8.783-12.467-16.433-12.467H17c-9.35,0-17,7.65-17,17
																						 S7.65,55.231,17,55.231z"/>
                                                                                <path d="M135.433,438.298c21.25,0,38.533-17.283,38.533-38.533s-17.283-38.533-38.533-38.533S96.9,378.514,96.9,399.764
																						 S114.183,438.298,135.433,438.298z"/>
                                                                                <path d="M376.267,438.298c0.85,0,1.983,0,2.833,0c10.2-0.85,19.55-5.383,26.35-13.317c6.8-7.65,9.917-17.567,9.35-28.05
																						 c-1.417-20.967-19.833-37.117-41.083-35.7c-21.25,1.417-37.117,20.117-35.7,41.083
																						 C339.433,422.431,356.15,438.298,376.267,438.298z"/>
                                                                            </g>
                                                                        </g>
																	</svg>
																	<span>0</span>
																</span>
                                                        </a>
                                                        <div class="minicart">
                                                            <div class="minicart-header no-items show">Your shopping bag is empty.</div>
                                                            <div class="minicart-footer">
                                                                <div class="minicart-actions clearfix">
                                                                    <a class="button" href="shop.html">
                                                                        <span class="text">Go to the shop</span>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="navbar-offcanvas">
                                                    <a href="#" class="navbar-offcanvas-btn">
                                                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 317.825 317.825" xml:space="preserve">
																<g>
                                                                    <g>
                                                                        <g>
                                                                            <g>
                                                                                <path d="M301.934,143.021H15.891C7.119,143.021,0,150.14,0,158.912c0,8.772,7.119,15.891,15.891,15.891
																						 h286.042c8.74,0,15.891-7.119,15.891-15.891C317.825,150.14,310.674,143.021,301.934,143.021z"/>
                                                                                <path d="M15.891,79.456h286.042c8.74,0,15.891-7.119,15.891-15.891s-7.151-15.891-15.891-15.891H15.891
																						 C7.119,47.674,0,54.793,0,63.565S7.119,79.456,15.891,79.456z"/>
                                                                                <path d="M301.934,238.369H15.891C7.119,238.369,0,245.52,0,254.26c0,8.74,7.119,15.891,15.891,15.891
																						 h286.042c8.74,0,15.891-7.151,15.891-15.891C317.825,245.52,310.674,238.369,301.934,238.369z"/>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                </g>
															</svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header-search-overlay hide">
                        <div class="container">
                            <div class="header-search-overlay-wrap">
                                <form class="searchform">
                                    <input type="search" class="searchinput" name="s" autocomplete="off" value="" placeholder="Search..."/>
                                    <input type="submit" class="searchsubmit hidden" name="submit" value="Search"/>
                                </form>
                                <button type="button" class="close">
                                    <span aria-hidden="true" class="fa fa-times"></span>
                                    <span class="sr-only">Close</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>



        @yield('content')


        <footer id="footer" class="footer">
            <div class="footer-widget">
                <div class="container">
                    <div class="footer-widget-wrap">
                        <div class="row">
                            <div data-wow-delay="0.3s" class="footer-widget-col col-md-3 col-sm-6 wow fadeInUp">
                                <div class="widget widget_text">
                                    <div class="textwidget">
                                        <img class="logo" alt="luxury" src="images/Blue_Bottom_Logo02.png">
                                        <br>
                                        <br>
                                        Luxury is elegant business wordpress theme built for many purpose. You can use this premium wordpress themes for any kind of website.
                                        <br>
                                        <hr />
                                    </div>
                                </div>
                                <div class="widget social-widget">
                                    <div class="social-widget-wrap">
                                        <a href="#" title="Facebook" target="_blank">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                        <a href="#" title="Twitter" target="_blank">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                        <a href="#" title="Google+" target="_blank">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                        <a href="#" title="Pinterest" target="_blank">
                                            <i class="fa fa-pinterest"></i>
                                        </a>
                                        <a href="#" title="LinkedIn" target="_blank">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div data-wow-delay="0.4s" class="footer-widget-col col-md-3 col-sm-6 wow fadeInUp">
                                <div class="widget widget-post-thumbnail">
                                    <h3 class="widget-title">
                                        <span>Recent Posts</span>
                                    </h3>
                                    <ul class="posts-thumbnail-list">
                                        <li>
                                            <div class="posts-thumbnail-image">
                                                <a href="blog-detail.html">
                                                    <img width="60" height="60" src="images/blog/blog_60x60.jpg" alt="" />
                                                </a>
                                            </div>
                                            <div class="posts-thumbnail-content">
                                                <h4><a href="blog-detail.html">Luxury Fashion trending</a></h4>
                                                <div class="posts-thumbnail-meta">
                                                    <span>Aug 11, 2015</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="posts-thumbnail-image">
                                                <a href="blog-detail.html">
                                                    <img width="60" height="60" src="images/blog/blog_60x60.jpg" alt="" />
                                                </a>
                                            </div>
                                            <div class="posts-thumbnail-content">
                                                <h4><a href="blog-detail.html">Paris Premium perfume</a></h4>
                                                <div class="posts-thumbnail-meta">
                                                    <span>Aug 11, 2015</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="posts-thumbnail-image">
                                                <a href="blog-detail.html">
                                                    <img width="60" height="60" src="images/blog/blog_60x60.jpg" alt="" />
                                                </a>
                                            </div>
                                            <div class="posts-thumbnail-content">
                                                <h4><a href="blog-detail.html">Ladies Fashion vintage</a></h4>
                                                <div class="posts-thumbnail-meta">
                                                    <span>Aug 11, 2015</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div data-wow-delay="0.5s" class="footer-widget-col col-md-3 col-sm-6 wow fadeInUp">
                                <div class="widget tweets-widget">
                                    <h3 class="widget-title"><span>Latest Tweets</span></h3>
                                    <div class="recent-tweets">
                                        <ul>
                                            <li>
													<span>
														The ultimate <a href="#" target="_blank">#wordpress</a> <a href="#" target="_blank">#theme</a> you ever need available on <a href="#" target="_blank">#themeforest</a>. Check it out<a href="#" target="_blank">#luxury-</a> <a href="#" target="_blank">https://t.co/ND0MXaTCow</a> <a href="#" target="_blank">https://t.co/MCfaBxMenN</a>
													</span>
                                                <a class="twitter_time" target="_blank" href="#">92 days ago</a>
                                            </li>
                                            <li>
													<span>
														Sitesao achieved author level 8 on <a href="#" target="_blank">@envato</a> for $125000 + sold. Cheers! <a href="#" target="_blank">#themeforest</a> <a href="#" target="_blank">#eliteauthor</a> <a href="#" target="_blank">https://t.co/Gk1wbLOkCf</a>
													</span>
                                                <a class="twitter_time" target="_blank" href="#">144 days ago</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div data-wow-delay="0.6s" class="footer-widget-col col-md-3 col-sm-6 wow fadeInUp">
                                <div class="widget">
                                    <h3 class="widget-title"><span>Contact Us</span></h3>
                                    <div class="textwidget">
                                        <ul class="address">
                                            <li> <i class="fa fa-home"></i><p>1900 CA 90405 United States</p></li>
                                            <li> <i class="fa fa-mobile"></i><p>Phone: (00) 123 456 789</p></li>
                                            <li> <i class="fa fa-skype"></i><p>Skype: yourskypeid</p></li>
                                            <li> <i class="fa fa-envelope"></i><p>Email: info@gmail.com</p></li>
                                            <li><i class="fa fa-fax"></i><p>Fax: (61 2) 9200 5700</p></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div data-wow-delay="0.3s" class="footer-info clearfix wow fadeInUp">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="footer-copyright">
                                Copyright © 2016 Designed by <a href="http://sitesao.com/">Sitesao</a>. All rights reserved.
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="footer-menu">
                                <ul class="footer-nav">
                                    <li><a href="about-us.html">About us</a></li>
                                    <li><a href="contact-us.html">Contact Us</a></li>
                                    <li><a href="services.html">Services</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <a href="#" class="go-to-top"><i class="fa fa-angle-up"></i></a>

  <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery-migrate.min.js"></script>
    <script type="text/javascript" src="js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
    <script type="text/javascript" src="js/jquery.prettyPhoto.init.min.js"></script>
    <script type="text/javascript" src="js/imagesloaded.pkgd.min.js"></script>
    <script type="text/javascript" src="js/superfish-1.7.4.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script type="text/javascript" src="js/jquery.touchSwipe.min.js"></script>
    <script type="text/javascript" src="js/jquery.transit.min.js"></script>
    <script type="text/javascript" src="js/jquery.carouFredSel.js"></script>
    <script type="text/javascript" src="js/preloader.min.js"></script>
    <script type="text/javascript" src="js/waypoints.min.js"></script>
    <script type="text/javascript" src="js/wow.min.js"></script>

    <script type="text/javascript" src="js/extensions/revolution.extension.video.min.js"></script>
    <script type="text/javascript" src="js/extensions/revolution.extension.slideanims.min.js"></script>
    <script type="text/javascript" src="js/extensions/revolution.extension.actions.min.js"></script>
    <script type="text/javascript" src="js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script type="text/javascript" src="js/extensions/revolution.extension.kenburn.min.js"></script>
    <script type="text/javascript" src="js/extensions/revolution.extension.navigation.min.js"></script>
    <script type="text/javascript" src="js/extensions/revolution.extension.migration.min.js"></script>
    <script type="text/javascript" src="js/extensions/revolution.extension.parallax.min.js"></script>
</body>
</html>

