<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="" >
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    {{-- <link href="/assets/css/fe_css/output.css" rel="stylesheet"> --}}
    <!--Meta Responsive tag-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Favicon Icon-->
    {{-- <link rel="icon" href="favicon.ico" type="image/x-icon"> --}}
    <link rel="icon" type="image/png" href="/assets/css/fe_css/images/icons/menuandroid/logohaiufull.jpg">

    <!--Bootstrap CSS-->
    <link rel="stylesheet" href="/assets/backend/css/bootstrap.min.css">
    <!--Custom style.css-->
    <link rel="stylesheet" href="/assets/backend/css/quicksand.css">
    <link rel="stylesheet" href="/assets/backend/css/style.css">
    <!--Font Awesome-->
    <link rel="stylesheet" href="/assets/backend/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="/assets/backend/css/fontawesome.css">
    <!--Animate CSS-->
    <link rel="stylesheet" href="/assets/backend/css/animate.min.css">
    <!--Chartist CSS-->
    <link rel="stylesheet" href="/assets/backend/css/chartist.min.css">
    <!--Map-->
    <link rel="stylesheet" href="/assets/backend/css/jquery-jvectormap-2.0.2.css">
    <!--Bootstrap Calendar-->
    <link rel="stylesheet" href="/assets/backend/js/calendar/bootstrap_calendar.css">
    <!--Nice select -->
    <link rel="stylesheet" href="/assets/backend/css/nice-select.css">
    <link rel="stylesheet" href="/assets/backend/css/button-costum.css">

    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <title>{{ $title }}</title>
  </head>
  <body>
    {{-- @yield('container') --}}
    @include('be_dashboard.dashboard.part.footer')
  </body>
  </html>