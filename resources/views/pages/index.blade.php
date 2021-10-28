<!-- === BEGIN HEADER === -->
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <head>
        <!-- Title -->
        <title>Habitat - A Professional Bootstrap Template</title>
        <!-- Meta -->
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <!-- Favicon -->
        <link href="favicon.ico" rel="shortcut icon">
        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="{{ asset('public/css/bootstrap.css') }}" rel="stylesheet">
        <!-- Template CSS -->
        <link rel="stylesheet" href="{{ asset('public/css/animate.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('public/css/font-awesome.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('public/css/nexus.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('public/css/responsive.css') }}" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('public/css/custom.css') }}" rel="stylesheet">
        <!-- Google Fonts-->
        <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="body-bg">
            <!-- Phone/Email -->
            <div id="pre-header" class="background-gray-lighter">
                <div class="container no-padding">
                    <div class="row hidden-xs">
                        <div class="col-sm-6 padding-vert-5">
                            <strong>Phone:</strong>&nbsp;1-800-123-4567
                        </div>
                        <div class="col-sm-6 text-right padding-vert-5">
                            <strong>Email:</strong>&nbsp;info@joomla51.com
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Phone/Email -->
            <!-- Header -->
            <div id="header">
                <div class="container">
                    <div class="row">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="#" title="">
                                <img src=" {{ asset('public/img/logo.png') }}" alt="Logo" />
                            </a>
                        </div>
                        <!-- End Logo -->
                    </div>
                </div>
            </div>
            <!-- End Header -->
            <!-- Top Menu -->
            <div id="hornav" class="bottom-border-shadow">
                <div class="container no-padding border-bottom">
                    <div class="row">
                        <div class="col-md-8 no-padding">
                            <div class="visible-lg">
                                <ul id="hornavmenu" class="nav navbar-nav">
                                    <li>
                                        <a href="/login">LOGIN</a>
                                    </li>
                                    <li>
                                        <a href="/register">Register</a>
                                    </li>
                                    
                                 
                                
                                   
                                    
                                </ul>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- End Top Menu -->
            <!-- === END HEADER === -->
            <!-- === BEGIN CONTENT === -->
            <div id="slideshow" class="bottom-border-shadow">
                <div class="container no-padding background-white bottom-border">
                    <div class="row">
                        <!-- Carousel Slideshow -->
                        <div id="carousel-example" class="carousel slide" data-ride="carousel">
                            <!-- Carousel Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example" data-slide-to="1"></li>
                                <li data-target="#carousel-example" data-slide-to="2"></li>
                            </ol>
                            <div class="clearfix"></div>
                            <!-- End Carousel Indicators -->
                            <!-- Carousel Images -->
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img src=" {{ asset('public/img/slideshow/slide1.jpg') }}">
                                </div>
                                <div class="item">
                                    <img src="{{ asset('public/img/slideshow/slide2.jpg') }}">
                                </div>
                                <div class="item">
                                    <img src="{{ asset('public/img/slideshow/slide2.jpg') }}">
                                </div>
                                <div class="item">
                                    <img src="{{ asset('public/img/slideshow/slide2.jpg') }}">
                                </div>
                            </div>
                            <!-- End Carousel Images -->
                            <!-- Carousel Controls -->
                            <a class="left carousel-control" href="#carousel-example" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                            <!-- End Carousel Controls -->
                        </div>
                        <!-- End Carousel Slideshow -->
                    </div>
                </div>
            </div>
            <div id="icons" class="bottom-border-shadow">
                <div class="container background-grey bottom-border">
                    <div class="row padding-vert-60">
                        <!-- Icons -->
                        <div class="col-md-4 text-center">
                            <i class="fa fa-medkit fa-4x color-primary animate fadeIn"></i>
                            <h2 class="padding-top-10 animate fadeIn">HEALTH</h2>
                            <p class="animate fadeIn">Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer.</p>
                        </div>
                        <div class="col-md-4 text-center">
                            <i class="fa fa-cutlery fa-4x color-primary animate fadeIn"></i>
                            <h2 class="padding-top-10 animate fadeIn">FOOD</h2>
                            <p class="animate fadeIn">Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer.</p>
                        </div>
                        <div class="col-md-4 text-center">
                            <i class="fa fa-check-circle fa-4x color-primary animate fadeIn"></i>
                            <h2 class="padding-top-10 animate fadeIn">FITNESS</h2>
                            <p class="animate fadeIn">Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer.</p>
                        </div>
                        <!-- End Icons -->
                    </div>
                </div>
            </div>
            <div id="content" class="bottom-border-shadow">
                <div class="container background-white bottom-border">
                    <div class="row margin-vert-30">
                        <!-- Main Text -->
                        <div class="col-md-6">
                            <h2>Welcome to Hit Blogs</h2>
                            <p>HIt blogs is a Professional blog Platform. Here we will provide you only interesting content, which you will like very much. We're dedicated to providing you the best of blog, with a focus on dependability and Information about food and health. Our About-us page was created with the help of the About-us Generator.
                            We're working to turn our passion for blog into a booming online website. We hope you enjoy our blog as much as we enjoy offering them to you..</p>
                            <p>I will keep posting more important posts on my Website for all of you. Please give your support and love.

