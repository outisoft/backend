<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>RealState</title>
        <meta name="description" content="GARO is a real-estate template">
        <meta name="author" content="Kimarotec">
        <meta name="keyword" content="html5, css, bootstrap, property, real-estate theme , bootstrap template">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">

        <link rel="stylesheet" href="{{ asset('assets/css/normalize.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/fontello.css')}}">
        <link href="{{ asset('assets/fonts/icon-7-stroke/css/pe-icon-7-stroke.css')}}" rel="stylesheet">
        <link href="{{ asset('assets/fonts/icon-7-stroke/css/helper.css')}}" rel="stylesheet">
        <link href="{{ asset('assets/css/animate.css')}}" rel="stylesheet" media="screen">
        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-select.min.css')}}"> 
        <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/icheck.min_all.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/price-range.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css')}}">  
        <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/owl.transitions.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/lightslider.min.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
        <link rel="stylesheet" href="{{ asset('assets/css/responsive.css')}}">
    </head>
    <body>
        <!-- Body content -->

        <div class="page-head"> 
            <div class="container">
                <div class="row">
                    <div class="page-head-content">
                        <h1 class="page-title">Super nice villa </h1>               
                    </div>
                </div>
            </div>
        </div>
        <!-- End page header -->

        <!-- property area -->
        <div class="content-area single-property" style="background-color: #FCFCFC;">&nbsp;
            <div class="container">   

                <div class="clearfix padding-top-40" >

                    <div class="col-md-8 single-property-content prp-style-2">
                        <div class="">
                            <div class="row">
                                <div class="light-slide-item">            
                                    <div class="clearfix">
                                        <div class="favorite-and-print">
                                            <a class="add-to-fav" href="#login-modal" data-toggle="modal">
                                                <i class="fa fa-star-o"></i>
                                            </a>
                                            <a class="printer-icon " href="javascript:window.print()">
                                                <i class="fa fa-print"></i> 
                                            </a>
                                        </div> 

                                        <ul id="image-gallery" class="gallery list-unstyled cS-hidden">
                                            <li data-thumb="{{ asset($propiedad->img1)}}"> 
                                                <img src="{{ asset($propiedad->img1)}}" alt="{{ $propiedad->title }}">
                                            </li>
                                            <li data-thumb="{{ asset('assets/img/property-1/property2.jpg')}}"> 
                                                <img src="{{ asset('assets/img/property-1/property2.jpg')}}" />
                                            </li>
                                            <li data-thumb="{{ asset('assets/img/property-1/property3.jpg')}}"> 
                                                <img src="{{ asset('assets/img/property-1/property3.jpg')}}" />
                                            </li>                                        
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="single-property-wrapper">

                                <div class="section">
                                    <h4 class="s-property-title">Description</h4>
                                    <div class="s-property-content">
                                        <p>{{ $propiedad->description }}</p>
                                    </div>
                                </div>
                                <!-- End description area  -->
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 p0">
                        <aside class="sidebar sidebar-property blog-asside-right property-style2">
                            <div class="dealer-widget">
                                <div class="dealer-content">
                                    <div class="inner-wrapper">
                                        <div class="single-property-header">                                          
                                            <h1 class="property-title">{{ $propiedad->name }}</h1>
                                            <span class="property-price">${{ $propiedad->price }}</span>
                                        </div>

                                        <div class="property-meta entry-meta clearfix ">   

                                            <div class="col-xs-4 col-sm-4 col-md-4 p-b-15">
                                                <span class="property-info-icon icon-tag">                                                                                      
                                                    <img src="{{ asset('assets/img/icon/sale-orange.png')}}">
                                                </span>
                                                <span class="property-info-entry">
                                                    <span class="property-info-label">Status</span>
                                                    <span class="property-info-value">For Rent</span>
                                                </span>
                                            </div>

                                            <div class="col-xs-4 col-sm-4 col-md-4 p-b-15">
                                                <span class="property-info icon-area">
                                                    <img src="{{ asset('assets/img/icon/room-orange.png')}}">
                                                </span>
                                                <span class="property-info-entry">
                                                    <span class="property-info-label">Area</span>
                                                    <span class="property-info-value">3500<b class="property-info-unit">Sq Ft</b></span>
                                                </span>
                                            </div>

                                            <div class="col-xs-4 col-sm-4 col-md-4 p-b-15">
                                                <span class="property-info-icon icon-bed">
                                                    <img src="{{ asset('assets/img/icon/bed-orange.png')}}">
                                                </span>
                                                <span class="property-info-entry">
                                                    <span class="property-info-label">Camas</span>
                                                    <span class="property-info-value">{{ $propiedad->beds }}</span>
                                                </span>
                                            </div>

                                            <div class="col-xs-4 col-sm-4 col-md-4 p-b-15">
                                                <span class="property-info-icon icon-bath">
                                                    <img src="{{ asset('assets/img/icon/cars-orange.png')}}">
                                                </span>
                                                <span class="property-info-entry">
                                                    <span class="property-info-label">Habitaciones</span>
                                                    <span class="property-info-value">{{ $propiedad->rooms }}</span>
                                                </span>
                                            </div>
                                            <div class="col-xs-4 col-sm-4 col-md-4 p-b-15">
                                                <span class="property-info-icon icon-bath">
                                                    <img src="{{ asset('assets/img/icon/shawer-orange.png')}}">
                                                </span>
                                                <span class="property-info-entry">
                                                    <span class="property-info-label">Baños</span>
                                                    <span class="property-info-value">{{ $propiedad->baths }}</span>
                                                </span>
                                            </div>


                                        </div>
                                        <!--div class="dealer-section-space">
                                            <span>Dealer information</span>
                                        </div>
                                        <div class="clear">
                                            <div class="col-xs-4 col-sm-4 dealer-face">
                                                <a href="">
                                                    <img src="{{ asset('assets/img/client-face1.png')}}" class="img-circle">
                                                </a>
                                            </div>
                                            <div class="col-xs-8 col-sm-8 ">
                                                <h3 class="dealer-name">
                                                    <a href="">Nathan James</a>
                                                    <span>Real Estate Agent</span>        
                                                </h3>
                                                <div class="dealer-social-media">
                                                    <a class="twitter" target="_blank" href="">
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                    <a class="facebook" target="_blank" href="">
                                                        <i class="fa fa-facebook"></i>
                                                    </a>
                                                    <a class="gplus" target="_blank" href="">
                                                        <i class="fa fa-google-plus"></i>
                                                    </a>
                                                    <a class="linkedin" target="_blank" href="">
                                                        <i class="fa fa-linkedin"></i>
                                                    </a> 
                                                    <a class="instagram" target="_blank" href="">
                                                        <i class="fa fa-instagram"></i>
                                                    </a>       
                                                </div>

                                            </div>
                                        </div-->

                                        <!--div class="clear">
                                            <ul class="dealer-contacts">                                       
                                                <li><i class="pe-7s-map-marker strong"> </i> 9089 your adress her</li>
                                                <li><i class="pe-7s-mail strong"> </i> email@yourcompany.com</li>
                                                <li><i class="pe-7s-call strong"> </i> +1 908 967 5906</li>
                                            </ul>
                                            <p>Duis mollis  blandit tempus porttitor curabiturDuis mollis  blandit tempus porttitor curabitur , est non…</p>
                                        </div-->

                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default sidebar-menu wow fadeInRight animated" >
                                <div class="panel-body search-widget">
                                    <form action="{{ route('reserva.create') }}" class=" form-inline"> 
                                        <fieldset >
                                            <div class="row">
                                                <div class="col-xs-12">  
                                                    <input class="button btn largesearch-btn" value="Reservar" type="submit">
                                                </div>  
                                            </div>
                                        </fieldset>                                     
                                    </form>
                                </div>
                            </div>

                        </aside>
                    </div>

                </div>

            </div>
        </div>


        <script src="{{ asset('assets/js/vendor/modernizr-2.6.2.min.js')}}"></script>
        <script src="{{ asset('assets/js/jquery-1.10.2.min.js')}}"></script>
        <script src="{{ asset('bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{ asset('assets/js/bootstrap-select.min.js')}}"></script>
        <script src="{{ asset('assets/js/bootstrap-hover-dropdown.js')}}"></script>
        <script src="{{ asset('assets/js/easypiechart.min.js')}}"></script>
        <script src="{{ asset('assets/js/jquery.easypiechart.min.js')}}"></script>
        <script src="{{ asset('assets/js/owl.carousel.min.js')}}"></script>
        <script src="{{ asset('assets/js/wow.js')}}"></script>
        <script src="{{ asset('assets/js/icheck.min.js')}}"></script>
        <script src="{{ asset('assets/js/price-range.js')}}"></script>
        <script type="text/javascript" src="{{ asset('assets/js/lightslider.min.js')}}"></script>
        <script src="{{ asset('assets/js/main.js')}}"></script>

        <script>
                            $(document).ready(function () {

                                $('#image-gallery').lightSlider({
                                    gallery: true,
                                    item: 1,
                                    thumbItem: 9,
                                    slideMargin: 0,
                                    speed: 500,
                                    auto: true,
                                    loop: true,
                                    onSliderLoad: function () {
                                        $('#image-gallery').removeClass('cS-hidden');
                                    }
                                });
                            });
        </script>

    </body>
</html>