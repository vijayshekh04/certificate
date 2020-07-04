<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="@@page-discription">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="{{asset('images/favicon.png')}}">
    <!-- Page Title  -->
    <title> @yield('title','dashbord')</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{asset('assets/css/dashlite.css?ver=1.4.0')}}">
    <link id="skin-default" rel="stylesheet" href="{{asset('assets/css/theme.css?ver=1.4.0')}}">
</head>
@include('include.sidebar')

@include('include.header')
    <!-- content @s -->
    @yield('content')               
    <!-- content @e -->


    <!-- footer @s -->
@include('include.footer')