Thanks For Visiting Our Site

Have a nice day !</p>
                        </div>
                        <!-- End Main Text -->
                        <div class="col-md-6">
                            <h3 class="padding-vert-10">Key Features</h3>
                            <p>Duis sit amet orci et lectus dictum auctor a nec enim. Donec suscipit fringilla elementum. Suspendisse nec justo ut felis ornare tincidunt vitae et lectus.</p>
                            <ul class="tick animate fadeInRight">
                                <li>Responsive Design</li>
                                <li>Built with LESS</li>
                                <li>Font Choosers</li>
                                <li>Replaceable Background Image</li>
                                <li>Custom Module Widths</li>
                                <li>All Module Extensions Included</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Portfolio -->
            <div id="portfolio" class="bottom-border-shadow">
                <div class="container bottom-border">
                <h2 style="text-align: center; font-size: 80px;">TOP BLOGGERS</h2>
                    <div class="row padding-top-40">
                        
                        <ul class="portfolio-group">
                            <!-- Portfolio Item -->
                            <li class="portfolio-item col-sm-4 col-xs-6 margin-bottom-40">
                                
                                <a href="#">
                                    <figure class="animate fadeInLeft">
                                        <img alt="image1" src="{{ asset('public/img/frontpage/image1.jpg') }}">
                                        <figcaption>
                                            <h3>Velit esse molestie</h3>
                                            <span>Vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui et everti tamquam suavitate mea.</span>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                            <!-- //Portfolio Item// -->
                            <!-- Portfolio Item -->
                            <li class="portfolio-item col-sm-4 col-xs-6 margin-bottom-40">
                                <a href="#">
                                    <figure class="animate fadeIn">
                                        <img alt="image2" src="{{ asset('public/img/frontpage/image2.jpg') }}">
                                        <figcaption>
                                            <h3>Quam nunc putamus</h3>
                                            <span>Vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui et everti tamquam suavitate mea.</span>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                            <!-- //Portfolio Item// -->
                            <!-- Portfolio Item -->
                            <li class="portfolio-item col-sm-4 col-xs-6 margin-bottom-40">
                                <a href="#">
                                    <figure class="animate fadeInRight">
                                        <img alt="image3" src="{{ asset('public/img/frontpage/image3.jpg') }}">
                                        <figcaption>
                                            <h3>Placerat facer possim</h3>
                                            <span>Vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui et everti tamquam suavitate mea.</span>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                            <!-- //Portfolio Item// -->
                            <!-- Portfolio Item -->
                            <li class="portfolio-item col-sm-4 col-xs-6 margin-bottom-40">
                                <a href="#">
                                    <figure class="animate fadeInLeft">
                                        <img alt="image4" src="{{ asset('public/img/frontpage/image4.jpg') }}">
                                        <figcaption>
                                            <h3>Nam liber tempor</h3>
                                            <span>Vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui et everti tamquam suavitate mea.</span>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                            <!-- //Portfolio Item// -->
                            <!-- Portfolio Item -->
                            <li class="portfolio-item col-sm-4 col-xs-6 margin-bottom-40">
                                <a href="#">
                                    <figure class="animate fadeIn">
                                        <img alt="image5" src="{{ asset('public/img/frontpage/image5.jpg') }}">
                                        <figcaption>
                                            <h3>Donec non urna</h3>
                                            <span>Vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui et everti tamquam suavitate mea.</span>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                            <!-- //Portfolio Item// -->
                            <!-- Portfolio Item -->
                            <li class="portfolio-item col-sm-4 col-xs-6 margin-bottom-40">
                                <a href="#">
                                    <figure class="animate fadeInRight">
                                        <img alt="image6" src="{{ asset('public/img/frontpage/image6.jpg') }}">
                                        <figcaption>
                                            <h3>Nullam consectetur</h3>
                                            <span>Vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui et everti tamquam suavitate mea.</span>
                                        </figcaption>
                                    </figure>
                                </a>
                            </li>
                            <!-- //Portfolio Item// -->
                        </ul>
                    </div>
                </div>
            </div>
            <!-- End Portfolio -->
            <!-- === END CONTENT === -->
            <!-- === BEGIN FOOTER === -->
            <div id="base">
                <div class="container bottom-border padding-vert-30">
                    <div class="row">
                        <!-- Disclaimer -->
                        <div class="col-md-4">
                            <h3 class="class margin-bottom-10">Disclaimer</h3>
                            <p>All stock images on this template demo are for presentation purposes only, intended to represent a live site and are not included with the template or in any of the Joomla51 club membership plans.</p>
                            <p>Most of the images used here are available from
                                <a href="http://www.shutterstock.com/" target="_blank">shutterstock.com</a>. Links are provided if you wish to purchase them from their copyright owners.</p>
                        </div>
                        <!-- End Disclaimer -->
                        <!-- Contact Details -->
                        <div class="col-md-4 margin-bottom-20">
                            <h3 class="margin-bottom-10">Contact Details</h3>
                            <p>
                                <span class="fa-phone">Telephone:</span>1-800-123-4567
                                <br>
                                <span class="fa-envelope">Email:</span>
                                <a href="mailto:info@example.com">info@example.com</a>
                                <br>
                                <span class="fa-link">Website:</span>
                                <a href="http://www.example.com">www.example.com</a>
                            </p>
                            <p>The Dunes, Top Road,
                                <br>Strandhill,
                                <br>Co. Sligo,
                                <br>Ireland</p>
                        </div>
                        <!-- End Contact Details -->
                        <!-- Sample Menu -->
                        <div class="col-md-4 margin-bottom-20">
                            <h3 class="margin-bottom-10">Sample Menu</h3>
                            <ul class="menu">
                                <li>
                                    <a class="fa-tasks" href="#">Placerat facer possim</a>
                                </li>
                                <li>
                                    <a class="fa-users" href="#">Quam nunc putamus</a>
                                </li>
                                <li>
                                    <a class="fa-signal" href="#">Velit esse molestie</a>
                                </li>
                                <li>
                                    <a class="fa-coffee" href="#">Nam liber tempor</a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <!-- End Sample Menu -->
                    </div>
                </div>
            </div>
            <!-- Footer -->
            <div id="footer" class="background-grey">
                <div class="container">
                    <div class="row">
                        <!-- Footer Menu -->
                        <div id="footermenu" class="col-md-8">
                            <ul class="list-unstyled list-inline">
                                <li>
                                    <a href="#" target="_blank">Sample Link</a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">Sample Link</a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">Sample Link</a>
                                </li>
                                <li>
                                    <a href="#" target="_blank">Sample Link</a>
                                </li>
                            </ul>
                        </div>
                        <!-- End Footer Menu -->
                        <!-- Copyright -->
                        <div id="copyright" class="col-md-4">
                            <p class="pull-right">(c) 2014 Your Copyright Info</p>
                        </div>
                        <!-- End Copyright -->
                    </div>
                </div>
            </div>
            <!-- End Footer -->
            <!-- JS -->
            <script type="text/javascript" src="{{ asset('public/js/jquery.min.js') }}" type="text/javascript"></script>
            <script type="text/javascript" src="{{ asset('public/js/bootstrap.min.js') }}" type="text/javascript"></script>
            <script type="text/javascript" src="{{ asset('public/js/scripts.js') }}"></script>
            <!-- Isotope - Portfolio Sorting -->
            <script type="text/javascript" src="{{ asset('public/js/jquery.isotope.js') }}" type="text/javascript"></script>
            <!-- Mobile Menu - Slicknav -->
            <script type="text/javascript" src="{{ asset('public/js/jquery.slicknav.js') }}" type="text/javascript"></script>
            <!-- Animate on Scroll-->
            <script type="text/javascript" src="{{ asset('public/js/jquery.visible.js') }}" charset="utf-8"></script>
            <!-- Sticky Div -->
            <script type="text/javascript" src="{{ asset('public/js/jquery.sticky.js') }}" charset="utf-8"></script>
            <!-- Slimbox2-->
            <script type="text/javascript" src="{{ asset('public/js/slimbox2.js ') }}" charset="utf-8"></script>
            <!-- Modernizr -->
            <script src="{{ asset('public/js/modernizr.custom.js ') }}" type="text/javascript"></script>
            <!-- End JS -->
    </body>
</html>
<!-- === END FOOTER === -->