<!DOCTYPE html>
<html class="no-js" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Portfolio') }}</title>
    <link rel="icon" type="image/x-icon" href="{{asset('dist/img/favicon.png')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/normalize.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/style-plugin-collection.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/theme.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">
    <style>
        .page-item {
            background: #ff895e;
            display: inline-block;
            width: 50px;
            height: 50px;
            margin: 5px;
            line-height: 40px;
            position: relative;
            z-index: 1;
            color: #000;
        }

        .page-item > a {
            border: none;
            background-color: #f8f9fa;
            color: #000;
        }

        .page-item > a:hover {
            border: none;
            color: #000;
        }
        
    </style>
</head>

<body>
    <div class="preloader">
        <img src="{{asset('frontend/images/preloader.gif')}}" alt="">
    </div>