<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Welcome</title>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
    <!-- Google Fonts -->
    <link  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"  rel="stylesheet"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,600;1,200&display=swap" rel="stylesheet">
    <!-- MDB -->
    <link  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.css"  rel="stylesheet"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!--Swiper css-->
    <link  rel="stylesheet"  href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <!--Custome Style CSS-->
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
  </head>
  <body>
    <!--Header Her-->
    @include('welcome.header')
    <!--/Header her-->

    <!--Hero Banner Here-->
    @include('welcome.banner')
    <!--/Hero Banner Here-->

    <!--Search section Here-->
    <!--@include('welcome.search')-->
    <br>
    <!--/Search section Here-->

    <!--About Section Here-->
    @include('welcome.about')
    <!--/About Section Here-->

    <!--Services section Here-->
    @include('welcome.services')
    <!--/Services section Here-->

    <!--Property Section Here-->
    @yield('content')
    <!--/Property Section Here-->

    <!--Work Section Here -->
    @include('welcome.work-section')
    <!--/Work Section Here -->

    <!--Feature Section Here-->
    <@include('welcome.feature')>
    <!--/Feature Property Here-->

    <!--Testimonial Section Here-->
    @include('welcome.testimonial-section')
    <!--/Testimonial Section Here-->

    <!--Mail Section Here-->
    @include('welcome.mail-section')
    <!--/Mail Section Here-->

    <!--Footer Here-->
    @include('welcome.footer')
    <!--/Footer Here-->

  </body>
  @stack('scripts')
</html>
<!-- MDB -->
<script  type="text/javascript"  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!--Swiper js-->
<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script>
  var swiper = new Swiper('#property-slider .swiper', {
    // Optional parameters
    loop: true,
    slidesPerView: 1,
    spaceBetween: 30,
    centeredSlides: true,
    breakpoints:{
      640:{
        slidesPerView:1,
        spaceBetween:10,
      },
      768:{
        slidesPerView:2,
        spaceBetween:20,
      },
      1024:{
        slidesPerView:4,
        spaceBetween:30,
      },
    }
  });
  var swiper = new Swiper('#testimonial-slider .swiper', {
    // Optional parameters
    loop: true,
  });

</script>