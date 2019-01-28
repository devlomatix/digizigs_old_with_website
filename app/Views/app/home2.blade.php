@extends('layouts.app')

@section('title','Home')



@section('content')

	

    <body>
        <!-- Preloading -->
        <!-- <div class="preloader text-center">
            <div class="la-ball-circus la-2x">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div> -->
        <!-- Preloading -->

        

        <!-- Header 01 -->
        <header class="header_01" id="header">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-2 col-sm-3 col-md-3">
                        <div class="logo">
                            <a href="index.html"><img src="{{asset('public/images/DZ-White-Text-Horizontal.png')}}" alt=""/></a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-sm-7 col-md-7">
                        <nav class="mainmenu text-center">
                            <ul>
                                <li class="menu-item-has-children">
                                    <a href="#">home</a>
                                    <ul class="sub-menu">
                                        <li><a href="index.html">Home 01</a></li>
                                        <li><a href="index2.html">Home 02</a></li>
                                        <li><a href="index3.html">Home 03</a></li>
                                    </ul>
                                </li>
                                <li><a href="about.html">About</a></li>
                                <li class="menu-item-has-children"><a href="#">Services</a>
                                    <ul class="sub-menu">
                                        <li><a href="services.html">Service</a></li>
                                        <li><a href="service_detail.html">Service Detail</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="#">Portfolio</a>
                                    <ul class="sub-menu">
                                        <li><a href="portfolio.html">Portfolio v1</a></li>
                                        <li><a href="portfolio2.html">Portfolio v2</a></li>
                                        <li><a href="portfolio_detail.html">Portfolio Detail</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children"><a href="#">Blog</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog.html">Blog v1</a></li>
                                        <li><a href="blog2.html">Blog v2</a></li>
                                        <li><a href="blog3.html">Blog v3</a></li>
                                        <li><a href="blog_single.html">Blog Single</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-2 col-sm-2 col-md-2">
                        <div class="navigator text-right">
                            <a class="search searchToggler" href="javascript:void(0);"><i class="mei-magnifying-glass"></i></a>
                            <a href="javascript:void(0);" class="menu mobilemenu hidden-sm hidden-md hidden-lg hidden-xs"><i class="mei-menu"></i></a>
                            <a id="open-overlay-nav" class="menu hamburger" href="javascript:void(0);"><i class="mei-menu"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header 01 -->

        <!-- Search From -->
        <div class="searchFixed popupBG">
            <div class="container-fluid">
                <a href="" id="sfCloser" class="sfCloser"></a>
                <div class="searchForms">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-8 col-lg-offset-2">
                                <form method="post" action="#">
                                    <input type="text" name="s" class="searchField" placeholder="Search here..."/>
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search From -->

        <!-- PopUP Menu -->
        <div class="popup popup__menu">
            <a href="" id="close-popup" class="close-popup"></a>
            <div class="container mobileContainer">
                <div class="row">
                    <div class="col-lg-12 text-left">
                        <div class="logo2">
                            <a href="index.html"><img src="images/logo.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="popup-inner">
                            <div class="dl-menu__wrap dl-menuwrapper">
                                <ul class="dl-menu dl-menuopen">
                                    <li class="menu-item-has-children">
                                        <a href="javascript:void(0);">home</a>
                                        <ul class="dl-submenu">
                                            <li><a href="index.html">Home 01</a></li>
                                            <li><a href="index2.html">Home 02</a></li>
                                            <li><a href="index3.html">Home 03</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="about.html">About</a></li>
                                    <li class="menu-item-has-children"><a href="javascript:void(0);">services</a>
                                        <ul class="dl-submenu">
                                            <li><a href="services.html">Service</a></li>
                                            <li><a href="service_detail.html">Service Detail</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="javascript:void(0);">Portfolio</a>
                                        <ul class="dl-submenu">
                                            <li><a href="portfolio.html">Portfolio v1</a></li>
                                            <li><a href="portfolio2.html">Portfolio v2</a></li>
                                            <li><a href="portfolio_detail.html">Portfolio Detail</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="javascript:void(0);">Blog</a>
                                        <ul class="dl-submenu">
                                            <li><a href="blog.html">Blog v1</a></li>
                                            <li><a href="blog2.html">Blog v2</a></li>
                                            <li><a href="blog3.html">Blog v3</a></li>
                                            <li><a href="blog_single.html">Blog Single</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-sm-6 col-xs-12 text-left">
                        <ul class="footer__contacts text-left">
                            <li>Phone: 666 888 000</li>
                            <li>Email: needhelp@meipaly.com</li>
                            <li>Address: 66 Broklyn Street, New York United States of America</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-xs-12 col-xs-12">
                        <div class="popUp_social text-right">
                            <ul>
                                <li><a href="#"><i class="fa fa-twitter"></i>Twitter</a></li>
                                <li><a href="#"><i class="fa fa-facebook-square"></i>Facebook</a></li>
                                <li><a href="#"><i class="fa fa-youtube-play"></i>Youtube</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- PopUP Menu -->

        <!-- Page Banner -->
        <section class="pageBanner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner_content text-center">
                            <h4><a href="#">home</a> - about</h4>
                            <h2>about us</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Page Banner -->

        <!-- Agency Section -->
        <section class="commonSection">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-6 col-md-6">
                        <h4 class="sub_title">get to know us</h4>
                        <h2 class="sec_title">build better website alot quicker with meipaly agency</h2>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-md-6">
                        <div class="agency_img1">
                            <img src="images/about/1.jpg" alt=""/>
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-12">
                        <div class="agency_img2">
                            <img src="images/about/2.jpg" alt=""/>
                        </div>
                        <div class="compay_date">
                            <h5>company started</h5>
                            <h2>1990</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Agency Section -->

        <!-- Testimonial 2 Section -->
        <section class="commonSection testimonial_2">
            <div class="container">
                <div class="row">
                    <div id="tabs" class="testimoniTab">
                        <div class="col-lg-5 col-sm-5">
                            <h4 class="sub_title color_aaa">our testimonials</h4>
                            <h2 class="sec_title white">happy customers</h2>
                            <ul class="slider_testimoial">
                                <li class="active control_item">
                                    <a href="#tab_1" data-toggle="tab">
                                        <span><img src="images/home_1/t1.jpg" alt=""/></span>
                                        <div class="author_detail">
                                            <h5>Shirley Smith</h5>
                                            <h6>Director</h6>
                                        </div>
                                    </a>
                                </li>
                                <li class="control_item">
                                    <a href="#tab_2" data-toggle="tab">
                                        <span><img src="images/home_1/t2.jpg" alt=""/></span>
                                        <div class="author_detail">
                                            <h5>Mike hardson</h5>
                                            <h6>co founder</h6>
                                        </div>
                                    </a>
                                </li>
                                <li class="control_item">
                                    <a href="#tab_3" data-toggle="tab">
                                        <span><img src="images/home_1/t3.jpg" alt=""/></span>
                                        <div class="author_detail">
                                            <h5>Mike Smith</h5>
                                            <h6>manager</h6>
                                        </div>
                                    </a>
                                </li>
                                <li class="control_item">
                                    <a href="#tab_4" data-toggle="tab">
                                        <span><img src="images/home_1/t1.jpg" alt=""/></span>
                                        <div class="author_detail">
                                            <h5>Shirley Smith</h5>
                                            <h6>Director</h6>
                                        </div>
                                    </a>
                                </li>
                                <li class="control_item">
                                    <a href="#tab_5" data-toggle="tab">
                                        <span><img src="images/home_1/t2.jpg" alt=""/></span>
                                        <div class="author_detail">
                                            <h5>Mike hardson</h5>
                                            <h6>manager</h6>
                                        </div>
                                    </a>
                                </li>
                                <li class="control_item">
                                    <a href="#tab_6" data-toggle="tab">
                                        <span><img src="images/home_1/t3.jpg" alt=""/></span>
                                        <div class="author_detail">
                                            <h5>Mike Smith</h5>
                                            <h6>manager</h6>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-7 col-sm-7">
                            <div class="dots_owl"></div>
                            <div class="tab-content clearfix">
                                <div class="tab-pane fade in active testi_con" id="tab_1">
                                    <p>
                                        “This is due to their excellent service, competitive pricing and customer support. It’s throughly 
                                        refresing to get such a personal touch. There are many variations of passages of available,
                                        but the majority have suffered alteration in some form by injected hum
                                    </p>
                                    <span>25 nov, 2018</span>
                                </div>
                                <div class="tab-pane fade testi_con" id="tab_2">
                                    <p>
                                        “It’s throughly refresing to get such a personal touch. There are many variations of passages of available,
                                        This is due to their excellent service, competitive pricing and customer support. 
                                        but the majority have suffered alteration in some form by injected hum
                                    </p>
                                    <span>26 nov, 2018</span>
                                </div>
                                <div class="tab-pane fade testi_con" id="tab_3">
                                    <p>
                                        “This is due to their excellent service, competitive pricing and customer support. It’s throughly 
                                        refresing to get such a personal touch. There are many variations of passages of available,
                                        but the majority have suffered alteration in some form by injected hum
                                    </p>
                                    <span>27 nov, 2018</span>
                                </div>
                                <div class="tab-pane fade testi_con" id="tab_4">
                                    <p>
                                        “This is due to their excellent service, competitive pricing and customer support. It’s throughly 
                                        refresing to get such a personal touch. There are many variations of passages of available,
                                        but the majority have suffered alteration in some form by injected hum
                                    </p>
                                    <span>28 nov, 2018</span>
                                </div>
                                <div class="tab-pane fade testi_con" id="tab_5">
                                    <p>
                                        “This is due to their excellent service, competitive pricing and customer support. It’s throughly 
                                        refresing to get such a personal touch. There are many variations of passages of available,
                                        but the majority have suffered alteration in some form by injected hum
                                    </p>
                                    <span>29 nov, 2018</span>
                                </div>
                                <div class="tab-pane fade testi_con" id="tab_6">
                                    <p>
                                        “This is due to their excellent service, competitive pricing and customer support. It’s throughly 
                                        refresing to get such a personal touch. There are many variations of passages of available,
                                        but the majority have suffered alteration in some form by injected hum
                                    </p>
                                    <span>30 nov, 2018</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonial 2 Section -->

        <!-- Subscribe Section -->
        <section class="commonSection subscribe">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-5 col-md-4">
                        <h4 class="sub_title">don’t miss out our latest updates</h4>
                        <h2 class="sec_title">Subscribe us</h2>
                    </div>
                    <div class="col-lg-8 col-sm-7 col-md-8">
                        <form action="" method="post" class="subscribefrom">
                            <input type="email" placeholder="Enter your email" name="email">
                            <button class="common_btn red_bg" type="submit" name="submit"><span>Subscribe now</span></button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Subscribe Section -->

        <!-- Team Section -->
        <section class="commonSection team">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h4 class="sub_title">meet the team</h4>
                        <h2 class="sec_title">expert people</h2>
                        <p class="sec_desc">
                            We are committed to providing our customers with exceptional service while<br> offering our employees the best training.
                        </p>
                    </div>
                </div>
            </div>
            <div class="team_slider">
                <div class="singleTM">
                    <div class="tm_img">
                        <img src="images/team/1.jpg" alt="">
                        <div class="tm_overlay">
                            <div class="team_social">
                                <a href="#"><span>Facebook</span></a>
                                <a href="#"><span>Twitter</span></a>
                                <a href="#"><span>Youtube</span></a>
                            </div>
                            <a href="#" class="common_btn"><span>learn more</span></a>
                        </div>
                    </div>
                    <div class="detail_TM">
                        <h5>kevin smith</h5>
                        <h6>co founder</h6>
                    </div>
                </div>
                <div class="singleTM">
                    <div class="tm_img">
                        <img src="images/team/2.jpg" alt="">
                        <div class="tm_overlay">
                            <div class="team_social">
                                <a href="#"><span>Facebook</span></a>
                                <a href="#"><span>Twitter</span></a>
                                <a href="#"><span>Youtube</span></a>
                            </div>
                            <a href="#" class="common_btn"><span>learn more</span></a>
                        </div>
                    </div>
                    <div class="detail_TM">
                        <h5>Jessica Brown</h5>
                        <h6>General Manager</h6>
                    </div>
                </div>
                <div class="singleTM">
                    <div class="tm_img">
                        <img src="images/team/3.jpg" alt="">
                        <div class="tm_overlay">
                            <div class="team_social">
                                <a href="#"><span>Facebook</span></a>
                                <a href="#"><span>Twitter</span></a>
                                <a href="#"><span>Youtube</span></a>
                            </div>
                            <a href="#" class="common_btn"><span>learn more</span></a>
                        </div>
                    </div>
                    <div class="detail_TM">
                        <h5>Mike Hardson</h5>
                        <h6>Senior Designer</h6>
                    </div>
                </div>
                <div class="singleTM">
                    <div class="tm_img">
                        <img src="images/team/4.jpg" alt="">
                        <div class="tm_overlay">
                            <div class="team_social">
                                <a href="#"><span>Facebook</span></a>
                                <a href="#"><span>Twitter</span></a>
                                <a href="#"><span>Youtube</span></a>
                            </div>
                            <a href="#" class="common_btn"><span>learn more</span></a>
                        </div>
                    </div>
                    <div class="detail_TM">
                        <h5>Rose Ford</h5>
                        <h6>Marketing manager</h6>
                    </div>
                </div>
                <div class="singleTM">
                    <div class="tm_img">
                        <img src="images/team/5.jpg" alt="">
                        <div class="tm_overlay">
                            <div class="team_social">
                                <a href="#"><span>Facebook</span></a>
                                <a href="#"><span>Twitter</span></a>
                                <a href="#"><span>Youtube</span></a>
                            </div>
                            <a href="#" class="common_btn"><span>learn more</span></a>
                        </div>
                    </div>
                    <div class="detail_TM">
                        <h5>John Albert</h5>
                        <h6>Brand Officer</h6>
                    </div>
                </div>
            </div>
        </section>
        <!-- Team Section -->

        <!-- Our Work Section -->
        <section class="commonSection our_work">
            <div class="videoWrap_2">
                <img src="images/about/3.jpg" alt="">
                <div class="play_video">
                    <a class="video_popup" href="https://www.youtube.com/watch?v=A7ZkZazfvao"><i class="fa fa-play"></i></a>
                    <h2>Watch Video</h2>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-6">
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="ab_detail_wrap">
                            <h4 class="sub_title">the only design you need</h4>
                            <h2 class="sec_title">Make amazing websites without touching cod</h2>
                            <p class="sec_desc">
                                Tincidunt elit magnis nulla facilisis sagittis maecenas. Sapien nunc amet ultrices, 
                                dolores sit ipsum velit purus aliquet, massa fringilla leo orci. Lorem ipsum
                                dolors sit amet elit magnis amet ultrices purus aliquet.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Our Work Section -->

        <!-- Why Choose Section -->
        <section class="commonSection chooseUs">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h4 class="sub_title">our benefits</h4>
                        <h2 class="sec_title">why choose us</h2>
                        <p class="sec_desc">
                            We are committed to providing our customers with exceptional service while<br> offering our employees the best training.
                        </p>
                    </div>
                </div>
                <div id="tabs">
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="chooseUs_title">
                                <li><a href="#tes_tab_1" data-toggle="tab">Latest technology</a></li>
                                <li class="active"><a href="#tes_tab_2" data-toggle="tab">awesome support</a></li>
                                <li><a href="#tes_tab_3" data-toggle="tab">1 click demo install</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="tab-content clearfix">
                            <div class="tab-pane fade" id="tes_tab_1">
                                <div class="col-lg-7 col-sm-7 col-md-7">
                                    <div class="wh_choose">
                                        <p>
                                            There are many variations of passages of lorem ipsum available, but the majority have 
                                            suffered alteration in some form, by injected humour, or randomised words 
                                            which don't look even slightly believable. If you are going to use a 
                                            passage of Lorem Ipsum, you need to be sure there isn't anything
                                            embarrassing hidden in the middle of text. 
                                        </p>
                                        <ul>
                                            <li><i class="fa fa-check-square"></i>Self-contained, state-of-the-art time clock</li>
                                            <li><i class="fa fa-check-square"></i>Scalability of up to 500 employees per time clock</li>
                                            <li><i class="fa fa-check-square"></i>The ability to connect up to 32 time clocks</li>
                                            <li><i class="fa fa-check-square"></i>Employee self-enrollment</li>
                                            <li><i class="fa fa-check-square"></i>Payroll integration</li>
                                            <li><i class="fa fa-check-square"></i>Built-in backup camera to verify failed punches</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-sm-5 col-md-5">
                                    <div class="chose_img">
                                        <img src="images/home_1/c1.jpg" alt=""/>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade in active" id="tes_tab_2">
                                <div class="col-lg-5 col-sm-5 col-md-5">
                                    <div class="chose_img">
                                        <img src="images/home_1/c2.jpg" alt=""/>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-sm-7 col-md-7">
                                    <div class="wh_choose">
                                        <p>
                                            There are many variations of passages of lorem ipsum available, but the majority have 
                                            suffered alteration in some form, by injected humour, or randomised words 
                                            which don't look even slightly believable. If you are going to use a 
                                            passage of Lorem Ipsum, you need to be sure there isn't anything
                                            embarrassing hidden in the middle of text. 
                                        </p>
                                        <ul>
                                            <li><i class="fa fa-check-square"></i>Self-contained, state-of-the-art time clock</li>
                                            <li><i class="fa fa-check-square"></i>Scalability of up to 500 employees per time clock</li>
                                            <li><i class="fa fa-check-square"></i>The ability to connect up to 32 time clocks</li>
                                            <li><i class="fa fa-check-square"></i>Employee self-enrollment</li>
                                            <li><i class="fa fa-check-square"></i>Payroll integration</li>
                                            <li><i class="fa fa-check-square"></i>Built-in backup camera to verify failed punches</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tes_tab_3">
                                <div class="col-lg-7 col-sm-7 col-md-7">
                                    <div class="wh_choose">
                                        <p>
                                            There are many variations of passages of lorem ipsum available, but the majority have 
                                            suffered alteration in some form, by injected humour, or randomised words 
                                            which don't look even slightly believable. If you are going to use a 
                                            passage of Lorem Ipsum, you need to be sure there isn't anything
                                            embarrassing hidden in the middle of text. 
                                        </p>
                                        <ul>
                                            <li><i class="fa fa-check-square"></i>Self-contained, state-of-the-art time clock</li>
                                            <li><i class="fa fa-check-square"></i>Scalability of up to 500 employees per time clock</li>
                                            <li><i class="fa fa-check-square"></i>The ability to connect up to 32 time clocks</li>
                                            <li><i class="fa fa-check-square"></i>Employee self-enrollment</li>
                                            <li><i class="fa fa-check-square"></i>Payroll integration</li>
                                            <li><i class="fa fa-check-square"></i>Built-in backup camera to verify failed punches</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-sm-5 col-md-5">
                                    <div class="chose_img">
                                        <img src="images/home_1/c3.jpg" alt=""/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Why Choose Section -->

        <!-- Ready Section -->
        <section class="commonSection ready">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-sm-8 col-md-9">
                        <h2 class="sec_title white">Let's Get Your Project Started!</h2>
                    </div>
                    <div class="col-lg-3 col-sm-4 col-md-3 text-right">
                        <a class="common_btn" href="contact.html"><span>Contact with us</span></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Ready Section -->

        <!-- Footer Section -->
        <footer class="footer_1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-sm-6 col-md-5">
                        <aside class="widget aboutwidget">
                            <a href="#"><img src="images/foo_logo.png" alt=""></a>
                            <p>
                                Welcome to our web design agency. Lorem ipsum is simply free text dolor sit amet consectetur adipisicing elit. 
                                Tempore corrupti temporibus fuga earum asperiores, alias excepturi sit mpedit fugit laudantium.
                            </p>
                        </aside>
                    </div>
                    <div class="col-lg-4 col-sm-4 col-md-4">
                        <aside class="widget contact_widgets">
                            <h3 class="widget_title">contact</h3>
                            <p>
                                66 Broklyn Street, New York<br>
                                United States of America
                            </p>
                            <p>P: 666 888 000</p>
                            <p>E: <a href="#">needhelp@meipaly.com</a></p>
                        </aside>
                    </div>
                    <div class="col-lg-3 col-sm-2 col-md-3">
                        <aside class="widget social_widget">
                            <h3 class="widget_title">social</h3>
                            <ul>
                                <li><a href="#"><i class="fa fa-twitter"></i>Twitter</a></li>
                                <li><a href="#"><i class="fa fa-facebook-square"></i>Facebook</a></li>
                                <li><a href="#"><i class="fa fa-youtube-play"></i>Youtube</a></li>
                            </ul>
                        </aside>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-sm-12 text-center">
                        <div class="copyright">
                            © copyright 2019 by <a href="#">Layerdrops.com</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Section -->

        <!-- Bact To To -->
        <a id="backToTop" href="#" class=""><i class="fa fa-angle-double-up"></i></a>
        <!-- Bact To To -->
  

@endsection

@section('javascript')
	<script>
		
	</script>
@endsection